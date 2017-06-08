/**
 * Author: reaper45
 * Date: 08/06/17
 * Time: 22:25
 *
 **/

// change angle icon when children show
$('.collapse').on('show.bs.collapse', function () {
  var iconElem = $(this).prev().children().next()
  // Some lidt elements dont have right angle
  if (iconElem) {
      // Remove right angle icon
      iconElem.removeClass('fa-angle-right');

      // Add pointing down angle icon
      iconElem .addClass('fa-angle-down');
  }
})

// change angle icon to initial when children hidden
$('.collapse').on('hidden.bs.collapse', function () {
    var iconElem = $(this).prev().children().next()
    // Some lidt elements dont have right angle
    if (iconElem) {
        // Remove pointing down angle icon
        iconElem.removeClass('fa-angle-down');

        // Add right angle icon
        iconElem .addClass('fa-angle-right');
    }
})

// Done with the angle Icons
// ================================================================
