<?php

$post = $_POST;

echo duasVaiveis($post);

function duasVaiveis($post){

    inverterValor($post['numero1'], $post['numero2']);
    $aux = $post['numero1'];
    $post['numero1'] = $post['numero2'];
    $post['numero2'] = $aux;

    return "Valor - 1 e ". $post['numero1']. " Valor - 2 e ". $post['numero2'];
}

function inverterValor($valor1, $valor2){
    $aux = $valor1;
    $valor1 = $valor2;
    $valor2 = $aux;

}
 


  