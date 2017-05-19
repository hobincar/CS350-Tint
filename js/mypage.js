remove_num = -1;


$(document)
  .ready(function() {
    $('.ui.dropdown').dropdown();
    $('.ui.toggle.checkbox').checkbox('set checked');

    $("div.modify-btn").on('click', () => $(".ui.modify.modal").modal('show'));
    $("div.save-change-btn").on('click', () => $(".ui.pay.modal").modal('show'));
    $("div.modal-close-btn").on('click', () => $(".ui.modal").modal('hide'));
    $("div.back-to-modify-btn").on('click', () => $(".ui.modify.modal").modal('show'));
    $("div.cancel-btn").on('click', function() {
      remove_num = this.id.slice(6);
      $(".ui.cancel.modal").modal('show');
    });
    $("div.remove-btn").on('click', () => {
      $(`.item.item${remove_num}`).remove();
      progressRefundModal()
    });

    validation_w_receipt();

    $('input[type=checkbox]').on('change', function(event) {
      console.log($(this).parent().hasClass('checked'))
      if ($(this).parent().hasClass('checked'))
        validation_w_receipt();
      else {
        validation_wo_receipt();
        $('#receipt_field').removeClass('error');
      }
    });

    $('.menu .item').tab();
  
    $('#modify-info-btn').on('click', () => $('.ui.modify-info.modal').modal('show'));
  
    
  $('.ui.modify-info.form')
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
        old_password: {
          identifier: 'old_password',
          rules: [
            {
              type   : 'empty',
              prompt : 'Please enter the old password'
            },
          ]
        },
        password1: {
          identifier: 'password1',
          rules: [
            {
              type   : 'regExp',
              value : /(^$|^.{8,}$)/,
              prompt: 'Password should be longer than 7 characters'
            },
            {
              type   : 'different[old_password]',
              prompt : 'The old and new passwords should be different'
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
        $('#info-email').text(`Email: ${$("#email").val()}`);
        $('#info-name').text(`Name: ${$("#name").val()}`);
        $('#info-phone-number').text(`Phone Number: ${$("#phone_number").val()}`);
        $('.ui.modify-info.modal').modal('hide');
      }
    });
  
  });


function progressPayModal() {
  $('.ui.small.modal').modal('show');

  // progressing setting
  var
    $progress       = $('.ui.progress'),
    $button         = $(this),
    updateEvent
  ;
  // restart to zero
  clearInterval(window.fakeProgress);
  $progress.progress('reset');
  // updates every 20ms until complete
  window.fakeProgress = setInterval(function() {
    $progress.progress('increment');
    $button.text( $progress.progress('get value') );
      // stop incrementing when complete
    if($progress.progress('is complete')) {
      clearInterval(window.fakeProgress)
      $(".ui.confirm.modal").modal('show');
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
    });

  $('.ui.form').form({
    fields: {
      color: {
        identifier: 'card[number]',
        rules: [{
          type: 'regExp',
          value: /\d{4}-\d{4}-\d{4}-\d{4}/i,
        }]
      }
    }
  });
}    


function progressRefundModal() {
  $('.ui.small.modal').modal('show');

  // progressing setting
  var
    $progress       = $('.ui.progress'),
    $button         = $(this),
    updateEvent
  ;
  // restart to zero
  clearInterval(window.fakeProgress);
  $progress.progress('reset');
  // updates every 20ms until complete
  window.fakeProgress = setInterval(function() {
    $progress.progress('increment');
    $button.text( $progress.progress('get value') );
      // stop incrementing when complete
    if($progress.progress('is complete')) {
      clearInterval(window.fakeProgress)
      $(".ui.refund.modal").modal('show');
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
    });
}


function validation_wo_receipt()
{
  $('.ui.pay.form')
    .form({
      fields: {
        card_type: {
          identifier: 'card[type]',
          rules: [
            {
              type: 'empty',
              prompt: 'Please select card type'
            }
          ]
        },
        card_number: {
          identifier: 'card[number]',
          rules: [
            {
              type : 'regExp',
              value: /\d{16}/
            }
          ]
        },
        card_cvc: {
          identifier: 'card[cvc]',
          rules: [
            {
              type: 'regExp',
              value: /\d{3}/
            }
          ]
        },
        card_expire_month: {
          identifier: 'card[expire-month]',
          rules: [
            {
              type: 'empty',
              prompt: 'Please select card expiration month'
            }
          ]
        },
        card_expire_year: {
          identifier: 'card[expire-year]',
          rules: [
            {
              type: 'regExp',
              value: /\d{4}/
            }
          ]
        },
        
      },
      onSuccess: (event) => {
        event.preventDefault();
        progressPayModal();
      }
    });
}


function validation_w_receipt()
{
  $('.ui.pay.form')
    .form({
      fields: {
        card_type: {
          identifier: 'card[type]',
          rules: [
            {
              type: 'empty',
              prompt: 'Please select card type'
            }
          ]
        },
        card_number: {
          identifier: 'card[number]',
          rules: [
            {
              type : 'regExp',
              value: /\d{16}/
            }
          ]
        },
        card_cvc: {
          identifier: 'card[cvc]',
          rules: [
            {
              type: 'regExp',
              value: /\d{3}/
            }
          ]
        },
        card_expire_month: {
          identifier: 'card[expire-month]',
          rules: [
            {
              type: 'empty',
              prompt: 'Please select card expiration month'
            }
          ]
        },
        card_expire_year: {
          identifier: 'card[expire-year]',
          rules: [
            {
              type: 'regExp',
              value: /\d{4}/
            }
          ]
        },
        receipt: {
          identifier: 'receipt',
          rules: [
            {
              type: 'empty',
              prompt: 'Please select the way you want to get a receipt'
            }
          ]
        }
      },
      onSuccess: (event) => {
        event.preventDefault();
        progressPayModal();
      }
    });
}