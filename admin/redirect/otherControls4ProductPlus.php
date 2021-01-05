<?php  
if(empty($manufacturer))
{
	$errorProduct='İstehsalçını daxil edin';
}
else
{
	if(strlen($manufacturer)>50)
	{
		$errorProduct='İstehsalçı adı maksimum 50 simvol ola bilər!';
	}
	else
	{
		if(empty($productName))
		{
			$errorProduct='Məhsulun adını daxil edin';
		}
		else
		{
			if(strlen($productName)>50)
			{
				$errorProduct='Məhsul adı maksimum 50 simvol ola bilər!';
			}
			else
			{
				if($productPrice=='')
				{
					$errorProduct='Məhsulun qiymətini daxil edin';
				}
				else
				{
					if(strlen($productPrice)>4)
					{
						$errorProduct='Məhsulun qiyməti maksimum 4 simvol ola bilər!';
					}
					else
					{
						if(!is_numeric($productPrice) || $productPrice<0)
						{
							$errorProduct='Məhsulun qiyməti yalnız müsbət ədədlər ola bilər ola bilər!';
						}
						else
						{
							if($mainFeatures=='')
							{
								$errorProduct='Məhsul haqqında daxil edin';
							}
							else
							{
								if(strlen($mainFeatures)>450)
								{
									$errorProduct='Məhsul haqqında maksimum 450 simvol daxil edilə  bilər!';
								}
								else
								{
									if(!isset($_POST['colors']))
									{
										$errorProduct='Məhsulun rəngini daxil edin';
									}
									else
									{
										$colors=$_POST['colors'];
										for($i=0;$i<count($colors);$i++)
										{
											if($colors[$i]=='Ağ')
											{
												$white=$colors[$i];
											}
											elseif($colors[$i]=='Qara')
											{
												$black=$colors[$i];
											}
											elseif($colors[$i]=='Qırmızı')
											{
												$red=$colors[$i];
											}
											elseif($colors[$i]=='Mavi')
											{
												$blue=$colors[$i];
											}
											elseif($colors[$i]=='Qəhvəyi')
											{
												$brown=$colors[$i];
											}
											elseif($colors[$i]=='Boz')
											{
												$grey=$colors[$i];
											}
											elseif($colors[$i]=='Krem')
											{
												$creamie=$colors[$i];
											}
											elseif($colors[$i]=='Firuzəyi')
											{
												$firuze=$colors[$i];
											}
											elseif($colors[$i]=='Qızılı')
											{
												$golden=$colors[$i];
											}
										}
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
												$errorProduct="Yalnız şəkil faylları əlavə edə bilərsiniz.";
											}
											else
											{
												if($imgN>5)
												{
													$errorProduct="Maksimum şəkil sayı 5";
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
														$image->resize(800,480);
														$filePathA = "../../uploads/" .$random.$fileNames[$i];
														$image->save($filePathA);
													}
													$colorsString= implode(",", $colors);
													$saveProducts=$conn->prepare("INSERT INTO products(categoryID,manufacturer,productName,Price,photos,colors,about,realTime) VALUES (?,?,?,?,?,?,?,?)");
										          	$saveProducts->execute([$categoryName,$manufacturer,$productName,$productPrice,$photos,$colorsString,$mainFeatures,date("d.m.Y")]);
										          	?>
<script type="text/javascript">
alert("Məhsul uğurla əlavə edildi");
</script>
										          	<?php
										          	echo '<meta http-equiv="refresh" content="0;url=index.php?page=productPlus">';
												}
											}
										}
										else
										{
											$errorProduct="Ən azı bir şəkil seçin.";
										}
									}
								}
							}
						}
					}
				}
			}
		}	
	}
}
?>