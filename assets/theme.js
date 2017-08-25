// function scriptname(){
// 	jQuery(document).ready(function($){
// 		// script goes here
// 	});
// }

jQuery(document).ready(function(jQuery){

	jQuery(document).on("click", ".staff-info > button", function(event) {
		jQuery(this).siblings(".bio").toggle("slow");
		jQuery(this).children("i").toggleClass("fa-plus");
		jQuery(this).children("i").toggleClass("fa-minus");
  	});

  	jQuery(document).on("click", ".legislation-by-year > h2", function(event) {
		jQuery(this).siblings(".early-legislation-content").toggle("slow");
		// jQuery(this).children("i").toggleClass("fa-plus");
		// jQuery(this).children("i").toggleClass("fa-minus");
  	});

  	jQuery(document).on("click", ".mainnavwrap .menu-toggle", function(event) {
		jQuery(".menu-main-container").toggle("slow");
  	});
});

/**
 * Handles toggling the navigation menu for small screens and
 * accessibility for submenu items — from Twenty Twelve Theme
 */
// ( function() {
// 	var nav = document.getElementById( 'site-navigation' ), button, menu;
// 	if ( ! nav ) {
// 		return;
// 	}

// 	button = nav.getElementsByTagName( 'button' )[0];
// 	menu   = nav.getElementsByTagName( 'ul' )[0];
// 	if ( ! button ) {
// 		return;
// 	}
// 	// Hide button if menu is missing or empty.
// 	if ( ! menu || ! menu.childNodes.length ) {
// 		button.style.display = 'none';
// 		return;
// 	}

// 	button.onclick = function() {
// 		// if ( -1 === menu.className.indexOf( 'menu' ) ) {
// 		// 	menu.className = 'menu';
// 		// }

// 		// if ( -1 !== button.className.indexOf( 'toggled-on' ) ) {
// 		// 	button.className = button.className.replace( ' toggled-on', '' );
// 		// 	menu.className = menu.className.replace( ' toggled-on', '' );
// 		// } else {
// 		// 	button.className += ' toggled-on';
// 		// 	menu.className += ' toggled-on';
// 		// }

// 		jQuery('#menu-navigation').slideToggle();
// 	};
// } )();