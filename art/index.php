<?php include($_SERVER['DOCUMENT_ROOT']."/includes/head-stub.html"); ?>
<?php include($_SERVER['DOCUMENT_ROOT']."/includes/gallery-stub.html"); ?>
  <title>Christine McClure -- Fine Art Photography</title>
</head>

<body id="art">

<div class="page">
	
<?php include($_SERVER['DOCUMENT_ROOT']."/includes/header.html"); ?>
<?php include($_SERVER['DOCUMENT_ROOT']."/includes/nav.html"); ?>

	<section>
    <h1 class="top">Fine Art Photography</h1>
    <h2>Portals</h2>
    <p class="floatLeft">This exhibit explored how people experience art. The images were encased in self-lit 6 x 6" boxes, with a large plastic loupe (magnifying glass) mounted to the top. Rather than discretely passing by the images, viewers had to walk directly up to them and peer inside. The images were arranged in groups of three, and let users explore alternate worlds of religion, nature and mythology.</p>
    <img class="floatLeft" src="/img/fineart/portal.png" alt="construction of portal frame." />
    <div id="seriesPortals">
			<h3>Includes six series:</h3>
	    <div class="columnBlock">
      	<ul>
          <li>
            <h4>Focus</h4>
            <h5>(Religion as a barrier)</h5>
            <p>Jerusalem, Israel</p>
          </li>
        </ul>
      </div>
	    <div class="columnBlock">
      	<ul>
          <li>
            <h4>Macro</h4> 
            <h5>(Life in the details)</h5>
            <p>Chicago, IL</p>
          </li>
        </ul>
       </div>
	    <div class="columnBlock">
      	<ul>
          <li>
            <h4>Persephone's Garden</h4> 
            <h5>(How did she pass the time?)</h5>
            <p>Chicago, IL</p>
          </li>
        </ul>
      </div>
	    <div class="columnBlock">
      	<ul>
          <li>
            <h4>Perspective</h4> 
            <h5>(Religion from a distance)</h5>
            <p>Jerusalem, Israel</p>
          </li>
        </ul>
      </div>
	    <div class="columnBlock">
      	<ul>
          <li>
            <h4>Saturation</h4> 
            <h5>(Color focus)</h5>
            <p>Panama</p>
          </li>
        </ul>
      </div>
	    <div class="columnBlock">
      	<ul>
          <li>
            <h4>Polarization</h4> 
            <h5>(Religion as ruler)</h5>
            <p>Jerusalem, Israel</p>    
          </li>
	      </ul>
  	</div>
	<ul class="print">
    <li><p>Focus-1</p><img src="/img/fineart/Focus-1.jpg" alt="Circular photo. Top half is out-of-focus dark shapes. Bottom half is the top portion of a gate (barrier) in up-close detail." /></li>
    <li><p>Focus-2</p><img src="/img/fineart/Focus-2.jpg" alt="Circular photo. Top half is slightly out-of-focus dark shapes. Bottom half is slightly out-of-focus gate (barrier)."  /></li>
    <li><p>Focus-3</p><img src="/img/fineart/Focus-3.jpg" alt="Circular photo. Top half shows orthodox Jewish men praying at the Kotel (Wailing Wall) in Jerusalem. Bottom half is out-of-focus gate (barrier)."  /></li>
    <li><p>Macro-1</p><img src="/img/fineart/Macro-1.jpg" alt="'Circular photo of a succulent plant (unknown species) taken at the Garfield Park Conservatory in Chicago"  /></li>
    <li><p>Macro-2</p><img src="/img/fineart/Macro-2.jpg" alt="Circular photo of a succulent plant (unknown species) taken at the Garfield Park Conservatory in Chicago"  /></li>
    <li><p>Macro-3</p><img src="/img/fineart/Macro-3.jpg" alt="Circular photo of a succulent plant (unknown species) taken at the Garfield Park Conservatory in Chicago" /></li>
    <li><p>Persephone-1</p><img src="/img/fineart/Persephone-1.jpg" alt="Digitally-manipulated image of cement planters with overly-large blue plant erupting from one of them."  /></li>
    <li><p>Persephone-2</p><img src="/img/fineart/Persephone-2.jpg" alt="Digitally-manipulated image of a decrepit Chicago mansion with overly large cacti as the front lawn."  /></li>
    <li><p>Persephone-3</p><img src="/img/fineart/Persephone-3.jpg" alt="Digitally-manipulated image of a large fern-like plant in grayscale growing out of large red rocks (magnified pebbles)."  /></li>
    <li><p>Perspective-1</p><img src="/img/fineart/Perspective-1.jpg" alt="Digitally-manipulated image of the Kotel made to like very small by perspective."  /></li>
    <li><p>Perspective-2</p><img src="/img/fineart/Perspective-2.jpg" alt="Digitally-manipulated image of the Jerusalem skyline with the Dome of the Rock made to like very small by perspective."  /></li>
    <li><p>Perspective-3</p><img src="/img/fineart/Perspective-3.jpg" alt="Digitally-manipulated image of the Church of the Holy Sepulchre made to like very small by perspective." /></li>
    <li><p>Saturation-1</p><img src="/img/fineart/Saturation-1.jpg" alt="Photo of woman and boy on a boat dock. The woman is wearing brightly-patterned clothing with heavy beaded bands around her wrists and ankles." /></li>
    <li><p>Saturation-2</p><img src="/img/fineart/Saturation-2.jpg" alt="Photo of large, backlit fern leaf."/></li> 
    <li><p>Saturation-3</p><img src="/img/fineart/Saturation-3.jpg" alt="Photo of a faded blue rickety pier stretching off the Panamanian coast into the Caribbean sea." /></li>
    <li><p>Polarization-1</p><img src="/img/fineart/Polarization-1.jpg" alt="Photo of Muslim woman walking in front the Dome on the Rock."  /></li>
    <li><p>Polarization-2</p><img src="/img/fineart/Polarization-2.jpg" alt="Photo of the wall in Jerusalem that separates the old city from the new."  /></li>
    <li><p>Polarization-3</p><img src="/img/fineart/Polarization-3.jpg" alt="Photo of a of an orthodox Jewish man praying at the Kotel." /></li>			
  </ul>

<div id="gallery1" class="photoSwipe">
</div>

</section>

<?php include($_SERVER['DOCUMENT_ROOT']."/includes/footer.html"); ?>
</div>
	<script type="text/javascript">
		(function(window, Util, PhotoSwipe){			
			Util.Events.domReady(function(e){				
				var gallery1, gallery2, gallery3, gallery4, gallery5, gallery6;
				gallery1 = PhotoSwipe.attach(
					[
						{ url: '/img/fineart/Focus-1.jpg', 
								caption:'Focus-1'},
						{ url: '/img/fineart/Focus-2.jpg', 
								caption:'Focus-2'},
						{ url: '/img/fineart/Focus-3.jpg', 
								caption:'Focus-3'},
						{ url: '/img/fineart/Macro-1.jpg', 
								caption:'Macro-1'},
						{ url: '/img/fineart/Macro-2.jpg', 
								caption:'Macro-2'},
						{ url: '/img/fineart/Macro-3.jpg', 
								caption:'Macro-3'},
						{ url: '/img/fineart/Persephone-1.jpg', 
								caption:'Persephone-1'},
						{ url: '/img/fineart/Persephone-2.jpg', 
								caption:'Persephone-2'},
						{ url: '/img/fineart/Persephone-3.jpg', 
								caption:'Persephone-3'},
						{ url: '/img/fineart/Perspective-1.jpg', 
								caption:'Perspective-1'},
						{ url: '/img/fineart/Perspective-2.jpg', 
								caption:'Perspective-2'},
						{ url: '/img/fineart/Perspective-3.jpg', 
								caption:'Perspective-3'},								
						{ url: '/img/fineart/Saturation-1.jpg', 
								caption:'Saturation-1'},
						{ url: '/img/fineart/Saturation-2.jpg', 
								caption:'Saturation-2'},
						{ url: '/img/fineart/Saturation-3.jpg', 
								caption:'Saturation-3'},								
						{ url: '/img/fineart/Polarization-1.jpg', 
								caption:'Polarization-1'},
						{ url: '/img/fineart/Polarization-2.jpg', 
								caption:'Polarization-2'},
						{ url: '/img/fineart/Polarization-3.jpg', 
								caption:'Polarization-3'},								
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
