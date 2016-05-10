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
              
                <h1>Cadastro de Produtos</h1>
            </hgroup>
        </header>
        <br>
        <form  enctype="multipart/form-data" class="col-sm-10 col-md-8" method="post" id="fCadastroProduto" action="cadastrarproduto.php" oninput="calc_total();">
             <div class="form-group ">
              <label for="exampleInputFile">Click no botão e insira uma imagem para produto</label>
              <input type="file" name="tArquivo" id="cArquivo" accept="image/*" required="required" />
            </div>
            <div class="form-group">
              <label for="cCod">Código:</label>
              <input type="text" maxlength="15" name="tCod" placeholder="P00"/>
              
            </div><br>
            <div class="form-group">
              <label for="exampleInputEmail1">Descrição do Produto:</label>
              <textarea class="form-control" rows="3" maxlength="140" placeholder="Descreva em detalhes o produto" required name="tNome"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Valor:</label>
              <input type="tel" required="required" maxlength="15" name="valor" pattern="([0-9]{1,3}\.)?[0-9]{1,3},[0-9]{2}$" placeholder=" 00,00"/>
            </div>              
            <button type="submit" class="btn ">Salvar</button>
      <a href="indexAdm.php" class="btn btn-default">Cancelar</a>
        </form>


<?php include "rod.php" ?>        
          <img id="imgrod"src="_imagens/logorod.jpg"/>
      </div>
          
      
      <br>
    </body>
</html>







