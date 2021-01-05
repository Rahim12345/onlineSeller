<?php
if(isset($_POST["limit"], $_POST["start"]))
{
	include 'include/config.php';
	$limit 		=htmlspecialchars(trim($_POST["limit"]));
	$start 	 	=htmlspecialchars(trim($_POST["start"]));
	if(is_numeric($limit) && ceil($limit)-$limit==0 && is_numeric($start) && ceil($start)-$start==0)
	{
		$query4Products=$conn->prepare("SELECT * FROM products ORDER BY id DESC LIMIT ".$_POST["start"].", ".$_POST["limit"]."");
		$query4Products->execute();
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
					$about=substr($str, 0,15);
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
						<span class="btn btn-success" style="color:green;position:absolute;left:0;bottom:0;color:white;"><i class="fa fa-eye" title="Ətraflı" aria-hidden="true"></i></span>
	                </a>
				</div>
			</div>
		</div>
		<script src="js/showmore.js"></script>
			  ';
			}
		}
	}
	else
	{
		echo '';
	}
}
else
{
	echo '';
}
?>