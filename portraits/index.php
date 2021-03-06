<?php include($_SERVER['DOCUMENT_ROOT']."/includes/head-stub.html"); ?>
<?php include($_SERVER['DOCUMENT_ROOT']."/includes/gallery-stub.html"); ?>
	 <title>Christine McClure -- Portraiture</title>
</head>

<body id="portraits">

<div class="page">
<?php include($_SERVER['DOCUMENT_ROOT']."/includes/header.html"); ?>
<?php include($_SERVER['DOCUMENT_ROOT']."/includes/nav.html"); ?>
<section>
	<h1 class="top">Portraiture</h1>
		<ul class="print">
			<li><p>Nadia's first photo shoot</p><img src="/img/portraits/2010DrabramsVisit-44.jpg" alt="Photo of an 8-month old baby in a garden." /></li>
			<li><p>Family portrait day</p><img src="/img/portraits/2010DrabramsVisit-23.jpg" alt="Photo of a a multi-racial family in a garden." /></li>
			<li><p>Gerry Doyle, "From the Depths" book jacket shoot</p><img src="/img/portraits/gd_book_02.jpg" alt="Black and white photo of author Gerry Doyle holding a beer, with the back of a woman\'s head in the foreground." /></li>
			<li><p>Ariana's second birthday</p><img src="/img/portraits/2011AriannaBirthday-2.jpg" alt="Photo of a two-year-old girl eating a cookie with powdered sugar on her face." /></li>
			<li><p>Nadia's first swim</p><img src="/img/portraits/KaraGerryWedding-52.jpg" alt="Photo of a father holding his baby daughter in a swimming pool." /></li>      
			<li><p>Singer, Literature for all of Us benefit at Cary's Lounge, Chicago IL</p><img src="/img/portraits/2009ThisisHell-LFAOU115.jpg" alt="Black and white photo of a smiling singer, head turned to the side." /></li>
			<li><p>Lety, Greek Independence Day Parade participant, Chicago IL</p><img src="/img/portraits/Lety_Greek_Parade-337.jpg" alt="Young girl in colorful traditional Greek headscarf." /></li>
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
						{ url: '/img/portraits/2010DrabramsVisit-44.jpg', 
								alt:'Photo of an 8-month old baby in a garden."',
								caption: 'Nadia\'s first photo shoot'},
						{ url: '/img/portraits/2010DrabramsVisit-23.jpg', 
								alt:'Photo of a a multi-racial family in a garden.',
								caption: 'Family portrait day'},
						{ url: '/img/portraits/gd_book_02.jpg', 
								alt:'Black and white photo of author Gerry Doyle holding a beer, with the back of a woman\'s head in the foreground.',
								caption:'Gerry Doyle, "From the Depths" book jacket shoot'},
						{ url: '/img/portraits/2011AriannaBirthday-2.jpg', 
								alt:'Photo of a two-year-old girl eating a cookie with powdered sugar on her face.',
								caption: 'Ariana\'s second birthday'},						
						{ url: '/img/portraits/KaraGerryWedding-52.jpg', 
								alt:'Photo of a father holding his baby daughter in a swimming pool.',
								caption: 'Nadia\'s first swim.'},
						{ url: '/img/portraits/2009ThisisHell-LFAOU115.jpg', 
								alt:'Black and white photo of a smiling singer, head turned to the side.',
								caption:'Singer, Literature for all of Us benefit at Cary\'s Lounge, Chicago IL.'},
						{ url: '/img/portraits/Lety_Greek_Parade-337.jpg', 
								alt:'Young girl in colorful traditional Greek headscarf.',
								caption: 'Lety, Greek Independence Day Parade participant, Chicago IL.'}								
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
			setAllGalleryHeights('.photoSwipe');								
	});
</script>
</body>

</html>
