<?php 
if(isset($_POST['userAgent'],$_POST['name'],$_POST['contact'],$_POST['succestion']))
{
	include 'include/config.php';

	$output=''; 
	$userAgent 	= $_POST['userAgent'];
	$name 	 	= htmlspecialchars(trim($_POST['name']));
	$contact 	= htmlspecialchars(trim($_POST['contact']));
	$succestion	= htmlspecialchars(trim($_POST['succestion']));
	if($name=='')
	{
		$output='Lütfən adınızı daxil edin';
	}
	elseif(strlen($name)>50)
	{
		$output='Lütfən həyatdakı real adınızı daxil edin';
	}
	elseif($contact=='')
	{
		$output='Əlaqə üçün telefon nömrənizi və ya email ünvanınızı daxil edin';
	}
	elseif(strlen($contact)>100)
	{
		$output='Düzgün əlaqə ünvanı daxil edin';
	}
	elseif($succestion=='')
	{
		$output='Təklifinizi yazın';
	}
	elseif(strlen($succestion)>490)
	{
		$output='Təklifiniz maksimum 490 simvol ola bilər';
	}
	else
	{
		$saveSuccestion=$conn->prepare("INSERT INTO `succestions`(`userAgent`, `name`, `contact`, `succestion`) VALUES (?,?,?,?)");
      	$saveSuccestion->execute([$userAgent,$name,$contact,$succestion]);
		$output='Təklifinizə tezliklə baxılacaq';
	}
	echo $output;
}
else
{
	header("location:./");
}
?>