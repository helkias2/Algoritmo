<?php

$post = $_POST;

echo total_dias($post);

function total_dias($post){
   echo calculoMeses($post['numero1']) == 210 ? 'Verdade': 'Falso';
}


function calculoMeses($m){
   return 30 * $m; 
}