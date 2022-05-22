$(document).on('click','#ok',function(e){
	var chercher=$("#chercher").val();
      $.ajax({    
        type: "POST",
        url: "data.php",             
        dataType: "html",
        data: {chercher:chercher},		
        success: function(data){                    
            $("#result").html(data); 
           
        }
    });
});
