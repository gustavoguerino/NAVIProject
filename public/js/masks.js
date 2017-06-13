
$(document).ready(function(){
    $('#birth_date').mask('00/00/0000');
    $('#cep').mask('00000-000');
    $('#cpf').mask('000.000.000-00', {reverse: true});
    $('#uf').mask('AA');
});
	
var initialText = $('.editable').val();
$('.editOption').val(initialText);

$('#genre').change(function(){
var selected = $('option:selected', this).attr('class');
var optionText = $('.editable').text();

if(selected == "editable"){
  $('.editOption').show();


  $('.editOption').keyup(function(){
      var editText = $('.editOption').val();
      $('.editable').val(editText);
      $('.editable').html(editText);
  });

}else{
  $('.editOption').hide();
}
});