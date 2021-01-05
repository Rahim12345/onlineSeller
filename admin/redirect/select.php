<?php  
include '../../include/config.php';
if(isset($_POST['proID']))  
{  
  	$id=$_POST["proID"];
	$query=$conn->prepare("SELECT * FROM products WHERE id=?");
	$query->execute([$id]);
	$row=$query->fetch(PDO::FETCH_ASSOC);
	$count=count($row);
	if($count!=0)
	{
		echo '
		<form method="post" id="insert_form" onsubmit="return false">
		<input type="hidden" name="proID" id="proID" />  
        <input type="hidden" name="startN" id="startN" />  
        <input type="hidden" name="pageN" id="pageN" />
		<table class="table" style="width: 100%;font-size: .9vw;color: black;">
			<tr>
				<td>
					İstehsalçı
				</td>
				<td>
					<input class="form-control" style="color:black;font-size:1vw;" type="text" name="manufacturer" maxlength="50" id="manufacturer" value="'.$row["manufacturer"].'">
				</td>
			</tr>
			<tr>
				<td>
					Məhsulun adı
				</td>
				<td>
					<input class="form-control" style="color:black;font-size:1vw;" type="text" name="productName" id="productName" maxlength="50" value="'.$row["productName"].'">
				</td>
			</tr>
			<tr>
				<td>
					Məhsulun qiyməti
				</td>
				<td>
					<input class="form-control" style="color:black;font-size:1vw;" type="number" min="0" name="Price" id="Price" value="'.$row["Price"].'">
				</td>
			</tr>
			<tr>
				<td>
					Endirim(%)
				</td>
				<td>
					<input class="form-control" style="color:black;font-size:1vw;" type="number" min="0" max="99" name="endirim" id="endirim" value="'.$row["endirim"].'">
				</td>
			</tr>
			<tr>
				<td>
					Haqqında
				</td>
				<td>
					<input class="form-control" maxlength="430" style="color:black;font-size:1vw;" type="text" name="about" id="about" value="'.$row["about"].'">
				</td>
			</tr>
			<tr>
				<td>
					
				</td>
				<td>
					<button class="btn btn-info editProduct" id="'.$row["id"].'" style="position:relative;float:right;font-size:1vw;">Redaktə et</button>
				</td>
			</tr>
		</table>
		</form>
		';
	}
} 
else
{
	header("location:./");
} 
?>