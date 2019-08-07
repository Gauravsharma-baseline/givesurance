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
	var contactId=$(".contactId").val();
	$("body").css("cursor", "progress");
	 $.ajax({
            url:"ajaxRequest.php", 
            type: "POST", 
           //dataType: 'json',
           data: ({drivers_data_next: "success",contactId:contactId}),
            success:function(result){
				$("body").css("cursor", "default");
				$(".underwritingLI ").removeClass("active");
				$(".violationsLI").addClass("active");
				$(".ninth").show(); 
				$(".tenth").hide();		 
				
           }
         });
});

$(".previous_Coverage_Limit_Information").click(function(){
	$(".CoverageLI").removeClass("active");
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

$(".previous_Commodities").click(function(){
	$(".CommoditiesLI").removeClass("active");
	$(".OperationDescription").addClass("active");
	$(".twelve").show(); 
	$(".Fourteen_s").hide();
		
});

$(".previous_CargoRelated").click(function(){
	$(".CargoRelatedLI").removeClass("active");
	$(".CommoditiesLI").addClass("active");
	$(".fifthteen").hide(); 
	$(".Fourteen_s").show();
		
});

$(".previous_CargoFinal").click(function(){
	$(".CargoFinal").removeClass("active");
	$(".CargoRelatedLI").addClass("active");
	$(".Sixteen").hide(); 
	$(".fifthteen").show();
		
});

$(".previous_PDFData").click(function(){
	$(".PDFData").removeClass("active");
	$(".CargoFinal").addClass("active");
	 $(".Seventeen").hide(); 
	$(".Sixteen").show(); 
		
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
	var contactId=$(".contactId").val();
	if(contactId==''){
		event.preventDefault();
		$(".phoneNumber").addClass('is-invalid');
	}else{
		$("body").css("cursor", "progress");
		var contactId=$(".contactId").val();
		 $.ajax({
            url:"ajaxRequest.php", 
            type: "POST", 
           //dataType: 'json',
           data: ({drivers_data_next: "success",contactId:contactId}),
            success:function(result){
				$("body").css("cursor", "default");
					$(".driversLI").removeClass("active");
					$(".violationsLI").addClass("active");
					$(".eigth").hide();
					$(".ninth").show(); 
					 $('#Violation_Table tbody').html(result); 
					$("#progressbar li").removeClass("active");
					$(".violationsLI").addClass("active");
					$("fieldset").hide();
					$(".ninth").show(); 			 
				
           }
         });		
		
		
	
	}	
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
	$(".Fourteen_s").show(); 
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

$(".CommoditiesLI").click(function(){
	var phone=$(".phoneNumber").val();
	if(phone==''){
		event.preventDefault();
		$(".phoneNumber").addClass('is-invalid');
	}else{
	$(".phoneNumber").removeClass('is-invalid');
	$("#progressbar li").removeClass("active");
	$(".CommoditiesLI").addClass("active");
	$("fieldset").hide();
	$(".fourteen_s").show(); 
	}	
});



$(".CargoRelatedLI").click(function(){
	var phone=$(".phoneNumber").val();
	if(phone==''){
		event.preventDefault();
		$(".phoneNumber").addClass('is-invalid');
	}else{
	$(".phoneNumber").removeClass('is-invalid');
	$("#progressbar li").removeClass("active");
	$(".CargoRelatedLI").addClass("active");
	$("fieldset").hide();
	$(".fifthteen").show(); 
	}	
});
$(".CargoFinal").click(function(){
	var phone=$(".phoneNumber").val();
	if(phone==''){
		event.preventDefault();
		$(".phoneNumber").addClass('is-invalid');
	}else{
	$(".phoneNumber").removeClass('is-invalid');
	$("#progressbar li").removeClass("active");
	$(".CargoFinal").addClass("active");
	$("fieldset").hide();
	$(".Sixteen").show(); 
	}	
});

$(".PDFData").click(function(){
	var phone=$(".phoneNumber").val();
	if(phone==''){
		event.preventDefault();
		$(".phoneNumber").addClass('is-invalid');
	}else{
	$(".phoneNumber").removeClass('is-invalid');
	$("#progressbar li").removeClass("active");
	$(".PDFData").addClass("active");
	$("fieldset").hide();
	$(".Seventeen").show(); 
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
				console.log(result.MC);
				$("#mc_number").val(result.MC);
				$(".dot").val(result.Dot);
					$(".phoneli").removeClass("active");
					$(".dotLi").addClass("active");
					$(".second").show(); 
					$(".first").hide();
				var conatctData=result.conatctData;
				console.log(conatctData);
				
				
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
					//var a = element.DOB_Age_MaritalStatus_Points_LicenceNo;
					if(element.DOB_Age_MaritalStatus_Points_LicenceNo){
					var d = element.DOB_Age_MaritalStatus_Points_LicenceNo.split(',');
					var dob = d[0];
					var age = d[1];
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
							element.Back_up_Driver,
							element.Owner_Driver,
							element.SR22,
							points
							]
						).draw();
						};	

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
							element.Loss_Payee
							
							]
						).draw();

					});	
					}
					/*FMCSA*/
					/* $('#Form_one').val(result.conatctData.Form);
					$('#Type_one').val(result.conatctData.Type);
					$('#Posted_Date').val(result.conatctData.Posted_Date);
					$('#policy_one').val(result.conatctData.policy);
					$('#Coverage_id').val(result.conatctData.Coverage_From);
					$('#Effective_id').val(result.conatctData.Effective_Date);
					$('#To_id').val(result.conatctData.To);
					$('#Cancellation_id').val(result.conatctData.Cancellation_Date);
					$('#Insurence_id').val(result.conatctData.Insurance_Carrier); */
					/*COMMODITIES*/
					$('#Household_id_two').val(result.conatctData.Household_Goods);
					$('#Household_id_second').val(result.conatctData.Metal_sheets_coils_rolls);
					$('#Motor_id_second').val(result.conatctData.Motor_Vehicles);
					$('#Drive_id_second').val(result.conatctData.Drivo_Tow_away);
					$('#Logs_id_second').val(result.conatctData.Logs_Poles_Beams_Lumber);
					$('#Building_id_second').val(result.conatctData.Building_Materials);
					$('#Mobile_id_second').val(result.conatctData.Mobile_Homes);
					$('#Machinery_id_second').val(result.conatctData.Machinery_Large_Objects);
					$('#Fresh_id_second').val(result.conatctData.Single_Line_48);
					$('#US_id_second').val(result.conatctData.US_Mail);
					$('#Oilfield_id_second').val(result.conatctData.Oilfield_Equipment);
					$('#Meats_id_second').val(result.conatctData.Single_Line_50);
					$('#Dry_id_second').val(result.conatctData.Single_Line_49);
					$('#Intermodal_id_second').val(result.conatctData.Single_Line_47);
					$('#Refrigerated_id_second').val(result.conatctData.Single_Line_46);
					$('#Paper_id_second').val(result.conatctData.Single_Line_35);
					$('#Plastic_id_second').val(result.conatctData.Single_Line_45);
					$('#Beverages_id_second').val(result.conatctData.Single_Line_44);
					$('#Livestock_id_second').val(result.conatctData.Single_Line_43);
					$('#Grain_id_second').val(result.conatctData.Single_Line_42);
					$('#Liquids_id_second').val(result.conatctData.Single_Line_41);
					$('#Chemicals_id_second').val(result.conatctData.Single_Line_36);
					$('#Garbage_id_second').val(result.conatctData.Single_Line_37);
					$('#Passengers_id_second').val(result.conatctData.Single_Line_39);
					$('#Electronics_id_second').val(result.conatctData.Single_Line_38);
					$('#Agricultural_id_second').val(result.conatctData.Single_Line_40);
					$('#Sand_id_second').val(result.conatctData.Sand_Gravel);
					$('#Department_id_second').val(result.conatctData.Department_Store_Merchandise);
					$('#Auto_id_second').val(result.conatctData.Auto_Parts_Tires);
					$('#Other_commodities').val(result.conatctData.Others);
					
						/*operation Qualification*/
						
					$('#percentage_two_one').val(result.conatctData.Radious_0_50_miles);
					$('#percentage_two_id').val(result.conatctData.Radious_50_200_miles);
					$('#percentage_three_id').val(result.conatctData.Radious_200_miles);
					$('#Estimates_one_id').val(result.conatctData.EstimateAverage_Radius);
					$('#Estimates_two_id').val(result.conatctData.Estimate_Longest_Radius);
					$('#Estimates_three_id').val(result.conatctData.Estimate_Furthest_City);
					$('#outgoing_percent').val(result.conatctData.Percent_Outgoing);
					$('#incoming_percent').val(result.conatctData.Percent_Incoming);
					if(result.conatctData.Contract_Percentage!=''){
						$('#Business_first_id').val(result.conatctData.Contract_Percentage);
						$('#chk_one').attr('checked','checked');
					}
					if(result.conatctData.Private_Percentage!=''){
						$('#Business_Private_id').val(result.conatctData.Private_Percentage);
						$('#chk_thr').attr('checked','checked');
					}
					if(result.conatctData.Non_Trucking!=''){
							$('#Non_Trucking_id').val(result.conatctData.Non_Trucking);	
						$('#Non_Trucking_Business_check').attr('checked','checked');
					}
					
					if(result.conatctData.Other_Percentage!=''){
							$('#Business_Other_id').val(result.conatctData.Other_Percentage);	
						$('#Business_Other_check').attr('checked','checked');
					}
					if(result.conatctData.Brokered_Loards_Percentage!=''){
							$('#Brokered_Loads_id').val(result.conatctData.Brokered_Loards_Percentage);	
						$('#Brokered_Loads_check').attr('checked','checked');
					}
					
					
					if(result.conatctData.Household_or_Commercial_Mover!='' && result.conatctData.Household_or_Commercial_Mover=='Yes'){
							$('.Operations_radio_Mover').attr('checked','checked');
							
					}	
				/*COVERAGE LIMIT INFORMATION*/
					
					if(result.conatctData.AL_Deductible!=''){
						if(result.conatctData.AL_Deductible=='$500' || result.conatctData.AL_Deductible=='$1,000'){
							$("input[name='AL_Deductible'][value='"+result.conatctData.AL_Deductible+"']").attr('checked','checked');
						$('#AL_Deductible_text').val(result.conatctData.AL_Deductible);	
							
						
						}else{
							$('#AL_Deductible_text').val(result.conatctData.AL_Deductible);	
							$('#AL_Deductible_text').show();
							$("input[name='AL_Deductible'][value='Other']").attr('checked','checked');							
						
					}}
					
					
					
					if(result.conatctData.UM_UIM1!=''){
						if(result.conatctData.UM_UIM1 =='Rejected' || result.conatctData.UM_UIM1 =='Minimum State Limit Accepted'){
							$("input[name='UM_UIM'][value='"+result.conatctData.UM_UIM1+"']").attr('checked','checked');
							$('#UM_UIM_value').val(result.conatctData.UM_UIM1);	
							
							
						}else{
							$("input[name='UM_UIM'][value='Higher Limit']").attr('checked','checked');
							$('#UM_UIM_value').val(result.conatctData.UM_UIM1);	
							$('#UM_UIM_value').show();	
							
						}
							
					}
					
					if(result.conatctData.UM_PD!=''){
						if(result.conatctData.UM_PD =='Rejected' || result.conatctData.UM_PD =='Minimum State Limit Accepted'){
							$("input[name='UM_Pd'][value='"+result.conatctData.UM_PD+"']").attr('checked','checked');
							$('#UM_Pd_value').val(result.conatctData.UM_PD);	
							
						}else{
							$("input[name='UM_Pd'][value='Higher Limit']").attr('checked','checked');
							$('#UM_Pd_value').val(result.conatctData.UM_PD);	
							$('#UM_Pd_value').show();	
							
						}
							
					}
					
					
					
					
					if(result.conatctData.Medical_Payment!=''){
					$("input[name='Medical_Payments'][value='"+result.conatctData.Medical_Payment+"']").attr('checked','checked');
					
					}
					if(result.conatctData.PIP!=''){
					$("input[name='PIP'][value='"+result.conatctData.PIP+"']").attr('checked','checked');
					
					}
					
					
					$('.Motor_Truck_Cargo').val(result.conatctData.Per_vehicle);	
					$('.Aggregate').val(result.conatctData.Aggregate);
					if(result.conatctData.Rejected!='' &&result.conatctData.Rejected=='Rejected' ){
							$('.Motor_Truck_Rejected').val(result.conatctData.Brokered_Loards_Percentage);	
						$('.Motor_Truck_Rejected').attr('checked','checked');
					}		
						
					/*COVERAGE LIMIT INFORMATION*/
					if(result.conatctData.Proof_of_Prior_Insurance!=''){
					$("input[name='currently_insured'][value='"+result.conatctData.Proof_of_Prior_Insurance+"']").attr('checked','checked');
					}
					if(result.conatctData.Does_the_insured_have_General_Liability_Insurance!=''){
					$(".Proof_Insurance").val(result.conatctData.Does_the_insured_have_General_Liability_Insurance);
					}
					if(result.conatctData.Year_current_business_was_established!=''){
					$('.Year_current_business_VAL').val(result.conatctData.Year_current_business_was_established);	
					}
					if(result.conatctData.Number_of_Additional_Insureds!=''){
					$(".Additional_Insureds").val(result.conatctData.Number_of_Additional_Insureds);
					}
					if(result.conatctData.Number_of_Waivers_of_Subrogation!=''){
					$(".Waivers_Subrogation").val(result.conatctData.Number_of_Waivers_of_Subrogation);
					}
					if(result.conatctData.Is_the_customer_required_to_maintain_hours!=''){
					$("input[name='customer_required_to_maintain_hours'][value='"+result.conatctData.Is_the_customer_required_to_maintain_hours+"']").attr('checked','checked');
					}
					if(result.conatctData.Are_any_state_or_federal_filings_required!=''){
					$("input[name='federal_filings_required'][value='"+result.conatctData.Are_any_state_or_federal_filings_required+"']").attr('checked','checked');
					}
					if(result.conatctData.Do_we_insure_all_commercial_vehicles_the_insured!=''){
					$("input[name='commercial_vehicles'][value='"+result.conatctData.Do_we_insure_all_commercial_vehicles_the_insured+"']").attr('checked','checked');
					}
					if(result.conatctData.Do_we_insure_all_vehicles_that_the_insured_uses!=''){
					$("input[name='insured_uses_business'][value='"+result.conatctData.Do_we_insure_all_vehicles_that_the_insured_uses+"']").attr('checked','checked');
					}
					
					$('#MVRs_reviewed').val(result.conatctData.How_often_are_MVRs_reviewed);
					if(result.conatctData.Are_all_vehicles_listed_owned_registered_to_appl!=''){
					$("input[name='vehicles_listed_owned'][value='"+result.conatctData.Are_all_vehicles_listed_owned_registered_to_appl+"']").attr('checked','checked');
					}
					if(result.conatctData.Any_vehicles_titled_to_an_individual_instead_of_bs!=''){
					$("input[name='individual_instead_of_business'][value='"+result.conatctData.Any_vehicles_titled_to_an_individual_instead_of_bs+"']").attr('checked','checked');
					}
					if(result.conatctData.Any_vehicles_titled_to_an_individual_instead_of_bs!='' && result.conatctData.Any_vehicles_titled_to_an_individual_instead_of_bs=='Yes'){
					$("#explanations").val(result.conatctData.Details);
					$("#explanations_div").show();
					}
					if(result.conatctData.Federal!=''){
					$("input[name='Federal'][value='"+result.conatctData.Federal+"']").attr('checked','checked');
					}
					if(result.conatctData.Federal_Cargo_BMC_34!=''){
					$("input[name='Federal_Cargo'][value='"+result.conatctData.Federal_Cargo_BMC_34+"']").attr('checked','checked');
					}
					if(result.conatctData.State_FT!=''){
					$("#fil_State").val(result.conatctData.State_FT);
					}
					if(result.conatctData.State_Cargo_Form_H!=''){
					$("#fil_formh_cnt").val(result.conatctData.State_Cargo_Form_H);
					}
					
					if(result.conatctData.MCS90!=''){
					$("input[name='MCS90_val'][value='"+result.conatctData.MCS90+"']").attr('checked','checked');
					}
					
					$('#CA_Authority_Number').val(result.conatctData.CA_Authority_Number);
					
					if(result.conatctData.Others!=''){
					$("#fil_othr_cnt").val(result.conatctData.Others);
					}
					
					/*Policy POLICY*/
					if(result.conatctData.Agent_Code!=''){
					$("input[name='agent_code'][value='"+result.conatctData.Agent_Code+"']").attr('selected','selected');
					}
					
					
					
					$('#Policy_Effective').val(result.conatctData.Policy_Effective_Date);
					
					$('.Specify_Commodities_Hauled').val(result.conatctData.Specify_Commodities_Hauled);
					
					if(result.conatctData.Is_the_customer_currently_insured_with_Progressive!=''){
					$("input[name='customer_Progressive_Commercial'][value='"+result.conatctData.Is_the_customer_currently_insured_with_Progressive+"']").attr('checked','checked');
					}
					
					if(result.conatctData.Are_any_listed_vehicles_used_to_haul_steel!=''){
					$("input[name='is_vehicles_haul_steel'][value='"+result.conatctData.Are_any_listed_vehicles_used_to_haul_steel+"']").attr('checked','checked');
					}
					if(result.conatctData.listed_vehicles_or_the_load_require_a_placard!=''){
					$("input[name='is_vehicles_placard'][value='"+result.conatctData.listed_vehicles_or_the_load_require_a_placard+"']").attr('checked','checked');
					}
					if(result.conatctData.Structure!=''){
					$("input[name='Business_Organization_Structure'][value='"+result.conatctData.Structure+"']").attr('checked','checked');
					}
					if(result.conatctData.Do_you_have_a_DBA!=''){
					$("input[name='have_DBA'][value='"+result.conatctData.Do_you_have_a_DBA+"']").attr('checked','checked');
					$("#DBA_NAME_DIV").hide();
					}
					
					$("#USDOT_Assigned_to").val(result.conatctData.USDOT_Assigned_to);
					
					if(result.conatctData.Does_the_information_assigned_to_this_USDOT_match!=''){
					$("input[name='is_match_USDOT'][value='"+result.conatctData.Does_the_information_assigned_to_this_USDOT_match+"']").attr('checked','checked');
					}
					$("#Yrs_in_business").val(result.conatctData.Yrs_in_business);
					$("#Yrs_in_Trucking_Industry").val(result.conatctData.Yrs_in_Trucking_Industry);
					$("#previous_industry_employment").val(result.conatctData.If_New_Venture_Please_list_previous_industry_emplo);
					
					if(result.conatctData.Payment_Options!=''){
						if(result.conatctData.Payment_Options =='Payment in Full' || result.conatctData.Payment_Options=='Financed with GBC'){
						$("input[name='Payments_Options'][value='"+result.conatctData.Payment_Options+"']").attr('checked','checked');
						$("#payment_option_value").val(result.conatctData.Payment_Options);
						}else{
						$("input[name='Payments_Options'][value='Financed with']").attr('checked','checked');	
						$("#payment_option_value").val(result.conatctData.Payment_Options);
						$("#Financed_with").show();
						}
					}
					$("#Insured_first_name").val(result.conatctData.First_Name1);
					$("#Insured_Middle_name").val(result.conatctData.Middle_Initial);
					$("#Insured_Last_name").val(result.conatctData.Last_Name1);
						$("#Insured_DOB").val(result.conatctData.DOB);
					if(result.conatctData.Suffix!=''){
					$('#Insured_Suffix').val(result.conatctData.Suffix);
					}
					
					$("#Financial_First_name").val(result.conatctData.First_Name_Two);
					$("#Financial_Last_name").val(result.conatctData.Last_Name_Two);
					$("#Financial_dob").val(result.conatctData.Date_Two);
					$("#Financial_Home_address").val(result.conatctData.Home_Address);
					$("#Financial_City").val(result.conatctData.City);
					$("#Financial_zipcode").val(result.conatctData.ZIP_Code);
					$("#Financial_social_security_number").val(result.conatctData.Social_Security_Number);
					//console.log(conatctData.Suffix_Two);
					//console.log(conatctData.State);
					if(result.conatctData.Suffix_Two !=''){
						$('#Financial_Suffix').val(result.conatctData.Suffix_Two);
					}
					
					if(result.conatctData.State!=''){
					$('#Financial_State').val(result.conatctData.State);
					}
					
					$("#Contact_Insured_phone").val(result.conatctData.Insured_s_Phone);
					$("#Contact_Insured_email").val(result.conatctData.E_mail_Address);
					$("#Contact_Insured_Mailing").val(result.conatctData.Mailing_Address);
					$("#Contact_Insured_City").val(result.conatctData.City_Two);
					$("#Contact_Insured_ZIP_code").val(result.conatctData.ZIP_Code_Two);
					
					if(result.conatctData.State_Two!=''){
						$('#Contact_Insured_State').val(result.conatctData.State_Two);
					
					}
					if(result.conatctData.Involved_in_the_daily_operation_of_the_business!=''){
					$("input[name='is_Involved_daily_operation'][value='"+result.conatctData.Involved_in_the_daily_operation_of_the_business+"']").attr('checked','checked');
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
	var mc_number=$("#mc_number").val();
	var contactId=$(".contactId").val();
	if(searchedNumber==''){
		event.preventDefault();
		$("#mc_number").addClass('is-invalid');
	}else{
	$("#mc_number").removeClass('is-invalid');
	$("body").css("cursor", "progress");
	if(mc_number==''){
		 $.ajax({
            url:"ajaxRequest.php", 
            type: "POST", 
           dataType: 'json',
           data: ({getSaferData: "success", searchedNumber: searchedNumber,checkType:checkType,contactId:contactId}),
            success:function(result){
				
				$("body").css("cursor", "default");
              if(result==0){
				event.preventDefault();
				$("#mc_number").addClass('is-invalid'); 
				}else{
					$("#mc_number").val(result.mc_mx_ff_nmumber);
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
	
		}else{
		$.ajax({
            url:"ajaxRequest.php", 
            type: "POST", 
          // dataType: 'json',
           data: ({getMcData: "success", mc: mc_number,contactId:contactId}),
            success:function(result){
				$("body").css("cursor", "default");
					$(".dotLi").removeClass("active");
					$(".MCLi").addClass("active");
					$(".second").hide();
					$(".first_2").show(); 
					
				}
		 });
		}
		
	}
});
$(".first_2_next").click(function(event ){
	//var checkType=$(".checkType").val();
	//var check_id_dot_already= $(".dot").val();
	var mc=$("#mc_number").val();
	var contactId=$(".contactId").val();
	$("body").css("cursor", "progress");
		 $.ajax({
            url:"ajaxRequest.php", 
            type: "POST", 
          // dataType: 'json',
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
           //dataType: 'json',
           data: ({drivers_data_next: "success",contactId:contactId}),
            success:function(result){
					$(".driversLI").removeClass("active");
					$(".violationsLI").addClass("active");
					$(".eigth").hide();
					$(".ninth").show(); 
					 $('#Violation_Table tbody').html(result); 
								 
				
           }
         });
});
$(".violations_data_next").click(function(event ){
	
	var mainarray=[];
	 $("#Violation_Table tbody").find("tr").each(function (index, element) {
		
		var voilationArray={};;
		 var select_Accident= $("#select_Accident_"+index).val();
		 var Accident_date=$("#Accident_date_"+index).val();
		 var Accident_id=$("#tr_id_"+index).attr('data-id');
		 console.log(Accident_id);
		voilationArray.Accident   =	select_Accident;
		voilationArray.Accident_date = Accident_date;
		voilationArray.Accident_id = Accident_id;
		mainarray.push(voilationArray); 
			 
    }); 
	
		var voilationsdata=JSON.stringify(mainarray);
		console.log(voilationsdata);

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
	var dataform=	$('.tenth').find('select, textarea, input').serialize();
		 $.ajax({
            url:"ajaxRequest.php", 
            type: "POST", 
           dataType: 'json',
           data: ({underwriting_data_next: "success",contactId:contactId,dataform:dataform}),
            success:function(result){
					$(".underwritingLI").removeClass("active");
					$(".CoverageLI").addClass("active");
					$(".tenth").hide();
					$(".eleventh").show();
								 
				
           }
         });
});
 
$(".Coverage_Limit_Information_next").click(function(event ){
	var contactId=$(".contactId").val();
	var dataform=	$('.eleventh').find('select, textarea, input').serialize();
		 $.ajax({
            url:"ajaxRequest.php", 
            type: "POST", 
           dataType: 'json',
           data: ({Coverage_Limit_Information: "success",contactId:contactId,dataform:dataform}),
            success:function(result){
				 $(".CoverageLI").removeClass("active");
					$(".OperationDescription").addClass("active");
					$(".eleventh").hide();
					$(".twelve").show(); 
								 
				
           }
         });
});
//*************************************************** next code *********************************************************//
$(".OperationDescription_next").click(function(event ){
	var contactId=$(".contactId").val();
	var dataform=	$('.twelve').find('select, textarea, input').serialize();
		 $.ajax({
            url:"ajaxRequest.php", 
            type: "POST", 
           dataType: 'json',
           data: ({OperationDescription: "success",contactId:contactId,dataform:dataform}),
            success:function(result){
				 $(".OperationDescription").removeClass("active");
					$(".CommoditiesLI").addClass("active");
					$(".twelve").hide();
					$(".Fourteen_s").show(); 
								 
				
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
					$(".CommoditiesLI").addClass("active");
					$(".thirteen").hide();
					$(".Fourteen_s").show(); 
								 
				
           }
         });
});




$(".Commodities_next").click(function(event ){
	var contactId=$(".contactId").val();
	var contactId=$(".contactId").val();
	var dataform=	$('.Fourteen_s').find('select, textarea, input').serialize();

		 $.ajax({
            url:"ajaxRequest.php", 
            type: "POST", 
           dataType: 'json',
           data: ({Commodities_next: "success",contactId:contactId,dataform:dataform}),
            success:function(result){
				 $(".CommoditiesLI").removeClass("active");
					$(".CargoRelatedLI").addClass("active");
					$("#alert_message_div").show();
					//$(".Fourteen_s").hide();
					//$(".fifthteen").show(); 
								 
				
           }
         });
});

$(".CargoRelated_next").click(function(event ){
	var contactId=$(".contactId").val();
	var contactId=$(".contactId").val();
	var dataform=	$('.fifthteen').find('select, textarea, input').serialize();

		 $.ajax({
            url:"ajaxRequest.php", 
            type: "POST", 
           dataType: 'json',
           data: ({CargoRelated_next: "success",contactId:contactId,dataform:dataform}),
            success:function(result){
				 $(".CargoRelatedLI").removeClass("active");
					$(".CargoFinal").addClass("active");
					$(".fifthteen").hide();
					$(".Sixteen").show(); 
								 
				
           }
         });
});

$(".PDFData_next").click(function(event ){
	var d=0;
	if($("#Form_one").val()==''){
		 d=0;
			event.preventDefault();
			$("#Form_one").addClass('is-invalid');
	}else{
		 d=1;
		 $("#Form_one").removeClass('is-invalid');
	}
	if($("#Type_one").val()==''){
		 d=0;
			event.preventDefault();
			$("#Type_one").addClass('is-invalid');
	}else{
		d=1;
		$("#Type_one").removeClass('is-invalid');
	}
	if($("#Posted_one").val()==''){
		d=0;
			event.preventDefault();
			$("#Posted_one").addClass('is-invalid');
	}else{
		d=1;
		 $("#Posted_one").removeClass('is-invalid');
	}
	
	if($("#policy_one").val()==''){
		d=0;
			event.preventDefault();
			$("#policy_one").addClass('is-invalid');
	}else{
		d=1;
		 $("#policy_one").removeClass('is-invalid');
	}
	if($("#Coverage_id").val()==''){
		d=0;
			event.preventDefault();
			$("#Coverage_id").addClass('is-invalid');
	}else{
		d=1;
		 $("#Coverage_id").removeClass('is-invalid');
	}
	if($("#To_id").val()==''){
		d=0;
			event.preventDefault();
			$("#To_id").addClass('is-invalid');
	}else{
		d=1;
		 $("#To_id").removeClass('is-invalid');
	}
	if($("#Cancellation_id").val()==''){
		d=0;
			event.preventDefault();
			$("#Cancellation_id").addClass('is-invalid');
	}else{
		d=1;
		 $("#Cancellation_id").removeClass('is-invalid');
	}
	
	if($("#Effective_id").val()==''){
		d=0;
			event.preventDefault();
			$("#Effective_id").addClass('is-invalid');
	}else{
		d=1;
		 $("#Effective_id").removeClass('is-invalid');
	}
	if($("#Insurence_id").val()==''){
		d=0;
			event.preventDefault();
			$("#Insurence_id").addClass('is-invalid');
	}else{
		d=1;
		 $("#Insurence_id").removeClass('is-invalid');
	}
	
	
	if(d==1){
	
	var contactId=$(".contactId").val();
	var dataform=	$('.Seventeen').find('select, textarea, input').serialize();

		 $.ajax({
            url:"ajaxRequest.php", 
            type: "POST", 
           dataType: 'json',
           data: ({PDFData_next: "success",contactId:contactId,dataform:dataform}),
            success:function(result){
				 //$(".CargoFinal").removeClass("active");
					//$(".PDFData").addClass("active");
					//$(".Sixteen").hide();
					//$(".Seventeen").show(); 
								 
				
           }
         });
	}
});


$(".CargoFinal_next").click(function(event ){
	var contactId=$(".contactId").val();
	var contactId=$(".contactId").val();
	var dataform=	$('.Seventeen').find('select, textarea, input').serialize();

		 $.ajax({
            url:"ajaxRequest.php", 
            type: "POST", 
           dataType: 'json',
           data: ({CargoFinal_next: "success",contactId:contactId,dataform:dataform}),
            success:function(result){
				 $(".CargoFinal").removeClass("active");
					$(".PDFData").addClass("active");
					$(".Sixteen").hide();
					$(".Seventeen").show(); 
								 
				
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
							points
						
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
var business_cat=$(this).find(':selected').attr('data-id');
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
	var id = $(this).attr("data-contact_id");
	var id2 = $(this).attr("data-id");
	var contactId=$(".contactId").val();
		 $.ajax({
            url:"ajaxRequest.php", 
            type: "POST", 
           dataType: 'json',
           data: ({delete_voilation_next: "success",contactId:contactId,violation_id:id}),
            success:function(result){
				if(result==1){
					$("#tr_id_"+id2).remove(); 
								 
				}
           }
         });
	
    
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

	
	
	$("#edit_driver_Owner").val(owner);
	$("#edit_driver_Backup").val(backup_driver);
	$("#edit_driver_license_state").val(licence_state);
	$("#edit_driver_commercial").val(exp);
	$("input[name='edit_driver_marital_status'][value='"+marital+"']").attr('checked','checked');
	$("input[name='edit_driver_SR22'][value='"+sr22+"']").attr('checked','checked');
	$("#edit_driver_Exp").val(exp);
	$("#edit_driver_hire_date").val(hiredate);
	$("#edit_driver_points").val(points);
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
					//var a = element.DOB_Age_MaritalStatus_Points_LicenceNo;
					if(element.DOB_Age_MaritalStatus_Points_LicenceNo){
					var d = element.DOB_Age_MaritalStatus_Points_LicenceNo.split(',');
					var dob = d[0];
					var age = d[1];
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
							element.Back_up_Driver,
							element.Owner_Driver,
							element.SR22,
							points
							]
						).draw();
						};	

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
							result.Loss_Payee
							
							]
						).draw();
					} 		 
				}
         });
	}

	
});



$(document).on("click", ".individual_instead_of_business", function(event){
	var id = $(this).val();
	if(id=='Yes'){
		$("#explanations_div").show();
	}else{
		$("#explanations_div").hide();
	}

});

$(document).on("click", ".have_DBA", function(event){
	var id = $(this).val();
	if(id=='Yes'){
		$("#DBA_NAME_DIV").show();
	}else{
		$("#DBA_NAME_DIV").hide();
	}

});
$(document).on("click", ".Payments_Options", function(event){
	var id = $(this).val();
	if(id=='Financed with'){
		$("#Financed_with").show();
		$("#payment_option_value").val(' ');
	}else{
		$("#Financed_with").hide();
		$("#payment_option_value").val(id);
	}
	

});
$(document).on("click", ".currently_insured", function(event){
	var id = $(this).val();
	if(id=='Yes'){
		$("#showinsured_data").show();
	}else{
		$("#showinsured_data").hide();
		
	}
	

});

$(document).on("change", ".AL_Deductible", function(event){
	var id = $(this).val();
	if(id=='Other'){
		$("#AL_Deductible_text").show();
		$("#AL_Deductible_text").val('');
	}else{
		$("#AL_Deductible_text").hide();
		$("#AL_Deductible_text").val(id);
	}
	

});
$(document).on("click", ".UM_UIM", function(event){
	var id = $(this).val();
	if(id=='Higher Limit'){
		$("#UM_UIM_value").val(' ');
		$("#UM_UIM_value").show();
		
	}else{
		$("#UM_UIM_value").hide();
		$("#UM_UIM_value").val(id);
	}
	

});
$(document).on("click", ".UM_Pd", function(event){
	var id = $(this).val();
	if(id=='Higher Limit'){
		$("#UM_Pd_value").val(' ');
		$("#UM_Pd_value").show();
		
	}else{
		$("#UM_Pd_value").hide();
		$("#UM_Pd_value").val(id);
	}
	

});


$(".datepicker").datepicker({
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
            dateFormat: 'mm/dd/yy',
	});





} );