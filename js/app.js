$(function(){
  if (location.href.match(/^file:/)){
    $('#examples-warning').show();
  }
  
  $('input.validaFile').fileValidator({
    onValidation: function(files){      $(this).attr('class','');          },
    onInvalid:    function(type, file){ $(this).addClass('invalid '+type); }
  });
  
});