<?php
require "../inc/funcoes-sessao.php";
require "../inc/funcoes-noticias.php";

verificaAcesso();

$idNoticia = $_GET['id'];
$tipoUsuario = $_SESSION['tipo'];
$idUsuario = $_SESSION ['id'];


excluirNoticia($conexao,$idUsuario,$idNoticia,$tipoUsuario);

header("location:noticias.php");