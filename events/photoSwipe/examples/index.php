<!DOCTYPE html>
<html>
<head>
	<title>PhotoSwipe</title>
	<meta name="author" content="Ste Brennan - Code Computerlove - http://www.codecomputerlove.com/" />
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<link href="styles.css" type="text/css" rel="stylesheet" />
	
	<link href="../photoswipe.css" type="text/css" rel="stylesheet" />
	
	<script type="text/javascript" src="../lib/klass.min.js"></script>
	<script type="text/javascript" src="../code.photoswipe-3.0.4.min.js"></script>	
	
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
						{ url: '/img/events/IMG_1002.jpg', caption: 'Image 001'},
						{ url: '/img/events/IMG_1008.jpg', caption: 'Image 002'},
						{ url: '/img/events/IMG_1143.jpg', caption: 'Image 003'},
						{ url: '/img/events/IMG_1216.jpg', caption: 'Image 004'},
						{ url: '/img/events/IMG_1231.jpg', caption: 'Image 005'},
						{ url: '/img/events/LFAOU-DPP-05.jpg', caption: 'Image 006'},
						{ url: '/img/events/IMG_1459.jpg', caption: 'Image 007'},
						{ url: '/img/events/IMG_1492.jpg', caption: 'Image 008'},
						{ url: '/img/events/IMG_1043.jpg', caption: 'Image 009'},
						{ url: '/img/events/IMG_1572.jpg', caption: 'Image 009'},
						{ url: '/img/events/IMG_1566.jpg', caption: 'Image 010'}
					],
					{
						target: window.document.querySelectorAll('#PhotoSwipeTarget')[0],
						preventHide: true,
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
	
</head>
<body>


<div id="MainContent">

	<div id="PhotoSwipeTarget"></div>

</div>


</body>
</html>
