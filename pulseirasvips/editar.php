<?php
include_once("conexao.php");
session_start();
$id = $_GET['id'];

$sql = "SELECT * FROM Produtos WHERE Prod_Codigo = '".$id."'";
$busca = mysql_query($sql) or die(mysql_error()." <br/>Erro");
$num_resultados = mysql_num_rows($busca);
$dados_do_banco = mysql_fetch_array($busca);

$imagem = $dados_do_banco['Prod_Imagem'];
$descricao = $dados_do_banco['Prod_Descricao'];
$valor = $dados_do_banco['Prod_Preco'];

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
              
                <h1>Editar Produto</h1>
            </hgroup>
        </header>
        <br>
        <form  enctype="multipart/form-data" class="col-sm-10 col-md-8" method="post" id="fCadastroProduto" action="alterarproduto.php">
             <div class="form-group ">
              <label for="exampleInputFile"><?php echo $imagem ?></label>
              <input type="file" name="tArquivo" id="cArquivo" accept="image/*" />
            </div>
            <div class="form-group">
              <label for="cCod">Código:</label>
              <input type="text" maxlength="15" name="tC" value="<?php echo $dados_do_banco['Prod_Codigo']; ?>" disabled>
              <input type="hidden" maxlength="15" name="tCod" value="<?php echo $dados_do_banco['Prod_Codigo']; ?>">
            </div><br>
            <div class="form-group">
              <label for="exampleInputEmail1">Descrição do Produto:</label>
              <textarea class="form-control" rows="3" required maxlength="140" name="tDesc"><?php echo $dados_do_banco['Prod_Descricao']; ?></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Valor:</label>
              <input type="tel" required="required" maxlength="15" name="valor" pattern="([0-9]{1,3}\.)?[0-9]{1,3},[0-9]{2}$" value="<?php echo $dados_do_banco['Prod_Preco']; ?>">
            </div>              
            <button type="submit" class="btn ">Salvar</button>
      <a href="alterar.php" class="btn btn-default">Cancelar</a>
        </form>


<?php include "rod.php" ?>        
          <img id="imgrod"src="_imagens/logorod.jpg"/>
      </div>
          
      
      <br>
    </body>
</html>







