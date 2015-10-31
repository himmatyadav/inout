<?php
session_start();

$terms = $_POST['terms'];

if($terms=='Yes')
{
  if(isset($_POST['submit'])) {

    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $repassword=$_POST['repassword'];
    //$sha1=sha1($password);

    /* Connection to database */
    $conn =mysqli_connect("localhost","root","","inout");
    /* Check connection */
    if(mysqli_connect_error()) {
      echo "Connection failed";
      printf("Error : %s",mysqli_connect_error());
    } 
    /* CHECK if same user or email exists or not ? */
    $query="SELECT * FROM `user` WHERE username='$username' OR email='$email' ";
    $result=mysqli_query($conn , $query);
    $rows=mysqli_num_rows($result);
    if($rows > 0) {
      unset($_POST['submit']);
      echo "<script> alert('Username already taken..Take another one..');</script>";
      echo '<META HTTP-EQUIV="Refresh" Content="0; URL=register.html">';
      //echo "User Created";
    } 
    else {
      if($password==$repassword)
      {
        //$password=sha1($password);
              
        $query="INSERT INTO user (username, password, email) VALUES ('$username','$password','$email')";
        mysqli_query($conn , $query);

        echo "<script> alert('Account Successfully created....Login to Use..');</script>";
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=login.html">';
      }
      else{
        echo "<script> alert('The Passwords don't match...!!');</script>";
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=register.html">';
      }

    }
  }
}

else

?>