<?php include($_SERVER['DOCUMENT_ROOT']."/includes/head-stub.html"); ?>

  <title>Christine McClure -- The Lab</title>
</head>

<body id="lab">

<div class="page">
<?php include($_SERVER['DOCUMENT_ROOT']."/includes/header.html"); ?>
<?php include($_SERVER['DOCUMENT_ROOT']."/includes/nav.html"); ?>
<section>	
    <h1 class="top">The Lab</h1>
    <p>What's on the back burner?</p>

		<div class="columnEven">
      <h2>Ruby on Rails</h2>
        <p>I've been learning a bit about the Ruby programming language using the Rails framework. It's slow-going because it's such a terse language, but you can see a small example of an application I'm currently developing at <a href="http://whispering-mesa-7403.herokuapp.com/">the Heroku site.</a></p>
    </div>

		<div class="columnEven">
      <h2>WordPress</h2>
        <p>This is my first outing with WordPress. I purchased a flexible, grid-based theme (Modernize) and modified it to suit my needs. I got to know my way around
        plugins as well, using them to simplify the admin interface for editors and pull feed information from a google calendar. Done for one of
        Chicago's <a href="http://caryslounge.com/">finest neighborhood pubs</a>.</p>
    </div>
  
    <div class="columnEven">
        <h2>Honeypot Form Validation</h2>
        <p> I started getting  some spam, so I added a <a href="http://devgrow.com/simple-php-honey-pot/">honeypot</a> to my mail forms. This is a hidden form element that only robots scripts will fill in. You check the element's value once the form is submitted. If it isn't empty, you can reject bot spam emails and keep your inbox clean. </p>
    </div>

    <div class="columnEven">
	    <h2>Background Designs</h2>
      <p>This entry used to be "redesigning my site," but now that it's up and running I'm playing around with some of these great background ideas from <a href="http://www.noupe.com/design/outstanding-website-background-guide-60-impressive-resources.html">this article</a>.</p>
    </div>
    
</section>    

<?php include($_SERVER['DOCUMENT_ROOT']."/includes/footer.html"); ?>
</div>

</body>

</html>