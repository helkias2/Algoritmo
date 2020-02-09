<?php

    $s_inicial = '';
    $s_final = '';
    
    $s_inicial = $_POST['qtd_prod'];
    $s_final = $_POST['numero'];


    $numero_inicial_sorte = 10;
    $c = 1;

    while($c <= $numero_inicial_sorte){ 
        while($s_inicial <= $s_final){
            // echo $s_inicial."<br>";
            $s_inicial++;        
        }
        echo $c."<br>";
        $c++;
    } 
