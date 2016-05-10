<?php
include_once("conexao.php");
session_start();
$email = $_SESSION["email"];

$sql = "SELECT * FROM Usuario WHERE Us_Email = '".$email."'";
$busca = mysql_query($sql) or die(mysql_error()." <br/>Erro");
$num_resultados = mysql_num_rows($busca);
$dados_do_banco = mysql_fetch_array($busca);

$dataN1 = explode("-", $dados_do_banco['Us_DataNasc']);
$dataN2 = explode(" ", $dataN1[2]);
$datanasc = $dataN2[0]."/".$dataN1[1]."/".$dataN1[0];

$endereco = explode(",", $dados_do_banco['Us_Endereco']);
$log = $endereco[0];
$num = $endereco[1];
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
              
                <h1>Atualização de Cadastro</h1>
            </hgroup>
        </header>
        <form  class="col-sm-10 col-md-8" method="post" id="fContato" action="alterarusuario.php" oninput="calc_total();">
            <fieldset id="usuario">
                <legend>Identificação do Usuário</legend>
                <p><label class="col-md-3"for="cNome">Nome:</label><input type="text" name="tNome" value="<?php echo $dados_do_banco['Us_Nome']; ?>" id="cNome" size="30" maxlength="40" placeholder="Nome completo" required name=tNome/></p>
                <p><label class="col-md-3 col-md-3"for="cData">DatadeNasc.:</label><input type="text" value="<?php echo $datanasc ?>" name="tData" id="cData" required="required" maxlength="10" placeholder="dd/mm/aaaa" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" min="1916-01-01" max="2016-01-01"/></p>
                <p><label class="col-md-3"for="cSenha">Telefone:</label><input type="tel" name="tTel" id="cTel" <input type="tel" value="<?php echo $dados_do_banco['Us_Tel']; ?>" required="required" maxlength="15" pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" placeholder=" (00) 00000-0000"/></p>
				        <p><label class="col-md-3"for="cMail" style="visibility:hidden">Email:</label><input type="hidden" name="tMail" value="<?php echo $dados_do_banco['Us_Email']; ?>" id="cMail" class="input-text"  /></p>                <br/>
                <fieldset><legend>Sexo</legend>
                    <input type="radio" name="tSexo" value = "Masculino" <?php echo ($dados_do_banco['Us_Sexo'])? "checked" : null; ?> id="cMasc" /><label for="cMasc"/> Masculino</label>
                    <input type="radio" name="tSexo" value = "Feminino" <?php echo ($dados_do_banco['Us_Sexo'])? "checked" : null; ?> id="cFem"/><label for="cFem"/>Feminino</label>
                </fieldset>
                
            </fieldset>

            <fieldset id="endereco">
                <legend>Endereço do Usuário</legend>
                <p><label class="col-md-3"for="cRua">Logradouro:</label>
                  <input type="text" name="tRua" value="<?php echo $log ?>" id="cRua" size="40" maxlength="80" required name=tRua/></p>
                <p><label class="col-md-3"for="cNum">Número:</label>
                  <input type="text" name="tNum" value="<?php echo $num ?>" id="cNum" min="0" max"99999"/></p>
                <p><label class="col-md-3"for="cCid">Cidade:</label>
                <input type="text" name="tCid" value="<?php echo $dados_do_banco['Us_Cidade']; ?>" id="cCid" maxlength="40" size="20" placeholder="Sua Cidade" required name=tCid></p>
                <p><label class="col-md-3"for="cEst">Estado:</label>
                  <input type="text" name="tEst" value="<?php echo $dados_do_banco['Us_Estado']; ?>" id="cEst" maxlength="40" size="20" placeholder="Seu Estado" required name=tEst></p>
                <p><label class="col-md-3"for="cRua">CEP:</label>
                  <input type="text" name="tCep" value="<?php echo $dados_do_banco['Us_CEP']; ?>" id="cCep" size="9" maxlength="9" placeholder="00000-000" required name=tCep/></p>
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







