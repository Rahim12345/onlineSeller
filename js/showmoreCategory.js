$(document).ready(function() {
    $("a.link").click(function(event) {
        $.ajax({
		   url:"showmoreCategory.php",
		   method:"POST",
		   cache:false,
		   success:function(data)
		   {
		    	$('.modal-content').html(data);
		   }
		  });
    });
});