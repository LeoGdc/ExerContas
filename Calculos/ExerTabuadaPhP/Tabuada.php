<?php

require_once('modulos/calculo.php');

require_once('modulos/config.php');

$valor1 = (double)0;
$valor2 = (double)0;
$resultado = (double)0;

if(isset($_POST['btncalc'])){

    //receber dados do formulário
    $valor1 = $_POST['txtn1'];
    $valor2 = $_POST['txtn2'];

    if($_POST['txtn1'] == ""|| $_POST['txtn2'] == ""){
        echo(ERRO_MSG_CAIXA_VAZIA);
    }elseif(!is_numeric($valor1) || !is_numeric($valor2)) {
        echo(ERRO_MSG_CARACTER_INVALIDO_TEXTO);
    }else{
       $resultado = tabuada($valor1, $valor2);
    }
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Tabuada</title>
</head>
<body>
    <header>

    </header>
    <body>
          <div id="conteudo">
            <div id="titulo">
                Tabuada
            </div>

            <div id="form">
                <form name="frmcalculadora" method="Post" action="Tabuada.php">
						Multiplicando:<input type="number" name="txtn1" value="<?=$valor1;?>" > <br>
                        Contador:<input type="number" name="txtn2" value="<?=$valor2;?>" > <br>

                        <input type="submit" name="btncalc" value ="Calcular" >

						<div id="resultado">
                         <?=$resultado;?>
                        </div>
                </form>
                <div id="wrapper">
                <div class="scrollbar" id="resultado">
                <div class="force-overflow"><?$resultado?></div>
                </div>
    </body>
</body>
</html>
