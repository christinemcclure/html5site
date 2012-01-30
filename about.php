<?php include 'includes/head-stub.html' ?>

  <title>Christine McClure -- About</title>

</head>

<body id="about">

<div class="page">
	
<?php include 'includes/header.html'; ?>
<nav>
	<ul class="mainNav navList">
  	<li id="photo">Photography</li>
  	<li id="lib">Librarianship</li>
  </ul>    

   <ul id="photoNav" class="navList">
    <li><a href="about.php">About</a></li>
    <li><a href="pricing.php">Pricing</a></li>
    <li><a href="fine-art.php">Fine Art</a></li>
    <li><a href="portraits.php">Portraiture</a></li>
    <li><a href="events.php">Events</a></li>
    <li><a href="travel.php">Travel</a></li>
    <li><a href="contact.php">Contact</a></li>
  </ul>
  </nav>

  <ul id="libNav" class="navList">
    <li><a href="resume.php">Resum&eacute;</a></li>
    <li><a href="portfolio.php">Portfolio</a></li>
    <li><a href="the-lab.php">The Lab</a></li>
    <li><a href="contact.php">Contact</a></li>
  </ul>
</nav>

<nav>
  <select>
    <option value="" selected="selected">Photography</option> 

    <option value="about.php">About</option>
    <option value="pricing.php">Pricing</option>
    <option value="fine-art.php">Fine Art Gallery</option>
    <option value="portraits.php">Portraiture Gallery</option>
    <option value="events.php">Events Gallery</option>
    <option value="events.php">Travel Gallery</option>
    <option value="contact.php">Contact</option>
  </select> 
</nav>

<nav>
  <select>
    <option value="" selected="selected">Librarianship</option> 

    <option value="resume.php">Resum&eacute;</option>
    <option value="portfolio.php">Portfolio</option>
    <option value="the-lab.php">The Lab</option>
    <option value="contact.php">Contact</option>
  </select> 
</nav>

<section>
	<h1>Exhibitions</h1>
  
    <h2>Portals</h2>
    <img class="floatRight" src="/img/fineart/portal.png" alt="construction of portal frame." /><p>This exhibit explored how people experience art. The images were encased in self-lit 6 x 6" boxes, with a large plastic loupe (magnifying glass) mounted to the top. Rather than discretely passing by the images, viewers had to walk directly up to them and peer inside. The images were arranged in groups of three, and let users explore alternate worlds of religion, nature and mythology.</p>
    <p><a href="fine-art.php">View gallery</a></p>

    <h2>Retrospective Gallery 302, Chicago IL. August 2004</h2>
		<p>This exhibit showcased my favorite digital and silver gelatin prints, including the new piece "Persephone's Garden."</p>
    
		<h2>Untitled Around the Coyote Festival, Chicago IL. September 2003</h2>
		<p>Assorted silver gelatin prints</p>

		<h2>180 Minutes: Residency Program Exhibition, Vital Projects gallery, Chicago IL. February 2003</h2>

		<p>This exhibit was a visual representation of living with illness. 9x9" Silver gelatin prints were mounted between sheets of plexiglass, and digital images (also between plexiglass) printed on transparent film were "floated" above the prints using plastic tubing to keep the two images apart.</p>
		<p>The prints showed the external word, while the transparencies showed the internal.</p>

		<h2>Untitled Around the Coyote Festival, Chicago IL. August 2002</h2>
		<p>Assorted silver gelatin prints</p>
</section>
<section>
	<h1>Education</h1>
		
  	<h2>Residency Program, Vital Projects Studio, Chicago, IL</h2>
		<p>A three month residency designed for advanced photographers who wanted to explore creating a cohesive body of work for exhibition. 2002-2003</p>
    <h2>Courses:</h2>
		<p>Basic exposure and printing, advanced printing, color printing, digital imaging, portraiture lighting. 1994 - present</p>
</section>
<?php include 'includes/footer.html'; ?>
</div>

<script type="text/javascript">
$(document).ready(function() {

	$('li#photo').click(function () {
		$('ul#libNav').hide();
		$('ul#photoNav').toggle('medium');
	});

	$('li#lib').click(function () {
		$('ul#photoNav').hide();
		$('ul#libNav').toggle('medium');
	});
	
	
	$("nav select").change(function() {
		window.location = $(this).find("option:selected").val();
	});
});
</script>

</body>

</html>
