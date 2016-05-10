<?php
	
	include_once("conexao.php");
	session_start();

	$nome = $_POST["tNome"];
	$dataNasc = $_POST["tData"];
	$email = $_POST["tMail"];
	$tel = $_POST["tTel"];
	$sexo = $_POST["tSexo"];
	$end = $_POST["tRua"]." , ".$_POST["tNum"];
	$cidade = $_POST["tCid"];
	$estado = $_POST["tEst"];
	$cep = $_POST["tCep"];

	// Convertendo a data para o padrão (aaaa-mm-dd)
	// para poder os dados serem salvos corretamente no banco de dados.
	$dataNascArray = explode("/", $dataNasc);
	$dataNasc = $dataNascArray[2]."-".$dataNascArray[1]."-".$dataNascArray[0];

	
	$sql = "UPDATE Usuario SET 
			Us_Sexo = '".$sexo."',
			Us_DataNasc = '".$dataNasc."',
			Us_Nome = '".$nome."',
			Us_Tel = '".$tel."',
			Us_Endereco = '".$end."', 
			Us_CEP = '".$cep."',
			Us_Cidade = '".$cidade."',
			Us_Estado = '".$estado."'
			 WHERE (Us_Email = '".$email."')";
			


	if(mysql_query($sql)){
		?>	
		<html>
		<meta charset="utf-8">
        <meta http-equiv="refresh" content="0; url=index.php" />
        <script language="javascript" type="text/javascript">
            alert("Dados atualizados com sucesso! :) ");
        </script>
		</html>
		<?php	
		} else {
		?>
		<html>
		<meta charset="utf-8">
        <meta http-equiv="refresh" content="0; url=index.php" />
        <script language="javascript" type="text/javascript">
            alert("Ocorreu um erro :( ");
        </script>
		</html>
		<?php
		}
		
	include_once("logar.php");
?>

