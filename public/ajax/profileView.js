
$(document).ready(function(){
	 // $("#wait").css("display", "none");
		// $(document).ajaxStart(function(){
  //       		$("#wait").css("display", "block");
  //       		$(".well").css("display", "none");
  //  		});
  //   	$(document).ajaxComplete(function(){
  //      			 $("#wait").css("display", "none");
  //      			 $(".well").css("display", "block");
  //  		});

    	$('#message').click(function(){
			var message = $('#msg').val();
			var dashboard_user_id = $('#id').attr('value');
	
			$.post("../controllers/message.php",
				{ message:message,
		 		  dashboard_user_id : dashboard_user_id	
			} ,
			function(data){
			
			$('#error').css('display' , 'block').css('padding', '5px').html(data);
       		$('#error').fadeOut(6000);
			$('#msg').val('');
       		$("#display").load("../controllers/previewMsg.php?"+dashboard_user_id);

    	});
	});
});   		

