<?php  
if(isset($_GET['page']) && htmlspecialchars(trim($_GET['page']))=='updateCategory')
{
	if(isset($_POST["sirala"]))
	{
		$query4Category=$conn->prepare("SELECT * FROM category");
		$query4Category->execute();
		$rows4Category=$query4Category->fetchall(PDO::FETCH_ASSOC);
		$count4Category=count($rows4Category);
		if($count4Category!=0)
		{
			if(count($_POST['id'])==count($_POST['ordinal']) && count($_POST['id'])==count($_POST['CategoryName']))
			{
				for($i=0;$i<count($_POST['id']);$i++)
				{
					$id 			=htmlspecialchars(trim($_POST['id'][$i]));
					$ordinal 		=htmlspecialchars(trim($_POST['ordinal'][$i]));
					$CategoryName 	=htmlspecialchars(trim($_POST['CategoryName'][$i]));
					if(is_numeric($id) && ceil($id)-$id==0 && strlen($id)<11 && $id!='' && is_numeric($ordinal) && strlen($ordinal)<3 && ceil($ordinal)-$ordinal==0 && $ordinal!='' && strlen($CategoryName)<50 && $CategoryName!='')
					{
						$update=$conn->prepare("UPDATE `category` SET `name`=?,`sira`=? WHERE id=?");
						$update->execute([$CategoryName,$ordinal,$id]);
						header("location:./index.php?page=queue");
					}
					else
					{
						continue;
					}
				}
			}
			else
			{
				?>
<script type="text/javascript">
	alert("Bir şeylər səhv gedir");
</script>
				<?php
			}
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
}
else
{
	include '404.php';
}
?>