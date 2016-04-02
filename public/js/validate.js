function validateText(id , anotherdiv) {
	var div = $('#'+id).closest('div');

	if ($('#'+id).val()  === null || $('#'+id).val() === "") {
		
		div.removeClass("has-success");
		div.addClass("has-error");
		$('#'+anotherdiv).css("color","red");
		$('#'+anotherdiv).html('required this field');
		return false;
	
	}else {
		div.removeClass("has-error");
		div.addClass("has-success");
		$('#'+anotherdiv).html("");
		return true;
	}
}

$(document).ready(function() {
	$('#validate').click(function() {
		
		if (!validateText("firstname" , "fname")) {
			return false;
		}
		if (!validateText("secondname" , "sname")) {
			return false;
		}

		if (!validateText("username" , "uname")) {
			return false;
		}
		
		if (!validateText("email" , "e")) {
			return false;
		}
		if (!validateText("password" , "pw")) {
			return false;
		}
		if (!validateText("c_password" , "c_pw")) {
			return false;
		}
		if (!validateText("phone_no" , "phone")) {
			return false;
		}
		if (!validateText("month" , "db")) {
			return false;
		}
		if (!validateText("day" , "db")) {
			return false;
		}
		if (!validateText("year" , "db")) {
			return false;
		}
		if (!validateText("category" , "cat")) {
			return false;
		}
		if (!validateText("gender" , "gen")) {
			return false;
		}
		
		

	
		
	});
});