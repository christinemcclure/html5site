<?php 
	include '../includes/form-validate.php'; 
	include '../includes/head-stub.html';
?>
  <title>Christine McClure -- Contact</title>
</head>
<body id="contactLib">
<div id="contactFormPage" class="page">
<div id="content" class="clear">
  <?php echo $feedback; ?>  
    <div id="showContactForm" class="<?php echo $cssclass; ?>"> <!--showForm to start-->	
    <form method="post" action="/contactLib/" id="contactForm">
      <p>Name:</p>
      <p><input type="text" name="name" id="name" /></p>
      <p>Email:</p>
      <p><input type="text" name="email" id="email" /></p>
      <p>Phone:</p>
      <p><input type="text" name="phone" id="phone" /></p>
      <p>Message:</p>
      <p><textarea name="message" cols="20" rows="5" id="message">
            <?php if (isset($_POST['message'])) echo $_POST['message']; ?>
            </textarea>
      </p>
      <p><input class="button" type="submit" name="submit" value="Send" id="submitButton" />
      <input type="hidden" name="submitted" value="TRUE" /></p>
    </form>
    </div>
		</div>
  <?php include '../includes/footer.html' ?> 
</div>


<script type="text/javascript">
	$(document).ready(function() {
		// set initial nav state for this page
			setNav("lib", "libContact");			
	});
</script>
</body>
</html>
