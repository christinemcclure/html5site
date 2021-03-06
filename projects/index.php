<?php include($_SERVER['DOCUMENT_ROOT']."/includes/head-stub.html"); ?>
<?php include($_SERVER['DOCUMENT_ROOT']."/includes/gallery-stub.html"); ?>
  <title>Christine McClure -- Portfolio</title>
</head>

<body id="projects">

<div class="page">
<?php include($_SERVER['DOCUMENT_ROOT']."/includes/header.html"); ?>
<?php include($_SERVER['DOCUMENT_ROOT']."/includes/nav.html"); ?>

	<section>
  	<h1 class="top">Projects</h1>
		<p>Here are a few things I've developed over the years...</p>
    <h2>Portfolio</h2>
    <p><a href="http://portfolio.christinemcclure.com">portfolio.christinemcclure.com</a> is an online book of graphic design and typography assignments created for a document design course.</p>
		<h2>Websites</h2>
		<p>This one, of course. The latest rendition of christinemcclure.com is an exercise in:</p>
    <div class="columnBlock">
			<ul>
	      <li><p><strong>Mobile first</strong> design methodology: Planning for the mobile site first, instead of later. This allows you to focus on the most important content of the site, rather than filling up all the real estate of a traditional desktop monitor simply because there is space.</p><p>Read more about <a href="http://www.lukew.com/ff/entry.asp?933">mobile first</a>.</p></li>
     	</ul>
     </div>
    <div class="columnBlock">
			<ul>
        <li><p><strong>Responsive web design:</strong> Users now have so many devices they can use to access your site that it is no longer feasible to create a single, fixed-width design style. Resize your browser to see how the layout of this site changes.</p> <p>Read more about <a href="http://www.abookapart.com/products/responsive-web-design">responsive web design</a>.</p>
        </li>
      </ul>
    </div>
    <div class="columnBlock">
			<ul>
        <li><p>Setting type to a <strong>baseline grid:</strong> Aligning blocks of text into rows and columns allows for a much better user experience. This was easily done for print products and has only recently been developed for the web by intrepid designers.</p> <p>Read more about <a href="http://www.thegridsystem.org">baseline grids</a>.</p>
        </li>
	    </ul>
    </div>
    <p class="clear">I also designed and developed Galvin Library's <a href="http://m.library.iit.edu">first mobile website.</a> This site (released July 2011) uses the jQuery Mobile fremework.</p>

    <h2>Images</h2>
			<ul id="ulGallery1" class="print">
				<li><p>Business card for a Chicago tavern</p><img src="/img/projects/carys_card.jpg" alt="Satirical book cover in pulp fiction style of a man telling a woman: Get your coat, dollface. We\'re going to Cary's." /></li>
				<li><p>Logo for a software testing company</p><img src="/img/projects/11th-hr.png" alt="Eleventh Hour is the company name, and the logo features a stylized clock with the 11 marker in red." /></li>
				<li><p>Promotional t-shirt for a software testing company</p><img src="/img/projects/shirtBack.jpg" alt="Photo of Dr. Frankenstein and Igor in the lab, about to bring the monster to life." /></li>
				<li><p>Presentation slide</p><img src="/img/projects/kolb.png" alt="Image of Kolb\'s Experiential Learning Styles" /></li>
			</ul>
    <div id="gallery1" class="photoSwipe">
		</div>

</section>

<?php include($_SERVER['DOCUMENT_ROOT']."/includes/footer.html"); ?>
</div>
	<script type="text/javascript">
		(function(window, Util, PhotoSwipe){			
			Util.Events.domReady(function(e){				
				var gallery1;		
				gallery1 = PhotoSwipe.attach(
					[
						{ url: '/img/projects/carys_card.jpg', 
								alt:'Satirical book cover in pulp fiction style of a man telling a woman: "Get your coat, dollface. We\'re going to Cary\'s."',
								caption: 'Business card for a Chicago tavern'},
						{ url: '/img/projects/11th-hr.png', 
								alt:'Eleventh Hour is the company name, and the logo features a stylized clock with the 11 marker in red.',
								caption: 'Logo for a software testing company'},
						{ url: '/img/projects/shirtBack.jpg', 
								alt:'photo of Dr. Frankenstein and Igor in the lab, about to bring the monster to life.',
								caption:'Promotional t-shirt for a software testing company'},
						{ url: '/img/projects/kolb.png', 
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
			setAllGalleryHeights('.photoSwipe', 500);								
	});
</script>
</body>

</html>
