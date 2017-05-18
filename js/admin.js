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

  $('.ui .submit.button').on('click', function() {
    var type = $('.ui.floating.dropdown').dropdown('get value');
    console.log($('.ui.floating.dropdown').dropdown('get value'));

    if (type === "get a reservation information") {

    } else if (type === "make a reservation") {
      window.location.href = "reservation_step1.html"
    } else if (type === "edit a reservation") {

    } else if (type === "cancel a reservation") {

    }

  })

})
;