<?php

    $post = $_POST;
    echo resultadoAre($post);

    function resultadoAre($post){
            9 == antecesso($post['numero1']);
            11 == secessor($post['numero2']);
        return TRUE;
    }

    function antecesso(int $valor1){
        return $valor1 - 1;
    }
    function secessor(int $valor2){
       return $valor2 + 1;
    }

