<?php
include_once("conexao.php");
session_start();
$email = $_SESSION["email"];

$sql = "SELECT * FROM Usuario WHERE Us_Email = '".$email."'";
$busca = mysql_query($sql) or die(mysql_error()." <br/>Erro");
$num_resultados = mysql_num_rows($busca);
$dados_do_banco = mysql_fetch_array($busca);

$senha = $dados_do_banco['Us_Senha'];

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <title>Pulseiras Vips - Pulseiras para Divar!</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="_css/estilo2.css">
      <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>      
      <script src='js/bootstrap.min.js' type="text/javascript"></script>
  </head>

  <body>
      
      <div id="interface" class="container">
          
          <?php include "topo.php" ?>  
          
        <header id="cabecalho-form">
            <hgroup>
              
                <h1>Alterar Senha</h1>
            </hgroup>
        </header>
        <form  class="col-sm-10 col-md-8" method="post" id="fContato" action="alterarsenha.php" oninput="calc_total();">
            <fieldset>
			<legend>Alterar Senha</legend>
                
				<p><label class="col-md-3"for="cSenha">Senha nova:</label>
				<input type="password" name="SenhaN1" id="cSenha" size="8" maxlength="8" placeholder=" 8 Dígitos" required name=tSenha/></p>
				<p><label class="col-md-3"for="cSenha">Confirme sua senha nova:</label>
				<input type="password" name="SenhaN2" id="cSenha" size="8" maxlength="8" placeholder=" 8 Dígitos" required name=tSenha/></p>
                <p><label class="col-md-3"for="cMail" style="visibility:hidden">Email:</label>
				<input type="hidden" name="tMail" value="<?php echo $dados_do_banco['Us_Email']; ?>" id="cMail" class="input-text"  /></p><br/>
			</fieldset>
            
        <button type="submit" class="btn ">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
        </form>


<?php include "rod.php" ?>        
          <img id="imgrod"src="_imagens/logorod.jpg"/>
      </div>
          
      
      <br>
    </body>
</html>







