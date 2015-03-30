// *************************************
//
//   Navigation dropdown
//   -> Expand/collapse submenus
//
// *************************************

// -------------------------------------
// Toggle .is-hidden class onclick and
// allow only one open menu at a time
// -------------------------------------

jQuery(document).ready(function($) {
  var timeoutId;
  // When a dropdown trigger is clicked
  
  var hideDropdownFunc = function(){
    $(".Navigation-list--dropdown").addClass('is-hidden');
  }

  $('.js-navDropdown').hover(function(e) {
    //if there is a timeout, destroy it.
    clearTimeout(timeoutId);

    if ($(this).siblings('.Navigation-list--dropdown').hasClass('is-hidden')) {
      $(".Navigation-list--dropdown").addClass('is-hidden');
      $(this).siblings('.Navigation-list--dropdown').removeClass('is-hidden');
      $(this).parents('.Navigation-list--dropdown').removeClass('is-hidden');
    }
  }, function(e){
    //set timeout to remove itself
    timeoutId = setTimeout(hideDropdownFunc, 10);

  });

  $('.Navigation-list--dropdown').hover(function(e){
    clearTimeout(timeoutId);
  }, function(e){
    timeoutId = setTimeout(hideDropdownFunc, 10);
  });
  
  // Stop clicks on navigation links from bubbling up
  $('.Navigation-link').click(function(e) {
    e.stopPropagation();
  });
});

// -------------------------------------
// All clicks that gets to the document
// will hide all dropdowns
// -------------------------------------

jQuery(document).click(function() {
  //$(".Navigation-list--dropdown").addClass('is-hidden');
});


