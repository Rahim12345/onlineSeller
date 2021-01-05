<?php  
if(isset($_GET['page']) && htmlspecialchars(trim($_GET['page']))=='removeCategory' && !empty($_GET['page']) && is_numeric($_GET["id"]) && ceil($_GET["id"])-$_GET["id"]==0 && $_GET["id"]>0)
{
	$page=htmlspecialchars(trim($_GET['page']));
	$id=htmlspecialchars(trim($_GET["id"]));
	$query4CategoryRemove=$conn->prepare("SELECT * FROM category WHERE id=?");
	$query4CategoryRemove->execute([$id]);
	$rows4CategoryRemove=$query4CategoryRemove->fetchall(PDO::FETCH_ASSOC);
	$count4CategoryRemove=count($rows4CategoryRemove);
	if($count4CategoryRemove!=0)
	{
		$remove=$conn->prepare("DELETE FROM `category` WHERE id=?");
		$remove->execute([$id]);
		header("location:./index.php?page=existCategory");
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