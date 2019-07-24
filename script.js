$(function() {

//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches
/* 
 $(".next").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	next_fs.show(); 
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			scale = 1 - (1 - now) * 0.2;
			left = (now * 50)+"%";
			opacity = 1 - now;
			current_fs.css({'transform': 'scale('+scale+')'});
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
}); */   
$(".previous_doT").click(function(){
	$(".dotLi").removeClass("active");
	$(".phoneli").addClass("active");
	$(".first").show(); 
	$(".second").hide();
		
});
$(".previous_physical").click(function(){
	$(".physicalLi").removeClass("active");
	$(".dotLi").addClass("active");
	$(".second").show(); 
	$(".third").hide();
		
});
$(".previous_mailing").click(function(){
	$(".mailingLi ").removeClass("active");
	$(".physicalLi").addClass("active");
	$(".third").show(); 
	$(".fourth").hide();
		
});
$(".previous_Insurance").click(function(){
	$(".insuranceLi ").removeClass("active");
	$(".mailingLi").addClass("active");
	$(".fourth").show(); 
	$(".fifth").hide();
		
});

$(".checkType").click(function(){
	var d= $(this).val();
	if(d==1){
		$(".searchedNumber").attr("placeholder", "Enter DOT Number");
	}else{
		$(".searchedNumber").attr("placeholder", "Enter MC Number");
	}

		
});

$(".phone_number_next").click(function(event ){
	var phone=$(".phoneNumber").val();
	if(phone==''){
		event.preventDefault();
		$(".phoneNumber").addClass('is-invalid');
	}else{
	$(".phoneNumber").removeClass('is-invalid');
		 $.ajax({
            url:"ajaxRequest.php", 
            type: "POST", 
            dataType: 'json',
           data: ({getZohoContact: "success", phone_number: phone}),
            success:function(result){
				if(result==0){
					event.preventDefault();
					$(".phoneNumber").addClass('is-invalid');
				}
				else{
				$(".contactId").val(result);
					$(".phoneli").removeClass("active");
					$(".dotLi").addClass("active");
					$(".second").show(); 
					$(".first").hide();
			}
           }
         });
	}
});
$(".dot_number_next").click(function(event ){
	var checkType=$(".checkType").val();
	var searchedNumber=$(".searchedNumber").val();
	var contactId=$(".contactId").val();
	if(searchedNumber==''){
		event.preventDefault();
		$(".searchedNumber").addClass('is-invalid');
	}else{
	$(".searchedNumber").removeClass('is-invalid');
		 $.ajax({
            url:"ajaxRequest.php", 
            type: "POST", 
           dataType: 'json',
           data: ({getSaferData: "success", searchedNumber: searchedNumber,checkType:checkType,contactId:contactId}),
            success:function(result){
              if(result==0){
				event.preventDefault();
				$(".searchedNumber").addClass('is-invalid'); 
				}else{
					$(".mailing_address").val(result.mailing_address);
					$(".physical_street").val(result.p_street_address);
					$(".mailing_street").val(result.m_street_address);
					$(".physical_address").val(result.physical_address);
					$(".physical_state").val(result.p_state);
					$(".mailing_state").val(result.m_state);
					$(".physical_Postal").val(result.physical_zip);
					$(".mailing_Postal").val(result.mailing_zip);
					$(".Entity_Type").val(result.Entity_Type);
					$(".operating_status").val(result.operating_status);
					$(".Out_of_Service_date").val(result.Out_of_Service_date);
					$(".legal_name").val(result.legal_name);
					$(".dba_name").val(result.dba_name);
					$(".state_carrier_ID_Number").val(result.state_carrier_ID_Number);
					$(".duns_Number").val(result.duns_Number);
					$(".power_units").val(result.power_units);
					$(".drivers").val(result.drivers);
					$(".MCS_150_Form_Date").val(result.MCS_150_Form_Date);
					$(".MCS_150_Mileage_year").val(result.MCS_150_Mileage_year);
					$(".Operation_Classification").val(result.Operation_Classification);
					$(".Carrier_Operation").val(result.Carrier_Operation);
					$(".Cargo_Carried").val(result.Cargo_Carried);
					$(".dotLi").removeClass("active");
					$(".physicalLi").addClass("active");
					$(".second").hide();
					$(".third").show(); 
								 
				} 
           }
         });
	
	 
	}
});

$(".physical_address_next").click(function(event ){
	var contactId=$(".contactId").val();
		 $.ajax({
            url:"ajaxRequest.php", 
            type: "POST", 
           dataType: 'json',
           data: ({physical_address: "success",contactId:contactId}),
            success:function(result){
					$(".physicalLi").removeClass("active");
					$(".mailingLi").addClass("active");
					$(".third").hide();
					$(".fourth").show(); 
								 
				
           }
         });
});
$(".mailing_address_next").click(function(event ){
	var contactId=$(".contactId").val();
		 $.ajax({
            url:"ajaxRequest.php", 
            type: "POST", 
           dataType: 'json',
           data: ({mailing_address: "success",contactId:contactId}),
            success:function(result){
					$(".mailingLi").removeClass("active");
					$(".insuranceLi").addClass("active");
					$(".fourth").hide();
					$(".fifth").show(); 
								 
				
           }
         });
});




$(".submit").click(function(){
	return false;
})

});
