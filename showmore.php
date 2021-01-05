<?php  
if(isset($_POST["ID"]))
{
	$id=htmlspecialchars(trim($_POST["ID"]));
	if(is_numeric($id) && ceil($id)-$id==0 && $id>0)
	{
		include 'include/config.php';
		$query4Products=$conn->prepare("SELECT * FROM products WHERE id=?");
		$query4Products->execute([$id]);
		$rows4Products=$query4Products->fetchall(PDO::FETCH_ASSOC);
		$count4Products=count($rows4Products);
		if($count4Products!=0)
		{
			?>
			<div class="modal-header">
	          <h5 class="modal-title" id="exampleModalLabel"><?php echo $rows4Products[0]['productName'] ?></h5>
	          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
	            <span aria-hidden="true">x</span>
	          </button>
	        </div>
	        <div class="modal-body">
	        	<table class="table table-stripped" style="color:black">
	        		<tr>
	        			<td>İstehsalçı</td>
	        			<td>:</td>
	        			<td><?php echo $rows4Products[0]['manufacturer'] ?></td>
	        		</tr>
	        		<tr>
	        			<td>Qiymət</td>
	        			<td>:</td>
	        			<td><?php echo $rows4Products[0]['Price'] ?> AZN</td>
	        		</tr>
	        		<tr>
	        			<td>Haqqında</td>
	        			<td>:</td>
	        			<td><?php echo $rows4Products[0]['about'] ?></td>
	        		</tr>
	        	</table>
	        </div>
	        <div class="modal-footer">
			<a class="btn" href="https://api.whatsapp.com/send?phone=+994555124668&text=localhost/ali/index.php?page=whatsapp%26id=<?php echo $id; ?>" target="_blank"><span class="btn btn-success" style="color:green;position:absolute;right:0;bottom:0;color:white"><i class="fa fa-whatsapp" aria-hidden="true"></i>-da soruş</span>
			</a>
	        </div>
			<?php
		}
	}
}
else
{
	header("location:./");
}
?>