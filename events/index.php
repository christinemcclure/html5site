<?php include($_SERVER['DOCUMENT_ROOT']."/includes/head-stub.html"); ?>
<?php include($_SERVER['DOCUMENT_ROOT']."/includes/gallery-stub.html"); ?>
  <title>Christine McClure -- Event Photography</title>
</head>

<body id="events">

<div class="page">
<?php include($_SERVER['DOCUMENT_ROOT']."/includes/header.html"); ?>
<?php include($_SERVER['DOCUMENT_ROOT']."/includes/nav.html"); ?>
<section>
  <h1 class="top">Event Photography</h1>
  
  <h2>Literature For All of Us</h2>
 	<h3>Honor Thy Mother Luncheon, 2011</h3>
    <ul class="print">
      <li><img src="/img/events/2011LFAOU-16.jpg" alt="Photo of event site." /></li>
      <li><img src="/img/events/2011LFAOU-10.jpg" alt="Photo of centerpiece flower arrangement." /></li>
      <li><img src="/img/events/2011LFAOU-128.jpg" alt="Photo of an upright bass misician playing in the reception area." /></li>
      <li><img src="/img/events/2011LFAOU-194.jpg" alt="Photo of registration table volunteers checking in attendees." /></li>
      <li><img src="/img/events/2011LFAOU-207.jpg" alt="Photo of two attendees chatting during the reception." /></li>
      <li><img src="/img/events/2011LFAOU-308.jpg" alt="Photo of luncheon speaker." /></li>
      <li><img src="/img/events/2011LFAOU-416.jpg" alt="Photo of luncheon audience listening attently to speaker." /></li>
      <li><img src="/img/events/2011LFAOU-449.jpg" alt="Photo of founder, author Jane Hamilton and her mother." /></li>
      <li><img src="/img/events/2011LFAOU-49.jpg" alt="Photo of teen book group participants receiving gifts." /></li>
      <li><img src="/img/events/2011LFAOU-105.jpg" alt="Photo of a woman signing up for a raffle." /></li>
      <li><img src="/img/events/2011LFAOU-90.jpg" alt="Photo of two women, event organizers." /></li>
      <li><img src="/img/events/2011LFAOU-176.jpg" alt="Photo of smiling woman, holding a raffle basket." /></li>
      <li><img src="/img/events/2011LFAOU-529.jpg" alt="Photo of volunteers staffing the book signing table, selling books." /></li>
      <li><img src="/img/events/2011LFAOU-518.jpg" alt="Photo of author Jane Hamilton signing books." /></li>
    </ul>   
   <div id="gallery1" class="photoSwipe">
   </div>

  <h2>District 57 Education Foundation</h2>
 	<h3>Live Auction, 2010</h3>
    <ul class="print">
      <li><img src="/img/events/2010District57-54.jpg" alt="Photo of several women in cocktail attire at a silent auction table." /></li>
      <li><img src="/img/events/2010District57-223.jpg" alt="Photo of a dessert table." /></li>
      <li><img src="/img/events/2010District57-110.jpg" alt="Photo of a raffle drawing." /></li>
      <li><img src="/img/events/2010District57-97.jpg" alt="Photo of woman holding an Oscar-type stauette award." /></li>
      <li><img src="/img/events/2010District57-210.jpg" alt="Photo of three women wearing prop hats and boas." /></li>
      <li><img src="/img/events/2010District57-35.jpg" alt="Photo of two attendees talking." /></li>
      <li><img src="/img/events/2010District57-167.jpg" alt="Photo of a group of attendees." /></li>
      <li><img src="/img/events/2010District57-184.jpg" alt="Photo of woman in cocktail attire holding up an auction paddle to bid during the live auction." /></li>
      <li><img src="/img/events/district57-6.jpg" alt="Photo of two women in cocktail attire, dancing." /></li>
      <li><img src="/img/events/2010District57-185.jpg" alt="Photo of woman laughing heartily during the live auction with the auctioneer behind her." /></li>
      <li><img src="/img/events/2010District57-320.jpg", alt="Photo of two women in cocktail attire, dancing." /></li>
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
						{ url: '/img/events/2011LFAOU-16.jpg', alt:'Photo of venue from outside.'},
						{ url: '/img/events/2011LFAOU-10.jpg', alt:'Photo of centerpiece flower arrangement.'},
						{ url: '/img/events/2011LFAOU-128.jpg', alt:'Photo of an upright bass musician playing in the reception area.'},
						{ url: '/img/events/2011LFAOU-194.jpg', alt:'Photo of registration table volunteers checking in attendees.'},
						{ url: '/img/events/2011LFAOU-207.jpg', alt: 'Photo of two attendees chatting during the reception.'},
						{ url: '/img/events/2011LFAOU-308.jpg', alt:'Photo of luncheon speaker.'},
						{ url: '/img/events/2011LFAOU-416.jpg', alt:'Photo of luncheon audience listening attently to speaker.'},
						{ url: '/img/events/2011LFAOU-449.jpg', alt:'Photo of founder, author Jane Hamilton and her mother.'},
						{ url: '/img/events/2011LFAOU-49.jpg', alt:'Photo of teen book group participants receiving gifts.'},
      			{ url: '/img/events/2011LFAOU-105.jpg', alt:'Photo of a woman signing up for a raffle.'},
						{ url: '/img/events/2011LFAOU-90.jpg', alt:'Photo of two women, event organizers.'},
      			{ url: '/img/events/2011LFAOU-176.jpg', alt:'Photo of smiling woman, holding a raffle basket.'},
						{ url: '/img/events/2011LFAOU-529.jpg', alt:'Photo of volunteers staffing the book signing table, selling books.'},
						{ url: '/img/events/2011LFAOU-518.jpg', alt:'Photo of author Jane Hamilton signing books.'}
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
						{ url: '/img/events/2010District57-54.jpg', alt:'Photo of several women in cocktail attire at a silent auction table.'},
						{ url: '/img/events/2010District57-167.jpg', alt:'Photo of a group of attendees.'},
						{ url: '/img/events/2010District57-223.jpg', alt:'Photo of a dessert table.'},
						{ url: '/img/events/2010District57-35.jpg', alt:'Photo of two attendees talking.'},
						{ url: '/img/events/2010District57-184.jpg', alt:'Photo of woman in cocktail attire holding up an auction paddle to bid during the live auction.'},
						{ url: '/img/events/2010District57-185.jpg', alt:'Photo of woman laughing heartily during the live auction with the auctioneer behind her.'},						
						{ url: '/img/events/2010District57-110.jpg', alt:'Photo of a raffle drawing.'},
						{ url: '/img/events/2010District57-97.jpg', alt:'Photo of woman holding an Oscar-type stauette award.'},
						{ url: '/img/events/2010District57-320.jpg', alt:'Photo of two women in cocktail attire, dancing.'},
						{ url: '/img/events/2010District57-210.jpg', alt:'Photo of three women wearing prop hats and boas.'}
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
