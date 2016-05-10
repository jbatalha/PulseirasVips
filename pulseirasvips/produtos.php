<?php
include_once("conexao.php");

  $select = "SELECT * FROM Produtos";
  $qr = mysql_query($select);
  $i = 0;
    while($ln = mysql_fetch_array($qr)){
        ?>
        <div class="fluid">
        <div class="col-sm-4 col-md-4">
        <div class="thumbnail">
        <img height="100px" src="imgs/<?php echo $ln['Prod_Imagem']; ?>">
        <div class="caption">
        <?php echo $ln['Prod_Codigo'].".";?>
        <?php echo $ln['Prod_Descricao'];?> R$ <?php echo $ln['Prod_Preco'].".";?>
        </div>
        </div>
        </div>
        </div> 
          <?php
                  $i++;
                } //fim while
          
          ?>