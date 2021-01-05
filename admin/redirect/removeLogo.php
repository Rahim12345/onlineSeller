<?php  
if(isset($_GET['page']) && htmlspecialchars(trim($_GET['page']))=='removeLogo' && !empty($_GET['page']) && is_numeric($_GET["id"]) && ceil($_GET["id"])-$_GET["id"]==0 && $_GET["id"]>0)
{
	$page=htmlspecialchars(trim($_GET['page']));
	$id=htmlspecialchars(trim($_GET["id"]));
	$query4LogoRemove=$conn->prepare("SELECT * FROM logo WHERE logoID=?");
	$query4LogoRemove->execute([$id]);
	$rows4LogoRemove=$query4LogoRemove->fetchall(PDO::FETCH_ASSOC);
	$count4LogoRemove=count($rows4LogoRemove);
	if($count4LogoRemove!=0)
	{
		$remove=$conn->prepare("DELETE FROM `logo` WHERE logoID=?");
		$remove->execute([$id]);
		header("location:./index.php?page=existLogo");
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