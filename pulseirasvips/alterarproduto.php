<?php
	
	include_once("conexao.php");
	session_start();

	$cod = $_POST["tCod"];
	$desc = $_POST["tDesc"];
	$valor = $_POST["valor"];

	$pasta = "imgs/";

	if (isset($_FILES['tArquivo'])) {
    $name = $_FILES['tArquivo']['name'];
    $tmp_name = $_FILES['tArquivo']['tmp_name'];
    move_uploaded_file($tmp_name, $pasta.$name);
    $sql2 = "UPDATE Produtos SET 
			Prod_Imagem = '".$name."'	
			WHERE (Prod_Codigo = '".$cod."')";

	mysql_query($sql2);		
	}
	

	$sql = "UPDATE Produtos SET 
			Prod_Descricao = '".$desc."', Prod_Preco = '".$valor."'
			 WHERE (Prod_Codigo = '".$cod."')";


	if(mysql_query($sql)){
		?>	
		<html>
		<meta charset="utf-8">
        <meta http-equiv="refresh" content="0; url=alterar.php" />
        <script language="javascript" type="text/javascript">
            alert("Produto atualizado com sucesso! :) ");
        </script>
		</html>
		<?php	
		} else {
		?>
		<html>
		<meta charset="utf-8">
        <meta http-equiv="refresh" content="0; url=alterar.php" />
        <script language="javascript" type="text/javascript">
            alert("Ocorreu um erro :( ");
        </script>
		</html>
		<?php
		}
?>

