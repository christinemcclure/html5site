<?php 
	include($_SERVER['DOCUMENT_ROOT']."/includes/form-validate.php");
	include($_SERVER['DOCUMENT_ROOT']."/includes/head-stub.html"); 
	$formAction = "/contactPhoto/";
?>
  <title>Christine McClure -- Contact</title>
</head>
<body id="contactPhoto">
<div class="page">
	<?php include($_SERVER['DOCUMENT_ROOT']."/includes/header.html"); ?>
	<?php include($_SERVER['DOCUMENT_ROOT']."/includes/nav.html"); ?>
  <section>
		<h1>Contact Me</h1>
	<?php include($_SERVER['DOCUMENT_ROOT']."/includes/form.php"); ?>
  </section>
	<?php include($_SERVER['DOCUMENT_ROOT']."/includes/footer.html"); ?>
</div>

</body>
</html>
