$(document).ready(function(){

  var URL = window.location.search ;
  if (URL !== '?shop') {
    $("input").attr('disabled', false);
    $("textarea").attr('disabled', false);
  }
//load the upload image instance
   $(function(){
    $('#file').change(function(){
      var reader = new FileReader();
      reader.onload =function(e){
        $('#preview').attr("style" , "width:100%;min-height:300px;max-height:300px;");
        $('#preview').attr('src',e.target.result);
      }
      reader.readAsDataURL(this.files[0]);
    });
  });


 });
