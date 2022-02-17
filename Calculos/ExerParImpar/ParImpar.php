
    <?php

    require_once('modulos/calculos.php');

    require_once('modulos/config.php');

    $valor1 = (double)0;
    $valor2 = (double)0;
    
    $resultadoPares = Array();
    $resultadoImpares = Array();

    if(isset($_POST['btncalc'])){

        //receber dados do formulário
        $valor1 = $_POST['txtn1'];
        $valor2 = $_POST['txtn2'];

        if($_POST['txtn1'] == ""|| $_POST['txtn2'] == ""){
            echo(ERRO_MSG_CAIXA_VAZIA);
        }elseif(!is_numeric($valor1) || !is_numeric($valor2)) {
            echo(ERRO_MSG_CARACTER_INVALIDO_TEXTO);
        }else{
            $resultadoPares = selecionarpares($valor1, $valor2);
            $resultadoImpares = selecionarImpares($valor1, $valor2);
        }
    }

     foreach ($resultadoPares as $numeropar) {
         echo($numeropar);
     }
     foreach($resultadoImpares as $numeroImpar){
         echo($numeroImpar);
     }

    ?>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>Pares e Impares
        </title>
    </head>
    <body>
        <header>
    
        </header>
        <body>
              <div id="conteudo">
                <div id="titulo">
                    Pares e Impares
                </div>
    
                <div id="form">
                    <form name="frmcalculadora" method="Post" action="Tabuada.php">
                           Numero Inicial:<input type="number" name="txtn1" value="<?=$valor1;?>" > <br>
                            Numero Final:<input type="number" name="txtn2" value="<?=$valor2;?>" > <br>
    
                            <input type="submit" name="btncalc" value ="Calcular" >
                    </form>
                <div class = "scrollbar">
                    <?=$numeropar;?> 
                </div>
                <div class="carro">
                    <?=$numeroImpar;?>
                </div>
                    
                    
        </body>
</body>
</html>
    