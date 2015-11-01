<?php
include('connect.php');

echo "hello";
$name=$_POST['itemname'];
$vendor=$_POST['vendor'];
$city=$_POST['city'];
$description=$_POST['description'];
$category=$_POST['category'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];
//$content = stripslashes(nl2br($content));
echo $name;
$image_name = $_FILES['image']['name'];
$image_type = $_FILES['image']['type'];
$image_size = $_FILES['image']['size'];
$image_tmp_name= $_FILES['image']['tmp_name'];
move_uploaded_file($image_tmp_name,"../themes/images/$image_name");
//echo $image_name;
//echo "Image Uploaded Successfully Here is the image";
//echo "<img src='photos/$image_name'>";

$sql = "INSERT INTO product VALUES('', '$name', '$category' , '$vendor' , '$quantity', '$price','$image_name','$description','$city')";
$result= mysql_query($sql);
//echo "your post has recorded successfully";
//echo "<script>alert('Your Post has send for verification.');</script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=addProduct.php">'; 
?>