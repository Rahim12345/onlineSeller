<?php  
if(isset($_GET['page']) && htmlspecialchars(trim($_GET['page']))=='existCategory')
{
	$query4Category=$conn->prepare("SELECT * FROM category ORDER BY name");
	$query4Category->execute();
	$rows4Category=$query4Category->fetchall(PDO::FETCH_ASSOC);
	$count4Category=count($rows4Category);
	if($count4Category!=0)
	{
	?>
<div class="card shadow mb-4" style="min-height: 450px;">
    <div class="card-body">
	   <table class="table table-dark" style="width: 100%;">
		  <thead style="background-color: #1c4b79;">
		    <tr>
		      <th scope="col">№</th>
		      <th scope="col">Kateqoriya adı</th>
		      <th scope="col">Sil</th>
		    </tr>
		  </thead>
		  <tbody style="background-color: #1c4b79;">
		  	<?php  
		  	$n=0;
		  	foreach($rows4Category as $row4Category)
		  	{
		  		$n++;
		  		?>
				<tr>
			      <th scope="row"><?php echo $n; ?></th>
			      <td><?php echo $row4Category["name"]; ?></td>
			      <td><a href="index.php?page=removeCategory&id=<?php echo $row4Category['id']; ?>"><i class="fa fa-trash" style="color: white;" aria-hidden="true"></i></a></td>
			    </tr>
		  		<?php
		  	}
		  	?>
		  </tbody>
		</table>      
    </div>
</div>
	<?php
	}
}
else
{
	header("location:../");
}
?>