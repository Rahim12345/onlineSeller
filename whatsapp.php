<!-- Start Menu --> 
	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Maraqlanılır</h2>
					</div>
				</div>
			</div>
			
			<div class="row inner-menu-box">
				<div class="col-3">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="v-pills-home-tab" href="./" role="tab" aria-controls="v-pills-home" aria-selected="true">Hamısı</a>
<?php  
$query4Category=$conn->prepare("SELECT * FROM category ORDER BY sira ASC");
$query4Category->execute();
$rows4Category=$query4Category->fetchall(PDO::FETCH_ASSOC);
$count4Category=count($rows4Category);
if($count4Category!=0)
{
	$n=1;
	foreach($rows4Category as $row)
	{
		if($n<4)
		{
		?>
						<a class="nav-link link" id="<?php echo $row['id']; ?>"  href="index.php?page=kateqoriya&categoryID=<?php echo $row['id']; ?>" ><?php echo $row["name"]; ?></a>
		<?php
		}
		else
		{
		?>
						<a class="nav-link link" id="v-pills-profile-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-profile" aria-selected="false">Daha çox göstər</a>
		<?php
			break;
		}
		$n++;
	}
}
?>
					</div>
				</div>
				<div class="col-9">
					<div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
						<div class="row">
<?php  
		$query4Products=$conn->prepare("SELECT * FROM products WHERE id=?");
		$query4Products->execute([$id]);
		$rows4Products=$query4Products->fetchall(PDO::FETCH_ASSOC);
		$count4Products=count($rows4Products);
		if($count4Products!=0)
		{
			foreach($rows4Products as $rows4Product)
			{
				$photos=explode(",", $rows4Product['photos']);
				echo '
		<div class="col-lg-4 col-md-6 special-grid drinks">
			<div class="gallery-single fix">
				<img src="uploads/'.$photos[0].'" class="img-fluid" alt="Image">
				<div class="why-text">
					<h4>'.$rows4Product['productName'].'</h4>
					<p>'.$rows4Product['about'].'</p>
					<h5>'.$rows4Product['Price'].' AZN</h5>
				</div>
			</div>
		</div>
			  ';
			}
		}
?>

						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Menu