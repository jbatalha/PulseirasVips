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
              
                <h1>Fale Conosco</h1>
            </hgroup>
        </header>
        <br>
        <form  class="col-sm-10 col-md-8" method="post" id="fCadastroProduto" action="enviar.php" oninput="calc_total();">
            <fieldset id="usuario">
                  <legend>Identificação do Usuário</legend><br><br>
                      <div class="form-group">
                          <label class="col-md-3" for="cOpcao">Escolha uma Opção: </label>
                          <select name="tOp" id="cOp">
                              <option value="01">Trocas</option>
                              <option value="02" selected>Pedido</option>
                              <option value="03">Dúvidas</option>
                              <option value="04">Sugestões e elogios</option>
                              <option value="05">Parcerias</option>
                              <option value="06">Promoções e descontos</option>
                          </select>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3"for="cNome">Nome:</label><input type="text" name="tNome" id="cNome" maxlength="40" placeholder="Nome completo" required name=tNome/>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3"for="cMail">Email:</label><input type="email" name="tMail" id="cMail" required="required" placeholder="nome@servemail.com" class="input-text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"/>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3"for="cSenha">Telefone:</label><input type="tel" name="tTel" id="cTel" <input type="tel" required="required" maxlength="15" pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" placeholder=" (92) 9355-9911"/>
                  </div>
            </fieldset>            
            <fieldset id="endereco">
                  <legend>Endereço do Usuário</legend><br><br>
                  <div class="form-group"><label class="col-md-3"for="cRua">Logradouro:</label>
                    <input type="text" name="tRua" id="cRua" maxlength="80" placeholder="Rua, Avenida, travessa." required name=tRua/>
                  </div>
                  <div class="form-group"><label class="col-md-3"for="cNum">Número:</label>
                    <input type="text" name="tNum" id="cNum" /></p>
                  
                  </div>
                  <div class="form-group"><label class="col-md-3"for="cCid">Cidade:</label>
                  <input type="text" name="tCid" id="cCid" maxlength="40" size="20" placeholder="Sua Cidade" required name=tCid/>
                  </div>
                  <div class="form-group"><label class="col-md-3"for="cEst">Estado:</label>
                    <input type="text" name="tEst" id="cEst" maxlength="40" size="20" placeholder="Seu Estado" required name=tEst/>
                  </div>
                  
            </fieldset>
            <div class="form-group">
                  <label for="exampleInputEmail1">Mensagem:</label>
                  <textarea class="form-control" rows="3" maxlength="500" placeholder="Digite sua mensagem" required name="Msg"></textarea>
            </div>             
            <button type="submit" class="btn btn-default">Enviar</button>
        </form>


<?php include "rod.php" ?>        
          <img id="imgrod"src="_imagens/logorod.jpg"/>
      </div>
    <br>
    </body>
</html>







