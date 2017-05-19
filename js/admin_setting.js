$(document)
.ready(function() {
  $('.ui.signup.form')
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
        password1: {
          identifier: 'password1',
          rules: [
            {
              type   : 'minLength[8]',
              prompt : 'The passwords should be longer than 8 characters'
            },
            {
              type   : 'empty',
              prompt : 'Please enter a password'
            }
          ]
        },
        password2: {
          identifier: 'password2',
          rules: [
            {
              type   : 'match[password1]',
              prompt : 'The passwords should be same'
            }
          ]
        },
        name: {
          identifier: 'name',
          rules: [
            {
              type   : 'empty',
              prompt : 'Please select a name'
            }
          ]
        },
        phone_number: {
          identifier: 'phone-number',
          rules: [
            {
              type   : 'regExp',
              value : /^\d{3}-\d{3,4}-\d{4}$/
            }
          ]
        },
      },
      onSuccess: (event) => {
        event.preventDefault();
        $('#account_modal').modal('show');
      }
    });
  
    $('.ui.coupon-blocked-period.form')
      .form({
        fields: {
          start_date: {
            identifier: 'start_date',
            rules: [
              {
                type: 'empty',
                prompt: 'Please select start date'
              }
            ]
          },
          end_date: {
            identifier: 'end_date',
            rules: [
              {
                type : 'empty',
                prompt: 'Please select start date'
              }
            ]
          },
        },
        onSuccess: (event) => {
          event.preventDefault();
          $('#period_modal').modal('show');
          let start_date = $('input[name=start_date]').val();
          let end_date = $('input[name=end_date]').val();
          $('.coupon-blocked-text > h3').text(`Current coupon-blocked period: ${start_date} ~ ${end_date}`);
        }
      });
  
  
    $('#noshow').on('click', function() {
      if ($('.checkbox.checked').length > 0) {
        $('.checkbox.checked').parent().parent().remove()
        $('#noshow_modal').modal('show');
      }
      else
        alert("You should check at least one reservation");
    });
});