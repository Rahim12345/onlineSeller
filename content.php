<!-- Start Menu --> 
	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>MƏHSULLARIMIZ</h2>
						<p>Əli mətn de yazım bura</p>
					</div>
				</div>
			</div>
			
			<div class="row inner-menu-box">
				<div class="col-3">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="v-pills-home-tab"  href="./" role="tab" aria-controls="v-pills-home" aria-selected="true">Hamısı</a>
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
		if($n<3)
		{
		?>
						<a class="nav-link link" id="<?php echo $row['id']; ?>"  href="index.php?page=kateqoriya&categoryID=<?php echo $row['id']; ?>" ><?php echo $row["name"]; ?></a>
		<?php
		}
		else
		{
		?>
						<a class="nav-link link" id="v-pills-profile-tab"  href="#" role="tab" data-toggle="modal" data-target="#showMoreCategory">Daha çox göstər</a>
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
							<div id="load_data" class="row"></div>
							<div id="load_data_message"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Menu