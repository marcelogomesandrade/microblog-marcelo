<?php
require "inc/cabecalho.php";
require "inc/funcoes-noticias.php"; 


$id = mysqli_real_escape_string ($conexao,  $_GET ['id']);

$DadosDaNoticias = lerDetalhes($conexao,$idNoticias);



?>



<div class="row my-1 mx-md-n1">

    <article class="col-12">
        <h2> <?= $DadosDaNoticias['titulo'] ?> </h2>
        <p class="font-weight-light">
            <time><?=formataData($DadosDaNoticias['data'])?></time> - <span><?= $DadosDaNoticias['autor'] ?> </span>
        </p>
        <img src="imagens/<?= $DadosDaNoticias['imagem'] ?>" alt="" class="float-start pe-2 img-fluid">
        <p class="ajusta-texto"><?= $DadosDaNoticias['texto'] ?></p>
    </article>
    

</div> 



<?php 
require_once "inc/rodape.php";
?>

