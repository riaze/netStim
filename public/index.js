$(document).ready(function(){
    $("#save").click(function()
    {
      var update = $(this);
      var Id = $(this).attr("data-id");
      var url = '../model/methods.php?action=Update_Product_Details&id='+Id;
      $.ajax({
          
          type: "POST",
          data: $("#editform").serialize(), 
          url : url, 
          success:function(data){
            $('#msg').addClass( "alert alert-success" ).html("data updated successfully").fadeIn('slow');
            //$('#msg').html("data insert successfully").fadeIn('slow') //also show a success message 
            $('#msg').delay(5000).fadeOut('slow');
          }
      });   
    });
});