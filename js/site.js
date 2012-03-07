$(document).ready(function() {

	var maxHeightPhoto = 800;
	var maxWinHeight = 0.8;
	var bodyID = $('body').attr('id'); // get bodyID so can set navType to lib or photo 
	var libPageArray = new Array("resume","portfolio","lab", "contactLib");
	var navType;
	for(var i=0; i<libPageArray.length; i++) {
		if (libPageArray[i].indexOf(bodyID)>= 0) {
			navType = 'lib'; // if in lib array, set as lib and breka out of loop
			break;
		}
		else {
			navType = 'photo'; // otherwise, set photo
		}
	}
	
	
	// FUNCTIONS
	// how to separate jQuery functions into files from
	// http://www.latentmotion.com/separating-jquery-functions-into-external-files-without-selectors/		
	
	// Determines whether to show mobile/tablet or desktop style navigation based on window width
	(function($){
		setNavType=function(navType) {
			if ($(window).width() < 1008 ) { // show mobile navigation select boxes
				 $('#photoSelect').removeClass('hide').addClass('showInlineBlock');
				 $('#libSelect').removeClass('hide').addClass('showInlineBlock');
				 $('#mainNav').removeClass('showBlock').addClass('hide');
				 $('#photoNav').removeClass('showInline').addClass('hide');
				 $('#libNav').removeClass('showInline').addClass('hide');
			} // end mobile nav
			else { // show inline lists for desktop
				$('#photoSelect').removeClass('showInlineBlock').addClass('hide'); // hide photo select box
				$('#libSelect').removeClass('showInlineBlock').addClass('hide'); // hide lib select box
				$('#mainNav').removeClass('hide').addClass('showBlock');
				if (navType.indexOf('lib')===-1){ //show photo, hide lib
					$('#photoNav').removeClass('hide').addClass('showInline');
					$('#libNav').removeClass('showInline').addClass('hide'); 
				}
				else { // show lib, hide photo
					$('#libNav').removeClass('hide').addClass('showInline');
					$('#photoNav').removeClass('showInline').addClass('hide');		
				}
			}
		}
	})($);

// Sets active classes for both mobile and desktop navigation
	(function($){ 
		setNav=function() {		
				setNavType(navType);	// first choose nav style by window width
				$('#'+navType).addClass('activeMain'); // emphasize Photography or Librarianship
				if (navType.indexOf('lib')===-1){ //set photo select items
					$('#photoSelect').children('option:selected', 'select').removeAttr('selected');
					$('#photoSelect').val('/'+bodyID);
				}
				else { // set lib items
					$('#libSelect').children('option:selected', 'select').removeAttr('selected');
					$('#libSelect').val('/'+bodyID);				
				}
			}
	})($);
	
	(function($){
				setAllGalleryHeights=function(galleryClass, myHeight) {
				// set maxWinHeight to whatever output will be from LightRoom. 
				// The plugin won't just take from image max height
					if (!myHeight) {
						myHeight = maxHeightPhoto; 
					}
					var currentHeight = Math.round( $(window).height() * maxWinHeight );
					if (myHeight > currentHeight) {
						myHeight = currentHeight; // don't let gallery window be larger than image 
					}
					$(galleryClass).each(function(index) {							
						$(this).css({height: myHeight, 
						'max-height': myHeight+'px'} ); 																
					});
			}
	})($);
	
		
	$('#libNav').removeClass('noJS');
	$('nav').removeClass('noJS');
	$('ul.print').addClass('hide');

	$('li#photo').click(function () {
		$(this).addClass('activeMain');
		$('li#lib').removeClass('activeMain');
		$('#libNav').removeClass('showInline').addClass('hide');
		$('#photoNav').removeClass('hide').addClass('showInline');
	});

	$('li#lib').click(function () {
		$(this).addClass('activeMain');
		$('li#photo').removeClass('activeMain');
		$('#photoNav').removeClass('showInline').addClass('hide');		
		$('#libNav').removeClass('hide').addClass('showInline');
	});
	
	$("nav select").change(function() {
		window.location = $(this).find("option:selected").val();
	});
	
	setNav(); // set active classes and nav style
				
	$(window).resize(function() { // change nav style upon window resize, if necessary
			setNavType(navType);
	});		

});
