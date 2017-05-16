$(document)
.ready(function() {

  // fix menu when passed
  $('.masthead')
    .visibility({
      once: false,
      onBottomPassed: function() {
        $('.fixed.menu').transition('fade in');
      },
      onBottomPassedReverse: function() {
        $('.fixed.menu').transition('fade out');
      }
    })
  ;

  // create sidebar and attach to menu open
  $('.ui.sidebar')
    .sidebar('attach events', '.toc.item')
  ;
  
  $('.ui.dropdown')
  .dropdown()
  ;

  var $toggle  = $('.ui.toggle.button');
  $toggle
    .state({
      text: {
        inactive : '<i class="left checked calendar icon"></i> Reserve this room',
        active   : '<i class="left checked calendar icon"></i> Choose this room'
      }
    })


  $('.ui.toggle.checkbox')
  .checkbox('set checked')
;

  $('#payment_button')
    .on('click', progressModal)
  ;
  
})
;

function progressModal() {
  // show modal
  $('.ui.small.modal')
    .modal('show')
  ;

  // progressing setting
  var
    $progress       = $('.ui.progress'),
    $button         = $(this),
    updateEvent
  ;
    // restart to zero
  clearInterval(window.fakeProgress)
  $progress.progress('reset');
    // updates every 20ms until complete
  window.fakeProgress = setInterval(function() {
    $progress.progress('increment');
    $button.text( $progress.progress('get value') );
      // stop incrementing when complete
    if($progress.progress('is complete')) {
      clearInterval(window.fakeProgress)
        // go to next page
      window.location.href = 'reservation_step5.html'
    }
  }, 20);

  // progress bar setting
  $('.ui.progress')
    .progress({
      duration : 100,
      total    : 100,
      text     : {
        active: '{value} of {total} done'
      }
    })
  ;

  // cancel button
  // $('.ui.negative.deny.button').on('click', function() {
  //   window.location.href = 'reservation_step4.html'
  // })

}