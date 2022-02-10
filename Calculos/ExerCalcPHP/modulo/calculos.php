<?php
/*********************************************
 * Objetivo: Arquivo de funções matematicas q podera ser ultilizada dentro do projeto
 * Autor: Leonardo
 * Data: 04/02/2022
 * versão 1.0
 **********************************************/

 //criando funcão para calcular as operações matematicas

 require_once('modulo/config.php');
 function operacaoMatematica($numero1, $numero2, $operacao){

    //declaração de variaveis locais da função
    $num1 = (double) $numero1;
    $num2 = (double) $numero2;
    $result = (double)0;
    $tipoCalculo = (string) $operacao;

    switch($tipoCalculo){

        case"SOMAR":
            $result = $num1 + $num2;
        break;
        case"SUBTRAIR":
            $result = ($num1 - $num2);
        break;
        case"MULTIPLICAR":
            $result = ($num1 * $num2);
        break;
        case"DIVIDIR":
            if($num2 == 0)
                 echo(ERRO_MSG_DIVISAO_ZERO);
             else
            $result = ($num1 / $num2);

        break;

        default:
        //processamento caso não entre em nenhuma das opções
            }
        $result = round($result, 2);
    
    return $result;
}


?>