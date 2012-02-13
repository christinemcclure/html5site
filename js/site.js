$(document).ready(function() {

	var maxHeightPhoto = 800;
	var maxWinHeight = .8;

	// Navigation	
	$('#photoNav').hide();
	$('#libNav').hide();

	$('li#photo').click(function () {
		$(this).addClass('activeNav');
		$('ul#libNav').hide();
		$('ul#photoNav').toggle();
	});

	$('li#lib').click(function () {
		$(this).addClass('activeNav');
		$('ul#photoNav').hide();
		$('ul#libNav').toggle();
	});
	
	$("nav select").change(function() {
		window.location = $(this).find("option:selected").val();
	});
	
			
	// Sets active navigation classes upon loading page. 
	// errors resolved from http://www.latentmotion.com/separating-jquery-functions-into-external-files-without-selectors/		
	(function($){
				setNav=function(navType, page) {
				$('#'+navType+"Nav").show();
				$('#'+navType).addClass('activeMain');
				navID = page + "Nav";
				$('#'+navID).addClass('activeSub');
			}
	})($);
	

	(function($){
				setAllGalleryHeights=function(galleryClass, myHeight) {
					if (!myHeight) {
						myHeight = maxHeightPhoto;
					}
					$(galleryClass).each(function(index) {							
						$(this).css({height: Math.round( $(window).height() * maxWinHeight ), 
						'max-height': myHeight+'px'} ); 
						// set maxWinHeight to whatever output will be from LightRoom. The plugin won't just take from image max height																					
					});
			}
	})($);
		
	//These aren't working. Can't seem to update the global variable from within a function 
	// Workaround for now is to have two sep folders for contact. Boo. 
	$('li#photoContactNav').click(function () {
		contactCallingPage="photo";
//		alert ('inside photo '+contactCallingPage);
	});

	$('li#libContactNav').click(function () {
		contactCallingPage="lib";
//		alert ('inside lib '+contactCallingPage);
	});	
	
	(function($){
			  setNavContact=function() {
				alert (contactCallingPage);
			}	;
		})($);	
	
});

