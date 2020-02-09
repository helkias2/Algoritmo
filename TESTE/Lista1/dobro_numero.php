<?php

$valor1 = $_POST['numero1'];
$valor2 = $_POST['numero2'];

echo dobroNumero($valor1);

function dobroNumero($valor1){
    10 == numero_um($valor1);
    return TRUE;
}

function numero_um($valor1){
    return $valor1 * 2;

}

 


  