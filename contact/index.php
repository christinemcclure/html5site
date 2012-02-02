<?php // this script creates the  email form

$contact_email="christine@christinemcclure.com";
$feedback= "<p class=\"clear\">I look forward to discussing any opportunities with you; simply fill out the form below.</p>";
$cssclass = "showForm";


// Check for form submission:
if (isset($_POST['submitted'])) {

	function spam_scrubber($value) {
	
		// List of very bad values:
		$very_bad = array('to:', 'cc:', 'bcc:', 'content-type:', 'mime-version:', 'multipart-mixed:', 'content-transfer-encoding:');
		
		// If any of the very bad strings are in the submitted value, return an empty string:
		foreach ($very_bad as $v) {
			if (stripos($value, $v) !== false) return '';
		}
		
		// Replace any newline characters with spaces:
		$value = str_replace(array( "\r", "\n", "%0a", "%0d"), ' ', $value);
		
		// Return the value:
		return trim($value);
	
	} // End of spam_scrubber() function.
	
	// Clean the form data:
	$scrubbed = array_map('spam_scrubber', $_POST);

	// Minimal form validation:
	if  (  (!empty($scrubbed['name'])) && (!empty($scrubbed['email'])) ) {
	
		// Create the body:
		$body = "Name: {$scrubbed['name']} \n E-mail: {$scrubbed['email']}
		\n Phone: {$scrubbed['phone']} \n {$scrubbed['message']}";
		$body = wordwrap($body, 70);
	
		// Send the email:
		mail($contact_email, "Mail from ChristineMcClure.com", $body, "From: {$scrubbed['email']}");

	$cssclass = "hideForm";
	$feedback= "<p class=\"clear\">Thank you for your message; I'll be in touch soon. Enjoy your day.</p>";
		
		
		// Clear $_POST (so that the form's not sticky):
		$_POST = array();
	
	} else {
		echo '<p>Please include both your name and e-mail address.</p>';
	}
	
} // End of main isset() IF.
?>
<?php include '../includes/head-stub.html' ?>

  <title>Christine McClure -- Contact</title>
</head>

<body id="contact">

<div class="page">
	
<?php include '../includes/header.html'; ?>
<?php include '../includes/nav.html'; ?>

  
<div id="content" class="clear">
	<h2>Contact Me</h2>
  <?php echo $feedback; ?>  
    <div id="showContactForm" class="<?php echo $cssclass; ?>"> <!--showForm to start-->	
    <form method="post" action="contact.php" id="contactForm">
      <p>Name:</p>
      <p><input type="text" name="name" id="name" /></p>
      <p>Email:</p>
      <p><input type="text" name="email" id="email" /></p>
      <p>Phone:</p>
      <p><input type="text" name="phone" id="phone" /></p>
      <p>Message:</p>
      <p><textarea name="message" cols="20" rows="5" id="message">
            <?php if (isset($_POST['question'])) echo $_POST['question']; ?>
            </textarea>
      </p>
      <p><input class="button" type="submit" name="submit" value="Send" id="submitButton" />
      <input type="hidden" name="submitted" value="TRUE" /></p>
    </form>
    </div>
		</div>

<?php include '../includes/footer.html'; ?>
</div>
<?php include '../js/site.js'; ?>
</body>

</html>
