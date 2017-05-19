$(document)
.ready(function() {
  $('.selection.dropdown').dropdown();
  
  $('#check-in-btn').on('click', () => {
    if ($('input[name=room]').val() != "")
      $('.ui.check-in.modal').modal('show');
  });
  
  $('#check-out-btn').on('click', () => {
    if ($('input[name=room]').val() != "")
      $('.ui.check-out.modal').modal('show');
  });
  
  $('#confirm-checkin-btn').on('click', () => $('.ui.check-in-complete.modal').modal('show'))
  $('#confirm-checkout-btn').on('click', () => $('.ui.check-out-complete.modal').modal('show'))
  
  
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
    onSuccess: () => {
      
    }
  });
})