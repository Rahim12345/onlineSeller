$(document).ready(function() {
    $("a.admin").click(function(event) {
        $.ajax({
		   url:"toTypeAdmin.php",
		   method:"POST",
		   cache:false,
		   success:function(data)
		   {
		    	$('#succestionForm').html(data);
		   }
		  });
    });
});