<?php  
if(isset($_GET['page']) && htmlspecialchars(trim($_GET['page']))=='queue')
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
    	<form action="index.php?page=updateCategory" method="POST">
	   		<table class="table table-dark" style="width: 100%;font-size: 1.5vw">
				<thead style="background-color: #1c4b79;">
				<tr>
				  <th scope="col">№</th>
				  <th scope="col">Kateqoriya adı</th>
				  <th scope="col">Sıra №</th>
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
				      <td>
						<input type="text" style="width: 100%;" name="CategoryName[]" value="<?php echo $row4Category['name']; ?>">
				      </td>
				      <td><input type="hidden" name="id[]" value="<?php echo $row4Category['id']; ?>"><input type="number" style="width: 100%;" min="1" max="99" name="ordinal[]" value="<?php echo $row4Category['sira']; ?>"></td>
				    </tr>
						<?php
					}
					?>
					<tr>
						<td></td>
						<td></td>
						<td><input type="submit" style="position: relative;float: right;" name="sirala" class="btn btn-info" value="Dəyiş"></td>
					</tr>
				</tbody>
			</table>  
		</form>
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