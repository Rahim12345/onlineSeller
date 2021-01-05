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
						<a class="nav-link " id="v-pills-home-tab" href="./" role="tab" aria-controls="v-pills-home" aria-selected="true">Hamısı</a>
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
			if($categoryID==$row['id'])
			{
				?>
				<a class="nav-link link active" id="<?php echo $row['id']; ?>"  href="index.php?page=kateqoriya&categoryID=<?php echo $row['id']; ?>" ><?php echo $row["name"]; ?></a>
				<?php
			}
			else
			{
				?>
				<a class="nav-link link" id="<?php echo $row['id']; ?>"  href="index.php?page=kateqoriya&categoryID=<?php echo $row['id']; ?>" ><?php echo $row["name"]; ?></a>
				<?php
			}
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
						<div class="row">
<?php  
		$query4Products=$conn->prepare("SELECT * FROM products WHERE categoryID=? ORDER BY id DESC");
		$query4Products->execute([$categoryID]);
		$rows4Products=$query4Products->fetchall(PDO::FETCH_ASSOC);
		$count4Products=count($rows4Products);
		if($count4Products!=0)
		{
			foreach($rows4Products as $rows4Product)
			{
				$name='';
				$strname=$rows4Product['productName'];
				$strnamelen=strlen($strname);
				if($strnamelen>15)
				{
					$name=substr($strname, 0,15).'...';
				}
				else
				{
					$name=$strname;
				}


				$about='';
				$str=$rows4Product['about'];
				$strlen=strlen($str);
				if($strlen>15)
				{
					$about=substr($str, 0,15).'...';
				}
				else
				{
					$about=$str;
				}
				$id=$rows4Product['id'];
				$photos=explode(",", $rows4Product['photos']);
				echo '
		<div class="col-lg-4 col-md-6 special-grid drinks">
			<div class="gallery-single fix">
				<img src="uploads/'.$photos[0].'" class="img-fluid" alt="Image">
				<div class="why-text">
					<h4>'.$name.'</h4>
					<p>'.$about.'-'.$rows4Product['Price'].' AZN</p>
					<a class="btn" href="https://api.whatsapp.com/send?phone=+994555124668&text=localhost/ali/index.php?page=whatsapp%26id='.$id.'" target="_blank"><span class="btn btn-success" style="color:green;position:absolute;right:0;bottom:0;color:white"><i class="fa fa-whatsapp" aria-hidden="true"></i>-da soruş</span>
					</a>
					<a class="btn showmore" id="'.$id.'" href="#" data-toggle="modal" data-target="#logoutModal">
						<span class="btn btn-success" title="Ətraflı" style="color:green;position:absolute;left:0;bottom:0;color:white;"><i class="fa fa-eye" aria-hidden="true"></i></span>
	                </a>
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