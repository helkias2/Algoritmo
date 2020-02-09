<?php


$post = $_POST;
echo resultadoAre($post);

function resultadoAre($post){
      echo  soma($post['numero1'], $post['numero2']) == 12 ? 'Verdade': 'falso';
      echo  subitrair($post['numero1'], $post['numero2'])  == 8 ? 'Verdade': 'falso';
      echo  multiplicar($post['numero1'], $post['numero2'])  == 20 ? 'Verdade': 'falso';
      echo  dividir($post['numero1'], $post['numero2'])  == 5 ? 'Verdade': 'falso';
}


function soma($num, $base){
    return $num + $base;
}

function subitrair($num, $base){
    return $num - $base;
}

function multiplicar($num, $base){
    return $num * $base;
}

function dividir($num, $base){
    return $num / $base;
}

