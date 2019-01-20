
$( document ).ready(function() {

	//top mobile menu clicks
	$('.custom-mobile-menu button.menu-icon').click(function(){$('.mobile-menu-content').toggleClass('active')});
// three small articles hover effects
	$('.mid-section-2 .cell').hover(
		function() {
			$(this).find('.arrow-down-image-holder').animate({top: "+=15"}, "300");
			$(this).find('.colored-sub-header').animate({'font-size': "+=3"}, "300");
		},
		function() {
			$(this).find('.arrow-down-image-holder').animate({top: "-=15"}, "300");
			$(this).find('.colored-sub-header').animate({'font-size': "-=3"}, "300");
		}
	);
});
