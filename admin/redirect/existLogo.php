<?php  
if(isset($_GET['page']) && htmlspecialchars(trim($_GET['page']))=='existLogo')
{
	$query4Logo=$conn->prepare("SELECT * FROM logo ORDER BY logoID DESC");
	$query4Logo->execute();
	$rows4Logo=$query4Logo->fetchall(PDO::FETCH_ASSOC);
	$count4Logo=count($rows4Logo);
	if($count4Logo!=0)
	{
	?>
<div class="card shadow mb-4" style="min-height: 450px;">
    <div class="card-body">
	   <table class="table table-dark" style="width: 100%;">
		  <thead style="background-color: #1c4b79;">
		    <tr>
		      <th scope="col">№</th>
		      <th scope="col">Şəkil</th>
		      <th scope="col">Sil</th>
		    </tr>
		  </thead>
		  <tbody style="background-color: #1c4b79;">
		  	<?php  
		  	$n=0;
		  	foreach($rows4Logo as $row4Logo)
		  	{
		  		$n++;
		  		?>
				<tr>
			      <th scope="row"><?php echo $n; ?></th>
			      <td style="width: 25%"><img style="width:100%" src="../../logo/<?php echo $row4Logo["logoUrl"]; ?>" alt=""></td>
			      <td><a href="index.php?page=removeLogo&id=<?php echo $row4Logo['logoID']; ?>"><i class="fa fa-trash" style="color: white;" aria-hidden="true"></i></a></td>
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
	else
	{
		?>
<div class="card shadow mb-4" style="min-height: 450px;">
    <div class="card-body">
	<p class="btn btn-danger" style="line-height: 300px;min-width: 80%;font-size: 3vw">Hələ də logo yükləməmisiniz!</p>
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