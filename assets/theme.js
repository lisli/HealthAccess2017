// function scriptname(){
// 	jQuery(document).ready(function($){
// 		// script goes here
// 	});
// }

jQuery(document).ready(function(jQuery){

	jQuery(document).on("click", ".staff-info > button", function(event) {
		jQuery(this).siblings(".bio").toggle();
  	});
});