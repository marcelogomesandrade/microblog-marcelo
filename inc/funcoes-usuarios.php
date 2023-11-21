<?php

require "conecta.php";

//PARÂMETROS 

function inserirUsuario($conexao, $nome, $email, $tipo, $senha)
{


    // Montando uma variável com o comando SQL de INSERT e com os dados (parâmetros) recebidos pela função 

    $sql = "INSERT INTO usuarios(nome,email,senha,tipo)
    VALUES ('$nome','$email','$senha','$tipo')";

    // Executando o comando SQL 

    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
}

function lerUsuarios($conexao)
{

    //Comando SQL para fazer a leitura de dados (SELECT)

    $sql = "SELECT id, nome, email, tipo FROM usuarios ORDER BY nome";

    //Execução do comando e armazenamento do resultado da consulta/query 

    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

    // Retornamos o resultado da query transformando em array associativo 

    return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
}

function lerUmUsuario($conexao, $id)
{

    // Montamos o sql contendo o id do usuário que queremos carregar 
    $sql = "SELECT * FROM usuarios WHERE id = $id";

    // Executamos e guardando o resultado da consulta 
    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
}