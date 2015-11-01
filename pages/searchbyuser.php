
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

  <!-- fb sociable plugin -->
  <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <!-- twitter sociable plugin -->
    <script>
    !function(d,s,id)
    {
      var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
      if(!d.getElementById(id))
        {
          js=d.createElement(s);
          js.id=id;js.src=p+'://platform.twitter.com/widgets.js';
          fjs.parentNode.insertBefore(js,fjs);
        }
      }(document, 'script', 'twitter-wjs');
    </script>

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
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        
      </ul>
      
      <ul class="nav navbar-nav navbar-right">

        <li class="dropdown">

          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <span class="glyphicon glyphicon-user"></span>
            <?php 
              session_start();
              if(isset($_SESSION['username'])){
                echo $_SESSION["username"];
              }
              else{
                echo "Anonymous";
              }
            ?>
            <span class="caret"></span>
          </a>
          
          <ul class="dropdown-menu">
			      <li><a href="../pandit/home.php">
              <span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;Home</a>
            </li>

            <li><a href="../pandit/newposthtml.php">
              <span class="glyphicon glyphicon-file"></span>&nbsp;&nbsp;Add New Post</a>
            </li>

            <li role="separator" class="divider"></li>

            <li><a href="editprofile.php">
              <span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;Edit Profile</a>
            </li>
            
            <li><a href="#">
                <span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;Settings</a>
            </li>

            <li role="separator" class="divider"></li>
            
            <li><a href="logout.php">
              <!--<form class="navbar-form navbar-left" action='logout.php' method='POST'>-->
              <span class="glyphicon glyphicon-off "></span>&nbsp;&nbsp;Logout</a>
            </li>

            <li role="separator" class="divider"></li>
            <li>
                <a href="#">Help</a>
            </li>
          </ul>
        </li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
  
<div class="container">
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

              <h1 class="page-header">
                  Showing Search Result
              <small>Secondary Text</small>
              </h1>
                
                <?php
                  
                  $search=$_POST['search'];

                  $conn =mysqli_connect("localhost","root","","blog");
                  /* Check connection */
                  if(mysqli_connect_error()) {
                    echo "Connection failed";
                    printf("Error : %s",mysqli_connect_error());
                  }
                    
                  $query = "SELECT * FROM `user` WHERE username LIKE '%$search%' ORDER BY doc DESC";// LIMIT 0 , 5";
                  $comments = mysqli_query($conn, $query);
                  
                  //echo "<h1>Your Blogs</h1>";

                  while($row = mysqli_fetch_array($comments, MYSQL_ASSOC))
                  {
                    $title = $row['title'];
                    $content = $row['content'];
                    $tags = $row['tags'];
                    $doc = $row['doc'];
                    $username = $row['username'];
                    $image_name=$row['featuredimage'];

                    $title = htmlspecialchars($row['title'],ENT_QUOTES);
                    $content = htmlspecialchars($row['content'],ENT_QUOTES);
                    $tags = htmlspecialchars($row['tags'],ENT_QUOTES);
                    $doc = htmlspecialchars($row['doc'],ENT_QUOTES);
                    $username = htmlspecialchars($row['username'],ENT_QUOTES);
                    //$image_name = htmlspecialchars($row['image_name'],ENT_QUOTES);
                ?>
                    
                    <!-- First Blog Post -->
                    <h2 class="title">
                        <a href=""><?php echo $title; ?></a>
                    </h2>
                    <p class="lead">
                        by <a href="profile.php?username=<?php echo $username; ?>"><?php echo $username; ?></a>
                    </p>
                    <p>
                      <span class="glyphicon glyphicon-time"></span> Posted on <?php echo $doc; ?>
                    </p>
                    <hr>

                    <img class="img-responsive" src="images/<?php echo $image_name;?>">
					<!--<img class="img-responsive" src="/images/$image_name">-->
                    <hr>

                    <p> <?php echo stripslashes(nl2br($content)); ?></p>
                    <!--
                      <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                    -->

                    <hr>

                    <form action='comment.php' method='POST'>
                      <textarea class="form-control" rows="5" name="comment" placeholder="Comment Here.." required></textarea> <br>

                      <button class="btn btn-lg" name="submit" type="submit">Comment</button>
                    </form>

                  <?php
                    }
                  ?>
              

                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                  <h4>Blog Search</h4>
                    <div class="input-group">
                      <ul>
                        <form class="navbar-form navbar-left" action='search.php' method='POST'>
                          <div class="form-group">
                            <input type="text" class="form-control" name="search" placeholder="Search">
                          </div>

                          <button type="submit" name="submitpost" class="btn btn-default">via Post
                            <span class="glyphicon glyphicon-search"></span>
                          </button>

                          <button type="submit" name="submituser" class="btn btn-default">via User
                            <span class="glyphicon glyphicon-search"></span>
                          </button>
                        </form>
                      </ul>
                    </div>
                </div>

                <!-- Blog Search Well -->
                <div class="well">
                  <!-- Facebook Like Sociable-->
                  <div class="fb-page" data-href="https://www.facebook.com/pages/Delan/1130907210259225?fref=ts" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false">
                    <div class="fb-xfbml-parse-ignore">
                      <blockquote cite="https://www.facebook.com/pages/Delan/1130907210259225?fref=ts">
                        <a href="https://www.facebook.com/pages/Delan/1130907210259225?fref=ts">Delan</a>
                      </blockquote>
                    </div>
                  </div>

                  <br><br>
                  <!-- Facebook Like Sociable-->
                  <a href="https://twitter.com/delanin" class="twitter-follow-button" data-show-count="false">Follow @delanin</a>
                </div>


                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Bolly Masala</a>
                                </li>
                                <li><a href="#">Fashionista</a>
                                </li>
                                <li><a href="#">Just 4 Fun</a>
                                </li>
                                <li><a href="#">Lifestyles</a>
                                </li>
                                <li><a href="#">Uncategorized</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Mixed Bag</a>
                                </li>
                                <li><a href="#">Stories dat inspire</a>
                                </li>
                                <li><a href="#">Techbits</a>
                                </li>
                                <li><a href="#">Videos</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>


                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Recent Posts</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                              <?php

                                $conn =mysqli_connect("localhost","root","","blog");
                                /* Check connection */
                                if(mysqli_connect_error()) {
                                  echo "Connection failed";
                                  printf("Error : %s",mysqli_connect_error());
                                }
                                  
                                $query = "SELECT * FROM `blogpost` ORDER BY doc DESC";// LIMIT 0 , 4";
                								$query1 = "SELECT * FROM `blogpost` ORDER BY doc DESC LIMIT 5 , 10";
                								
                                $comments = mysqli_query($conn, $query);
                								$comments1 = mysqli_query($conn, $query1);
                                                
                                while($row = mysqli_fetch_array($comments, MYSQL_ASSOC))
                                {
                                  $title = $row['title'];
                                  $title = htmlspecialchars($row['title'],ENT_QUOTES);
                							?>
                								
                              <li><a href="#"><?php echo $title; ?></a>
                              </li>

                              <?php 
  								              
                                } 
								
                								while($row = mysqli_fetch_array($comments1, MYSQL_ASSOC))
                								{
                								  $title = $row['title'];
                								  $title = htmlspecialchars($row['title'],ENT_QUOTES);
                  						?>
                  								
                							<li><a href="#"><?php echo $title; ?></a>
                							</li>
                							
                							<?php
                								}
                							?>
                  							
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</div>

</body>
</html>