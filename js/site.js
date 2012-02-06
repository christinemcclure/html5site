$(document).ready(function() {


	// Navigation	
	$('#photoNav').hide();
	$('#libNav').hide();

	$('li#photo').click(function () {
		$(this).addClass('activeNav');
		$('ul#libNav').hide();
		$('ul#photoNav').fadeToggle('slow', 'linear');
	});

	$('li#lib').click(function () {
		$(this).addClass('activeNav');
		$('ul#photoNav').hide();
		$('ul#libNav').fadeToggle('slow', 'linear');
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

