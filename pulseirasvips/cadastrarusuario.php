<?php
	
	include_once("conexao.php");

	$nome = $_POST["tNome"];
	$dataNasc = $_POST["tData"];
	$tel = $_POST["tTel"];
	$email = $_POST["tMail"];
	$senha = md5($_POST["tSenha"]); // Senha criptografada.
	$sexo = $_POST["tSexo"];
	$end = $_POST["tRua"]." , ".$_POST["tNum"];
	$cidade = $_POST["tCid"];
	$estado = $_POST["tEst"];
	$cep = $_POST["tCep"];

	// Convertendo a data para o padrão (aaaa-mm-dd)
	// para poder os dados serem salvos corretamente no banco de dados.
	$dataNascArray = explode("/", $dataNasc);
	$dataNasc = $dataNascArray[2]."-".$dataNascArray[1]."-".$dataNascArray[0];

	$sql = "INSERT INTO Usuario (Us_Sexo, Us_Nome, Us_DataNasc, Us_Tel, Us_Email, Us_Senha, Us_Endereco, Us_CEP, Us_Cidade, Us_Estado, Us_Tipo) VALUES ";
	$sql .= "('".$sexo."', '".$nome."', '".$dataNasc."', '".$tel."', '".$email."', '".$senha."', '".$end."', '".$cep."', '".$cidade."', '".$estado."', 'U')";

	// se der erro, a função mysql_error() será chamada
	// mostrando qual erro encontrado.
	mysql_query($sql) or die(mysql_error()." Erro ao inserir");
?>
<html>
		<meta charset="utf-8">
        <meta http-equiv="refresh" content="0; url=index.php" />
            <script language="javascript" type="text/javascript">
                 alert("Usuario cadastrado com sucesso! :) ");
            </script>
</html>

<?php
include_once("logar.php");
?>

