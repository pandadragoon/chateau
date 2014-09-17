<!--Modal for the Contact Section -->

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$subject = trim($_POST['subject']);
	$message = trim($_POST['message']);
	$some_address = trim($_POST['address']);

	$full_email = "";
	$full_email = $full_email . "Name: " . $name . "\n";
	$full_email = $full_email . "Email: " . $email . "\n";
	$full_email = $full_email . "Subject: " . $subject . "\n";
	$full_email = $full_email . "Message: " . $message . "\n";
	
	if ($name == "" OR $email == "" OR $subject == "" OR $message == ""){
		header("Location:contact-modal.php?status=fill_error");
		exit;
		}else {
		header("Location: contact-modal.php?status=thanks");
		exit;}
	
	foreach($_POST as $value){
		if(stripos($value, 'Content-Type:') !== FALSE){
		header("Location:contact-modal.php?status=fill_error");
		exit;
		}
		else {
		header("Location: contact-modal.php?status=thanks");
		exit;}
	}
	
	if ($some_address != ""){
		header("Location: contact-modal.php?status=thanks");
		exit;
	}
	else {
		header("Location: contact-modal.php?status=thanks");
		exit;}
		
	require_once("phpmailer/class.phpmailer.php");
$mail = new PHPMailer();

if (!$mail->ValidateAddress($email)){
        echo "You must specify a valid email address.";
        exit;
    }

    $email_body = "";
    $email_body = $email_body . "Name: " . $name . "<br>";
    $email_body = $email_body . "Email: " . $email . "<br>";
		$email_body = $email_body . "Subject: " . $subject . "<br>";
    $email_body = $email_body . "Message: " . $message;

    $mail->SetFrom($email, $name);
    $address = "some@email.com";
    $mail->AddAddress($address, "Chateau");
    $mail->Subject    = "Chateau Contact Form Submission | " . $subject;
    $mail->MsgHTML($email_body);
		
		 if(!$mail->Send()) {
      echo "There was a problem sending the email: " . $mail->ErrorInfo;
      exit;
    }
		else {
			header("Location: contact-modal.php?status=thanks");
		exit;}
}


?>
<?php if(isset($_GET["status"]) AND $_GET["status"] == "thanks"){ $pageActive = "contact";?>
	<!DOCTYPE html>
	<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Wilde's Chateau 24 | Contact Us</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=IM+Fell+English+SC|Raleway' rel='stylesheet' type='text/css'>
		<link href="../css/main.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
		</head>
		<body>
			<header>
      	<div class="container">
					<div id="branding" class="clearfix">
					<a id="logo" href="../index.php">
						<img class="img-responsive pull-left" src="../img/chateau-logo.png" />
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
              <li <?php if($pageActive == "index"){echo "class='active'";} ?>><a href="../index.php">Home</a></li>
              <li <?php if($pageActive == "event"){echo "class='active'";} ?>><a href="../event.php">Events</a></li>
              <li <?php if($pageActive == "photo"){echo "class='active'";} ?>><a href="../photo.php">Photos</a></li>
							<li <?php if($pageActive == "about"){echo "class='active'";} ?>><a href="../about.php">About</a></li>
              <li <?php if($pageActive == "contact"){echo "class='active'";} ?>><a data-toggle="modal" href="#contactModal" class="contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>
			</header>
			<section class="container center">
				<h1>Contact</h1>
				<p>Thank you for the e-mail.  We will get in touch with you shortly.</p>
				<a href="../index.php">Close</a>
			</section>
			<footer>
				<p class="center">&copy;<?php echo date('Y'); ?> Wilde's Chateau</p>
			</footer>
			</div>
			<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
			<!-- Include all compiled plugins (below), or include individual files as needed -->
			<script src="js/bootstrap.min.js"></script>
  </body>
</html>
		

<?php } elseif(isset($_GET["status"]) AND $_GET["status"] == "fill_error"){ $pageActive = "contact"; ?>
	<p>There was an error processing your request. Please make sure all fields were filled out.</p>
	<a href="../index.php">Back</a>
<?php } else { ?>

<div class="modal fade" id="contactModal">
	<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="submit" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
					<h2 class="modal-title">Contact Us</h2>
				</div>
				<div class="modal-body">
					<div class="row">
							<div class="col-sm-5">
								
								<h2 class="fancy center">Wilde's Chateau 24</h2>
								
								<address class="center">
									2412 Iowa St <br>
									Lawrence, KS 66046
								</address>
									<a href="mailto:info@wildeschateau.com" class="center-a">info@wildeschateau.com</a>
									<a href="tel:785-856-1514" class="center-a">(785) 856-1514</a>
							</div>
							<div class="col-sm-7">
								<form action="inc/contact-modal.php" method="post" role="form">
									<div class="form-group">
										<label for="name">Name</label>
										<input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
									</div>
									<div class="form-group">
										<label for="email">Email address</label>
										<input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
									</div>
									<div class="form-group">
										<label for="subject">Subject</label>
										<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject of Email">
									</div>
									<div class="form-group">
										<label for="message">Message</label>
										<textarea class="form-control" rows="6" name="message" id="message" placeholder="Message"></textarea>
									</div>
										<input style="display: none;" type="text" name="address" id="address" placeholder="Humans: Ignore, do not fill out"></input>
									<button type="submit" class="btn send">Submit</button>
								</form>
							</div>
					</div>
				</div>
				<div class="modal-footer">
					<div id="modal_media">
						<ul id="modal_social">
							<li><a href="https://www.facebook.com/Chateau24" class="icon-facebook" id="modal_facebook"></a></li>
							<li><a href="https://plus.google.com/115184087779748309954/about?gl=us&hl=en" class="icon-googleplus" id="modal_googleplus"></a></li>
							<li><a href="https://twitter.com/Chateau24" class="icon-twitter" id="modal_twitter"></a></li>
							<li><a href="http://www.yelp.com/biz/wildes-chateau-24-lawrence" class="icon-yelp" id="modal_yelp"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
</div>
<?php } ?>