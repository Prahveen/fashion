$('#post').click(function(){
	var status = $('#status').val();
	$.post("../controllers/status.php" , 

			{status : status},

			function(data){
				$('#error').css('display' , 'block').css('padding', '5px').html(data);
				$('#error').fadeOut(6000);
				$('#status').val('');
				$('#display_status').load("../controllers/display_status.php");
			}
	);
});
