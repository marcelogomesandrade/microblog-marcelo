<?php
require "conecta.php";

/* Usada em noticia-insere.php */
function inserirNoticia($conexao)
{


    // mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

} // fim inserirNoticia


/* Usada em noticia-insere.php e noticia-atualiza.php */

function upload($arquivo)

//validação back-end / lista de formatos suportados pela site (precisa ser igual ao que está no html)
{
    $tiposValidos = ["image/png", "image/gif", "image/jpeg", "image/svg+xml"];

    // Verificando se o tipo de arquivo NÃO É um dos suportados

    if (!in_array($arquivo['type'], $tiposValidos)) {
        echo "<script> 
        alert('Formato inválido!'); history.back ();</script>";
        exit;
    }
    //Obtendo apenas o nome /extensão do arquivo 
    $nome = $arquivo['name'];

    // Obtendo informações de acesso temporário 
    $temporario = $arquivo['tmp_name'];

    $destino = "../imagens/" . $nome;

    // Definindo para onde a imagem vai e com qual nome 

    move_uploaded_file($temporario, $destino);

    // Movendo o arquivo da área temporária para a pasta final 

} // fim upload


/* Usada em noticias.php */
function lerNoticias($conexao)
{


    // mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

} // fim lerNoticias


/* Usada em noticias.php e páginas da área pública */
function formataData()
{
} // fim formataData


/* Usada em noticia-atualiza.php */
function lerUmaNoticia($conexao)
{


    // mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

} // fim lerUmaNoticia


/* Usada em noticia-atualiza.php */
function atualizarNoticia($conexao)
{


    // mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

} // fim atualizarNoticia


/* Usada em noticia-exclui.php */
function excluirNoticia($conexao)
{


    // mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

} // fim excluirNoticia



/* ******************************************************* */


/* Funções usadas nas páginas da área pública */

/* Usada em index.php */
function lerTodasAsNoticias($conexao)
{


    // mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

} // fim lerTodasAsNoticias


/* Usada em noticia.php */
function lerDetalhes($conexao)
{


    // mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

} // fim lerDetalhes


/* Usada em resultados.php */
function busca($conexao)
{

    // mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

} // fim busca
