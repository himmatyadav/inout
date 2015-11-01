
<!DOCTYPE html>
<html lang="en">
<head>
  <title>TradKart</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
      <a href="
        <?php
          if(isset($_SESSION['username']))
            echo "home.php";
          else
            echo "index.php";
        ?>
          ">
          <img src="images/logo.png" height="50" width="72">
      </a>

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <!--
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        -->
      </ul>
	  
	  <ul class="nav navbar-nav navbar-right">

        <li class="dropdown">

          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <span class="glyphicon glyphicon-user"></span>
            <?php 
              session_start();
              echo $_SESSION["username"];
            ?> 
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="../pandit/home.php">
              <span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;Home</a>
            </li>

            <li role="separator" class="divider"></li>
            <li>
              <a href="../pandit/help.php">Help</a>
            </li>
          </ul>
        </li>

      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
  
<div class="container">
    <div class="col-md-offset-4 col-md-4">
	
	<form class="form-signin ng-dirty ng-valid-parse ng-valid ng-valid-required" action='register.php' method='POST'>
	    <center><h2 class="form-signin-heading">Register</h2></center>
	    
      <!--
	    <label class="sr-only">Full Name</label>
	    	<input type="text" id="name" class="form-control ng-dirty ng-valid-parse ng-valid ng-valid-required ng-touched" placeholder="Full Name" autofocus="">
      -->

	    <label class="sr-only">Category</label>
	    	<input type="text" name="username" class="form-control ng-dirty ng-valid-parse ng-valid ng-valid-required ng-touched" placeholder="Username" required="" autofocus="">
	    
      <label class="sr-only">Description</label>
	    	<input type="text" name="email" class="form-control ng-dirty ng-valid-parse ng-valid ng-valid-required ng-touched" placeholder="Email" required="" autofocus="">

     
	    
      <label class="sr-only">Password</label>
	    	<input type="password" name="password" class="form-control ng-untouched ng-dirty ng-valid-parse ng-valid ng-valid-required" placeholder="Password" required="">
	    
      <label class="sr-only">Retype Password</label>
	    	<input type="password" name="repassword" class="form-control ng-untouched ng-dirty ng-valid-parse ng-valid ng-valid-required" placeholder="Retype Password" required="">

      <input type="checkbox" id="terms" name="terms" value="Yes">
        <label for="terms">I agree the terms and conditions</label>
	    
	    <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Register</button>

      <br>
	  
	</form>

      <a href="loginUser.php">Already a user?</a>
    
    </div>
</div>

</body>
</html>


