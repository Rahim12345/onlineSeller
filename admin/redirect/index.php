<?php 
ob_start();
session_start();
include '../../include/config.php'; 
if(isset($_SESSION["id"]))
{
	include 'header.php';
	if(isset($_GET['page']))
	{
		$page=htmlspecialchars(trim($_GET['page']));
		if($page=='exit')
		{
			include 'exit.php';
		}
		elseif($page=='categoryPlus')
		{
			include 'categoryPlus.php';
		}
		elseif($page=='existCategory')
		{
			include 'existCategory.php';
		}
		elseif($page=='removeCategory' && isset($_GET['id']))
		{
			include 'removeCategory.php';
		}
		elseif($page=='queue')
		{
			include 'queue.php';
		}
		elseif($page=='updateCategory')
		{
			include 'updateCategory.php';
		}
		elseif($page=='productPlus')
		{
			include 'productPlus.php';
		}
		elseif($page=='existProducts')
		{
			include 'existProducts.php';
		}
		elseif($page=='removeProduct')
		{
			include 'removeProduct.php';
		}
		elseif($page=='bannerPlus')
		{
			include 'bannerPlus.php';
		}
		elseif($page=='existBanner')
		{
			include 'existBanner.php';
		}
		elseif($page=='removeBanner')
		{
			include 'removeBanner.php';
		}
		elseif($page=='logoPlus')
		{
			include 'logoPlus.php';
		}
		elseif($page=='existLogo')
		{
			include 'existLogo.php';
		}
		elseif($page=='removeLogo')
		{
			include 'removeLogo.php';
		}
		elseif($page=='kompaniya')
		{
			include 'kompaniya.php';
		}
		else
		{
			include '404.php';
		}
	}
	else
	{
		?>
		<p class="btn btn-info" style="min-height: 450px;line-height: 450px;margin-left: 10%;min-width: 80%;font-size: 3vw">
			Burda mövcud məhsulların siyahısı olacaq
		</p>
		<?php
	}
	include 'footer.php';
}
else
{
	header("location:../");
}
?>