
$(document).ready(function(){
    $('#birth_date').mask('00/00/0000');
    $('#cep').mask('00000-000');
    $('#cpf').mask('000.000.000-00', {reverse: true});
    $('#uf').mask('AA');
});
