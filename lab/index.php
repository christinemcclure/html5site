<?php include '../includes/head-stub.html' ?>

  <title>Christine McClure -- The Lab</title>
</head>

<body id="lab">

<div class="page">
	
<?php include '../includes/header.html'; ?>
<?php include '../includes/nav.html'; ?>
<section>	
    <h1 class="top">The Lab</h1>
    <p>What's on the back burner?</p>

		<div class="columnEven">
	    <h2>New Home Page</h2>
      <p>Once I put my new site live, I realized that I hated the layout (of course). I had spent so much time 
      thinking about responsive-ness and mobile-first that I hadn't paid enough attention to the design. 
      So here is the <a href="http://dev.christinemcclure.com">new home page</a> I'm envisioning.</p>
    </div>  	

		<div class="columnEven">
      <h2>Ruby on Rails</h2>
      <p>I've been learning a bit about the Ruby programming language using the Rails framework. It's slow-going because it's such a terse language, but you can see a small example of an application I'm currently developing at <a href="http://electric-ice-8535.heroku.com/">the Heroku site.</a></p>
		</div>
</section>    

<?php include '../includes/footer.html'; ?>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		// set initial nav state for this page
			setNav("lib", "lab");			
	});
</script>
</body>

</html>