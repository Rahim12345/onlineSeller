<?php  
if(isset($_GET['page']) && htmlspecialchars(trim($_GET['page']))=='productPlus')
{
	$mainFeatures 	='';
	$colors 		='';
	$white			='';
	$black			='';
	$red			='';
	$blue			='';
	$brown			='';
	$grey			='';
	$creamie		='';
	$firuze			='';
	$golden			='';
	$photos 		='';
	if(isset($_POST['productAdd']))
	{
		$categoryName		=htmlspecialchars(trim($_POST['categoryName']));
		$manufacturer		=htmlspecialchars(trim($_POST['manufacturer']));
		$productName 		=htmlspecialchars(trim($_POST['productName']));
		$productPrice 		=htmlspecialchars(trim($_POST['productPrice']));
		$mainFeatures 		=htmlspecialchars(trim($_POST['mainFeatures']));
		if(empty($categoryName))
		{
			$errorProduct='Kateqoriya adını daxil edin';
		}
		else
		{
			if(!strlen($categoryName)>11 || !is_numeric($categoryName) || ceil($categoryName)-$categoryName!=0 || $categoryName<1)
			{
				$errorProduct='Təklif olunan kateqoriyalardan birini daxil edin.';
			}
			else
			{
				$query4Category=$conn->prepare("SELECT * FROM category WHERE id=?");
				$query4Category->execute([$categoryName]);
				$rows4Category=$query4Category->fetchall(PDO::FETCH_ASSOC);
				$count4Category=count($rows4Category);
				if($count4Category!=1)
				{
					$errorProduct='Kateqoriya bazada tapılmadı.';
				}
				else
				{
					include 'otherControls4ProductPlus.php';
				}
			}
		}
		include 'productPlus_def.php';
	}
	else
	{
		include 'productPlus_def.php';
	}
}
else
{
	header("location:../");
}
?>