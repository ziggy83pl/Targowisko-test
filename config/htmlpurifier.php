<?php

if(!isset($settings['base_url'])){
	die('Access denied!');
}

$purifier_config = HTMLPurifier_Config::createDefault();
$purifier_config->set('HTML.SafeIframe', true);
$purifier_config->set('URI.SafeIframeRegexp', '%^(https?:)?//(www\.youtube(?:-nocookie)?\.com/embed/|player\.vimeo\.com/video/)%'); //allow YouTube and Vimeo
$purifier = new HTMLPurifier($purifier_config);

