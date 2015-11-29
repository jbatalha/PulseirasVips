<?php
$conecta = mysql_connect("localhost", "root", "") or die (mysql_error());
$db = mysql_select_db("pulseirasvips2") or die (mysql_error());
?>

<html lang="pt-br">
  <head>
    	<meta charset="UTF-8"/>
      <meta name="description" content="Pulseiras Vips - Pulseiras para Divar"/>
      <meta name="viewport" conetente="width=device-eidth, initial-scale=1">
      <title>Pulseiras Vips - Pulseiras para Divar! </title>
      <script language = "javascript" src = "js/bootstrap.min.js"></script>
      <style type="text/css">
      #vitrine{
        width: 900px;
        background: #333;
        padding: 10px;
        margin: 50px auto;
      }
      </style>
	</head>

  <body>
  <div id="vitrine">
  <table cellpadding="10" border="0" width="100%">
  <tr>
  <?php
  $loop = 3;
  $select = "SELECT * FROM produtos";
  $qr = mysql_query($select);
  $i = 1;
  while($ln = mysql_fetch_array($qr)){
    if($i<$loop){
      echo '
      <td valign="top" align="center" bgcolor="#f4f4f4">
    <img src="'.$ln['Prod_Caminho'].$ln['Prod_Imagem'].'" width="200" alt="" /></td>
    ';

    } elseif ($i=$loop) {
      echo '
      <td valign="top" align="center" bgcolor="#f4f4f4">
    <img src="'.$ln['Prod_Caminho'].$ln['Prod_Imagem'].'" width="200" alt="" /></td>
    </tr>
    <tr>
    ';
    $i=0;
    }

    $i++;
  }
  ?>

    
  </tr> 
  </table>	
  </div>	
  </body>
</html>
