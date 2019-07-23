$(function() {

//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

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
});   
$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".phone_number_next").click(function(event ){
	var phone=$(".phoneNumber").val();
	if(phone==''){
		event.preventDefault();
		$(".phoneNumber").addClass('is-invalid');
	}else{
	$(".phoneNumber").removeClass('is-invalid');
	 $(this).unbind( event );
		 $.ajax({
            url:"ajaxRequest.php", 
            type: "POST", 
            dataType: 'json',
           data: ({getZohoContact: "success", phone_number: phone}),
            success:function(result){
             if(result!=''){
				$(".contactId"). val(result);
				  if(animating) return false;
					animating = true;
					current_fs = $(this).parent();
					next_fs = $(this).parent().next();
						$(".phoneli").removeClass("active");
					$(".dot").addClass("active");
				
					$(".second").show(); 
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
							$(".first").hide();
							animating = false;
						}, 
						//this comes from the custom easing plugin
						easing: 'easeInOutBack'
					});
								 
			}else{
				event.preventDefault();
			$(".phoneNumber").addClass('is-invalid');
			}
           }
         });
	
	 
	}
});





$(".submit").click(function(){
	return false;
})

});