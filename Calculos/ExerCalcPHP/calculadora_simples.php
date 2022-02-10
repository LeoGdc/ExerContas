<?php
	//include ou require - permitem fazer a importação de arquivos php
	//utilizando a opção com _once, servidor realiza uma restrição para
		//importar somente uma vez o arquivo (melhor opção)

	//include()
	//include_once()

	//require()
	//require_once()
	
	//import do arquivo funções para calculos matematicos
	require_once('./modulo/calculos.php');
	//import do arquivo de funções 
	require_once('./modulo/config.php');

	//declaração de variáveis 
	$valor1 = (double)0;
	$valor2 = (double)0;
	$resultado = (double)0;
	$opcao = (string)null;

	/*
	gettype - permite verificar qual o tipo de dados de uma variavel
	settype - permite modificar o tipo de dados de uma variável

	strtoupper() - permite converte um texto para MAIUSCULO
	strtolower() - permite converte um texto para minusculo
	

	*/
	//validação para verificar se o botão foi clicado
	if(isset($_POST['btncalc'])){

		//receber dados do formulário
		$valor1 = $_POST['txtn1'];
		$valor2 = $_POST['txtn2'];
		

		//validação de tratamento de erro para caixa vazia
		if($_POST['txtn1'] == ""|| $_POST['txtn2'] == ""){
			echo(ERRO_MSG_CAIXA_VAZIA);
		}else{
				if(!isset($_POST['rdocalc'])){
					echo(ERRO_MSG_OPERACAO_CALCULO);
				}else{ 
					if(!is_numeric($valor1) || !is_numeric($valor2)){
						echo(ERRO_MSG_CARACTER_INVALIDO_TEXTO);
					}else{
						//apenas podemos receber o valor do rdo se ele existir
						$opcao = strtoupper($_POST['rdocalc']);

						$resultado = operacaoMatematica($valor1, $valor2, $opcao);
			 	}
			 }

		}
	}


	echo(gettype($valor1))
?>
<html>
    <head>
        <title>Calculadora - Simples</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
	<body>
        
        <div id="conteudo">
            <div id="titulo">
                Calculadora Simples
            </div>

            <div id="form">
                <form name="frmcalculadora" method="post" action="calculadora_simples.php">
						Valor 1:<input type="text" name="txtn1" value="<?=$valor1;?>" > <br>
						Valor 2:<input type="text" name="txtn2" value="<?=$valor2;?>" > <br>
						<div id="container_opcoes">
							<input type="radio" name="rdocalc" value="somar"<?=$opcao == 'SOMAR'?'checked':null;?> >Somar <br>
							<input type="radio" name="rdocalc" value="subtrair"<?=$opcao == 'SUBTRAIR'?'checked':null;?> >Subtrair <br>
							<input type="radio" name="rdocalc" value="multiplicar" <?=$opcao == 'MULTIPLICAR'?'checked':null;?> >Multiplicar <br>
							<input type="radio" name="rdocalc" value="dividir" <?=$opcao == 'DIVIDIR'?'checked':null;?> >Dividir <br>
							
							<input type="submit" name="btncalc" value ="Calcular" >
							
						</div>	
						<div id="resultado">
						 <?=$resultado;?>
						</div>
						
					</form>
            </div>       
           
        </div>
        
		
	</body>

</html>