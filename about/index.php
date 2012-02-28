<?php include '../includes/head-stub.html' ?>

  <title>Christine McClure -- About</title>

</head>

<body id="about">

<div class="page">
<?php include '../includes/header.html'; ?>
<?php include '../includes/nav.html'; ?>
	
<section>
	<h1 class="top">About Me</h1>
	<h2>Exhibitions</h2>
  
    <h3>Portals</h3>
    <h4>Looptopia, Chicago IL. May 2007</h4>
    <p class="floatLeft">This exhibit explored how people experience art. The images were encased in self-lit 6 x 6" boxes, with a large plastic loupe (magnifying glass) mounted to the top. Rather than discretely passing by the images, viewers had to walk directly up to them and peer inside. The images were arranged in groups of three, and let users explore alternate worlds of religion, nature and mythology.</p>
    <p class="floatLeft"><a href="/art">View gallery</a> </p><img class="floatLeft" src="/img/fineart/portal.png" alt="construction of portal frame." />

    	<ul class="clear">
        <li>
          <h3>Retrospective</h3> 
          <h4>Gallery 302, Chicago IL. August 2004</h4>
          <p>This exhibit showcased my favorite digital and silver gelatin prints, including the new piece "Persephone's Garden."</p>
        </li>
        <li>    
          <h3>Untitled</h3> 
          <h4>Around the Coyote Festival, Chicago IL. September 2003</h4>
          <p>Assorted silver gelatin prints</p>
        </li>
        <li>
          <h3>180 Minutes</h3>
          <h4>Residency Program Exhibition, Vital Projects gallery, Chicago IL. February 2003</h4>
          <p>This exhibit was a visual representation of living with illness. 9x9" Silver gelatin prints were mounted between sheets of plexiglass, and digital images (also between plexiglass) printed on transparent film were "floated" above the prints using plastic tubing to keep the two images apart.</p>
          <p>The prints showed the external word, while the transparencies showed the internal.</p>
        </li>
        <li>
          <h3>Untitled</h3> 
          <h4>Around the Coyote Festival, Chicago IL. August 2002</h4>
          <p>Assorted silver gelatin prints</p>
        </li>
      </ul>    
    
	<h2>Education</h2>
			<ul>
        <li>
          <h3>Residency Program, Vital Projects Studio, Chicago, IL</h3>
          <p>A three month residency designed for advanced photographers who wanted to explore creating a cohesive body of work for exhibition. 2002-2003</p>
        </li>
      <li>
		    <h3>Courses:</h3>
				<p>Basic exposure and printing, advanced printing, color printing, digital imaging, portraiture lighting. 1994 - present</p>
      </li>
    </ul>
</section>
<?php include '../includes/footer.html'; ?>
</div>

<script type="text/javascript">
	$(document).ready(function() {												 
		setNav("photo", "about");
			$(window).resize(function() {
					clearTimeout(resizeTimer);
					resizeTimer = setTimeout(setNav("photo", "about"), 2000);
			});

	});
</script>

</body>

</html>
