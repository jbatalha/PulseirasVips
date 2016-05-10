<?php
include_once("conexao.php");
session_start();

$sql = "SELECT * FROM Produtos";
$busca = mysql_query($sql);
$num_resultados = mysql_num_rows($busca);
$dados_do_banco = mysql_fetch_array($busca);

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
      <script language="javascript" type="text/javascript">
      function confirmar(){
      var conf = confirm("Tem certeza que deseja excluir?");
      if (conf == true) {
      return true;
      }
      else {
      return false;
      }
      }
      </script>
  </head>

  <body>
      
      <div id="interface" class="container">
          
          <?php include "topo.php" ?>  
          <div id="list" class="row">
 
    <div class="table-responsive col-md-12">
        <table class="table table-striped" cellspacing="0" cellpadding="0" max>
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Descrição</th>
                    <th>Imagem</th>
                    <th>Valor</th>
                    <th class="actions">Ações</th>
                 </tr>
            </thead>
            <tbody>
            <?php
            if($num_resultados >0) {
              while($ln = mysql_fetch_array($busca)){
               ?>
                <tr>
                    <td> <?php echo $ln['Prod_Codigo'];?></td>
                    <td width='70%'><?php echo $ln['Prod_Descricao'];?></td>
                    <td><?php echo $ln['Prod_Imagem'];?></td>
                    <td>R$ <?php echo $ln['Prod_Preco'];?></td>
                    <td class="actions">                        
                        <a class="btn btn-warning btn-xs" href="editar.php?id=<?php echo $ln['Prod_Codigo']?>">Editar</a>
                        <a class="btn btn-danger btn-xs"  onclick=" confirmar()" href="excluirproduto.php?id=<?php echo $ln['Prod_Codigo']?>" data-toggle="modal">Excluir</a>
                    </td>                                 
                </tr>
              <?php 
              }
            } 
            ?>
            </tbody>
         </table>
 
     </div>
 </div> <!-- /#list -->      


          <?php include "rod.php" ?>        
          <img id="imgrod"src="_imagens/logorod.jpg"/>
      </div>
    </body>
</html>







