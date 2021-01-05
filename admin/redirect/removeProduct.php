<?php  
if(isset($_GET['page']) && htmlspecialchars(trim($_GET['page']))=='removeProduct' && is_numeric($_GET["id"]) && ceil($_GET["id"])-$_GET["id"]==0 && $_GET["id"]>0)
{
	$page=htmlspecialchars(trim($_GET['page']));
	$id=htmlspecialchars(trim($_GET["id"]));
	$query4ProductRemove=$conn->prepare("SELECT * FROM products WHERE id=?");
	$query4ProductRemove->execute([$id]);
	$rows4ProductRemove=$query4ProductRemove->fetchall(PDO::FETCH_ASSOC);
	$count4ProductRemove=count($rows4ProductRemove);
	if($count4ProductRemove!=0)
	{
		$remove=$conn->prepare("DELETE FROM `products` WHERE id=?");
		$remove->execute([$id]);
		header("location:./index.php?page=existProducts");
	}
	else
	{
		include '404.php';
	}
}
else
{
	include '404.php';
}
?>