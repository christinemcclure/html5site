<?php include '../includes/head-stub.html' ?>

	<link href="../js/photoSwipe/photoswipe.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript" src="../js/photoSwipe/lib/klass.min.js"></script>
	<script type="text/javascript" src="../js/photoSwipe/code.photoswipe-3.0.4.min.js"></script>	

  <title>Christine McClure -- Fine Art Photography</title>
</head>

<body id="art">

<div class="page">
	
<?php include '../includes/header.html'; ?>
<?php include '../includes/nav.html'; ?>

	<section>
    <h1 class="firstH1">Portals</h1>
    <p class="column">This exhibit explored how people experience art. The images were encased in self-lit 6 x 6" boxes, with a large plastic loupe (magnifying glass) mounted to the top. Rather than discretely passing by the images, viewers had to walk directly up to them and peer inside. The images were arranged in groups of three, and let users explore alternate worlds of religion, nature and mythology.</p>
    <img src="/img/fineart/portal.png" alt="construction of portal frame." />

    <h2><strong>Focus</strong> (Religion as barrier)</h2>
    <h3>Jerusalem, Israel</h3>
    <div id="gallery1" class="photoSwipe"></div>

    <h2><strong>Macro</strong> (Life in the details)</h2>
    <h3>Chicago, Illinois</h3>
    <div id="gallery2" class="photoSwipe"></div>

    <h2><strong>Persephone's Garden</strong> (How did she pass the time?)</h2>
    <h3>Chicago, Illinois</h3>
    <div id="gallery3" class="photoSwipe"></div>

    <h2><strong>Perspective</strong> (Religion from a distance)</h2>
    <h3>Jerusalem, Israel</h3>
    <div id="gallery4" class="photoSwipe"></div>


</section>

<?php include '../includes/footer.html'; ?>
</div>
	<script type="text/javascript">
		(function(window, Util, PhotoSwipe){			
			Util.Events.domReady(function(e){				
				var gallery1, gallery2, gallery3, gallery4, gallery5, gallery6;
				gallery1 = PhotoSwipe.attach(
					[
						{ url: '/img/fineart/focus-1.jpg', 
								alt:'Circular photo. Top half is out-of-focus dark shapes. Bottom half is the top portion of a gate (barrier) in up-close detail.'},
						{ url: '/img/fineart/focus-2.jpg', 
								alt:'Circular photo. Top half is slightly out-of-focus dark shapes. Bottom half is slightly out-of-focus gate (barrier).'},
						{ url: '/img/fineart/focus-3.jpg', 
								alt:'Circular photo. Top half shows orthodox Jewish men praying at the Kotel (Wailing Wall) in Jerusalem. Bottom half is out-of-focus gate (barrier).'}
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
				gallery2 = PhotoSwipe.attach(
					[
						{ url: '/img/fineart/macro-1.jpg', 
								alt:'Circular photo of a succulent plant (unknown species) taken at the Garfield Park Conservatory in Chicago, Illinois.'},
						{ url: '/img/fineart/macro-2.jpg', 
								alt:'Circular photo of a succulent plant (unknown species) taken at the Garfield Park Conservatory in Chicago, Illinois.'},
						{ url: '/img/fineart/macro-3.jpg', 
								alt:'Circular photo of a succulent plant (unknown species) taken at the Garfield Park Conservatory in Chicago, Illinois.'}
					],
					{
						target: window.document.querySelectorAll('#gallery2')[0],
						getImageSource: function(obj){
							return obj.url;
						},
						getImageCaption: function(obj){
							return obj.caption;
						}
					}
				);				
				gallery3 = PhotoSwipe.attach(
					[
						{ url: '/img/fineart/persephone-1.jpg', 
								alt:'Digitally-manipulated image of cement planters with overly-large blue plant erupting from one of them.'},
						{ url: '/img/fineart/persephone-2.jpg', 
								alt:'Digitally-manipulated image of a decrepit Chicago mansion with overly large cacti as the front lawn.'},
						{ url: '/img/fineart/persephone-3.jpg', 
								alt:'Digitally-manipulated image of a large fern-like plant in grayscale growing out of large red rocks (magnified pebbles).'}
					],
					{
						target: window.document.querySelectorAll('#gallery3')[0],
						getImageSource: function(obj){
							return obj.url;
						},
						getImageCaption: function(obj){
							return obj.caption;
						}
					}
				);				
				gallery4 = PhotoSwipe.attach(
					[
						{ url: '/img/fineart/Perspective-1.jpg', 
								alt:'Digitally-manipulated image of the Kotel made to like very small by perspective.'},
						{ url: '/img/fineart/Perspective-2.jpg', 
								alt:'Digitally-manipulated image of the Jerusalem skyline with the Dome of the Rock made to like very small by perspective.'},
						{ url: '/img/fineart/Perspective-3.jpg', 
								alt:'Digitally-manipulated image of the Church of the Holy Sepulchre made to like very small by perspective.'}
					],
					{
						target: window.document.querySelectorAll('#gallery4')[0],
						getImageSource: function(obj){
							return obj.url;
						},
						getImageCaption: function(obj){
							return obj.caption;
						}
					}
				);				
				gallery1.show(0);				
				gallery2.show(0);				
				gallery3.show(0);				
				gallery4.show(0);				
				gallery5.show(0);				
				gallery6.show(0);				
			});						
		}(window, window.Code.Util, window.Code.PhotoSwipe));		
	</script>
  

<script type="text/javascript">
	$(document).ready(function() {
		// set initial nav state for this page
			setNav("photo", "art");		
			setAllGalleryHeights('.photoSwipe');			
	});
</script>
</body>

</html>
