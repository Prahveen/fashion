$(document).ready(function(){
      //cover button
      $("#cover_btn").click(function(){
       // alert('fuck');
        $("#check").html("<button type='submit' class='btn btn-labeled btn-default' name='cover'> <span class='btn-label'><i class='glyphicon glyphicon-upload'></i> </span>Upload</button>");
      });

      //profile button
      $("#pro_btn").click(function(){
        $("#check").html("<button type='submit' class='btn btn-labeled btn-default' name='profile'> <span class='btn-label'><i class='glyphicon glyphicon-upload'></i> </span>Upload</button>");
    });
});