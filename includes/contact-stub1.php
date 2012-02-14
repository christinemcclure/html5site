<?php // this script creates the  email form

$contact_email="christine@christinemcclure.com";
$feedback= "<p class=\"formFeedback\">I look forward to discussing any opportunities with you; simply fill out the form.</p>";
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

		// Form validation passed to browser
			
		// Create the body:
		$body = "Name: {$scrubbed['name']} \n E-mail: {$scrubbed['email']}
		\n Phone: {$scrubbed['phone']} \n {$scrubbed['message']}";
		$body = wordwrap($body, 70);
	
		// Send the email:
		mail($contact_email, "Mail from ChristineMcClure.com", $body, "From: {$scrubbed['email']}");

	$cssclass = "hideForm";
	$feedback= "<p class=\"formFeedback\">Thank you for your message; I'll be in touch soon. Enjoy your day.</p>";
		
		
		// Clear $_POST (so that the form's not sticky):
		$_POST = array();
	
} // End of main isset() IF.
?>
<?php include '../includes/head-stub.html' ?>

  <title>Christine McClure -- Contact</title>
</head>

<body id="contact">

<div class="page">
	
<?php include 'header.html'; ?>
<?php include 'nav.html'; ?>

  

<section>
	<h1 class="top">Contact Me</h1>
		  <?php echo $feedback; ?>  
      <p>Looking for your photos? You can order <a href="http://christinemcclure.smugmug.com/">prints online</a>.</p>
  		<div class="formContainer">
      	<div id="showContactForm" class="<?php echo $cssclass; ?>"> <!--showForm to start-->	
