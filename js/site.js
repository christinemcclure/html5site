$(document).ready(function() {

	var maxHeightPhoto = 800;
	var maxWinHeight = .8;
	
	// Sets active navigation classes upon loading page. 
	// errors resolved from http://www.latentmotion.com/separating-jquery-functions-into-external-files-without-selectors/		
	(function($){
				setNav=function(navType, page) {
				setNavType();
				$('#'+navType).addClass('activeMain'); // emphasize Photography or Librarianship
				if (navType.indexOf('lib')===-1){ //show photo
					$('#photoSelect').children('option:selected', 'select').removeAttr('selected');
					$('#photoSelect').val('/'+page);
				}
				else { //show lib
					$('#libSelect').children('option:selected', 'select').removeAttr('selected');
					$('#libSelect').val('/'+page);
				}
				navID = page + "Nav"; //add active class 
				$('#'+navID).addClass('activeSub');
			}
	})($);

// Determines whether to display mobile/tablet or desktop navigation
	(function($){ 
		setNavType=function() {
			if ($(window).width() < 1008 ) {
				 $('#photoSelect').removeClass('hide').addClass('showInlineBlock');
				 $('#libSelect').removeClass('hide').addClass('showInlineBlock');
				 $('#mainNav').removeClass('showBlock').addClass('hide');
				 $('#photoNav').removeClass('showInline').addClass('hide');
				 $('#libNav').removeClass('showInline').addClass('hide');
			}
			else {
				 $('#photoSelect').removeClass('showInlineBlock').addClass('hide');
				 $('#libSelect').removeClass('showInlineBlock').addClass('hide');
				 $('#mainNav').removeClass('hide').addClass('showBlock');
				 $('#photoNav').removeClass('hide').addClass('showInline');
				 $('#libNav').removeClass('hide').addClass('showInline');
			}
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
		$('#libNav').css('display','none');	
		$('#photoNav').css('display','inline');
	});

	$('li#lib').click(function () {
		$(this).addClass('activeMain');
		$('li#photo').removeClass('activeMain');
		$('#photoNav').css('display','none');	
		$('#libNav').css('display','inline');
	});
	
	$("nav select").change(function() {
		window.location = $(this).find("option:selected").val();
	});
	
			
	$(window).resize(function() {
			setNavType();
	});		

});

