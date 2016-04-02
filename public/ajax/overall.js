$(document).ready(function(){
	
	$(".edit").click(function(){
    	$.post("../controllers/login.php",
    	{
    		name = var 
    	},
    	function(data){
        	alert(data);
   		 });
	});
});