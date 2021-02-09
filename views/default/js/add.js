$(function(){

	CKEDITOR.replace("description",{height: "300px"});

	$("#preview_photos").sortable({
		containerSelector : "#preview_photos",
		itemSelector : ".img-thumbnail",
		handle: "img",
		placeholder	: "<div class='placeholder'></div>"
	});

	$("#form_add_offer").submit(function(){
		$last = $("select[name=category_id]:enabled").last();
		if($last.val()==""){
			$last.attr("disabled", true);
		}
	})
	
		$("#form_add_ad").submit(function(){
		$last = $("select[name=category_id]:enabled").last();
		if($last.val()==""){
			$last.attr("disabled", true);
		}
	})
	 /*add photo*/
			 /*test drag and drop to fixed */ 
		//test upload img by drag and drop
$(function() {

	// preventing page from redirecting
	$("html").on("dragover", function(e) {
		e.preventDefault();
		e.stopPropagation();
		//$("h1").text("Drag here");
	});
  
	$("html").on("drop", function(e) { e.preventDefault(); e.stopPropagation(); });
  
	// Drag enter
	$('.drop-area').on('dragenter', function (e) {
		e.stopPropagation();
		e.preventDefault();
		//$("h1").text("Drop");
	});
  
	// Drag over
	$('.drop-area').on('dragover', function (e) {
		e.stopPropagation();
		e.preventDefault();
		//$("h1").text("Drop");
	});
  
	// Drop
	$('.drop-area').on('drop', function (e) {
		e.stopPropagation();
		e.preventDefault();
  
		//$("h1").text("Upload");
  
		 var file = e.originalEvent.dataTransfer.files;
		 var fd = new FormData();
  
		 fd.append('file', file[0]);
  
		 uploadData(fd);
	});
  
	// Open file selector on div click
	$(".uploadfile").click(function(){
		$("#file").click();
	});
  
	// file selected
	$("#file").change(function(){
		var fd = new FormData();
  
		var files = $('#file')[0].files[0];
  
		fd.append('file',files);
  
		uploadData(fd);
	});
  });
  
		//koniec testu drag and dop	 
	$("#input_select_photo").change(function (){	                 
		$this = $(this);
		var flag = true, number_photos = $this[0].files.length, photo_count = $("#preview_photos .img-thumbnail").length;
		var progress_bar_value = 0;
		if(number_photos && (!photo_max || photo_max>photo_count)){
			$("#photos_progress").show();
			$("#preview_load").css("display", "inline-block");
			var $progress_bar = $("#photos_progress").find(".progress-bar");
			$("#photos_info").hide().html("");
			$("#box_add_offer input[type=submit]").prop("disabled", true);
			$.each($this[0].files, function(index, _value){
				if(flag){
					data_photo =  new FormData();
					data_photo.append("action", "add_photo");
					data_photo.append("count_photo", photo_count);
					data_photo.append("file", $this[0].files[index]);
					$.ajax({
						url: "php/ajax.php",
						type: "POST",
						data: data_photo,
						dataType :"json",
						contentType: false,
						cache: false,
						processData:false,
						success: function(data){
							if(data){
								if(data.status){
									$("#preview_photos").append('<div class="img-thumbnail"><img src="upload/photos/'+data['thumb']+'" alt="'+data['url']+'"><br><a href="#" title="'+data['remove_title']+'" class="remove_photo text-danger">'+data['remove']+'</a><input type="hidden" name="photos[]" value="'+data['id']+'"></div>');
								}else{
									$("#photos_info").show().html(data.info);
								}
							}
							if(index===(number_photos-1)){
								$("#preview_load, #photos_progress").hide();
								$("#box_add_offer input[type=submit]").prop("disabled", false);
								$progress_bar.css("width", "0%").attr("aria-valuenow", "0").text("0%");
							}else{
								progress_bar_value += Math.round(100/number_photos);
								$progress_bar.css("width", progress_bar_value+"%").attr("aria-valuenow", progress_bar_value).text(progress_bar_value+"%");
							}
						},
						error: function (_request, _status, _error) {
							$("#preview_load, #photos_progress").hide();
							$("#box_add_offer input[type=submit]").prop("disabled", false);
							flag = false;
							$progress_bar.css("width", "0%").attr("aria-valuenow", "0").text("0%");
						} //test 2
						
					}); 
				}
				photo_count++;
			});
		}else{
			$("#photos_info").show().html(lang["Photo limit exceeded"]);
		}
		$this.val("");
	})
	// add photo to ads
	$("#input_select_photo_ad").change(function (){
		$this = $(this);
		var flag = true, number_photos = $this[0].files.length, photo_count = $("#preview_photos .img-thumbnail").length;
		var progress_bar_value = 0;
		if(number_photos && (1>photo_count)){
			$("#photos_progress").show();
			$("#preview_load").css("display", "inline-block");
			var $progress_bar = $("#photos_progress").find(".progress-bar");
			$("#photos_info").hide().html("");
			$("#box_add_offer input[type=submit]").prop("disabled", true);
			$.each($this[0].files, function(index, _value){
				if(flag){
					data_photo =  new FormData();
					data_photo.append("action", "add_photo_ad");
					data_photo.append("count_photo", photo_count);
					data_photo.append("file", $this[0].files[index]);
					$.ajax({
						url: "php/ajax.php",
						type: "POST",
						data: data_photo,
						dataType :"json",
						contentType: false,
						cache: false,
						processData:false,
						success: function(data){
							if(data){
								if(data.status){
									$("#preview_photos").append('<div class="img-thumbnail"><img src="upload/photos/'+data['thumb']+'" alt="'+data['url']+'"><br><a href="#" title="'+data['remove_title']+'" class="remove_photo text-danger">'+data['remove']+'</a><input type="hidden" name="photos[]" value="'+data['id']+'"></div>');
								}else{
									$("#photos_info").show().html(data.info);
								}
							}
							if(index===(number_photos-1)){
								$("#preview_load, #photos_progress").hide();
								$("#box_add_offer input[type=submit]").prop("disabled", false);
								$progress_bar.css("width", "0%").attr("aria-valuenow", "0").text("0%");
							}else{
								progress_bar_value += Math.round(100/number_photos);
								$progress_bar.css("width", progress_bar_value+"%").attr("aria-valuenow", progress_bar_value).text(progress_bar_value+"%");
							}
						},
						error: function (_request, _status, _error) {
							$("#preview_load, #photos_progress").hide();
							$("#box_add_offer input[type=submit]").prop("disabled", false);
							flag = false;
							$progress_bar.css("width", "0%").attr("aria-valuenow", "0").text("0%");
						}
					});
				}
				photo_count++;
			});
		}else{
			$("#photos_info").show().html(lang["Photo limit exceeded"]);
		}
		$this.val("");
	})
/*funkcje do mapy*/
	$("#button_get_coordinates").click(function(){
		var address = $("input[name=address]").val();
		if($("[name=state_id]").length && $("[name=state_id]").val()!=""){address += " "+$("[name=state_id] option:selected").text();}
		if($("[name=state2_id]:enabled").length && $("[name=state2_id]:enabled").val()!=""){address += " "+$("[name=state2_id]:enabled option:selected").text();}
		if(address){
			$.ajax({
				url: "php/ajax.php",
				type: "POST",
				data:{"action" : "getCoordinates","address" : address},
				dataType :"json",
				success: function(data) {
					if(data.lat && data.long){
						var latlng = new google.maps.LatLng(data.lat, data.long);
						google_maps_marker.setPosition(latlng);
						google_maps.setCenter(latlng);
						$("input[name=address_lat]").val(data.lat);
						$("input[name=address_long]").val(data.long);
					}
				}
			});
		}
        return false;
    });
});

angular.module("addOffer", []).controller("addOffer", function($scope,$http,$q) {
	$scope.select_category_id = 0;
	$scope.list_categories = [];
	$scope.list_options = [];
	$scope.waiting_for_response = false;
	$scope.showPrice = true;
	$scope.requiredPrice = false;
	$scope.inputPrice = inputPrice;
	$scope.loadCategories = function(select_category_id=0,category_id=0,load_options=1){
		$scope.waiting_for_response = true;
		$scope.select_category_id = select_category_id;
		for(var i = 0; i < $scope.list_categories.length; i++) {
			if($scope.list_categories[i].category_id == select_category_id) {
				$scope.list_categories.splice((i+1), $scope.list_categories.length);break;
			}
		}
		$http.pendingRequests.forEach(function(request) {
			if(request.cancel){request.cancel.resolve();}
		});
		var cancel = $q.defer();
		var request = {
			method: "POST",
			url: "php/ajax.php",
			data: $.param({"action":"get_categories_and_options", "category":category_id, "load_options":load_options}),
			headers: {"Content-Type": "application/x-www-form-urlencoded"},
			timeout: cancel.promise,
			cancel: cancel
		}
		$http(request).then(function(response) {
			if(!$.isEmptyObject(response.data.options)){
				$.each(response.data.options, function(index, _value) {
					if(list_options[index] != undefined){
						if(response.data.options[index].kind=="number"){
							response.data.options[index].value = parseInt(list_options[index][0]);
						}else if(response.data.options[index].kind=="checkbox"){
							response.data.options[index].value = list_options[index];
						}else{
							response.data.options[index].value = list_options[index][0];
						}
					}else if($scope.list_options[index] != undefined){
						response.data.options[index].value = $scope.list_options[index].value;
					}else{
						response.data.options[index].value = "";
					}
				});
				$scope.list_options = response.data.options;
			}else{
				$scope.list_options = [];
			}
			if(!$.isEmptyObject(response.data.categories) && (category_id>0 || $scope.list_categories.length==0)){
				selectCategory = "";
				if(list_categories.length){
					selectCategory = list_categories.shift();
				}
				required = (category_id) ? required_subcategory : required_category;
				$scope.list_categories.push({"category_id":category_id,"categories":response.data.categories,"selectCategory":selectCategory, "required":required});
				if(selectCategory){
					load_options = (list_categories.length) ? 0 : 1;
					$scope.loadCategories(category_id,selectCategory,load_options);
				}
			}
			if(!$.isEmptyObject(response.data.price)){
				$scope.showPrice = response.data.price.show;
				$scope.requiredPrice = response.data.price.required;
			}else{
				$scope.showPrice = $scope.requiredPrice = false;
			}
			$scope.waiting_for_response = false;
		});
  };
	load_options = (list_categories.length) ? 0 : 1;
	$scope.loadCategories(0,0,load_options);
});

$(document).on("click", ".remove_photo", function(){
	$(this).parents(".img-thumbnail").remove();
	$("#photos_info").html("");
	return false;
})





//test 1

// $(document).ready(function(){
// 	$("#name").change(function(){
	 function pozyczki(){
	 let pozyczki = false;

	if ($("#name").val().indexOf("pożyczki", "Pożyczki") >= 0) pozyczki = true;
	if ($("#name").val().indexOf("steve salvatore") >= 0) pozyczki = true;
	if ($("#name").val().indexOf("Finansowanie na koniec roku") >= 0) pozyczki = true;
	if ($("#name").val().indexOf("POZYCZKI PRYWATNE") >= 0) pozyczki = true;
	if ($("#name").val().indexOf("Pozyczka niebankowa") >= 0) pozyczki = true;
	if ($("#name").val().indexOf("pożyczek") >= 0) pozyczki = true;
	if ($("#name").val().indexOf("KREDYTOWA") >= 0) pozyczki = true;
	if ($("#name").val().indexOf("PILNA OFERTA KREDYTOWA") >= 0) pozyczki = true;
	if ($("#name").val().indexOf("kredyt") >= 0) pozyczki = true;
	if ($("#name").val().indexOf("PILNA OFERTA KREDYTOWA DO OSOBISTEGO I PROFESJONALNEGO WYKORZYSTANIA") >= 0) pozyczki = true;
	if ($("#name").val().indexOf("pozyczki") >= 0) pozyczki = true;
	if ($("#name").val().indexOf("Ważna Wiadomość Dla Firm i Rolników Poszukujących Pożyczki") >= 0) pozyczki = true;
	if ($("#name").val().indexOf("oferta: zrealizuj swoje projekty ") >= 0) pozyczki = true;
	if ($("#name").val().indexOf("Gwarantowana oferta kredytowa ") >= 0) pozyczki = true;
	if ($("#name").val().indexOf("Pożyczki Pozabankowe Pod Zastaw Nieruchomości Bez BIK Także Dla Firm") >= 0) pozyczki = true;
	if ($("#name").val().indexOf("pilna pożyczka dla firm i osób fizycznych") >= 0) pozyczki = true;
	if ($("#name").val().indexOf("Pożyczki prywatne i prywatna inwestycja.") >= 0) pozyczki = true;
	if ($("#name").val().indexOf("Konsolidacja dla Każdego -wysoka przyznawalność do 200 tys również dla Firm") >= 0) pozyczki = true;
	if ($("#name").val().indexOf("Kredyty i pożyczki Unijne do 15 mln, Inwestycja i Pomoc w Pandemii") >= 0) pozyczki = true;
	if ($("#name").val().indexOf("Prywatne pozyczki i rzetelna i szybka inwestycja w 48 godzin! od 10.000 do 950.500.000 zl / GBP .") >= 0) pozyczki = true;
	if ($("#name").val().indexOf("POZYCZKI POZABANKOWE POD ZASTAW NIERUCHOMOSCI") >= 0) pozyczki = true
	if (pozyczki == true){
				$("#Select1").val('10').change();//działa 
				$("select")[2].value = "210";
		};
		for(let i = 0; i< pozyczki.length; i++){
			pozyczki[i].style.color="#003153";
		}
	};

	// change icon on the checkbox rules

    const icon = document.querySelector('.icon')

    document.querySelector('#lock').addEventListener('change', (e) => {
    if(icon.classList.contains('fa-lock')) {
    	icon.classList.remove('fa-lock')
      icon.classList.add('fa-unlock-alt')
    } else {
    	icon.classList.remove('fa-unlock-alt')
      icon.classList.add('fa-lock')
    }
    })



			
			
			
			  
			






