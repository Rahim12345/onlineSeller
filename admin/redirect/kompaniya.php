<?php  
if(isset($_GET['page']) && htmlspecialchars(trim($_GET['page']))=='kompaniya')
{
	$photos='';
	if(isset($_POST['kompaniya']))
	{
		$title 		=htmlspecialchars(trim($_POST['title']));
		$Subtitle 	=htmlspecialchars(trim($_POST['Subtitle']));
		if(empty($title))
		{
			$errorKompaniya='Başlıq daxil edin';
		}
		else
		{
			if(strlen($title)>50)
			{
				$errorKompaniya='Başlıq üçün maksimum 50 simvol daxil edə bilərsiz';
			}
			else
			{
				if(empty($Subtitle))
				{
					$errorKompaniya='Başlığa şərh yazın';
				}
				else
				{
					if(strlen($Subtitle)>450)
					{
						$errorKompaniya='Başlıq üçün şərhə maksimum 450 simvol daxil edə bilərsiz';
					}
					else
					{
						include 'kompaniyaFileControl.php';
					}
				}
			}
		}
		include 'kompaniya_def.php';
	}
	else
	{
		include 'kompaniya_def.php';
	}
}
else
{
	header("location:../");
}
?>