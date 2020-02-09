<?php

$post = $_POST;
echo resultadoAre($post);

function resultadoAre($post){
    27 ==  calculoQuadrado($post['numero1'], $post['numero2']);
    return TRUE;
}

function calculoQuadrado($valor1, $valor2){
     $valor1 * $valor2;
}

