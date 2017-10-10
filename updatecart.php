<?php
session_start();
$returnUrl=$_GET['return'];
$productCode=$_GET['pro_code'];
include('config.php');
if(!isset($_SESSION['products']))
{
$_SESSION['products']=array();
}
$currProduct=array();
$sql = "SELECT * FROM books where product_code='".$productCode."'";
$result = $mysqli->query($sql);
if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc()) 
	{
       $currProduct[''.$row['product_code'].'']=array($row['product_name'],$row['price'],$row['product_img_name']);
    }
} 
else 
{
    echo "Item Out of Stock";
}
$mysqli->close();
if(count($_SESSION['products'])<=0)
{
$_SESSION['products']=$currProduct;
}
else
{
if(!array_key_exists(''.$productCode.'',$_SESSION['products']))
{
$i=count($_SESSION['products']);
$i++;
$_SESSION['products']=array_merge($_SESSION['products'],$currProduct);
}
}
header('Location:'.$returnUrl.'');
?>