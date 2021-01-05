$(document).ready(function() {
    $("a.showmore").click(function(event) {
        var ID 	=	$(this).attr("id");
        $.ajax({
		   url:"showmore.php",
		   method:"POST",
		   data:{ID:ID},
		   cache:false,
		   success:function(data)
		   {
		    	$('.modal-content').html(data);
		   }
		  });
    });
});