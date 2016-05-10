<?php
	
	include_once("conexao.php");

	$id = $_GET['id'];

	$sql = "DELETE FROM Produtos WHERE Prod_Codigo='".$id."'";		

	if (mysql_query($sql)) {
		?>	
		<html>
		<meta charset="utf-8">
        <meta http-equiv="refresh" content="0; url=alterar.php" />
        <script language="javascript" type="text/javascript">
            alert("Produto excluido com sucesso! :) ");
        </script>
		</html>
		<?php	
		}else {
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

