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
      window.location.href = "reservation_step1.php"
    } else if (type === "edit a reservation") {

    } else if (type === "cancel a reservation") {

    }

  });
  
  
  $('.ui.manage-customer-reservation.form')
  .form({
    fields: {
      email: {
        identifier: 'email',
        rules: [
          {
            type   : 'regExp',
            value : /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
          }
        ]
      },
      password: {
        identifier: 'password',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your password'
          }
        ]
      },
    },
    onSuccess: (event) => {
      let text = $('#request-type').text().trim().toLocaleLowerCase()
      if (text == "Request Type".toLocaleLowerCase()) {
        event.preventDefault();
        alert('Please select request type');
      }
      else if (text == "Get a Reservation Information".toLocaleLowerCase())
        window.location.href = 'mypage.html';
      else if (text == "Make a Reservation".toLocaleLowerCase())
        window.location.href = 'reservation_step1.php';
      else if (text == "Edit a Reservation".toLocaleLowerCase())
        window.location.href = 'mypage.html';
      else if (text == "Cancel a Reservation".toLocaleLowerCase())
        window.location.href = 'mypage.html';
      else
        console.log(text);
    }
  });

})
;