$(document).ready(function() {

	var maxHeightPhoto = 800;
	var maxWinHeight = .8;
	var bodyID = $('body').attr('id'); // get bodyID so 
	var libPageArray = new Array("resume","portfolio","lab", "contactLib");
	var navType = "";
	for(var i=0; i<libPageArray.length; i++) {
		if (libPageArray.indexOf(bodyID)===-1) {
			navType = 'photo'; // if not in lib array, set as photo
		}
		else {
			navType = 'lib'; // or lib
		}
	}
	
	
	// Sets active navigation classes upon loading page. 
	// errors resolved from http://www.latentmotion.com/separating-jquery-functions-into-external-files-without-selectors/		
	(function($){
		setNavType=function(navType) {
			if ($(window).width() < 1008 ) { // show mobile navigation select boxes
				 $('#photoSelect').removeClass('hide').addClass('showInlineBlock');
				 $('#libSelect').removeClass('hide').addClass('showInlineBlock');
				 $('#mainNav').removeClass('showBlock').addClass('hide');
				 $('#photoNav').removeClass('showInline').addClass('hide');
				 $('#libNav').removeClass('showInline').addClass('hide');
			} // end mobile nav
			else { // show inline lists
				$('#photoSelect').removeClass('showInlineBlock').addClass('hide');
				$('#libSelect').removeClass('showInlineBlock').addClass('hide');
				$('#mainNav').removeClass('hide').addClass('showBlock');
				if (navType.indexOf('lib')===-1){ //show photo
					$('#photoNav').removeClass('hide').addClass('showInline');
					$('#libNav').removeClass('showInline').addClass('hide'); 
				}
				else { // show lib
					$('#libNav').removeClass('hide').addClass('showInline');
					$('#photoNav').removeClass('showInline').addClass('hide');		
				}
			}
		}
	})($);

// Determines whether to display mobile/tablet or desktop navigation
	(function($){ 
		setNav=function() {		
				setNavType(navType);	
				$('#'+navType).addClass('activeMain'); // emphasize Photography or Librarianship
				if (navType.indexOf('lib')===-1){ //show photo
					$('#photoSelect').children('option:selected', 'select').removeAttr('selected');
					$('#photoSelect').val('/'+bodyID);
				}
				else { // show lib
					$('#libSelect').children('option:selected', 'select').removeAttr('selected');
					$('#libSelect').val('/'+bodyID);				
				}
				$('#'+bodyID+'Nav').addClass('activeSub');
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
	
		
	$('#libNav').removeClass('noJS');

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
	
	setNav();
				
	$(window).resize(function() {
			setNavType(navType);
	});		

});

