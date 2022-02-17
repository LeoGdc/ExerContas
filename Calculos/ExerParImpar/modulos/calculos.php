<?php

function selecionarpares($numeroInicial, $numeroFinal){
    $numeroInicial = $numeroInicial;
    $numeroFinal =$numeroFinal;
    $contadorArray = (int) 0;
    $pares = array();

    for($i = $numeroInicial; $i <=$numeroFinal; $i++){

        if($numeroInicial % 2 == 0){
            $pares[$contadorArray] = $i;
            $contadorArray++;
        }
        
    }
    return $pares;
}

function selecionarImpares($numeroInicial, $numeroFinal){
    $numeroInicial = $numeroInicial;
    $numeroFinal =$numeroFinal;
    $contadorArray = (int)0;
    $impares = array();

    for($i = $numeroInicial; $i <=$numeroFinal; $i++){

        if($numeroInicial % 2 != 0){
            $pares[$contadorArray] = $i;
            $contadorArray++;
        }
        
    }
    return $impares;
}
?>