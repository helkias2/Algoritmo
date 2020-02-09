<?php


$post = $_POST;
echo resultadoAre($post);

function resultadoAre($post){
    echo  novoSalario($post['numero1'], $post['numero2']) == 1150 ? 'Verdade': 'falso';
    echo calculo_salario($post['numero1'], $post['numero2']);
}


function novoSalario($salario, $percetual){
    return $salario + calculo_salario($salario, $percetual);

}

function calculo_salario($salario, $percetual){
    return ($salario * $percetual) / 100;

}