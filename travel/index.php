<?php include '../includes/head-stub.html' ?>
	<link href="../js/photoSwipe/photoswipe.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript" src="../js/photoSwipe/lib/klass.min.js"></script>
	<script type="text/javascript" src="../js/photoSwipe/code.photoswipe-3.0.4.min.js"></script>	

  <title>Christine McClure -- Travel Photography</title>
</head>

<body id="travel">

<div class="page">
	
<?php include '../includes/header.html'; ?>
<?php include '../includes/nav.html'; ?>
<section>
  <h1 class="firstH1">Jerusalem</h1>
  <div id="gallery1" class="photoSwipe"></div>
</section>
<section>    
  <h1>Panama</h1>
  <div id="gallery2" class="photoSwipe"></div>
</section>        
<?php include '../includes/footer.html'; ?>
</div>
	<script type="text/javascript">
		(function(window, Util, PhotoSwipe){			
			Util.Events.domReady(function(e){				
				var gallery1;		
				var gallery2;
				gallery1 = PhotoSwipe.attach(
					[
						{ url: '/img/travel/temple_mount_1600_08.jpg', 
								alt:'Photo of Muslim woman walking in front the Dome on the Rock.',
								caption: 'Dome of the Rock'},
						{ url: '/img/travel/temple_mount_1600_26.jpg', 
								alt:'Photo of tile detail on the Dome on the Rock.',
								caption: 'Tile detail of the Dome of the Rock'},
						{ url: '/img/travel/western_wall_03.jpg', 
								alt:'Photo of men praying in front of the Kotel. Men are out of focus while the gate keeping the visitors out is in focus.',
								caption:'Men\'s section of the Kotel (Western/Wailing Wall).'}
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
						{ url: '/img/travel/san blas_093.jpg', 
								alt:'Photo of woman and boy on a boat dock. The woman is wearing brightly-patterned clothing with heavy beaded bands around her wrists and ankles.',
								caption: 'Kuna Yala woman in traditional dress.'},
						{ url: '/img/travel/nationalpark_03.jpg', 
								alt:'Photo of large, backlit fern leaf.',
								caption: 'Boquete National Forest.'},
						{ url: '/img/travel/boquete_146.jpg', 
								alt:'Photo of the back of a hiker going down the forest path.',
								caption:'Boquete National Forest.'},
						{ url: '/img/travel/panamaearlymorning_10.jpg', 
								alt:'Photo of an old brick supporting structure, backlit from the sun rising over the ocean.',
								caption:'Panama City.'}
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
				gallery1.show(0);				
				gallery2.show(0);				
			});						
		}(window, window.Code.Util, window.Code.PhotoSwipe));		
	</script>

<script type="text/javascript">
	$(document).ready(function() {
		// set initial nav state for this page
			setNav("photo", "travel");			
			setAllGalleryHeights('.photoSwipe');								
	});
</script>
</body>

</html>
