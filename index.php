<?php  
ob_start();
session_start();
include 'include/config.php';
include 'IPfunction.php';
$saveVisitors=$conn->prepare("INSERT INTO visitors(ip) VALUES (?)");
$saveVisitors->execute([$adresseip]);
include 'header.php';
if(isset($_GET['page'],$_GET['categoryID']))
{
	$page 			=htmlspecialchars(trim($_GET['page']));
	$categoryID 	=htmlspecialchars(trim($_GET['categoryID']));
	if($page=='kateqoriya' && is_numeric($categoryID) && ceil($categoryID)-$categoryID==0 && $categoryID>0)
	{
		include 'category.php';
	}
	else
	{
		header("location:index.php");
	}
}
elseif(isset($_GET['page'],$_GET['id']))
{
	$page 			=htmlspecialchars(trim($_GET['page']));
	$id 			=htmlspecialchars(trim($_GET['id']));
	if($page=='whatsapp')
	{
		include 'whatsapp.php';
	}
	else
	{
		header("location:index.php");
	}
}
elseif(isset($_GET['page']))
{
	$page 			=htmlspecialchars(trim($_GET['page']));
	if($page=='specialOffer')
	{
		include 'specialOffer.php';
	}
	else
	{
		header("location:index.php");
	}
}
else
{
	include 'content.php';
}
include 'footer.php';
?>