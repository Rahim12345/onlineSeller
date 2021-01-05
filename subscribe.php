<?php  
if(isset($_POST['email']))
{
	include 'include/config.php';
	$output='';
	$email 			=htmlspecialchars(trim($_POST['email']));
	$userAgent 		=htmlspecialchars(trim($_POST['userAgent']));
	if(empty($email))
	{
		$output='Məhsullarımız və kompaniyalarımız barədə məlumat almaq üçün emailiniz daxil edin';
	}
	elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
	{
		$output="Doğru bir email ünvanı daxil edin";
	}
	else
	{
		$save=$conn->prepare("INSERT INTO `subscribe`(`userAgent`, `email`) VALUES (?,?)");
      	$save->execute([$userAgent,$email]);
		$output="Bizi izlədiyiniz üçün təşəkkür edirik";
	}
	echo $output;
}
else
{
	header("location:./");
}
?>