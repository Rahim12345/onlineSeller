<?php  
include '../../include/config.php';
if(isset($_POST))  
{  
	$id 			=$_POST["proID"];
	$startN 		=$_POST["startN"];
	$pageN 			=$_POST["pageN"];
	$manufacturer 	=htmlspecialchars(trim($_POST["manufacturer"]));
	$productName 	=htmlspecialchars(trim($_POST["productName"]));
	$Price 			=htmlspecialchars(trim($_POST["Price"]));
	$endirim 		=htmlspecialchars(trim($_POST["endirim"]));
	$about 			=htmlspecialchars(trim($_POST["about"]));
	$query=$conn->prepare("SELECT * FROM products WHERE id=?");
	$query->execute([$id]);
	$row=$query->fetch(PDO::FETCH_ASSOC);
	$count=count($row);
	if($count!=0)
	{
		if(strlen($manufacturer)<50 && $manufacturer!='' && strlen($productName)<50 && $productName!='' && is_numeric($Price) && $Price>0 && is_numeric($endirim) && $endirim>=0 && $endirim<100 && strlen($Price)<4 && strlen($about)<430 && $about!='')
		{
			$UpdateWarehouse=$conn->prepare("UPDATE `products` SET `manufacturer`=?,`productName`=?,`Price`=?,`endirim`=?,`about`=? WHERE `id`=?");
  			$UpdateWarehouse->execute([$manufacturer,$productName,$Price,$endirim,$about,$id]);
		}
		else
		{
			header("location:./");
		}
	}
  	else
  	{
  		header("location:./");
  	}
} 
else
{
	header("location:./");
} 
?>