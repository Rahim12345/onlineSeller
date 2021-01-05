<?php  
if(isset($_GET['page']) && htmlspecialchars(trim($_GET['page']))=='categoryPlus')
{
	if(isset($_POST['category']))
	{
		$categoryInput=htmlspecialchars(trim($_POST['categoryInput']));
		if(!empty($categoryInput))
		{
			if(strlen($categoryInput)>50)
			{
				$errorCategory='Kateqoriya adı maksimum 50 simvol ola bilər';
			}
			else
			{
				$query4Category=$conn->prepare("SELECT name FROM category WHERE name=?");
				$query4Category->execute([$categoryInput]);
				$rows4Category=$query4Category->fetchall(PDO::FETCH_ASSOC);
				$count4Category=count($rows4Category);
				if($count4Category!=0)
				{
					$errorCategory=$categoryInput.' kateqoriyası artıq mövcuddur';
				}
				else
				{
					$saveCategory=$conn->prepare("INSERT INTO category(name) VALUES (?)");
		          	$saveCategory->execute([$categoryInput]);
		          	$errorCategory='Kateqoriya uğurla bazaya əlavə edildi';
				}
			}
			include 'categoryPlus_def.php';
		}
		else
		{
			include 'categoryPlus_def.php';
		}
	}
	else
	{
		include 'categoryPlus_def.php';
	}
}
else
{
	header("location:../");
}
?>