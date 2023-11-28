<?php
require "conecta.php";

/* Usada em noticia-insere.php */

function inserirNoticia($conexao, $titulo, $texto, $resumo, $nomeImagem, $usuarioId)
{
    $sql = "INSERT INTO noticias (titulo,texto,resumo,imagem,usuario_id)
 VALUES ('$titulo','$texto','$resumo', '$nomeImagem','$usuarioId')";


    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
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
function lerNoticias($conexao, $idUsuario, $tipoUsuario)
{
    //Verificano se o tipo de usuário é admin 
    if ($tipoUsuario == 'admin') {

        // SQL do admin: pode carregar/ver de TODOS 
        $sql = "SELECT 
    noticias.id, 
    noticias.titulo,
    noticias.data,
    usuarios.nome AS autor
    FROM noticias JOIN usuarios
    ON noticias.usuario_id = usuarios.id
    ORDER BY data DESC";
    } else {
        // SQL do editor, pode carregar ou ver somente DELE 
        $sql = "SELECT id, titulo,data
    FROM noticias WHERE usuario_id = $idUsuario ORDER BY data DESC";
    }

    // Executando a consulta e guardando o resultado dela 
    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

    //Retornando o resultado convertido em uma matriz/array 

    return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
    // mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

} // fim lerNoticias


/* Usada em noticias.php e páginas da área pública */
function formataData()
{
} // fim formataData


/* Usada em noticia-atualiza.php */
function lerUmaNoticia($conexao, $idNoticia, $idUsuario, $tipoUsuario)
{
    // admin (pode carregar dados de qualquer notícia de qualquer pessoa) SELECT * FROM noticia WHERE id = $idNoticia ; 

    // editor (pode carregar dados de qualquer noticia DELE PRÓPRIO) SELECT * FROM noticia WHERE id = $idNoticia AND usuario_id = $idUsuario;


    if ($tipoUsuario == "admin") {
        $sql = "SELECT * FROM noticias WHERE id = $idNoticia";
    } else {
        $sql = "SELECT * FROM noticias 
        WHERE id = $idNoticia
        AND usuario_id = $idUsuario";
    }

    //Executando o comando SQL e guardando o resultado 

    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

    //Retormando UM ÚNICO array com os dados da notícia 

    return mysqli_fetch_assoc($resultado);
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
