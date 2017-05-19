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

  var toggle  = $('.ui.toggle.button');
  toggle
    .state({
      text: {
        inactive : '<i class="left checked calendar icon"></i> Reserve this room',
        active   : '<i class="left checked calendar icon"></i> Choose this room'
      }
    })
  
  $('input[type=checkbox]').on('change', function(event) {
    if ($(this).parent().hasClass('checked'))
      validation_step4_w_receipt();
    else {
      validation_step4_wo_receipt();
      $('#receipt_field').removeClass('error');
    }
  });


  $('.ui.toggle.checkbox')
  .checkbox('set checked')
;
  
  $('.ui.step1.form')
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
        location.href = 'reservation_step2.php';
      }
    });
  
  validation_step4_w_receipt();
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
      window.location.href = 'reservation_step5.php'
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
}

function validation_step4_wo_receipt()
{
  $('.ui.step4.form')
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
        progressModal();
      }
    });
}


function validation_step4_w_receipt()
{
  $('.ui.step4.form')
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
        progressModal();
      }
    });
}