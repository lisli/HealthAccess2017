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
});