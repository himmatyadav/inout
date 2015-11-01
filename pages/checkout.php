<?php
include('connect.php');
session_start();
$user=$_SESSION["user"];

$item=$_GET["id"];
$sql="DELETE FROM cart WHERE user='$user'";
$result=mysql_query($sql);

$sql1="SELECT * FROM product WHERE id='$item'";
$result1=mysql_query($sql1);
//echo $item;
while($row=mysql_fetch_array($result1))
{
	$vendor1 = $row['vendor'];
	$product = $row['name'];
	$category = $row['category'];
	//echo $vendor1;
}
//echo $vendor1 . " ..";

$sql2="SELECT * FROM vendor WHERE username='$vendor1'";
$result2=mysql_query($sql2);
while($row=mysql_fetch_array($result2))
{
	$vendorphone = $row['phone'];
}

$sql3="SELECT * FROM product WHERE id='$item'";
$result3=mysql_query($sql3);
while($row=mysql_fetch_array($result3))
{
	$product = $row['name'];
}

$sql4="SELECT * FROM user WHERE username='$user'";
$result4=mysql_query($sql4);
while($row=mysql_fetch_array($result4))
{
	$userphone = $row['phone'];
	$address = $row['address'];
}

//echo '<META HTTP-EQUIV="Refresh" Content="0; URL=home.php">';
//echo '<META HTTP-EQUIV="Refresh" Content="0; URL=https://www.robotick.org/msgorder.php?From=09243422233&To='.$vendorphone.'&Body=Congratulations vendor, '.$user.' has just bought your item '. $product.'">';
//echo '<META HTTP-EQUIV="Refresh" Content="0; URL=https://www.robotick.org/msgorder.php?From=09243422233&To='.$vendorphone.'&Body=You have to courier your product to following address within 3days of receiving this message'.$address.'">';
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=https://www.robotick.org/msgorder.php?From=09243422233&To='.$vendorphone.'&Body='.$product.','.$category.'">';
//echo '<META HTTP-EQUIV="Refresh" Content="0; URL=https://www.robotick.org/msgorder.php?From=09243422233&To='.$userphone.'&Body=Dear '.$user.', Thanks for purchasing from TradKart.com...">';
?>