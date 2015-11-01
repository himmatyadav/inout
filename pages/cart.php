<?php
include('connect.php');
session_start();
$user=$_SESSION["user"];
$item=$_GET["id"];
$sql="INSERT INTO cart VALUES('','$item','$user')";
$result=mysql_query($sql);
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=product_detail.php?id='.$item.'">';    
?>