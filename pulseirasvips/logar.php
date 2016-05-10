<?php

	include_once("conexao.php");

		$email = $_POST["tMail"];
		$senha = $_POST["tSenha"];

		$email = mysql_real_escape_string($email);
		$senha = mysql_real_escape_string($senha);

		$sql = "SELECT * FROM usuario WHERE Us_Email = '".$email."' AND Us_Senha = '".md5($senha)."'";

		$busca = mysql_query($sql) or die(mysql_error()." <br/>Erro");

		$num_resultados = mysql_num_rows($busca);

		$dados_do_banco = mysql_fetch_array($busca);


		if($num_resultados > 0){

			session_start();

			$_SESSION["nome"] = $dados_do_banco["Us_Nome"];
			$_SESSION["email"] = $dados_do_banco["Us_Email"];
			$_SESSION["tipo_usuario"] = $dados_do_banco["Us_Tipo"];

			header("Location: index.php");

		}else{
		?>
        	<html>
				<meta charset="utf-8">
        	<meta http-equiv="refresh" content="0; url=index.php" />
            <script language="javascript" type="text/javascript">
                 alert("Usuario nao cadastrado... :(");
            </script>
        	</html>
    	<?php
    	}

?>
