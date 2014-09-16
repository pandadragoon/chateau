<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $pageTitle; ?></title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=IM+Fell+English+SC|Raleway' rel='stylesheet' type='text/css'>
		<link href="css/main.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
		<?php include('contact-modal.php'); ?>
    <header>
      	<div class="container">
				<div id="branding" class="clearfix">
				<a id="logo" href="index.php">
					<img class="img-responsive pull-left" src="img/chateau-logo.jpg" />
					<h1 class="fancy">Wilde's Chateau <span id="emp">24</span></h1>
				</a>
				<div id="social_media">
					<ul>
						<li><a href="https://www.facebook.com/Chateau24" class="icon-facebook" id="facebook"></a></li>
						<li><a href="https://plus.google.com/115184087779748309954/about?gl=us&hl=en" class="icon-googleplus" id="googleplus"></a></li>
						<li><a href="https://twitter.com/Chateau24" class="icon-twitter" id="twitter"></a></li>
						<li><a href="http://www.yelp.com/biz/wildes-chateau-24-lawrence" class="icon-yelp" id="yelp"></a></li>
					</ul>
				</div>
			</div>
			</div>
			<!-- Static navbar -->
      <div class="navbar navbar-inverse" role="navigation">
        <div class="container-fluid container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li <?php if($pageActive == "index"){echo "class='active'";} ?>><a href="index.php">Home</a></li>
              <li <?php if($pageActive == "event"){echo "class='active'";} ?>><a href="event.php">Events</a></li>
              <li <?php if($pageActive == "photo"){echo "class='active'";} ?>><a href="photo.php">Photos</a></li>
							<li <?php if($pageActive == "about"){echo "class='active'";} ?>><a href="about.php">About</a></li>
              <li <?php if($pageActive == "contact"){echo "class='active'";} ?>><a data-toggle="modal" href="#contactModal" class="contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>
		
		</header>
