<!DOCTYPE html>
<html>
<head>
	<title>Programmer's Club</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" href="https://use.typekit.net/njb6zth.css">
	<link rel="stylesheet" type="text/css"  href="bootstrap.css">
	<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-1629224702105865",
    enable_page_level_ads: true
  });
</script>
</head>
<body>
<div id="main">
	<nav>
<div class = "main">
<div class = "logo">
	<img src = "logo.png">
		<ul>
			<li><a href ="index.php">HOME</a></li>
			<li><a href ="projects.php">PROJECTS</a></li>
			<li><a href ="contact.php">CONTACT</a></li>
			<button class = "navy"><a href ="https://github.com/AmaanSingh"> Contact Us</a></button>
		</ul>
</div>
</div>
</div>
	</nav>
<div class = "Info">
	<h1>Contact</h1><br>
	<p> We are a small programming club who try to teach the students of John Swett Highschool, how to use code to invent and how to fix problems. Our main priority is to learn and master the skills of python, and later on, expanding our horizons to other languages. If you like to contact us for more information on our club, you can contact the President of our club at:</p><br>

													<h3>amaansingh160@gmail.com</h3><br>

	<h2> We meet in Mr. Bender's Room (34) at lunch. We meet every other Tuesday, alternating with the science club, and we meet every Thursday.</h2>
</div>
<div id="contact" action="contact.php" method="post">
  <div class="container">
    <div class="col-md-8">
      <div class="row">
        <div class="section-title">
          <h2>Get In Touch</h2>
          <p>Please fill out the form below to send us an email and we will get back to you as soon as possible.</p>
        </div>
        <form name="sentMessage" id="contactForm" novalidate>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" id="name" class="form-control" placeholder="Name" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" id="email" class="form-control" placeholder="Email" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="form-group">
            <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
            <p class="help-block text-danger"></p>
          </div>
          <div id="success"></div>
          <button type="submit" class="btn btn-custom btn-lg">Send Message</button>
        </form>
      </div>
    </div>

<div class = "Sign">
	<h1> PGC</h1>
</div>
<?php
	$name = $_POST['name'];
	$email_address = $_POST['email'];
	$message = $_POST['message'];
	// Create the email and send the message
	$to = 'amaansingh160@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
	$email_subject = "Website Contact Form:  $name";
	$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nMessage:\n$message";
	$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
	$headers .= "Reply-To: $email_address";
 // Check for empty fields
 if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message'])	|| !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
	  echo "No arguments Provided!";
	  return false;
  }else {
		mail($to,$email_subject,$email_body,$headers);
		return true;
	}
?>
<div class = "footer">
	<div><li><a href = "https://github.com/AmaanSingh"><img src="glyphicons-social-22-github.png"></li></div>
	<div><li><a href = "contact.php"><img src="glyphicons-social-14-e-mail-envelope.png"></a></li></div>
	<div><li><a href = "disclaimer.php">Disclaimer</a></li></div>
	<div class = "computer"><img src="logo.png"></div>
	<div class = "jshs"><img src = "jshslogo.png"></div>
</div>
</body>
</html>
