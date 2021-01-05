<?php  
if(isset($_FILES["fileName"]) && $_FILES["fileName"]["name"][0]!='')
{
	$filetypes		=$_FILES["fileName"]["type"];//massiv
	$fileN=0;//daxil faylların sayı
	$imgN=0;//daxil edilən şəkillərin sayı
	$AllowedImg =  array('image/jpeg','image/png');
	foreach($filetypes as $filetype)
	{
		$fileN++;
		if(in_array($filetype, $AllowedImg))
		{
			$imgN++;
		}
	}
	if($fileN!=$imgN)
	{
		$errorKompaniya="Yalnız şəkil faylları əlavə edə bilərsiniz.";
	}
	else
	{
		if($imgN>1)
		{
			$errorKompaniya="Yalnız bir şəkil daxil edə bilərsiniz!";
		}
		else
		{
			include 'php-image-resize.php';
			$fileNames=$_FILES["fileName"]["name"];
			$random=rand(1,10000000);
			$random=md5($random);
			for($i=0;$i<count($fileNames);$i++)
			{
				$tmpFilePath = $_FILES['fileName']['tmp_name'][$i];
				if($i!=count($fileNames)-1)
				{
					$photos.=$random.$fileNames[$i].',';
				}
				else
				{
					$photos.=$random.$fileNames[$i];
				}
				$image = new SimpleImage($tmpFilePath);
				$image->resize(800,650);
				$filePathA = "../../kompaniyaImage/" .$random.$fileNames[$i];
				$image->save($filePathA);
			}
			$saveBanners=$conn->prepare("INSERT INTO kompaniya(kompaniyaTitle,	comment,kompaniyaUrl,realTime) VALUES (?,?,?,?)");
          	$saveBanners->execute([$title,$Subtitle,$photos,date("d.m.Y")]);
          	?>
<script type="text/javascript">
alert("Kompaniya uğurla əlavə edildi");
</script>
          	<?php
          	echo '<meta http-equiv="refresh" content="0;url=index.php?page=kompaniya">';
		}
	}
}
else
{
	$errorKompaniya="Lütfən bir şəkil seçin.";
}
?>