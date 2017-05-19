$(document)
.ready(function() {
  $('.ui.login.form')
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
    },
  });
  
  $('#login-form').on('submit', function(event) {
    event.preventDefault();
    $.ajax({
      type: 'POST',
      url: 'login.php',
      data: JSON.stringify({
        email: $(this).find('[name=email]').val(),
        password: $(this).find('[name=password]').val(),
      }),
      onSuccess: (res) => {
        console.log(`onSuccess: res: ${res}`);
        if (res['success'] == 0)
          alert('You entered incorrect id or password');
      },
      onError: (res) => {
        console.log(`onError: res: ${res}`);
        alert('You entered incorrect id or password');
      },
      
    });
  });
})
;