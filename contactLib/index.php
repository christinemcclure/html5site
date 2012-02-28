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
	  <?php include '../includes/form.php'; ?>
  </section>
  <?php include '../includes/footer.html'; ?>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		// set initial nav state for this page
			setNav("lib", "contactLib");			
	});
</script>
</body>
</html>
