$(document).ready(function(){
	var a=0;
	while(a<5){
		//alert('fukc');
		a=a+1;
		$('#star').append('<i class="fa fa-star"></i>').css('color' , 'orange');	
	}	
	$('#edit_bord').hide();
	$('#des').css('cursor', 'pointer').hover(function(){
		$(this).css('color', 'blue');
	});
	$('#des').click(function(){
		$('#edit_bord').toggle();
	});
});