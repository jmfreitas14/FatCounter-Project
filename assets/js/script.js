$(function(){
    $("#pesquisa").keyup(function(){
        alert('oi');
        //Recuperar o valor do campo
        var pesquisa = $(this).val();

        //Verificar se hรก algo digitado
        if(pesquisa != ''){
            var dados = {
                palavra : pesquisa
            }
            $.post('proc_pesq_user.php', dados, function(retorna){
                //Mostra dentro da ul os resultado obtidos
                $(".resultado").html(retorna);
            });
        }
    });
});