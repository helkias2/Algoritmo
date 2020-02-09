<?php

$post = $_POST;
echo result($post);

function result($post){
    echo positivo_ou_negativo($post['numero1']) == 1 ? 'Positivo' : 'Negativo';
}

function positivo_ou_negativo($num){
    if($num >= 0){
        return 1;
    }else{
        return 0;
    }
}