$(document).ready(function(){
  $('#form-submit').click(function(){
    $.ajax({type: "POST", url: "sendmail", data: $('#form-send').serialize() , success: function(){$('#sendmail').text('El mensaje fue enviado correctamente...')}});
    //$('#sendmail').load($('#form-send').action());
    return false;
  });
});
