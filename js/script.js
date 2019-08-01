$(document).ready( function () {
	
$(".previous_doT").click(function(){
	$(".dotLi").removeClass("active");
	$(".phoneli").addClass("active");
	$(".first").show(); 
	$(".second").hide();
		
});
$(".previous_first_2").click(function(){
	$(".MCLi").removeClass("active");
	$(".dotLi").addClass("active");
	$(".second").show(); 
	$(".first_2").hide();
		
});



$(".previous_physical").click(function(){
	$(".physicalLi").removeClass("active");
	$(".MCLi").addClass("active");
	$(".first_2").show(); 
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
$(".previous_general").click(function(){
	$(".generalLI ").removeClass("active");
	$(".MCLi").addClass("active");
	$(".first_2").show(); 
	$(".sixth").hide();
		
});
$(".previous_vehicles").click(function(){
	$(".vehiclesLI ").removeClass("active");
	$(".generalLI").addClass("active");
	$(".sixth").show(); 
	$(".seventh").hide();
		
});
$(".previous_drivers").click(function(){
	$(".driversLI ").removeClass("active");
	$(".vehiclesLI").addClass("active");
	$(".seventh").show(); 
	$(".eigth").hide();
		
});
$(".previous_violations").click(function(){
	$(".violationsLI ").removeClass("active");
	$(".driversLI").addClass("active");
	$(".eigth").show(); 
	$(".ninth").hide();
		
});

$(".previous_Underwriting").click(function(){
	$(".underwritingLI ").removeClass("active");
	$(".violationsLI").addClass("active");
	$(".ninth").show(); 
	$(".tenth").hide();
		
});
$(".previous_Coverage_Limit_Information").click(function(){
	$(".pdfLI").removeClass("active");
	$(".underwritingLI").addClass("active");
	$(".tenth").show(); 
	$(".eleventh").hide();
		
});
$(".previous_OperationDescription").click(function(){
	$(".CoverageLimitInformation").removeClass("active");
	$(".CoverageLI").addClass("active");
	$(".twelve").hide();
	$(".eleventh").show(); 
	
		
});

$(".previous_InsuranceHistory").click(function(){
	$(".CoverageLimitInformation").removeClass("active");
	$(".underwritingLI").addClass("active");
	$(".twelve").show(); 
	$(".eleventh").hide();
		
});

$(".phoneli").click(function(){
	$("#progressbar li").removeClass("active");
	$(".phoneli").addClass("active");
	$("fieldset").hide();
	$(".first").show(); 
		
});


$(".dotLi").click(function(){
	var phoneNumber=$(".phoneNumber").val();
	if(phoneNumber==''){
		event.preventDefault();
		$(".phoneNumber").addClass('is-invalid');
	}else{
	$(".phoneNumber").removeClass('is-invalid');
	$("#progressbar li").removeClass("active");
	$(".dotLi").addClass("active");
	$("fieldset").hide();
	$(".second").show(); 
	}	
});

$(".MCLi").click(function(){
	var contactId=$(".contactId").val();
	if(contactId==''){
		event.preventDefault();
		$(".phoneNumber").addClass('is-invalid');
	}else{
	$(".phoneNumber").removeClass('is-invalid');
	$("#progressbar li").removeClass("active");
	$(".MCLi").addClass("active");
	$("fieldset").hide();
	$(".first_2").show(); 
	}	
});

$(".physicalLi").click(function(){
	var contactId=$(".contactId").val();
	if(contactId==''){
		event.preventDefault();
		$(".phoneNumber").addClass('is-invalid');
	}else{
	$(".phoneNumber").removeClass('is-invalid');
	$("#progressbar li").removeClass("active");
	$(".physicalLi").addClass("active");
	$("fieldset").hide();
	$(".third").show(); 
	}
		
});
$(".mailingLi").click(function(){
	var contactId=$(".contactId").val();
	if(contactId==''){
		event.preventDefault();
		$(".phoneNumber").addClass('is-invalid');
	}else{
	$(".phoneNumber").removeClass('is-invalid');
	$("#progressbar li").removeClass("active");
	$(".mailingLi").addClass("active");
	$("fieldset").hide();
	$(".fourth").show(); 
	}
});
$(".insuranceLi").click(function(){
	var contactId=$(".contactId").val();
	if(contactId==''){
		event.preventDefault();
		$(".phoneNumber").addClass('is-invalid');
	}else{
	$(".phoneNumber").removeClass('is-invalid');
	$("#progressbar li").removeClass("active");
	$(".insuranceLi").addClass("active");
	$("fieldset").hide();
	$(".fifth").show(); 
	}	
});
$(".generalLI").click(function(){
	var contactId=$(".contactId").val();
	if(contactId==''){
		event.preventDefault();
		$(".phoneNumber").addClass('is-invalid');
	}else{
	$(".phoneNumber").removeClass('is-invalid');
	$("#progressbar li").removeClass("active");
	$(".generalLI").addClass("active");
	$("fieldset").hide();
	$(".sixth").show(); 
	}	
});
$(".vehiclesLI").click(function(){
var contactId=$(".contactId").val();
	if(contactId==''){
		event.preventDefault();
		$(".phoneNumber").addClass('is-invalid');
	}else{
	$("#progressbar li").removeClass("active");
	$(".vehiclesLI").addClass("active");
	$("fieldset").hide();
	$(".seventh").show(); 
	}	
});
$(".driversLI").click(function(){
	var contactId=$(".contactId").val();
	if(contactId==''){
		event.preventDefault();
		$(".phoneNumber").addClass('is-invalid');
	}else{
	$(".phoneNumber").removeClass('is-invalid');
	$("#progressbar li").removeClass("active");
	$(".driversLI").addClass("active");
	$("fieldset").hide();
	$(".eigth").show(); 
	}	
});
$(".violationsLI").click(function(){
	$("#progressbar li").removeClass("active");
	$(".violationsLI").addClass("active");
	$("fieldset").hide();
	$(".ninth").show(); 
		
});
$(".underwritingLI").click(function(){
	var phone=$(".phoneNumber").val();
	if(phone==''){
		event.preventDefault();
		$(".phoneNumber").addClass('is-invalid');
	}else{
	$(".phoneNumber").removeClass('is-invalid');
	$("#progressbar li").removeClass("active");
	$(".underwritingLI").addClass("active");
	$("fieldset").hide();
	$(".tenth").show(); 
	}	
});

$(".CoverageLI").click(function(){
	var phone=$(".phoneNumber").val();
	if(phone==''){
		event.preventDefault();
		$(".phoneNumber").addClass('is-invalid');
	}else{
	$(".phoneNumber").removeClass('is-invalid');
	$("#progressbar li").removeClass("active");
	$(".CoverageLI").addClass("active");
	$("fieldset").hide();
	$(".eleventh").show(); 
	}	
});

$(".InsuranceHistory").click(function(){
	var phone=$(".phoneNumber").val();
	if(phone==''){
		event.preventDefault();
		$(".phoneNumber").addClass('is-invalid');
	}else{
	$(".phoneNumber").removeClass('is-invalid');
	$("#progressbar li").removeClass("active");
	$(".InsuranceHistory").addClass("active");
	$("fieldset").hide();
	$(".thirteen").show(); 
	}	
});



$(".OperationDescription").click(function(){
	var phone=$(".phoneNumber").val();
	if(phone==''){
		event.preventDefault();
		$(".phoneNumber").addClass('is-invalid');
	}else{
	$(".phoneNumber").removeClass('is-invalid');
	$("#progressbar li").removeClass("active");
	$(".OperationDescription").addClass("active");
	$("fieldset").hide();
	$(".twelve").show(); 
	}	
});





$(document).on("click", ".phone_number_next", function(event){
	var phone=$(".phoneNumber").val();
	
	if(phone==''){
		event.preventDefault();
		$(".phoneNumber").addClass('is-invalid');
	}else{
	$(".phoneNumber").removeClass('is-invalid');
	
	$("body").css("cursor", "progress");
		 $.ajax({
            url:"ajaxRequest.php", 
            type: "POST", 
           dataType: 'json',
           data: ({getZohoContact: "success", phone_number: phone}),
            success:function(result){
				
				$("body").css("cursor", "default");
				if(result==0){
					event.preventDefault();
					$(".phoneNumber").addClass('is-invalid');
				}
				else{
				$(".contactId").val(result.contactId);
				$(".searchedNumber").val(result.Dot);
				$(".mc").val(result.MC);
					$(".phoneli").removeClass("active");
					$(".dotLi").addClass("active");
					$(".second").show(); 
					$(".first").hide();
				var conatctData=result.contactId;
				
				if(conatctData!=''){
					
				driversdata=result.conatctData.Drivers1;
				Vehiclesdata=result.conatctData.Vehicles;
				if ( $.fn.DataTable.isDataTable('#dtDriverTable') ) {
					  $('#dtDriverTable').DataTable().destroy();
					}
					$('#dtDriverTable tbody').empty();	
				if ( $.fn.DataTable.isDataTable('#dtVehiclesTable') ) {
					  $('#dtVehiclesTable').DataTable().destroy();
					}
					$('#dtVehiclesTable tbody').empty();		
					
				var drivertable=$('#dtDriverTable').DataTable({ "scrollX": true}
				);
				var Vehiclestable=$('#dtVehiclesTable').DataTable();
					if(driversdata!=''){
					$.each(driversdata, function(index, element) {
						var a=element.DOB_Age_MaritalStatus_Points_LicenceNo;
					var d=a.split(',');
					var dob=d[0];
					var age=d[1];
					var merital=d[2];
					var points=d[3];
					var licence=d[4];
						
						
						drivertable.row.add(
							[
							index,
							"<button class='edit_drivers btn' data-id='"+element.id+"' type='button' data-toggle='modal' data-target='#Driver_Edit_modal'>Edit</button>",
							element.Name1,
							age,
							dob,
							merital,
							licence,
							element.License_State,
							element.Experience_Years,
							element.Hire_Date,
							element.License_State,
							element.Back_up_Driver,
							element.Owner_Driver,
							element.SR22,
							points,
							"<button class='delete_driver btn' data-id='"+element.id+"' type='button'>Delete</button>"
							]
						).draw();

					});	
					}
					if(Vehiclesdata!=''){
					$.each(Vehiclesdata, function(index, element) {
						

						Vehiclestable.row.add(
							[
							index,
							"<button id='edit_vehicles' data-id='"+element.id+"' type='button' data-toggle='modal' data-target='#vehicle_Edit_modal'>Edit</button>",
							element.Year_Make_Model1,
							element.VIN,
							element.Category,
							element.Radius,
							element.Value,
							element.Loss_Payee,
							"<button class='btn' id='delete_vehicle' data-id='"+element.id+"'>Delete</button>"
							]
						).draw();

					});	
					}
				}	
			}
           }
         });
	}
});
$(".dot_number_next").click(function(event ){
	var checkType=$(".checkType").val();
	var check_id_dot_already= $(".dot").val();
	var searchedNumber=$(".searchedNumber").val();
	var contactId=$(".contactId").val();
	if(searchedNumber==''){
		event.preventDefault();
		$(".searchedNumber").addClass('is-invalid');
	}else{
	$(".searchedNumber").removeClass('is-invalid');
	$("body").css("cursor", "progress");
		 $.ajax({
            url:"ajaxRequest.php", 
            type: "POST", 
           dataType: 'json',
           data: ({getSaferData: "success", searchedNumber: searchedNumber,checkType:checkType,contactId:contactId}),
            success:function(result){
				
				$("body").css("cursor", "default");
              if(result==0){
				event.preventDefault();
				$(".searchedNumber").addClass('is-invalid'); 
				}else{
					$(".mc").val(result.mc_mx_ff_nmumber);
					/* $(".mailing_address").val(result.mailing_address);
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
					$(".Cargo_Carried").val(result.Cargo_Carried); */
					$(".dotLi").removeClass("active");
					$(".MCLi").addClass("active");
					$(".second").hide();
					$(".first_2").show(); 
					//$(".physicalLi").addClass("active");
							 
				} 
           }
         });
	
	 
	}
});
$(".first_2_next").click(function(event ){
	//var checkType=$(".checkType").val();
	//var check_id_dot_already= $(".dot").val();
	var mc=$(".mc").val();
	var contactId=$(".contactId").val();
	$("body").css("cursor", "progress");
		 $.ajax({
            url:"ajaxRequest.php", 
            type: "POST", 
           dataType: 'json',
           data: ({getMcData: "success", mc: mc,contactId:contactId}),
            success:function(result){
				$("body").css("cursor", "default");
					$(".MCLi").removeClass("active");
					$(".generalLI").addClass("active");
					$(".first_2").hide();
					$(".sixth").show(); 
					
				}
		 });
	
});





$(".physical_address_next").click(function(event ){
	var contactId = $(".contactId").val();
	var physical_street = $(".physical_street").val();
	var physicaladdress = $(".physical_address").val();		
	var physical_state = $(".physical_state").val();		
	var physical_Postal= $(".physical_Postal").val();
	var physical_street1= $(".physical_street1").val();
	var physical_city= $(".physical_city").val();
					
		 $.ajax({
            url:"ajaxRequest.php", 
            type: "POST", 
           dataType: 'json',
		   
		   
           data: ({physical_address: "success",contactId:contactId,physical_street:physical_street,physicaladdress:physicaladdress,physical_state:physical_state,physical_street1:physical_street1,physical_city:physical_city,physical_Postal:physical_Postal}),
            success:function(result){
					$(".physicalLi").removeClass("active");
					$(".mailingLi").addClass("active");
					$(".third").hide();
					$(".fourth").show(); 
								 
				
           }
         });
});
$(".mailing_address_next").click(function(event ){
	var contactId = $(".contactId").val();
	var mailingaddress = $(".mailing_address").val();
	var mailing_street =	$(".mailing_street").val();			
	var mailing_street1 =	$(".mailing_street1").val();			
	var mailing_state =	$(".mailing_state").val();			
	var mailing_Postal =	$(".mailing_Postal").val();		
	var mailing_city =	$(".mailing_city").val();		
					
					
					
		 $.ajax({
            url:"ajaxRequest.php", 
            type: "POST", 
           dataType: 'json',
           data: ({mailing_address: "success",contactId:contactId,mailingaddress:mailingaddress,mailing_street:mailing_street,mailing_street1:mailing_street1,mailing_state:mailing_state,mailing_Postal:mailing_Postal,mailing_city:mailing_city}),
            success:function(result){
					$(".mailingLi").removeClass("active");
					$(".insuranceLi").addClass("active");
					$(".fourth").hide();
					$(".fifth").show(); 
								 
				
           }
         });
});

$(".safer_data_next").click(function(event ){
	var contactId=$(".contactId").val();
		 $.ajax({
            url:"ajaxRequest.php", 
            type: "POST", 
           dataType: 'json',
           data: ({safer_data_next: "success",contactId:contactId}),
            success:function(result){
					$(".insuranceLi").removeClass("active");
					$(".generalLI").addClass("active");
					$(".fifth").hide();
					$(".sixth").show(); 
								 
				
           }
         });
});
$(".general_data_next").click(function(event ){
	var contactId=$(".contactId").val();
	var dataform=	$('.sixth').find('select, textarea, input').serialize();
		 $.ajax({
            url:"ajaxRequest.php", 
            type: "POST", 
           dataType: 'json',
           data: ({general_data_next: "success",contactId:contactId,dataform:dataform}),
            success:function(result){
					$(".generalLI").removeClass("active");
					$(".vehiclesLI").addClass("active");
					$(".sixth").hide();
					$(".seventh").show(); 
								 
				
           }
         });
});
$(".vehicles_data_next").click(function(event ){
	var contactId=$(".contactId").val();
		 $.ajax({
            url:"ajaxRequest.php", 
            type: "POST", 
           dataType: 'json',
           data: ({vehicles_data_next: "success",contactId:contactId}),
            success:function(result){
					$(".vehiclesLI").removeClass("active");
					$(".driversLI").addClass("active");
					$(".seventh").hide();
					$(".eigth").show(); 
								 
				
           }
         });
});
$(".drivers_data_next").click(function(event ){
	var contactId=$(".contactId").val();
		 $.ajax({
            url:"ajaxRequest.php", 
            type: "POST", 
           dataType: 'json',
           data: ({drivers_data_next: "success",contactId:contactId}),
            success:function(result){
					$(".driversLI").removeClass("active");
					$(".violationsLI").addClass("active");
					$(".eigth").hide();
					$(".ninth").show(); 
								 
				
           }
         });
});
$(".violations_data_next").click(function(event ){
	
	var mainarray=[];
	 $("#Violation_Table tbody").find("tr").each(function (index, element) {
		 console.log(index);
		var voilationArray={};;
		 var select_Accident= $("#select_Accident_"+index).val();
		 var Accident_date=$("#Accident_date_"+index).val();
		 
		voilationArray.Accident=	select_Accident;
		voilationArray.Accident_date=Accident_date;
		mainarray.push(voilationArray); 
			 
    }); 
	
		var voilationsdata=JSON.stringify(mainarray);

	 var contactId=$(".contactId").val();
		 $.ajax({
            url:"ajaxRequest.php", 
            type: "POST", 
           dataType: 'json',
           data: ({violations_data_next: "success",contactId:contactId,voilationsdata:voilationsdata}),
            success:function(result){
					 $(".violationsLI").removeClass("active");
					$(".underwritingLI").addClass("active");
					$(".ninth").hide();
					$(".tenth").show(); 
								 
				
           }
         }); 
});
 $(".underwriting_data_next").click(function(event ){
	var contactId=$(".contactId").val();
		 $.ajax({
            url:"ajaxRequest.php", 
            type: "POST", 
           dataType: 'json',
           data: ({underwriting_data_next: "success",contactId:contactId}),
            success:function(result){
					$(".violationsLI").removeClass("active");
					$(".underwritingLI").addClass("active");
					$(".tenth").hide();
					$(".eleventh").show();
								 
				
           }
         });
});
 
$(".Coverage_Limit_Information_next").click(function(event ){
	var contactId=$(".contactId").val();

		 $.ajax({
            url:"ajaxRequest.php", 
            type: "POST", 
           dataType: 'json',
           data: ({Coverage_Limit_Information: "success",contactId:contactId}),
            success:function(result){
				 $(".underwritingLI").removeClass("active");
					$(".CoverageLI").addClass("active");
					$(".eleventh").hide();
					$(".twelve").show(); 
								 
				
           }
         });
});
//*************************************************** next code *********************************************************//
$(".OperationDescription_next").click(function(event ){
	var contactId=$(".contactId").val();

		 $.ajax({
            url:"ajaxRequest.php", 
            type: "POST", 
           dataType: 'json',
           data: ({OperationDescription: "success",contactId:contactId}),
            success:function(result){
				 $(".CoverageLI").removeClass("active");
				
					$(".OperationDescription").addClass("active");
					$(".twelve").hide();
					$(".thirteen").show(); 
								 
				
           }
         });
});



/////////////////////////////////////////////////////////////////////////////////////////

$(".InsuranceHistory_next").click(function(event ){
	var contactId=$(".contactId").val();

		 $.ajax({
            url:"ajaxRequest.php", 
            type: "POST", 
           dataType: 'json',
           data: ({InsuranceHistory: "success",contactId:contactId}),
            success:function(result){
				 $(".OperationDescription").removeClass("active");
				
					$(".InsuranceHistory").addClass("active");
					$(".thirteen").hide();
					$(".fourteen").show(); 
								 
				
           }
         });
});






$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	previous_fs.show(); 
	current_fs.hide();
	
});



$(".submit").click(function(){
	return false;
})
$(document).on("click", "#new_drive_add_button", function(event){
	
	var d=0;
	if($("#new_driver_first").val()==''){
		 d=0;
			event.preventDefault();
			$("#new_driver_first").addClass('is-invalid');
	}else{
		 d=1;
		 $("#new_driver_first").removeClass('is-invalid');
	}
	if($("#new_driver_last").val()==''){
		 d=0;
			event.preventDefault();
			$("#new_driver_last").addClass('is-invalid');
	}else{
		d=1;
		$("#new_driver_last").removeClass('is-invalid');
	}
	if($("#new_driver_dob").val()==''){
		d=0;
			event.preventDefault();
			$("#new_driver_dob").addClass('is-invalid');
	}else{
		d=1;
		 $("#new_driver_dob").removeClass('is-invalid');
	}
	
	if($("#new_driver_licence").val()==''){
		d=0;
			event.preventDefault();
			$("#new_driver_licence").addClass('is-invalid');
	}else{
		d=1;
		 $("#new_driver_licence").removeClass('is-invalid');
	}
	if($("#new_driver_Exp").val()==''){
		d=0;
			event.preventDefault();
			$("#new_driver_Exp").addClass('is-invalid');
	}else{
		d=1;
		 $("#new_driver_Exp").removeClass('is-invalid');
	}
	if($("#new_driver_hire_date").val()==''){
		d=0;
			event.preventDefault();
			$("#new_driver_hire_date").addClass('is-invalid');
	}else{
		d=1;
		 $("#new_driver_hire_date").removeClass('is-invalid');
	}
	
	
	
	if(d==1){
		var dataform=	$('#Add_new_Driver_form').serialize();
		var contactId=$(".contactId").val();
		$.ajax({
            url:"ajaxRequest.php", 
            type: "POST", 
           dataType: 'json',
           data: ({new_drive_add: "success",contactId:contactId,dataform:dataform}),
            success:function(result){
				if(result!==0){
					var a=result.DOB_Age_MaritalStatus_Points_LicenceNo;
					var d=a.split(',');
					var dob=d[0];
					var age=d[1];
					var merital=d[2];
					var points=d[3];
					var licence=d[4];
					
					
					 $('#Driver_add_modal').modal('toggle');
					var i=$('#dtDriverTable tr:last').find('td:first').html();
					var index= parseInt(i)+parseInt(1);
					var Vehiclestable=$('#dtDriverTable').DataTable();
						Vehiclestable.row.add(
							[
							index,
							"<button class='edit_drivers btn' data-id='"+result.driverId+"' type='button' data-toggle='modal' data-target='#Driver_Edit_modal'>Edit</button>",
							result.Name1,
							age,
							dob,
							merital,
							licence,
							result.License_State,
							result.Experience_Years,
							result.Hire_Date,
							result.Back_up_Driver,
							result.Owner_Driver,
							result.SR22,
							points,
							"<button class='delete_driver btn' data-id='"+result.driverId+"'>Delete</button>"
							]
						).draw();
					}			 
				}
           
         });
	}

	
});

 
$(document).on("change", "#C2VehicleDetails_year", function(event){
var vehicle_cat=$("#C2VehicleDetails_category").find(':selected').attr('data-id');
var vehicle_subcat=$("#C2VehicleDetails_subcategory").find(':selected').attr('data-id');
	$("#C2VehicleDetails_make").html('<option value="" selected>updating....</option>');
	$("#C2VehicleDetails_model").html('<option value="" selected>updating....</option>');
	$.ajax({
		url:"ajaxRequest.php", 
		type: "POST", 
	   data: ({get_make: "success",vehicle_cat:vehicle_cat,vehicle_subcat:vehicle_subcat}),
		success:function(result){
			if(result!=0){
			$("#C2VehicleDetails_make").html(result);
			$("#C2VehicleDetails_model").html('<option value=""></option>');
				$(".make_div").hide();
				$(".make_div_select").show();
				$(".model_div").hide();
				$(".model_div_select").show();
				
			
			}else{
				$(".make_div_select").hide();
				$(".make_div").show();
				$(".model_div_select").hide();
				$(".model_div").show();
			}
			
		}
	})
});

$(document).on("change", ".vahicle_type", function(event){
var vehicle_type=$(this).data("id");
		$("#C2VehicleDetails_category").html('<option value="" selected>updating....</option>');
		$("#C2VehicleDetails_year").html('<option value="" selected>updating....</option>');
		$("#C2VehicleDetails_make").html('<option value="" selected>updating....</option>');
		$("#C2VehicleDetails_model").html('<option value="" selected>updating....</option>');
	$.ajax({
		url:"ajaxRequest.php", 
		type: "POST", 
	   data: ({get_vehicle_category: "success",vehicle_type:vehicle_type}),
		success:function(result){
		$("#C2VehicleDetails_category").html(result);
		$("#C2VehicleDetails_year").html('<option value=""></option>');
		$("#C2VehicleDetails_make").html('<option value=""></option>');
		$("#C2VehicleDetails_model").html('<option value=""></option>');
		}
	})
});

$(document).on("change", "#C2VehicleDetails_category", function(event){
var vehicle_cat=$(this).find(':selected').attr('data-id');
var C2VehicleDetails_year=$("#C2VehicleDetails_year").find(':selected').attr('data-id');
var vehicle_subcat=$("#C2VehicleDetails_subcategory").find(':selected').attr('data-id');
			$("#C2VehicleDetails_year").html('<option value="" selected>updating....</option>');
			$("#C2VehicleDetails_make").html('<option value="" selected>updating....</option>');
			$("#C2VehicleDetails_model").html('<option value="" selected>updating....</option>');
			$.ajax({
				url:"ajaxRequest.php", 
				type: "POST", 
			   data: ({get_vehicle_sub: "success",vehicle_cat:vehicle_cat}),
				success:function(result){
					if(result!=0){
					$("#category_sub").show();	
					$("#C2VehicleDetails_subcategory").html(result);
					$("#C2VehicleDetails_year").html('<option value=""></option>');
					$("#C2VehicleDetails_make").html('<option value=""></option>');
					$("#C2VehicleDetails_model").html('<option value=""></option>');
					}else{
						$("#category_sub").hide();	
						$("#C2VehicleDetails_subcategory").html('<option value=""></option>');
						if(C2VehicleDetails_year ==''){
							$.ajax({
								url:"ajaxRequest.php", 
								type: "POST", 
							   data: ({get_year: "success",vehicle_cat:vehicle_cat}),
								success:function(result){
									$("#C2VehicleDetails_year").html(result);
									$("#C2VehicleDetails_make").html('<option value=""></option>');
									$("#C2VehicleDetails_model").html('<option value=""></option>');
								}
							})
						}else{
							$.ajax({
								url:"ajaxRequest.php", 
								type: "POST", 
							   data: ({get_year: "success",vehicle_cat:vehicle_cat,vehicle_year:C2VehicleDetails_year}),
								success:function(result){
									$("#C2VehicleDetails_year").html(result);
									$("#C2VehicleDetails_make").html('<option value=""></option>');
									$("#C2VehicleDetails_model").html('<option value=""></option>');
									$.ajax({
										url:"ajaxRequest.php", 
										type: "POST", 
									   data: ({get_make: "success",vehicle_cat:vehicle_cat,vehicle_subcat:vehicle_subcat}),
										success:function(result){
											if(result!=0){
											$("#C2VehicleDetails_make").html(result);
											$("#C2VehicleDetails_model").html('<option value=""></option>');
											$(".make_div").hide();
											$(".make_div_select").show();
											$(".model_div").hide();
											$(".model_div_select").show();
										}else{
											$(".make_div_select").hide();
											$(".make_div").show();
											$(".model_div_select").hide();
											$(".model_div").show();
										}	
											
										}
									})
									
								}
							})
							
							
						}
						
					}
				}
		})
});




$(document).on("change", "#C2VehicleDetails_subcategory", function(event){
var vehicle_sub=$(this).find(':selected').attr('data-id');
var C2VehicleDetails_year=$("#C2VehicleDetails_year").find(':selected').attr('data-id');
var vehicle_cat=$("#C2VehicleDetails_category").find(':selected').attr('data-id');
	if(C2VehicleDetails_year ==''){
		$.ajax({
			url:"ajaxRequest.php", 
			type: "POST", 
		   data: ({get_year: "success",vehicle_cat:vehicle_cat}),
			success:function(result){
				$("#C2VehicleDetails_year").html(result);
				$("#C2VehicleDetails_make").html('<option value=""></option>');
				$("#C2VehicleDetails_model").html('<option value=""></option>');
			}
		})
	}else{
		$.ajax({
			url:"ajaxRequest.php", 
			type: "POST", 
		   data: ({get_year: "success",vehicle_cat:vehicle_cat,vehicle_year:C2VehicleDetails_year}),
			success:function(result){
				$("#C2VehicleDetails_year").html(result);
				$("#C2VehicleDetails_make").html('<option value=""></option>');
				$("#C2VehicleDetails_model").html('<option value=""></option>');
				$.ajax({
					url:"ajaxRequest.php", 
					type: "POST", 
				   data: ({get_make: "success",vehicle_cat:vehicle_cat,vehicle_subcat:vehicle_subcat}),
					success:function(result){
						if(result!=0){
						$("#C2VehicleDetails_make").html(result);
						$("#C2VehicleDetails_model").html('<option value=""></option>');
						$(".make_div").hide();
						$(".make_div_select").show();
						$(".model_div").hide();
						$(".model_div_select").show();
					}else{
						$(".make_div_select").hide();
						$(".make_div").show();
						$(".model_div_select").hide();
						$(".model_div").show();
					}	
						
					}
				})
				
			}
		})
		
		
	}
});







$(document).on("change", "#C2VehicleDetails_make", function(event){
var vehicle_make=$(this).find(':selected').attr('data-id');
var vehicle_year=$("#C2VehicleDetails_year").find(':selected').attr('data-id');
var vehicle_cat=$("#C2VehicleDetails_category").find(':selected').attr('data-id');
$("#C2VehicleDetails_model").html('<option value="" selected>updating....</option>');

	$.ajax({
		url:"ajaxRequest.php", 
		type: "POST", 
	   data: ({get_vehicle_model: "success",vehicle_cat:vehicle_cat,vehicle_year:vehicle_year,vehicle_make:vehicle_make,}),
		success:function(result){
			if(result!=0){
			$("#C2VehicleDetails_model").html(result);
			$(".model_div_select").show();
			$(".model_div").hide();
			}else{
				$(".model_div_select").hide();
				$(".model_div").show();
				
			}
		}
	})
});


$(document).on("change", "#C2VehicleDetails_model", function(event){
var vehicle_model=$(this).find(':selected').attr('data-id');
var vehicle_year=$("#C2VehicleDetails_year").find(':selected').attr('data-id');
var vehicle_cat=$("#C2VehicleDetails_category").find(':selected').attr('data-id');
var vehicle_make=$("#C2VehicleDetails_make").find(':selected').attr('data-id');
$("#C2VehicleDetails_body").html('<option value="" selected>updating....</option>');

	$.ajax({
		url:"ajaxRequest.php", 
		type: "POST", 
	   data: ({get_vehicle_body: "success",vehicle_cat:vehicle_cat,vehicle_year:vehicle_year,vehicle_make:vehicle_make,vehicle_model:vehicle_model}),
		success:function(result){
			if(result!=0){
			$("#C2VehicleDetails_body").html(result);
			}
		}
	})
});



$(document).on("change", "#Business_types_select", function(event){
var business_cat=$(this).val();
	 $.ajax({
		url:"ajaxRequest.php", 
		type: "POST", 
	   data: ({get_business_sub: "success",business_cat:business_cat}),
		success:function(result){
			if(result!=0){
			$("#Business_sub").html(result);
			$("#business_sub_type").show();
			}else{
				$("#business_sub_type").hide();
				$("#enter_business_sub").show();
			}
		}
	}) 
});


$(document).on("click", "#voilation_add", function(event){
		var rowCount = $('#Violation_Table tbody tr').length;
		/* if(rowCount==1){
			if("#select_Accident_").val()==''){
				
			}else{
				
			}
		}else{ */
         var tds = '<tr>';
             tds += "<td class='td-padding'><select id='select_Accident_"+rowCount+"'><option selected='selected' value=''></option>";
			 tds += '<option value="AAF">AAF - At Fault Accident</option>';
			 tds += '		<option value="BOT">BOT - Open Bottle/Container</option>';
			 tds += '		<option value="CRD">CRD - Careless/Improper Op of Vehicle</option>';
			 tds += '		<option value="DEQ">DEQ - Defective Equipment</option>';
			 tds += '		<option value="DEV">DEV - Disregard Traffic Device/Sign</option>';
			 tds += '		<option value="DR">DR  - Drag Racing</option>';
			 tds += '		<option value="DWI">DWI - Driving Under the Influence</option>';
			 tds += '		<option value="EQP">EQP - Equipment Violations</option>';
			 tds += '		<option value="FAR">FAR - False Report to Official/Perjury</option>';
			 tds += '		<option value="FEL">FEL - Auto Theft / Felony</option>';
			 tds += '		<option value="FLE">FLE - Flee/Elude Police</option>';
			 tds += '		<option value="FRA">FRA - Failure to Report Accident</option>';
			 tds += '		<option value="FTC">FTC - Following Too Close</option>';
			 tds += '		<option value="FTY">FTY - Failure to Yield</option>';
			 tds += '		<option value="HOM">HOM - Homicide/Assault w/ Vehicle</option>';
			 tds += '		<option value="IBK">IBK - Improper Backing</option>';
			 tds += '		<option value="IP">IP  - Improper Passing</option>';
			 tds += '		<option value="IT">IT  - Improper Turn/U-Turn</option>';
			 tds += '		<option value="LIC">LIC - License/Credentials Violation</option>';
			 tds += '		<option value="LTS">LTS - Leaving the Scene</option>';
			 tds += '		<option value="MMV">MMV - Other Minor Moving Violations</option>';
			 tds += '		<option value="NAF">NAF - Not At Fault Accident</option>';
			 tds += '		<option value="REF">REF - Refusal to Test</option>';
			 tds += '		<option value="RKD">RKD - Reckless Driving</option>';
			 tds += '		<option value="SAF">SAF - Safety Violation</option>';
			 tds += '		<option value="SCH">SCH - Passing School Bus</option>';
			 tds += '		<option value="SPD">SPD - Speeding</option>';
			 tds += '		<option value="SUS">SUS - Driving w/ Susp/Rev/Canc License</option>';
			 tds += '		<option value="WOC">WOC - Operate w/o Owners Consent</option>';
			 tds += '		<option value="WSR">WSR - Wrong Side of Road</option>';
			 tds += '	 </select>';
			 tds += '	</td>';
			 tds += "<td class='text-center td-padding'> <input type='text'  placeholder='' class='datepicker' id='Accident_date_"+rowCount+"'>"				
				 tds += "	</td>";
				 tds += "  <td class='td-padding'><button class='delete_voilation btn' data-id="+rowCount+"'>Delete</button></td>'";
        
         tds += '</tr>';
         if ($('tbody', "#Violation_Table").length > 0) {
             $('tbody', "#Violation_Table").append(tds);
         } else {
             $("#Violation_Table").append(tds);
         }
		 $("#Violation_Table .datepicker").datepicker({
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
            dateFormat: 'yy-mm-dd',
		});
    
});

$('#Violation_Table').on('click', '.delete_voilation', function(){
    $(this).closest ('tr').remove ();
});



$(document).on("click", ".edit_drivers", function(event){
var id = $(this).attr("data-id") ;
var name = $(this).closest("tr").find('td:eq(2)').text();
var dob = $(this).closest("tr").find('td:eq(4)').text();
var marital = $(this).closest("tr").find('td:eq(5)').text();
var licence = $(this).closest("tr").find('td:eq(6)').text();
var licence_state = $(this).closest("tr").find('td:eq(7)').text();
var exp = $(this).closest("tr").find('td:eq(8)').text();
var hiredate = $(this).closest("tr").find('td:eq(9)').text();
var backup_driver = $(this).closest("tr").find('td:eq(10)').text();
var owner = $(this).closest("tr").find('td:eq(11)').text();
var sr22 = $(this).closest("tr").find('td:eq(12)').text();
var points = $(this).closest("tr").find('td:eq(13)').text();
 var n=name.split(' ');
	$("#edit_driver_first").val(n[0]);
	$("#edit_driver_middle").val(n[1]);
	$("#edit_driver_last").val(n[2]);
	$("#edit_driver_dob").val(dob);
	$("#edit_driver_licence").val(licence);
	$('#edit_driver_license_state [value=="AK"]').attr("selected", "selected");;
	$("#edit_driver_commercial").val(n[2]).attr('selected', true);
	$("."+marital).attr('checked', true);
	$(".SR22_"+sr22).attr('checked', true);
	$("#edit_driver_Exp").val(exp);
	$("#edit_driver_hire_date").val(hiredate);
	$("#edit_driver_points").val(points);
	$("#edit_driver_Backup").val(backup_driver).prop('selected', true);
	$("#edit_driver_Owner").val(owner).prop('selected', true);
	$("#id_driver_to_update").val(id);
	
	 
});


$(document).on("click", "#update_driver_button", function(event){  /// update driver
	
	var d=0;
	if($("#edit_driver_first").val()==''){
		 d=0;
			event.preventDefault();
			$("#edit_driver_first").editClass('is-invalid');
	}else{
		 d=1;
		 $("#edit_driver_first").removeClass('is-invalid');
	}
	if($("#edit_driver_last").val()==''){
		 d=0;
			event.preventDefault();
			$("#edit_driver_last").editClass('is-invalid');
	}else{
		d=1;
		$("#edit_driver_last").removeClass('is-invalid');
	}
	if($("#edit_driver_dob").val()==''){
		d=0;
			event.preventDefault();
			$("#edit_driver_dob").editClass('is-invalid');
	}else{
		d=1;
		 $("#edit_driver_dob").removeClass('is-invalid');
	}
	
	if($("#edit_driver_licence").val()==''){
		d=0;
			event.preventDefault();
			$("#edit_driver_licence").editClass('is-invalid');
	}else{
		d=1;
		 $("#edit_driver_licence").removeClass('is-invalid');
	}
	if($("#edit_driver_Exp").val()==''){
		d=0;
			event.preventDefault();
			$("#edit_driver_Exp").editClass('is-invalid');
	}else{
		d=1;
		 $("#edit_driver_Exp").removeClass('is-invalid');
	}
	if($("#edit_driver_hire_date").val()==''){
		d=0;
			event.preventDefault();
			$("#edit_driver_hire_date").editClass('is-invalid');
	}else{
		d=1;
		 $("#edit_driver_hire_date").removeClass('is-invalid');
	}
	
	
	
	if(d==1){
		var dataform=$('#Edit_Driver_form').serialize();
		var contactId=$(".contactId").val();
		$.ajax({
            url:"ajaxRequest.php", 
            type: "POST", 
           dataType: 'json',
           data: ({update_driver: "success",contactId:contactId,dataform:dataform}),
            success:function(result){
				if(result!==0){
					driversdata=result.Drivers1;
					if ( $.fn.DataTable.isDataTable('#dtDriverTable') ) {
					  $('#dtDriverTable').DataTable().destroy();
					}
					$('#dtDriverTable tbody').empty();
					var drivertable=$('#dtDriverTable').DataTable({ "scrollX": true});
					if(driversdata!=''){
					$.each(driversdata, function(index, element) {
						var a=element.DOB_Age_MaritalStatus_Points_LicenceNo;
					var d=a.split(',');
					var dob=d[0];
					var age=d[1];
					var merital=d[2];
					var points=d[3];
					var licence=d[4];
						
						
						drivertable.row.add(
							[
							index,
							"<button class='edit_drivers btn' data-id='"+element.id+"' type='button' data-toggle='modal' data-target='#Driver_Edit_modal'>Edit</button>",
							element.Name1,
							age,
							dob,
							merital,
							licence,
							element.License_State,
							element.Experience_Years,
							element.Hire_Date,
							element.License_State,
							element.Back_up_Driver,
							element.Owner_Driver,
							element.SR22,
							points,
							'<button class="delete_driver btn" data-id="'+element.id+'" type="button">Delete</button>'
							]
						).draw();

					});	
					}
					}
				$('#Driver_Edit_modal').modal('toggle');			 
				}
           
         });
	}

	
});





$(document).on("click", ".Insured_Designate_Spouse", function(event){
	var id = $(this).val();
	if(id=='Yes'){
		$("#Spouse_Information_div").show();
	}else{
		$("#Spouse_Information_div").hide();
	}

});

$(document).on("click", ".new_driver_SR22", function(event){
	var id = $(this).val();
	if(id=='Yes'){
		$("#driver_case_no").show();
	}else{
		$("#driver_case_no").hide();
	}

});


$(document).on("click", "#vehicles_add_button", function(event){
	
	var d=0;
	if($("#C2VehicleDetails_category").val()==''){
		 d=0;
			event.preventDefault();
			$("#C2VehicleDetails_category").addClass('is-invalid');
	}else{
		 d=1;
		 $("#C2VehicleDetails_category").removeClass('is-invalid');
	}
	if($("#C2VehicleDetails_year").val()==''){
		 d=0;
			event.preventDefault();
			$("#C2VehicleDetails_year").addClass('is-invalid');
	}else{
		d=1;
		$("#C2VehicleDetails_year").removeClass('is-invalid');
	}
	if($("#vehicle_Gross_weight").val()==''){
		d=0;
			event.preventDefault();
			$("#vehicle_Gross_weight").addClass('is-invalid');
	}else{
		d=1;
		 $("#vehicle_Gross_weight").removeClass('is-invalid');
	}
	
	if($("#vehicle_Longest_tip").val()==''){
		d=0;
			event.preventDefault();
			$("#vehicle_Longest_tip").addClass('is-invalid');
	}else{
		d=1;
		 $("#vehicle_Longest_tip").removeClass('is-invalid');
	}
	if($("#vehicle_Destination_City").val()==''){
		d=0;
			event.preventDefault();
			$("#vehicle_Destination_City").addClass('is-invalid');
	}else{
		d=1;
		 $("#vehicle_Destination_City").removeClass('is-invalid');
	}
	if($("#vehicle_VIN").val()==''){
		d=0;
			event.preventDefault();
			$("#vehicle_VIN").addClass('is-invalid');
	}else{
		d=1;
		 $("#vehicle_VIN").removeClass('is-invalid');
	}
	if($("#C2VehicleDetails_make").val()=='' || $("#C2VehicleDetails_make_name").val()==''){
		d=0;
			event.preventDefault();
			$("#C2VehicleDetails_make").addClass('is-invalid');
			$("#C2VehicleDetails_make_name").addClass('is-invalid');
	}else{
		d=1;
		 $("#C2VehicleDetails_make").removeClass('is-invalid');
		 $("#C2VehicleDetails_make_name").removeClass('is-invalid');
	}
	if($("#C2VehicleDetails_model").val()=='' || $("#C2VehicleDetails_model_name").val()==''){
		d=0;
			event.preventDefault();
			$("#C2VehicleDetails_model").addClass('is-invalid');
			$("#C2VehicleDetails_model_name").addClass('is-invalid');
	}else{
		d=1;
		 $("#C2VehicleDetails_model").removeClass('is-invalid');
		 $("#C2VehicleDetails_model_name").removeClass('is-invalid');
	}

	if($("#C2VehicleDetails_Loss").val()==''){
		d=0;
			event.preventDefault();
			$("#C2VehicleDetails_Loss").addClass('is-invalid');
	}else{
		d=1;
		 $("#C2VehicleDetails_Loss").removeClass('is-invalid');
	}

	
	
	
	if(d==1){
		var dataform=	$('#Add_new_vehicle').serialize();
		var contactId=$(".contactId").val();
		$.ajax({
            url:"ajaxRequest.php", 
            type: "POST", 
           dataType: 'json',
           data: ({new_vehicle_add: "success",contactId:contactId,dataform:dataform}),
            success:function(result){
				console.log(result);
				if(result!==0){
					 $('#vehiles_add_modal').modal('toggle');
					var i=$('#dtVehiclesTable tr:last').find('td:first').html();
					var index= parseInt(i)+parseInt(1);
					var Vehiclestable=$('#dtVehiclesTable').DataTable();
						Vehiclestable.row.add(
							[
							index,
							"<button class='edit_vehicles btn' data-id='"+result.vehicleId+"' type='button' data-toggle='modal' data-target='#vehicle_Edit_modal'>Edit</button>",
							result.Year_Make_Model1,
							result.VIN,
							result.Category,
							result.Radius,
							result.Value,
							result.Loss_Payee,
							"<button class='delete_vehicle btn' data-id='"+result.vehicleId+"'>Delete</button>"
							]
						).draw();
					} 		 
				}
         });
	}

	
});








$(".datepicker").datepicker({
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
            dateFormat: 'yy-mm-dd',
	});





} );