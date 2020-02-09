<?php

    $post = $_POST;
    echo media($post);

    function media($post){
            $total = soma($post['numero1'], $post['numero2'], $post['numero3']) / 3;
        return $total;
    }

    function soma($v1, $v2,$v3){
        return $v1 + $v2 + $v3;
    }

  
