<div class="modal-header">
  <h4 class="modal-title" id="exampleModalLabel" style="background-color: white; opacity:0.9">Təklif edin saytımızda nəzərə alaq</h4><button class="btn btn-danger" type="button" data-dismiss="modal">x</button>
</div>
<div class="modal-body" style="background-color: white; opacity:0.9">
<form action="" method="POST" onsubmit="return false">
	<table class="table" style="color: black;">
		<tr>
			<td>Ad,Soyad,Ata</td>
			<td>
				<input type="text" name="name" id="name" maxlength="50" class="form-control">
			</td>
		</tr>
		<tr>
			<td>Telefon(və ya email)</td>
			<td>
				<input type="text" name="contact" id="contact" maxlength="100" class="form-control">
			</td>
		</tr>
		<tr>
			<td>Təklifinizi yazın</td>
			<td>
				<textarea name="succestion" id="succestion" maxlength="450" class="form-control" cols="30" rows="10"></textarea>
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<button class="btn btn-info" id="type2adminbtn" style="position: relative;float: right">
					Göndər
				</button>
			</td>
		</tr>
	</table>
</form>
</div>
<script type="text/javascript">
	$(document).ready(function() {
    $("#type2adminbtn").click(function(event) {
        var userAgent 	=	navigator.userAgent;
        var name 		= 	$("#name").val();
        var contact		= 	$("#contact").val();
        var succestion	= 	$("#succestion").val();
        $.ajax({
		   url:"succestion.php",
		   method:"POST",
		   data:{userAgent:userAgent,name:name,contact:contact,succestion:succestion},
		   cache:false,
		   success:function(data)
		   {
		    	alert(data);
		   }
		  });
    });
});
</script>