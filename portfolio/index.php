<?php include '../includes/head-stub.html' ?>

	<link href="../js/photoSwipe/photoswipe.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript" src="../js/photoSwipe/lib/klass.min.js"></script>
	<script type="text/javascript" src="../js/photoSwipe/code.photoswipe-3.0.4.min.js"></script>	

  <title>Christine McClure -- Portfolio</title>
</head>

<body id="portfolio">

<div class="page">
	
<?php include '../includes/header.html'; ?>
<?php include '../includes/nav.html'; ?>

	


	<section>
  	<h1 class="top">Portfolio</h1>
		<p>Here are a few things I've designed over the years...</p>
		<h2>Websites</h2>
  
    <ul>
      <li>This one, of course. The latest rendition of christinemcclure.com is an exercise in:
          <ul class="threeColumnBlock">
              <li><p><strong>Mobile first</strong> design methodology: This centers your site around planning for a mobile site, forcing the design to focus on the most importent content of the site, rather than trying to fill up all the real estate of a traditional desktop monitor.</p><p>Read more about <a href="http://www.lukew.com/ff/entry.asp?933">mobile first.</a></p></li>
              <li><p><strong>Responsive web design:</strong> Users now have so many devices they can use to access your site that it is no longer feasible to create a single, fixed-width design style. Resize your browser to see how the layout of this site changes.</p> <p>Read more about <a href="http://www.abookapart.com/products/responsive-web-design">responsive web design.</a></p>
              </li>
              <li><p>Setting type to a <strong>baseline grid:</strong> Aligning blocks of text into rows and columns allows for a much better user experience. This was easily done for print products and has only recently been developed for the web by intrepid designers.</p> <p>Read more about <a href="http://www.thegridsystem.org">baseline grids.</a></p></li>
          </ul> </li>
      <li class="clear">I also designed and developed Galvin Library's <a href="http://m.library.iit.edu">first mobile website.</a> This site (released July 2011) uses the jQuery Mobile fremework.</li>
    </ul>

    <h2>Images</h2>
    <div id="gallery1" class="photoSwipe">
			<ul>
				<li><img src="/img/portfolio/carys_card.png" alt="Satirical book cover in pulp fiction style of a man telling a woman: Get your coat, dollface. We\'re going to Cary\'s." /></li>
				<li><img src="/img/portfolio/11th-hr.png" alt="Eleventh Hour is the company name, and the logo features a stylized clock with the 11 marker in red." /></li>
				<li><img src="/img/portfolio/shirtBack.jpg" alt="Photo of Dr. Frankenstein and Igor in the lab, about to bring the monster to life." /></li>
				<li><img src="/img/portfolio/11th-hr.png" alt="Image of Kolb\'s Experiential Learning Styles" /></li>
			</ul>
	</div>

</section>

<?php include '../includes/footer.html'; ?>
</div>
	<script type="text/javascript">
		(function(window, Util, PhotoSwipe){			
			Util.Events.domReady(function(e){				
				var gallery1;		
				gallery1 = PhotoSwipe.attach(
					[
						{ url: '/img/portfolio/carys_card.png', 
								alt:'Satirical book cover in pulp fiction style of a man telling a woman: "Get your coat, dollface. We\'re going to Cary\'s."',
								caption: 'Business card for a Chicago tavern'},
						{ url: '/img/portfolio/11th-hr.png', 
								alt:'Eleventh Hour is the company name, and the logo features a stylized clock with the 11 marker in red.',
								caption: 'Logo for a software testing company'},
						{ url: '/img/portfolio/shirtBack.jpg', 
								alt:'photo of Dr. Frankenstein and Igor in the lab, about to bring the monster to life.',
								caption:'Promotional t-shirt for a software testing company'},
						{ url: '/img/portfolio/kolb.png', 
								alt:'image of Kolb\'s Experiential Learning Styles',
								caption: 'Presentation graphic'}								
					],
					{
						target: window.document.querySelectorAll('#gallery1')[0],
						getImageSource: function(obj){
							return obj.url;
						},
						getImageCaption: function(obj){
							return obj.caption;
						}
					}
				);
				gallery1.show(0);				
			});						
		}(window, window.Code.Util, window.Code.PhotoSwipe));		
	</script>

<script type="text/javascript">
	$(document).ready(function() {
		// set initial nav state for this page
			setNav("lib", "portfolio");	
			setAllGalleryHeights('.photoSwipe', 500);								
	});
</script>
</body>

</html>
