<?php include($_SERVER['DOCUMENT_ROOT']."/includes/head-stub.html"); ?>
<?php include($_SERVER['DOCUMENT_ROOT']."/includes/gallery-stub.html"); ?>
  <title>Christine McClure -- Travel Photography</title>
</head>

<body id="travel">

<div class="page">
<?php include($_SERVER['DOCUMENT_ROOT']."/includes/header.html"); ?>
<?php include($_SERVER['DOCUMENT_ROOT']."/includes/nav.html"); ?>
<section>
  <h1 class="top">Travel Photography</h1>

  <h2>Jerusalem</h2>
  	<ul class="print">
      <li><p>Dome of the Rock</p><img src="/img/travel/jerusalem-templemount-1.jpg" alt="Photo of Muslim woman walking in front the Dome on the Rock." /></li> 
      <li><p>Men's section of the Kotel</p><img src="/img/travel/jerusalem-kotel.jpg" alt="Photo of men praying in front of the Kotel. Men are out of focus while the gate keeping the visitors out is in focus." /></li> 
      <li><p>Church of the Holy Sepulchre, Rotunda</p><img src="/img/travel/jerusalem-sepulchre-1.jpg" alt="Photo of the rotunda of the Church of the Holy Sepulchre." /></li> 
      <li><p>Dome of the Rock tile detail</p><img src="/img/travel/jerusalem-templemount-2.jpg" alt="Photo of tile detail of Dome on the Rock." /></li> 
      <li><p>The Dead Sea</p><img src="/img/travel/jerusalem-deadsea.jpg" alt="Photo of the beach at the Dead Sea, with a shallow skiff." /></li> 
      <li><p>Church of the Holy Sepulchre</p><img src="/img/travel/jerusalem-sepulchre-2.jpg" alt="Photo of the exteriour doorway." /></li> 
      <li><p>Dome of the Rock tile detail</p><img src="/img/travel/jerusalem-templemount-3.jpg" alt="Photo of tile detail of Dome on the Rock." /></li> 
      <li><p>Church of the Holy Sepulchre</p><img src="/img/travel/jerusalem-sepulchre-3.jpg" alt="Photo of an interior hall." /></li> 
    </ul>
  <div id="gallery1" class="photoSwipe">
  </div>
  <h2>Panama</h2>
  	<ul class="print">
      <li><p>Kuna Yala woman in traditional dress.</p><img src="/img/travel/panama-sanblas-4.jpg" alt="Photo of woman and boy on a boat dock. The woman is wearing brightly-patterned clothing with heavy beaded bands around her wrists and ankles." /></li>
      <li><p>Wannukandi Airport</p><img src="/img/travel/panama-sanblas-1.jpg" alt="Photo of a small regional airport with plastic bottles for runway markers." /></li>
      <li><p>Boquete National Forest.</p><img src="/img/travel/panama-nationalpark.jpg" alt="Photo of large, backlit fern leaf." /></li>
      <li><p>El Porvenir, Kuna Yala</p><img src="/img/travel/panama-sanblas-2.jpg" alt="Photo of three tourists and guide walking hand in hand with a girl from San Blas." /></li>
      <li><p>Kuna Yala resort</p><img src="/img/travel/panama-sanblas-3.jpg" alt="Photo tourists lying in hammocks on a beach." /></li>
      <li><p>Coffee plantation</p><img src="/img/travel/panama-plantation.jpg" alt="Expanse of a coffee plantation." /></li>
      <li><p>Boquete National Forest.</p><img src="/img/travel/panama-boquete-1.jpg" alt="Closeup photo of tree bark in a forest." /></li>
      <li><p>Boquete</p><img src="/img/travel/panama-boquete-3.jpg" alt="Closeup photo of blue flowers." /></li>
      <li><p>Boquete National Forest.</p><img src="/img/travel/panama-boquete-2.jpg" alt="Photo of the back of a hiker going down the forest path." /></li>
      <li><p>Panama City</p><img src="/img/travel/panama-morning.jpg" alt="Photo of an old brick supporting structure, backlit from the sun rising over the ocean." /></li>
    </ul>
  <div id="gallery2" class="photoSwipe">
  </div>
</section>        
<?php include($_SERVER['DOCUMENT_ROOT']."/includes/footer.html"); ?>
</div>
	<script type="text/javascript">
		(function(window, Util, PhotoSwipe){			
			Util.Events.domReady(function(e){				
				var gallery1;		
				var gallery2;
				gallery1 = PhotoSwipe.attach(
					[
						{ url: '/img/travel/jerusalem-templemount-1.jpg', 
								alt:'Photo of Muslim woman walking in front the Dome on the Rock.',
								caption: 'Dome of the Rock'},
						{ url: '/img/travel/jerusalem-kotel.jpg', 
								alt:'Photo of men praying in front of the Kotel. Men are out of focus while the gate keeping the visitors out is in focus.',
								caption:'Men\'s section of the Kotel (Western/Wailing Wall).'},
						{ url: '/img/travel/jerusalem-sepulchre-1.jpg', 
								alt:'Photo of the rotunda of the Church of the Holy Sepulchre.',
								caption: 'Church of the Holy Sepulchre, Rotunda'},
						{ url: '/img/travel/jerusalem-templemount-2.jpg', 
								alt:'Photo of tile detail of Dome on the Rock.',
								caption: 'Dome of the Rock tile detail'},
						{ url: '/img/travel/jerusalem-deadsea.jpg', 
								alt:'Photo of the beach at the Dead Sea, with a shallow skiff.',
								caption: 'The Dead Sea'},
						{ url: '/img/travel/jerusalem-sepulchre-2.jpg', 
								alt:'Photo of the exteriour doorway.',
								caption: 'Church of the Holy Sepulchre'},
						{ url: '/img/travel/jerusalem-templemount-3.jpg', 
								alt:'Photo of tile detail of Dome on the Rock.',
								caption: 'Dome of the Rock tile detail'},
						{ url: '/img/travel/jerusalem-sepulchre-3.jpg', 
								alt:'Photo of an interior hall.',
								caption: 'Church of the Holy Sepulchre'}
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
						{ url: '/img/travel/panama-sanblas-4.jpg', 
								alt:'Photo of woman and boy on a boat dock. The woman is wearing brightly-patterned clothing with heavy beaded bands around her wrists and ankles.',
								caption: 'Kuna Yala woman in traditional dress.'},
						{ url: '/img/travel/panama-sanblas-1.jpg', 
								alt:'Photo of a small regional airport with plastic bottles for runway markers.',
								caption: 'Wannukandi Airport'},
						{ url: '/img/travel/panama-nationalpark.jpg', 
								alt:'Photo of large, backlit fern leaf.',
								caption: 'Boquete National Forest.'},
						{ url: '/img/travel/panama-sanblas-2.jpg', 
								alt:'Photo of three tourists and guide walking hand in hand with a girl from San Blas.',
								caption: 'El Porvenir, Kuna Yala'},
						{ url: '/img/travel/panama-sanblas-3.jpg', 
								alt:'Photo tourists lying in hammocks on a beach.',
								caption: 'Kuna Yala resort'},
						{ url: '/img/travel/panama-plantation.jpg', 
								alt:'Expanse of a coffee plantation.',
								caption:'Coffee plantation'},
						{ url: '/img/travel/panama-boquete-1.jpg', 
								alt:'Closeup photo of tree bark in a forest.',
								caption:'Boquete National Forest.'},
						{ url: '/img/travel/panama-boquete-3.jpg', 
								alt:'Closeup photo of blue flowers.',
								caption:'Boquete'},
						{ url: '/img/travel/panama-boquete-2.jpg', 
								alt:'Photo of the back of a hiker going down the forest path.',
								caption:'Boquete National Forest.'},
						{ url: '/img/travel/panama-morning.jpg', 
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
			setAllGalleryHeights('.photoSwipe');								
	});
</script>
</body>

</html>
