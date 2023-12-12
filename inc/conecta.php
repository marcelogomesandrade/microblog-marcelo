<?php
/* Script de conexão ao servidor de Banco de Dados */

$servidor = "localhost";
$usuario = "id21662117_marcelo";
$senha = "Bear1969*";
$banco = "id21662117_microblog";

/* usando a função mysqli_connect para conectar ao servidor de banco de dados */
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

/* Definindo o charset da conexão também como utf8 */

mysqli_set_charset($conexao, "utf8");

/* Verificando da conexão - Se NÃO FOR POSSÍVEL realizar a conexão */

if (!$conexao) {
    //PARE a aplicação e mostre uma mensagem de erro
    die("Deu Ruim:" . mysqli_connect_error());
} 
