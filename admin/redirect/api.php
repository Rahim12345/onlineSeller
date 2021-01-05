<?php 
// sleep(3); 
include '../../include/config.php';

$sql='SELECT * FROM products ';
$where=[];

$order=['id','DESC'];

// $column=$_POST['order'][0]['column'];
// $columnName=$_POST['order'][$column]['data'];
// $columnOrder=$_POST['order'][0]['dir'];

// if(isset($columnName)  && !empty($columnName) && isset($columnOrder) && !empty($columnOrder))
// {
// 	$order[0]=$columnName;
// 	$order[1]=$columnOrder;
// }


if(isset($_POST['search']['value']) && !empty(($_POST['search']['value'])))
{
	$z=0;
	foreach($_POST['columns'] as $column)
	{
		if($z!=0)
		{
			$where[]=$column['data'].' LIKE "%'.$_POST['search']['value'].'%"';
		}
		$z++;
	}
}

if(count($where)>0)
{
	$sql.=' WHERE '.implode(' || ', $where).' ';
}


if(isset($_POST['start']) && isset($_POST['length']))
{
$startN=$_POST['start'];
$pageN=$_POST['length'];
}


$sql.=' ORDER BY '.$order[0].' '.$order[1];

$sql.=' LIMIT '.$startN.', '.$pageN;
// print_r($_POST['columns']);
// echo $sql;
// exit;
$products=$conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);

$response=[];

$response['data']=[];
$response['recordsTotal']=$conn->query('SELECT count(id) as total FROM products ')->fetch(PDO::FETCH_ASSOC)['total'];
$response['recordsFiltered']=$conn->query('SELECT count(id) as total FROM products '.(count($where)>0 ? ' WHERE '.implode(' || ', $where):null))->fetch(PDO::FETCH_ASSOC)['total'];

$n=$startN+1;
foreach($products as $product)
{
	$response['data'][]=[
		'say' 					=>$n,
		'manufacturer' 			=>$product['manufacturer'],
		'productName'			=>$product['productName'],
		'Price'					=>$product['Price'],
		'endirim' 				=>$product['endirim'],
		'colors'				=>$product['colors'],
		'about'					=>$product['about'],
		'categoryID'			=>'<a href="index.php?page=removeProduct&id='.$product['id'].'"><i class="fa fa-trash" style="color: black;" aria-hidden="true"></i></a>',
		'id'					=>"<input type='hidden' name='startID' id='startID' value='".$startN."'><input type='hidden' name='length' id='length' value='".$pageN."'><button name='view' id='".$product['id']."' class='btn btn-info btn-xs view_data'><i class='fa fa-edit'></i></button>"

	];
	$n++;
}


echo json_encode($response);

?>