<?php include '../includes/head-stub.html' ?>
	
	<link href="../js/photoSwipe/photoswipe.css" type="text/css" rel="stylesheet" />
	
	<script type="text/javascript" src="../js/photoSwipe/lib/klass.min.js"></script>
	<script type="text/javascript" src="../js/photoSwipe/code.photoswipe-3.0.4.min.js"></script>	
	<script type="text/javascript">
		
		/* 
			Overview: 
			---------
			
			Demonstrates inline functionality. This demo sets the images using an array.
			There is nothing stopping you basing this on image dom elements like other examples
		
		*/
		
		(function(window, Util, PhotoSwipe){
			
			Util.Events.domReady(function(e){
				
				var instance;
				
				instance = PhotoSwipe.attach(
					[
						{ url: '/img/events/IMG_1002.jpg'},
						{ url: '/img/events/IMG_1008.jpg'},
						{ url: '/img/events/IMG_1143.jpg'},
						{ url: '/img/events/IMG_1216.jpg'},
						{ url: '/img/events/IMG_1231.jpg'},
						{ url: '/img/events/LFAOU-DPP-05.jpg'},
						{ url: '/img/events/IMG_1459.jpg'},
						{ url: '/img/events/IMG_1492.jpg'},
						{ url: '/img/events/IMG_1043.jpg'},
						{ url: '/img/events/IMG_1572.jpg'},
						{ url: '/img/events/IMG_1566.jpg'}
					],
					{
						target: window.document.querySelectorAll('#PhotoSwipeTarget')[0],
						preventHide: true,
						captionAndToolbarShowEmptyCaptions: false,
						getImageSource: function(obj){
							return obj.url;
						},
						getImageCaption: function(obj){
							return obj.caption;
						}
					}
				);
				instance.show(0);
				
			});
			
			
		}(window, window.Code.Util, window.Code.PhotoSwipe));
		
	</script>

    
  <title>Christine McClure -- Event Photography</title>
  <!-- Place in the <head>, after the three links -->
</head>

<body id="events">

<div class="page">
	
<?php include '../includes/header.html'; ?>
<?php include '../includes/nav.html'; ?>
<section>
  <h1 class="firstH1">Literature For All of Us</h1>
 	<h2>Honor Thy Mother Luncheon, 2011</h2>
   <div class="gallery">
	    <div id="PhotoSwipeTarget"></div>
   </div>
</section>    


<?php include '../includes/footer.html'; ?>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		// set initial nav state for this page
			setNav("photo", "events");			
			setGalleryHeight();
	});
</script>

</body>

</html>
