<?php

$post = $_POST;
echo result($post);

function result($post){
    echo celsius($post['numero1']);
    echo fahrenheit($post['numero2']);
}

function celsius($fah){
    return 5 * ($fah - 32) / 9;
}

function fahrenheit($cel){ 
    return $cel / 5 * 9 + 32;
}