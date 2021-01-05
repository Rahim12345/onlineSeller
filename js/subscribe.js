$(document).ready(function() {
    $("#subscribe_btn").click(function(event) {
        var userAgent 	=	navigator.userAgent;
        var email 		= 	$("#subscribe-email").val();
        $.ajax({
		   url:"subscribe.php",
		   method:"POST",
		   data:{userAgent:userAgent,email:email},
		   cache:false,
		   success:function(data)
		   {
		    	alert(data);
		   }
		  });
    });
});