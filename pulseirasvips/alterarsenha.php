<?php

	include_once("conexao.php");
	session_start();
	$email = $_SESSION["email"];

	$sql = "SELECT * FROM Usuario WHERE Us_Email = '".$email."'";
	$busca = mysql_query($sql) or die(mysql_error()." <br/>Erro");
	$num_resultados = mysql_num_rows($busca);
	$dados_do_banco = mysql_fetch_array($busca);

	$senhan1 = $_POST["SenhaN1"];
	$senhan2 = $_POST["SenhaN2"];
		
	if ($senhan1!=$senhan2){
	?>	
		<html>
		<meta charset="utf-8">
        <meta http-equiv="refresh" content="0; url=atualizarsenha.php" />
        <script language="javascript" type="text/javascript">
            alert("Confirmação de senha não confere :( ");
        </script>
		</html>
	<?php	
	} else {
		$senha=md5($senhan1);
		$sql = "UPDATE Usuario SET 
			Us_Senha = '".$senha."'
			WHERE (Us_Email = '".$email."')";
			
		if(mysql_query($sql)){
		?>	
		<html>
		<meta charset="utf-8">
        <meta http-equiv="refresh" content="0; url=index.php" />
        <script language="javascript" type="text/javascript">
            alert("Senha alterada com sucesso! :) ");
        </script>
		</html>
		<?php	
		}else {
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
		
		
	}
	
?>


