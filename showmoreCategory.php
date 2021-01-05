<?php  
include 'include/config.php';
?>
			<div class="modal-body" style="background-color: white; opacity:0.9">
		  	<div class="modal-header">
	          <h4 class="modal-title" id="exampleModalLabel" style="background-color: white; opacity:0.9">Kateqoriyalar</h4>
	        </div>
			<div class="row inner-menu-box">
			<div class="col-12">
	        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
<?php  
$query4Category=$conn->prepare("SELECT * FROM category ORDER BY sira ASC");
$query4Category->execute();
$rows4Category=$query4Category->fetchall(PDO::FETCH_ASSOC);
$count4Category=count($rows4Category);
if($count4Category!=0)
{
	foreach($rows4Category as $row)
	{
		?>
		<a class="nav-link link"  id="<?php echo $row['id']; ?>"  href="index.php?page=kateqoriya&categoryID=<?php echo $row['id']; ?>" ><?php echo $row["name"]; ?></a>
		<?php
	}
}
?>
			</div>
			</div>
			</div>
			<div class="modal-footer">
	          <button class="btn btn-danger" type="button" data-dismiss="modal">Bağla</button>
	        </div>
	        </div>
