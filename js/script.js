
/**  browser update notification  **/
var $buoop = {vs:{i:9,f:30,o:20,s:7},c:2}; 
function $buo_f(){ 
 var e = document.createElement("script"); 
 e.src = "//browser-update.org/update.min.js"; 
 document.body.appendChild(e);
};
try {document.addEventListener("DOMContentLoaded", $buo_f,false)}
catch(e){window.attachEvent("onload", $buo_f)}
/**  browser update notification  **/


var win_width, win_height, site_url, theme_url;

jQuery(document).ready(function() {	
	win_width = parseInt(jQuery(window).width());
	win_height = parseInt(jQuery(window).height());

	site_url = jQuery("#site_url").val();
	theme_url = jQuery("#theme_url").val();

	jQuery(".internal_link").click(function(event){
		scroll_animation(this, event, 2000);
		return false;
	});

	parallaxScrolling();

	jQuery('#primany-menu').meanmenu({
		meanMenuContainer: '#nav-fixed',
		meanScreenWidth: "766",
		meanMenuCloseSize: "30px"
	});

});	


jQuery(window).load(function() {
	
});


jQuery(window).resize(function() {
	win_width = parseInt(jQuery(window).width());
	win_height = parseInt(jQuery(window).height());

	parallaxScrolling();
});


function scroll_animation(linkobj, event, delay)
{
	jQuery('html, body').stop().animate({
		scrollTop: parseInt(jQuery(jQuery(linkobj).attr('href')).offset().top)
	}, delay,'easeInOutExpo');
	event.preventDefault();
	return false;
}




function parallaxScrolling()
{
	if (win_width > 767) {
		// Cache the Window object
		$window = jQuery(window);

		jQuery('section[data-type="background"]').each(function(){
			var $bgobj = jQuery(this); // assigning the object

			jQuery(window).scroll(function() {

				// Scroll the background at var speed
				// the yPos is a negative value because we're scrolling it UP!								
				var yPos = -($window.scrollTop() / $bgobj.data('speed')); 

				// Put together our final background position
				var coords = '50% '+ yPos + 'px';

				// Move the background
				$bgobj.css({ backgroundPosition: coords });

			}); // window scroll Ends

		});
	}	

}



