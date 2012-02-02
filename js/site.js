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
	
});

