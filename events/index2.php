<!DOCTYPE html>
<html>
<head>
	<title>PhotoSwipe</title>
	<meta name="author" content="Ste Brennan - Code Computerlove - http://www.codecomputerlove.com/" />
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<link href="events/photoSwipe/examples/styles.css" type="text/css" rel="stylesheet" />
	
	<link href="events/photoSwipe/photoswipe.css" type="text/css" rel="stylesheet" />
	
	<script type="text/javascript" src="file:///C:/xampp/htdocs/events/photoSwipe/test.js"></script>
	<script type="text/javascript" src="/events/photoSwipe/lib/klass.min.js"></script>
	<script type="text/javascript" src="/events/photoSwipe/code.photoswipe-3.0.4.min.js"></script>
	
	
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
						{ url: '/events/hpotoSwipe/examples/images/full/001.jpg', caption: 'Image 001'},
						{ url: '/events/hpotoSwipe/examples/images/full/002.jpg', caption: 'Image 002'},
						{ url: '/events/hpotoSwipe/examples/images/full/003.jpg', caption: 'Image 003'},
						{ url: 'http://localhost/events/hpotoSwipe/examples/images/full/004.jpg', caption: 'Image 004'},
						{ url: 'images/full/005.jpg', caption: 'Image 005'},
						{ url: 'images/full/006.jpg', caption: 'Image 006'},
						{ url: 'images/full/007.jpg', caption: 'Image 007'},
						{ url: 'images/full/008.jpg', caption: 'Image 008'},
						{ url: 'images/full/009.jpg', caption: 'Image 009'},
						{ url: 'images/full/009.jpg', caption: 'Image 009'},
						{ url: 'images/full/010.jpg', caption: 'Image 010'},
						{ url: 'images/full/011.jpg', caption: 'Image 011'},
						{ url: 'images/full/012.jpg', caption: 'Image 012'},
						{ url: 'images/full/013.jpg', caption: 'Image 013'},
						{ url: 'images/full/014.jpg', caption: 'Image 014'},
						{ url: 'images/full/015.jpg', caption: 'Image 015'},
						{ url: 'images/full/016.jpg', caption: 'Image 016'},
						{ url: 'images/full/017.jpg', caption: 'Image 017'},
						{ url: 'images/full/018.jpg', caption: 'Image 018'}
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

<div id="Footer">
	<p><small>&copy; 2011 Code Computerlove Ltd - new media agency / digital marketing agency</small></p>

	<div id="SocialLinks">
		<a href="http://blog.codecomputerlove.com/"><img src="photoSwipe/examples/images/blogicon.png" width="32" height="32" alt="Blog" /></a>
		<a href="http://www.twitter.com/computerlovers"><img src="photoSwipe/examples/images/twittericon.png" width="32" height="32" alt="Twitter" /></a>
		<a href="http://www.facebook.com/CodeComputerlove"><img src="photoSwipe/examples/images/facebookicon.png" width="32" height="32" alt="Facebook" /></a>
		<a href="http://www.flickr.com/photos/codecomputerlove"><img src="photoSwipe/examples/images/flickricon.png" width="32" height="32" alt="Flickr" /></a>
	</div>

</div>

</body>
</html>
