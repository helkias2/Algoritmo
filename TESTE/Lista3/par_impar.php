<?php

$post = $_POST;
echo result($post);

function result($post){
    echo par($post['numero1']) == 0 ? 'Verdade':'Falso';
}

function par($num){
    if($num % 2 == 0){
        return 0;
    }else{
        return 1;
    }

}

