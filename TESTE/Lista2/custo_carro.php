<?php

$post = $_POST;
echo resultFabricacao($post);

function resultFabricacao($post){
    echo totalCusto($post['numero1'], $post['numero2'], $post['numero3']) == 17300 ? 'Verdade':'Falso';
}

function totalCusto($dist, $impost, $custo){
   return $total =  ($custo + (perc_do_distribuidor($custo, $dist) + perc_do_fabricante($custo, $impost))); 

}

function perc_do_distribuidor($custo,$dist){
    return ($custo * (($dist / 100) / 100));
}

function perc_do_fabricante($custo, $impost){
    return ($custo * (($impost / 100) / 100));
}