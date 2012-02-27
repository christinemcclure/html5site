<?php 
	include '../includes/form-validate.php'; 
	include '../includes/head-stub.html';
	$formAction = "/contactLib/";
?>
  <title>Christine McClure -- Contact</title>
</head>
<body id="contactLib">
<div class="page">
	<?php include '../includes/header.html'; ?>
  <?php include '../includes/nav.html'; ?>
  <section>
    <?php echo $feedback; ?>  
      <div id="showContactForm" class="<?php echo $cssclass; ?>"> <!--showForm to start-->	
      <form method="post" action=<?php echo $formAction; ?> id="contactForm">
    	  <input type="text" name="name" id="name" placeholder="Name"/>
  	    <input type="email" name="email" id="email" placeholder="E-mail address" required/>
  	    <textarea name="message" id="message"  placeholder="Your message here" required /></textarea>
	      <input class="button" type="submit" name="submit" value="Send" id="submitButton" />
	      <input type="hidden" name="submitted" value="TRUE" />
  	  </form>
      </div>
  </section>
  <?php include '../includes/footer.html'; ?>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		// set initial nav state for this page
			setNav("lib", "libContact");			
	});
</script>
</body>
</html>
