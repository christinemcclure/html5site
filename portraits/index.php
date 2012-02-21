<?php include '../includes/head-stub.html' ?>
	<link href="../js/photoSwipe/photoswipe.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript" src="../js/photoSwipe/lib/klass.min.js"></script>
	<script type="text/javascript" src="../js/photoSwipe/code.photoswipe-3.0.4.min.js"></script>	
	 <title>Christine McClure -- Portraiture</title>
</head>

<body id="portraits">

<div class="page">
	
<?php include '../includes/header.html'; ?>
<?php include '../includes/nav.html'; ?>
<section>
	<h1 class="top">Portraiture</h1>
    <div id="gallery1" class="photoSwipe">
    	<ul>
        <li><img src="/img/portraits/baby.jpg" alt="Photo of an 8-month old baby in a garden." /></li>
        <li><img src="/img/portraits/family.jpg" alt="Photo of a a multi-racial family in a garden." /></li>
        <li><img src="/img/portraits/gd_book_02.jpg" alt="Black and white photo of author Gerry Doyle holding a beer, with the back of a woman\'s head in the foreground." /></li>
        <li><img src="/img/portraits/birthday.jpg" alt="Photo of a two-year-old girl eating a cookie with powdered sugar on her face." /></li>
        <li><img src="/img/portraits/2009ThisisHell-LFAOU115.jpg" alt="Black and white photo of a smiling singer, head turned to the side." /></li>
        <li><img src="/img/portraits/Lety_Greek_Parade-337.jpg" alt="Young girl in colorful traditional Greek headscarf." /></li>
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
						{ url: '/img/portraits/baby.jpg', 
								alt:'Photo of an 8-month old baby in a garden."',
								caption: 'Nadia\'s first photo shoot'},
						{ url: '/img/portraits/family.jpg', 
								alt:'Photo of a a multi-racial family in a garden.',
								caption: 'Family portrait day'},
						{ url: '/img/portraits/gd_book_02.jpg', 
								alt:'Black and white photo of author Gerry Doyle holding a beer, with the back of a woman\'s head in the foreground.',
								caption:'Gerry Doyle, "From the Depths" book jacket shoot'},
						{ url: '/img/portraits/birthday.jpg', 
								alt:'Photo of a two-year-old girl eating a cookie with powdered sugar on her face.',
								caption: 'Ariana\'s second birthday'},						
						{ url: '/img/portraits/2009ThisisHell-LFAOU115.jpg', 
								alt:'Black and white photo of a smiling singer, head turned to the side.',
								caption:'Singer, Literature for all of Us benefit at Cary\'s Lounge, Chicago IL.'},
						{ url: '/img/portraits/Lety_Greek_Parade-337.jpg', 
								alt:'Young girl in colorful traditional Greek headscarf.',
								caption: 'Participant, Greek Independence Day Parade, Chicago IL.'}								
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
			setNav("photo", "portraits");			
			setAllGalleryHeights('.photoSwipe');								
	});
</script>
</body>

</html>
