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
      url: 'verify.php',
      data: {
        email: $(this).find('[name=email]').val(),
        password: $(this).find('[name=password]').val(),
      },
    })
    .done((res) => {
      console.log(`done: res: ${res}`);
      if (res['success'] == 0)
        alert('You entered incorrect ID or Password');
      else if (res['success'] == 1) {
        $('body').append(
          $("<form/>")
            .attr('id', 'login-form2')
            .attr('method', 'POST')
            .attr('action', 'login.php')
            .attr('hidden', 'hidden')
            .append($("<input/>")
                    .attr('hidden', 'hidden')
                    .attr("name", "email")
                    .attr("value", $(this).find('[name=email]').val()))
            .append($("<input/>")
                    .attr('hidden', 'hidden')
                    .attr("name", "password")
                    .attr("value", $(this).find('[name=password]').val()))
        );
        $('#login-form2').submit();
      }
    })
    .fail((res) => {
      console.log(`fail: res: ${res}`);
    })
  });
})
;