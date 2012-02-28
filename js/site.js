$(document).ready(function() {

	var maxHeightPhoto = 800;
	var maxWinHeight = .8;
	
	// Sets active navigation classes upon loading page. 
	// errors resolved from http://www.latentmotion.com/separating-jquery-functions-into-external-files-without-selectors/		
	(function($){
				setNav=function(navType, page) {
				$('#'+navType).addClass('activeMain'); // emphasize Photography or Librarianship
				if (navType.indexOf('lib')===-1){ //show photo
					$('#photoNav').css('display','inline');
					$('#libNav').css('display','none');						
					$('#photoSelect').children('option:selected', 'select').removeAttr('selected');
					$('#photoSelect').val('/'+page);
				}
				else { //show lib
					$('#libNav').css('display','inline');
					$('#photoNav').css('display','none');		
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
				 $('#photoSelect').css('display', 'inline-block !important');
				 $('#libSelect').css('display', 'inline-block !important');
				 $('.navList').css('display', 'none !important');
			}
			else {
				 $('#photoSelect').css('display', 'none !important');
				 $('#libSelect').css('display', 'none !important');
				 $('.navList').css('display', 'inline-block !important');
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
	
	setNavType();

	
			
	$(window).resize(function() {
			setNavType();
	});		

});

