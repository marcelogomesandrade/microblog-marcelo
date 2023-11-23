<?php

require "../inc/funcoes-sessao.php";
require "../inc/funcoes-usuarios.php";

verificaAcesso();

//Verficando se o usuário pode entrar nesta páginas 
verificaTipo();

$id = $_GET ['id'];
excluirUsuario($conexao, $id);
header ("location:usuarios.php");