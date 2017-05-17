$(document)
.ready(function() {
  $('.ui.form')
    .form({
      fields: {
        email: {
          identifier  : 'email',
          rules: [
            {
              type   : 'empty',
              prompt : 'Please enter your e-mail'
            },
            {
              type   : 'email',
              prompt : 'Please enter a valid e-mail'
            }
          ]
        },
        password: {
          identifier  : 'password',
          rules: [
            {
              type   : 'empty',
              prompt : 'Please enter your password'
            },
            {
              type   : 'length[6]',
              prompt : 'Your password must be at least 6 characters'
            }
          ]
        }
      }
    })
  ;
})
;

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}