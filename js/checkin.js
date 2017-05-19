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
})