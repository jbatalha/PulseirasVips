<?php
include_once("conexao.php");

  $select = "SELECT * FROM Produtos ORDER BY RAND() LIMIT 4";
  $qr = mysql_query($select);
  $imagem = $qr['Prod_Imagem'];
  $descricao = $qr['Prod_Descricao'];
?>

  <div id="conteudo" class="col-xs-12 col-sm-7 col-md-8">               
    <div class="row">
    <p><h2>Destaques<a class="navbar-toggle" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1 navbar-right " href="catalogo.php" title="Todas as Pulseiras">Listar Todos</a><a class="collapse navbar-collapse navbar-right" href="catalogo.php" title="Todas as Pulseiras">Listar Todos</a></h2></p>
    </div>
    <div class="galeria-pulseiras">
    <?php
      $i = 0;
      while($ln = mysql_fetch_array($qr)){
    ?>
        <div class="pulseiras fluid" align="justify">
                <div class="col-xs-11 col-sm-6 col-md-6">
                  <div class="thumbnail">
                    <img src="imgs/<?php echo $ln['Prod_Imagem']; ?>" alt="<?php echo $ln['Prod_Imagem']; ?>">
                    <div class="caption" >
                    <?php echo $ln['Prod_Codigo']."."; ?>
                    <?php echo $ln['Prod_Descricao'];?> <br> R$ <?php echo $ln['Prod_Preco'].".";?>
                    </div>
                  </div>
                </div>
          </div>        
          <?php
                  $i++;
                } //fim while
          
          ?>
    </div>               
</div><!-- div conteudo --> 