<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Onlayn alış-veriş</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lobster" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="./">
<?php  
$query4Logo=$conn->prepare("SELECT * FROM logo ORDER BY logoID DESC");
$query4Logo->execute();
$rows4Logo=$query4Logo->fetchall(PDO::FETCH_ASSOC);
$count4Logo=count($rows4Logo);
if($count4Logo!=0)
{
	?>
	<img src="logo/<?php echo $rows4Logo[0]['logoUrl'] ?>"  alt="" />
	<?php
}
?>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="./">ƏSAS SƏHİFƏ</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">KATEQORİYALAR</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
<?php
$categoryID=0;  
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
								<a class="dropdown-item link" id="<?php echo $row['id']; ?>"  href="index.php?page=kateqoriya&categoryID=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a>
			<?php
		}
		else
		{
			?>
								<a class="dropdown-item link"  href="#" data-toggle="modal" data-target="#showMoreCategory">Daha çox göstər</a>
								<!-- <a class="dropdown-item link" href="#">Daha çox göstər</a> -->
			<?php
								break;
		}
		$n++;
	}
}
?>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="index.php?page=specialOffer">XÜSUSİ TƏKLİFLƏR</a></li>
						<!-- <li class="nav-item"><a class="nav-link" href="#">ƏLAQƏ</a></li> -->
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	<!-- Start slides -->
	<div id="slides" class="cover-slides">
		<ul class="slides-container">
<?php  
$query4Banner=$conn->prepare("SELECT * FROM banner ORDER BY id DESC");
$query4Banner->execute();
$rows4Banner=$query4Banner->fetchall(PDO::FETCH_ASSOC);
$count4Banner=count($rows4Banner);
if($count4Banner!=0)
{
	foreach($rows4Banner as $rowb)
	{
		?>
			<li class="text-left">
				<img src="banners/<?php echo $rowb['image'] ?>" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20" style="padding-left: 30px;"><strong><br><br><br><?php echo $rowb['title'] ?></strong></h1>
							<p class="m-b-40"><?php echo $rowb['content'] ?></p>
						</div>
					</div>
				</div>
			</li>
		<?php
	}
}
?>
		</ul>
		<div class="slides-navigation">
			<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
		</div>
	</div>
	<!-- End slides -->
	<!-- Start About -->
<?php  
$query4Kompaniya=$conn->prepare("SELECT * FROM kompaniya ORDER BY kompaniyaID DESC");
$query4Kompaniya->execute();
$rows4Kompaniya=$query4Kompaniya->fetchall(PDO::FETCH_ASSOC);
$count4Kompaniya=count($rows4Kompaniya);
if($count4Kompaniya!=0)
{
	?>
	<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="inner-column">
						<h1><?php echo $rows4Kompaniya[0]['kompaniyaTitle'] ?></h1>
						<p>
						<?php echo $rows4Kompaniya[0]['comment'] ?>
						</p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img src="kompaniyaImage/<?php echo $rows4Kompaniya[0]['kompaniyaUrl'] ?>" alt="" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
	<?php
}
?>
	<!-- End About -->