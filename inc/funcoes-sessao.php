<?php 
/* Sessões no PHP 
Recurso usado para o controle de acesso á determinadas páginas e ou recursos do site. 

Exemplos: área administrativa, painel de controle , área de cliente/aluno etc. 

Nestas áreas o acesso so é possível mediante alguma forma de autenticação. 
Exemplos: login/senha, digital, facial, etc... */

/* Verificar se já NÃO EXISTE uma sessão em funcionamento */

if (!isset($_SESSION)){
    // Então inicie a sessão 
    session_start();

}

function verificaAcesso (){
    /*Se NÃO EXISTIR uma variável de sessão chamada "id" baseaada no id de um usuário logado, então significa que ele/ela NÃO ESTÁ LIGADA(0) no sistema. */
    
    if(!isset($_SESSION['id'])){
        /* Portanto , destrua os dados da sessão, redicione para a página login.php e pare o stript.*/
        session_destroy();
        header ("location:../login.php?acesso_negado");
        exit;// ou die ()
    }
}
