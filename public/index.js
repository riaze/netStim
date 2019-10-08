$(document).ready(function(){
    $("#save").click(function()
    {
      var update = $(this);
      var id = $(this).attr("data-id");
      $.ajax({
          
          type: "POST",
          data: $("#editform").serialize(), 
          url : '../model/update.php/{id}', 
          success:function(data){
              console.log(data);
          }
      });

        
        
    });
});