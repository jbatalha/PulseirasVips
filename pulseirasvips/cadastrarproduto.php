<?php
	
	include_once("conexao.php");

	$pasta = "imgs/";

	if (isset($_FILES['tArquivo'])) {
    $name = $_FILES['tArquivo']['name'];
    $tmp_name = $_FILES['tArquivo']['tmp_name'];
	}
 
	move_uploaded_file($tmp_name, $pasta.$name);

	$cod = $_POST["tCod"];
	$desc = $_POST["tNome"];
	$valor = $_POST["valor"];

	$sql = "INSERT INTO Produtos (Prod_Codigo, Prod_Descricao, Prod_Preco, Prod_Imagem) VALUES ";
	$sql .= "('".$cod."', '".$desc."', '".$valor."', '".$name."')";

	if (mysql_query($sql)){
	?>
	<html>
		<meta charset="utf-8">
        <meta http-equiv="refresh" content="0; url=index.php" />
            <script language="javascript" type="text/javascript">
                 alert("Produto cadastrado com sucesso! :) ");
            </script>
	</html>
	<?php
	} else{
	?>
	<html>
		<meta charset="utf-8">
        <meta http-equiv="refresh" content="0; url=index.php" />
            <script language="javascript" type="text/javascript">
                 alert("Ocorreu um erro :( Tente novamente.");
            </script>
	</html>
	<?php

	}

?>

