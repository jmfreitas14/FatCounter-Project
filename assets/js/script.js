var indices = [];

//Pega os indices
$('#diary-table thead tr th').each(function() {
    indices.push($(this).text());
});

var arrayItens = [];

//Pecorre todos os produtos
$('#diary-table tbody tr').each(function( index ) {

    var obj = {};

    //Controle o objeto
    $(this).find('td').each(function( index ) {
        obj[indices[index]] = $(this).text();
    });

    //Adiciona no arrray de objetos
    arrayItens.push(obj);

});

//Mostra dados pegos no console
console.log(arrayItens);

//Envia para o php
$.ajax({
    type: "POST",
    url: "adicionaralimento.php",
    data: arrayItens,
    success: function(respostaDoPhp){
        alert('Deu tudo certo');
    },
});