$(function(){
    'use strict';

    function esqueciMinhaSenha(){
        esqueciSenha = $("#esqueciSenha");
    }
    
    function mostrarSenha(mostrarSenha){
        switch (mostrarSenha) {
            case 'esqueciSenha':
                $('#esqueciSenha input').prop('name', 'esqueciSenha');
                esqueciMinhaSenha.show();
                loginSenha.hide();
                break;
        }
    }
    $(document).on('click', 'id="esqueciSenha', function (){
        var id = $(this).prop('id');
        mostrarSenha(id);
    });
});