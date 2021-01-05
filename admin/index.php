<?php 
ob_start(); 
session_start();
include '../include/config.php'; 
?>
<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
</head>
<body style="background-color: #282923;margin-top: 150px;">
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header" style="background-color: orange">
				<h3 style="color:white;">Daxil ol</h3>
			</div>
			<?php  
			if(isset($_POST["login"]))
			{
				$email=htmlentities(htmlspecialchars(trim($_POST["email"])));
				$password=htmlentities(htmlspecialchars(trim($_POST["password"])));
				$query=$conn->prepare("SELECT * FROM users WHERE email=?");
				$query->execute([$email]);
				$row=$query->fetch(PDO::FETCH_ASSOC);
				$count=strlen($row["email"]);
				if($count==0)
				{
					$error=$email." bazada tapılmadı";
					include 'defaultIndex.php';
				}
				else
				{
					if($password!=$row["password"])
					{
						$error=" Düzgün şifrə daxil edin";
						include 'defaultIndex.php';
					}
					else
					{
						$_SESSION["id"]=$row["id"];
						// Buradan admin işləmələri başlayacaq
						header("location:./redirect");
						
					}
				}
			}
			else
			{
				include 'defaultIndex.php';
			}
			?>
		</div>
	</div>
</div>
</body>
</html>