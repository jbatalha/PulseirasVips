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
              
                <h1>Formulário de Cadastro</h1>
            </hgroup>
        </header>
        

        <form id="cadastro" class="col-xs-12 col-sm-12 col-md-8" method="post" id="fContato" action="cadastrarusuario.php" oninput="calc_total();">
            <fieldset id="usuario">
                <legend>Identificação do Usuário</legend>
                <p><label class="col-md-3"for="cNome">Nome:</label><input type="text" name="tNome" id="cNome" size="30" maxlength="40" placeholder="Nome completo" required name=tNome/></p>
                <p><label class="col-md-3 col-md-3"for="cData">DatadeNasc.:</label><input type="text" name="tData" id="cData" required="required" maxlength="10" placeholder="dd/mm/aaaa" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" min="1916-01-01" max="2016-01-01"/></p>
                <p><label class="col-md-3"for="cSenha">Telefone:</label><input type="tel" name="tTel" id="cTel" <input type="tel" required="required" maxlength="15" pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" placeholder=" (00) 00000-0000"/></p>
                <p><label class="col-md-3"for="cMail">Email:</label><input type="email" name="tMail" id="cMail" required="required" class="input-text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="nome@servemail.com"/></p>
                <p><label class="col-md-3"for="cSenha">Senha:</label><input type="password" name="tSenha" id="cSenha" size="8" maxlength="8" placeholder=" 8 Dígitos" required name=tSenha/></p>

                <br/>
                <fieldset><legend>Sexo</legend>
                    <input type="radio" name="tSexo" value = "Masculino" id="cMasc" /><label for="cMasc"/> Masculino</label>
                    <input type="radio" name="tSexo" value = "Feminino" id="cFem"/><label for="cFem"/>Feminino</label>
                </fieldset>
                
                </fieldset>

            <fieldset id="endereco">
                <legend>Endereço do Usuário</legend>
                <p><label class="col-md-3"for="cRua">Logradouro:</label>
                  <input type="text" name="tRua" id="cRua" size="40" maxlength="80" placeholder="Rua, Avenida, travessa." required name=tRua/></p>
                <p><label class="col-md-3"for="cNum">Número:</label>
                  <input type="text" name="tNum" id="cNum" min="0" max"99999"/></p>
                <p><label class="col-md-3"for="cCid">Cidade:</label>
                <input type="text" name="tCid" id="cCid" maxlength="40" size="20" placeholder="Sua Cidade" required name=tCid></p>
                <p><label class="col-md-3"for="cEst">Estado:</label>
                  <input type="text" name="tEst" id="cEst" maxlength="40" size="20" placeholder="Seu Estado" required name=tEst></p>
                <p><label class="col-md-3"for="cRua">CEP:</label>
                  <input type="text" name="tCep" id="cCep" size="9" maxlength="9" placeholder="00000-000" required name=tCep/></p>
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







