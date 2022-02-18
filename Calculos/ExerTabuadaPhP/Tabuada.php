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
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Tabuada</title>
</head>
<body>
    <header>

    </header>
    <body>
        <main>

    <nav>
                <input type="checkbox" id="check">
                <label for="check" class="checkbtn">
                    <i class="fas fa-bars"></i>
                </label>
                <label class="logo"></label>
                <ul>
                    <li><a href="/index.php">inicio</a></li>
                    <li><a href="../ExerCalcPHP/calculadora_simples.php">Calculadora</a></li>
                    <li><a href="../ExerMedia/media.php">Media</a></li>
                    <li><a class="active" href="">Tabuada</a></li>
                    <li><a href="../ExerParImpar/ParImpar.php">Par e Impar</a></li>
                </ul>
        </nav>
          <div id="conteudo">
            <div id="titulo">
                Tabuada
            </div>

            <div id="form">
                <form name="frmcalculadora" method="Post" action="Tabuada.php">
						Multiplicando:<input type="number" name="txtn1" value="<?=$valor1;?>" > <br>
                        Contador:<input type="number" name="txtn2" value="<?=$valor2;?>" > <br>

                        <input type="submit" name="btncalc" value ="Calcular" >
                    <!-- <footer>
						<div id="resultado">
                         <?=$resultado;?>
                        </div>
                    </footer> -->
                </form>
                <div class = "scrollbar">
                    <?=$resultado;?>
                </div>
</main>
    
</body>
</html>
