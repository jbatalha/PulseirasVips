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

      <section id="conteudoCatalogo">
        <h1>Resultados da Busca</h1>

         <?php
          include_once("conexao.php");
          $palavra = trim($_GET['pesquisa']);
          $sql = mysql_query("SELECT * FROM Produtos WHERE Prod_Descricao LIKE '%".$palavra."%' ORDER BY Prod_Descricao"); 
          $numreg = mysql_num_rows($sql);
          if ($numreg != 0){
              
              while ($produto = mysql_fetch_object($sql)){

      echo("<div class='pulseiras fluid'>
                <div class='col-xs-11 col-sm-6 col-md-6'>
                  <div class='thumbnail'>
                    <img src=\"imgs/$produto->Prod_Imagem\" border=\"0\" width=\"400\">
                    <div class='caption'>
                      <h5>$produto->Prod_Descricao . (R$ .$produto->Prod_Preco.)</h5>
                    </div>
                  </div>
                </div>
          </div>       ");
    }

  } else {
    echo("<br><p> Nenhum produto foi encontrado com a palavra \"$palavra\". </p>");
    
  }
?>

      
      <?php include "rod.php" ?>        
          <img id="imgrod"src="_imagens/logorod.jpg"/>  
          </section>
      </div>
    <br>
    </body>
</html>
