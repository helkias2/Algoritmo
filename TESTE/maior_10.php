<?php

$post = $_POST;
echo result($post);

function result($post){
    echo maior($post['numero1']) == 1 ? 'Maior':'Menor';
}

function maior($num){
    if($num > 10){
        return 1;
    }else{
        return 0;
    }

}
