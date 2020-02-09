<?php


$post = $_POST;
echo resultadoAre($post);

function resultadoAre($post){
      echo  taxa_sobre_mes($post['numero1'], $post['numero2'], $post['numero3']) == 2560 ? 'Verdade': 'falso';
}

function taxa_sobre_mes($emp, $taxa, $mes){
     return $total = (total_taxa_mes($emp, $taxa) * $mes);
}

function total_taxa_mes($emp, $taxa){
    return ($emp * $taxa) / 100;
}