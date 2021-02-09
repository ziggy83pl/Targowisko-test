$(document).ready(function(){

	$('.select_state').change(function(){
		$this = $(this);
		$('.substates').hide().find('select').prop("disabled", true);
		$('.substate_'+$this.val()).show().find('select').prop("disabled", false);
	})

	$(".ajax_confirm").click(function(){
		$this = $(this);
		var is_confirmed = confirm($this.data('title'));
		if (is_confirmed) {
			var mydata = $this.data();
			$.ajax({
				url: "php/ajax.php",
				type: "POST",
				data:mydata,
				async: false,
				success: function(data) {
					window.location.href = window.location;
				}
			});
		}
        return false;
    });

	$('.form-search').submit(function(){
		var $form = $(this), $address = $form.find(':input[name="address"]'), flag = true;
		if(!$address.length || $address.val()==''){
			$form.find(':input[name="distance"]').prop( "disabled",true);
		}
		$form.find(':input:enabled').not(':input[type=submit], [name=search]').each(function(){
			$this = $(this);
			if($this.val()=='' && $this.prop("defaultValue")==''){
				$this.prop( "disabled",true);
			}else{
				flag = false;
			}
		})
		if(flag){
			$form.find(':input[name="search"]').prop( "disabled",true);
		}
	})

	var $menu = $('#menu_box'), $top = $('#top');

	function scroll() {
		var window_scrolltop = $(window).scrollTop(), top_height = $top.height() + 8;
		if (window_scrolltop >= top_height) {
			$menu.css('top',0);
		} else {
			$menu.css('top',top_height - window_scrolltop);
		}
		if(window_scrolltop>150){
			$('#back_to_top').removeClass('back_to_top_hidden');
		}else{
			$('#back_to_top').addClass('back_to_top_hidden');
		}
	}
	scroll();
	document.onscroll = scroll;

	function resize(){
		if($(window).width()<992){
			$("#form_search_offers").removeClass("show");
		}else{
			$("#form_search_offers").addClass("show");
		}
	}
	resize();
	window.onresize = resize;

	$('.return_false a').click(function(){
		$(this).blur();
		return false;
	})

	$('#back_to_top').on("click", function(){
		$('html, body').stop().animate({scrollTop: 0}, 300);
		$(this).blur();
		return false;
	})
    /* pokazuje i ukrywa dane */
	$('.show_hidden_data').on("click", function(){
		var $this = $(this), $parent = $this.parents('a'), type = $this.data('type'), data = href = '';
		if(type=='phone'){
			data = $this.data('data')
			href = 'tel:'+data;
		}else if(type=='email'){
			data = $this.data('data_0')+'@'+$this.data('data_1');
			href = 'mailto:'+data;
		}else{
			href = data = $this.data('data');
		}
		$this.text(data).contents().unwrap();
		$parent.attr("href", href);
		return false;
	})
     /*facebook*/
	$("#facebook_side").hover(function(){$(this).stop(true,false).animate({left: "0px"}, 500 );},
		function(){$(this).stop(true,false).animate({left: "-300px"}, 500 );});


	$('.reset_form').click(function(){
		var $form = $(this).parents('form');
		$form.find('input').each(function(){
			switch ($(this).attr('type')) {
				case 'text':
				case 'number':
					$(this).val('');
					break;
				case 'radio':
				case 'checkbox':
					$(this).prop('checked',false);
			}
		});
		$form.find('select').each(function(){
			$(this).prop("selectedIndex", 0);
		})
		return false;
	})
	//check box rotate
	$('#materialIndeterminate2').prop('indeterminate', true);

	$('.index_show_subcategories').click(function(){
		var $this = $(this), active = $this.hasClass('active'), eq = 0, $subcategories = $('#index_subcategory_'+$this.data('id'));
		$('.index_subcategories').hide();
		$('.index_show_subcategories').removeClass('active');

		if(!active){
			index = $this.data('index');
			eq = index;
			window_width = $(window).width();
			if(window_width<540){
				eq = index-1;
			}else if(window_width<768){
				if(index%2==0){
					eq = index-1;
				}
			}else if(window_width<992){
				mod = index%3;
				if(mod==0){
					eq = index-1;
				}else if(mod==1){
					eq = index+1;
				}
			}else{
				mod = index%4;
				if(mod==0){
					eq = index-1;
				}else if(mod==1){
					eq = index+2;
				}else if(mod==2){
					eq = index+1;
				}
			}
			$subcategories.insertAfter('.index_categories:eq('+eq+')');
			$subcategories.show();
			$this.addClass('active');
		}
		$this.blur();
		return false;
	})

	if(!localStorage.rodo_accepted) {
		$("#rodo-message").modal('show');
	}
});

function closeRodoWindow(){
	localStorage.rodo_accepted = true;
	$("#rodo-message").modal('hide');
}

if (window.location.href.indexOf('#_=_') > 0) {
	window.location = window.location.href.replace(/#.*/, '');
}

$(function(){
	var options = {
		url: function(phrase) {
			return "php/ajax.php?action=offers_sugested_keywords&keywords=" + phrase;
		},
	  list: {
		match: {
		  enabled: true
		}
	  },
	  theme: "square"
	};
	$("#search_keywords").easyAutocomplete(options);
})

$(window).on("load", function (){
	var $js_scroll_page = $('#js_scroll_page')
  	if($js_scroll_page.length>0){
		position = $js_scroll_page.offset().top;
		if($(window).scrollTop()+$(window).height()<position){
			$('html, body').stop().animate({scrollTop: (position-110)}, 300);
		}
	}
});

function initGoogleMap() {
	if ( typeof displayMap == 'function' ) {
		displayMap();
	}else{
		input = document.getElementById('search_main_address');
		if(input){
			autocomplete = new google.maps.places.Autocomplete(input, {types: ['geocode']});
		}
	}
}

function checkCookies(){
	if(!localStorage.cookies_accepted) {
		cookies_message = document.getElementById("cookies-message").style.display="block"
	}
}


function closeCookiesWindow(){
	localStorage.cookies_accepted = true;
	var cookie_window = document.getElementById("cookies-message");
  cookie_window.parentNode.removeChild(cookie_window);
}

window.onload = checkCookies;


/*hamburger menu 3*/
var $button = $('#menu-btn');

$button.on('click', function(e){
    e.preventDefault();
    if( $button.hasClass('open') ){
      $button.removeClass('open');
      $button.addClass('close');
    } else {
      $button.removeClass('close');
      $button.addClass('open');
    }
});
/* koniec hamburger 3 */


/* dodaj  ogłoszenie na telefonie*/
$(window).scroll(function()
		{
			if($(this).scrollTop()>1000) $('#sale').fadeIn();
			else $('#sale').fadeOut();		
		}
		);
	

/* dodaj */
// Wrap every letter in a span
var textWrapper = document.querySelector('.ml12');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml12 .letter',
    translateX: [40,0],
    translateZ: 0,
    opacity: [0,1],
    easing: "easeOutExpo",
    duration: 2200,
    delay: (el, i) => 800 + 30 * i
  }).add({
    targets: '.ml12 .letter',
    translateX: [0,-30],
    opacity: [1,0],
    easing: "easeInExpo",
    duration: 2100,
    delay: (el, i) => 200 + 30 * i
  });

//hamburger menu 3
$(document).ready(function () {

	$('.first-button').on('click', function () {
  
	  $('.animated-icon1').toggleClass('open');
	});
	$('.second-button').on('click', function () {
  
	  $('.animated-icon2').toggleClass('open');
	});
	$('.third-button').on('click', function () {
  
	  $('.animated-icon3').toggleClass('open');
	});
	PopulateValues();
  });


$(function () {
  let nua = navigator.userAgent
  let isAndroid = (nua.indexOf('Mozilla/5.0') > -1 && nua.indexOf('Android ') > -1 && nua.indexOf('AppleWebKit') > -1 && nua.indexOf('Chrome') === -1)
  if (isAndroid) {
    $('select.form-control').removeClass('form-control').css('width', '100%')
  }
})

$('input[type="checkbox"]').on('change', function() {
	$('input[name="' + this.name + '"]').not(this).prop('checked', false);
});
//tylko jeden zaznaczony checkbox w promowanie oferty
function onlyOne(checkbox) {
    const checkboxes = document.getElementsByName('check')
    checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false
		else item.checked = true
    })
}
function sprawdz()
{
	let liczba = document.getElementById("chose-promo").promote_cost;
	
}
//zamiana ceny  1/9/2020
//offer type local=0; regional=1; ogolno=2
function PopulateValues()
{
	var checkboxes = $( "input:checked" );
	var checkbox = checkboxes[0];
	let text = checkbox.parentElement.childNodes[checkbox.parentElement.childNodes.length - 1].textContent;
	$('#Summary').html(text);
	var price = populatePrice(text);
	$('#total').val(price);
	var days = populateDays(text);
	$('#days').val(days);
	var type = checkbox.attributes['value'].nodeValue;

switch(type) {
  case "1": type = "0"; break;
  case "2": type = "0"; break;
  case "3": type = "1"; break;
  case "4": type = "1"; break;
  case "5": type = "2"; break;
  case "6": type = "2"; break;
  default: type = "0"; break;
}
	$('#offerType').val(type);
	
}

function populatePrice(text)
{
	var result = '';
	var pom = '';
	var textArr = text.split(' ');
	textArr.forEach(function (element){
		element = element.replace(",", ".");
		if (!(isNaN(element))&&(element!=''))
		{
			if (result == '') result = element;
		}
	});
	return result;
}

function populateDays(text)
{
	var result = '';
	var pom = '';
	var textArr = text.split(' ');
	textArr.forEach(function (element){
		element = element.replace(",", ".");
		if (!(isNaN(element))&&(element!=''))
		{
			result = element;
		}
	});
	return result;
}


//person to fixt
function person(){
var random = Math.floor(Math.random()* 24) +6;
 document.getElementById("person").innerHTML = random;
}

