<?php
/************************************************************************
 * The script of website with announcements Targowisko
 * Copyright (c) 2019 
 * All right reserved
 *
 * *********************************************************************
 * THIS SOFTWARE IS LICENSED - YOU CAN MODIFY THESE FILES
 * BUT YOU CAN NOT REMOVE OF ORIGINAL COMMENTS!
 * ACCORDING TO THE LICENSE YOU CAN USE THE SCRIPT ON ONE DOMAIN. DETECTION
 * COPY SCRIPT WILL RESULT IN A HIGH FINANSIAL PENALTY AND WITHDRAWAL
 * LICENSE THE SCRIPT
 * *********************************************************************/

require_once('../config/config.php');

define("P24_VERSION", "3.2");

if(isset($_POST['action']) and $_POST['action']=='new_payment' and isset($_POST['item_id']) and $_POST['item_id']>0 and !empty($_POST['type'])){
	
	$payment_data = new_payment('p24',$_POST['item_id'],$_POST['type']);
	if($payment_data){

		$md5sum = md5($payment_data['id']."|".$settings['p24_merchant_id']."|".($payment_data['amount']*100)."|PLN|".$settings['p24_crc']);

		$sth = $db->prepare('INSERT INTO '._DB_PREFIX_.'payment_p24 (payment_id, status, amount, sandbox, date) VALUES (:payment_id, "new", :amount, :sandbox, NOW())');
		$sth->bindValue(':payment_id', $payment_data['id'], PDO::PARAM_INT);
		$sth->bindValue(':amount', $payment_data['amount'], PDO::PARAM_STR);
		$sth->bindValue(':sandbox', $settings['p24_sandbox'], PDO::PARAM_STR);;
		$sth->execute();
		
		if($settings['p24_sandbox']){
			$form = '<form action="https://sandbox.przelewy24.pl/trnDirect" method="post" id="form">';
		}else{
			$form = '<form action="https://secure.przelewy24.pl/trnDirect" method="post" id="form">';
		}
		$form .='<input type="hidden" name="p24_sign" value="'.$md5sum.'" />
			<input type="hidden" name="p24_session_id" value="'.$payment_data['id'].'" />
			<input type="hidden" name="p24_merchant_id" value="'.$settings['p24_merchant_id'].'" />
			<input type="hidden" name="p24_pos_id" value="'.$settings['p24_pos_id'].'" />
			<input type="hidden" name="p24_amount" value="'.($payment_data['amount']*100).'" />
			<input type="hidden" name="p24_currency" value="PLN" />
			<input type="hidden" name="p24_description" value="'.$payment_data['description'].'" />
			<input type="hidden" name="p24_country" value="PL" />
			<input type="hidden" name="p24_email" value="'.$payment_data['email'].'" />
			<input type="hidden" name="p24_url_return" value="'.$payment_data['url'].'&status=OK" />
			<input type="hidden" name="p24_url_status" value="'.$settings['base_url'].'/php/payment_p24.php" />
			<input type="hidden" name="p24_api_version" value="3.2" />
		</form>';

		$form .= '<script>document.getElementById("form").submit();</script>';
		echo($form);
	}
	
}elseif(($_SERVER['REMOTE_ADDR']=='91.216.191.181' or $_SERVER['REMOTE_ADDR']=='91.216.191.182' or $_SERVER['REMOTE_ADDR']=='91.216.191.183' or $_SERVER['REMOTE_ADDR']=='91.216.191.184' or $_SERVER['REMOTE_ADDR']=='91.216.191.185') && !empty($_POST)){ 

	$sth = $db->prepare('SELECT * FROM '._DB_PREFIX_.'payment_p24 WHERE payment_id=:payment_id AND status="new" LIMIT 1');
	$sth->bindValue(':payment_id', $_POST['p24_session_id'], PDO::PARAM_STR);
	$sth->execute();
    $payment_p24 = $sth->fetch(PDO::FETCH_ASSOC);

	if($payment_p24){

		$crc = $_POST['p24_pos_id']."|".$_POST['p24_merchant_id']."|".($payment_p24['amount']*100)."|PLN|".$settings['p24_crc'];
		
		$P24 = new Przelewy24($_POST['p24_merchant_id'],$_POST['p24_pos_id'],md5($crc),$settings['p24_sandbox']);
		
		foreach($_POST as $k=>$v) $P24->addValue($k,$v);  
		
		$P24->addValue('p24_currency','PLN');
		$P24->addValue('p24_amount',($payment_p24['amount']*100));
		
		$res = $P24->trnVerify();

		if(isset($res["error"]) and $res["error"] ==0){
	
			$sth = $db->prepare('UPDATE '._DB_PREFIX_.'payment_p24 SET p24_order_id=:p24_order_id, status="completed" WHERE id=:id LIMIT 1');
			$sth->bindValue(':p24_order_id', $_POST['p24_order_id'], PDO::PARAM_STR);
			$sth->bindValue(':id', $payment_p24['id'], PDO::PARAM_INT);
			$sth->execute();

			check_payment($payment_p24['payment_id'],($_POST['p24_amount']/100));
		
		}else{

			$sth = $db->prepare('UPDATE '._DB_PREFIX_.'payment_p24 SET error=:error WHERE id=:id LIMIT 1');
			$sth->bindValue(':payment_id', $res["errorMessage"], PDO::PARAM_STR);
			$sth->bindValue(':id', $payment_p24['id'], PDO::PARAM_INT);
			$sth->execute();

		}
	}
}

class Przelewy24 {
    /**
     * Live system URL address
     * @var string
     */    
    private $hostLive        =    "https://secure.przelewy24.pl/";
    /**
     * Sandbox system URL address
     * @var string
     */    
    private $hostSandbox     =    "https://sandbox.przelewy24.pl/";
    /**
     * Use Live (false) or Sandbox (true) enviroment
     * @var bool
     */    
    private $testMode        =    false;
    /**
     * Merchant posId
     * @var int
     */    
    private $posId           =    0;
    /**
     * Salt to create a control sum (from P24 panel)
     * @var string
     */    
    private $salt            =    "";
    /**
     * Array of POST data
     * @var array
     */    
    private $postData        =    array();
    
    /**
     * 
     * Obcject constructor. Set initial parameters
     * @param int $merchantId
     * @param int $posId
     * @param string $salt
     * @param bool $testMode
     */
    public function __construct($merchantId, $posId, $salt, $testMode = false) {
        
        $this->posId         = (int) $posId;
        $this->salt          = $salt;
        
        if($testMode) {
            $this->hostLive = $this->hostSandbox;
        }
        
        $this->addValue("p24_merchant_id", $merchantId);
        $this->addValue("p24_pos_id", $this->posId);
        $this->addValue("p24_api_version", P24_VERSION);
        
        return true;        
    }
    /**
     * 
     * Returns host URL
     */
    public function getHost() {
        return $this->hostLive;
    }
    /**
     * 
     * Add value do post request
     * @param string $name Argument name
     * @param mixed $value Argument value
     * @todo Add postData validation
     */
    public function addValue($name, $value) {
        $this->postData[$name] = $value;
    }
    
    /**
     * 
     * Function is testing a connection with P24 server
     * @return array Array(INT Error, Array Data), where data 
     */
    public function testConnection() {
        $crc = md5($this->posId."|".$this->salt) ;
        $ARG["p24_pos_id"] = $this->posId;
        $ARG["p24_sign"] = $crc;
        $RES = $this->callUrl("testConnection",$ARG);
        return $RES;
    }
    /**
     * 
     * Prepare a transaction request
     * @param bool $redirect Set true to redirect to Przelewy24 after transaction registration
     * @return array array(INT Error code, STRING Token)
     */
    public function trnRegister($redirect = false) {
        $crc = md5($this->postData["p24_session_id"]."|".$this->posId."|".$this->postData["p24_amount"]."|".$this->postData["p24_currency"]."|".$this->salt) ;
        $this->addValue("p24_sign", $crc);
        $RES = $this->callUrl("trnRegister",$this->postData);
        if($RES["error"] == "0") {
            $token = $RES["token"];
        } else {
            return $RES;
        }
        if($redirect) {
            $this->trnRequest($token);
        }
        return array("error"=>0, "token"=>$token);
    }
    /**
     * Redirects or returns URL to a P24 payment screen
     * @param string $token Token
     * @param bool $redirect If set to true redirects to P24 payment screen. If set to false function returns URL to redirect to P24 payment screen
     * @return string URL to P24 payment screen
     */
    public function trnRequest($token, $redirect = true) {
        if($redirect) {
            header("Location:" . $this->hostLive."trnRequest/".$token);
            return "";
        } else {
            return $this->hostLive."trnRequest/".$token; 
        } 
        
    }
    
    /**
     * 
     * Function verify received from P24 system transaction's result.
     * @return array
     */
    public function trnVerify() {
        $crc = md5($this->postData["p24_session_id"]."|".$this->postData["p24_order_id"]."|".$this->postData["p24_amount"]."|".$this->postData["p24_currency"]."|".$this->salt) ;
        $this->addValue("p24_sign", $crc);        
        $RES = $this->callUrl("trnVerify",$this->postData);
        return $RES;
    }
    /**
     * 
     * Function contect to P24 system
     * @param string $function Method name
     * @param array $ARG POST parameters
     * @return array array(INT Error code, ARRAY Result)
     */
    private function callUrl($function, $ARG) { 
        if(!in_array($function, array("trnRegister","trnRequest","trnVerify","testConnection"))) {
            return array("error"=>201,"errorMessage"=>"class:Method not exists");
        }
        print '<pre>POST:'.print_r($ARG,true).'</pre>';
        $REQ = array();
        foreach($ARG as $k=>$v) $REQ[] = $k."=".urlencode($v);
        $url = $this->hostLive.$function;
        $user_agent = "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)";
        if($ch = curl_init()) {
            if(count($REQ)) {
                curl_setopt($ch, CURLOPT_POST,1);
                curl_setopt($ch, CURLOPT_POSTFIELDS,join("&",$REQ));
            }
            curl_setopt($ch, CURLOPT_URL,$url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
            curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
            if($result = curl_exec ($ch)) {
                $INFO = curl_getinfo($ch);
                curl_close ($ch);
                if($INFO["http_code"]!=200) {
                    return array("error"=>200,"errorMessage"=>"call:Page load error (".$INFO["http_code"].")");
                } else {
                    $RES     = array();
     	            $X       = explode("&", $result);
     	            foreach($X as $val) {
                 		$Y           = explode("=", $val);
                 		$RES[trim($Y[0])] = urldecode(trim($Y[1]));
                 	}
             	    return $RES;
                }
            } else {
                curl_close ($ch);
                return array("error"=>203,"errorMessage"=>"call:Curl exec error"); 
            }
        } else {
            return array("error"=>202,"errorMessage"=>"call:Curl init error");
        }
    }
}

