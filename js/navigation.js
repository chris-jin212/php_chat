$(function() {

	//highlight the current nav
	$("#about a:contains('About')").parent().addClass('active');
	$("#index a:contains('Home')").parent().addClass('active');
	$("#searchoption a:contains('Search')").parent().addClass('active');
    $("#latest_profiles a:contains('Latest Profiles')").parent().addClass('active');
    $("#contactus a:contains('Contact Us')").parent().addClass('active');
    $("#help a:contains('Help')").parent().addClass('active');
    $("#donate a:contains('Donate')").parent().addClass('active');
    $("#successstory a:contains('Success Stories')").parent().addClass('active');
   	$("#registration1 a:contains('Register')").parent().addClass('active');

//	if($("#photographer_pack a:contains('Photographer\'s Package')").parent().hasClass('active')){
//	$(".dropdown a:contains('Our Programs')").parent().addClass('active');
//	}

//	if($("#joomla a:contains('Joomla Training')").parent().hasClass('active')){
//	$(".dropdown a:contains('Our Programs')").parent().addClass('active');
//	}

	//make menus drop automatically
	$('ul.nav li.dropdown').hover(function() {
		$('.dropdown-menu', this).fadeIn();
	}, function() {
		$('.dropdown-menu', this).fadeOut('fast');
	});//hover

}); //jQuery is loaded