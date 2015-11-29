<!DOCTYPE html>
<html lang="pt-br">
  <head>
        <meta charset="UTF-8"/>
      <meta name="description" content="Pulseiras Vips - Pulseiras para Divar"/>
      <meta name="viewport" conetente="width=device-eidth, initial-scale=1">
      <title>Pulseiras Vips - Pulseiras para Divar! </title>
      <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
      <script language = "javascript" src = "js/bootstrap.min.js"></script>
    </head>

  <body>
        
      <div id="interface">
          <img id="imglogomarca"src="_imagens/logomarca.jpg"/>
          <?php include "topo.php" ?>  
          section id= "corpo-full">
    <section id= "corpo-full">
    <article id="noticia-principal">
        <header id="cabecalho-artigo">
            <hgroup>
              
                <h1>Formulário de Contato</h1>
            </hgroup>
        </header>

        <form  method="post" id="fContato" action="mailto:mvmj1982@hotmail.com" oninput="calc_total();">
            <fieldset id="usuario">
                <legend>Identificação do Usuário</legend>
                <p><label for="cNome">Nome:</label><input type="text" name"tNome" id="cNome" size="20" maxlength="30" placeholder="Nome completo"/></p>
                <p><label for="cSenha">Senha:</label><input type="password" name="tSenha" id="cSenha" size="8" maxlength="8" placeholder=" 8 Dígitos"/></p>
                <p><label for="cMail">E-mail:</label><input type="email" name="tMail" id="cMail" size="20" maxlength="40"/></p>
                <fieldset><legend>Sexo</legend>
                    <input type="radio" name="tSexo" id="cMasc" /><label for="cMasc"/> Masculino</label>
                    <input type="radio" name="tSexo" id="cFem"/><label for="cFem"/>Feminino</label>
                </fieldset>
                <p>Data de Nascimento:<input type="date" name="tName" id="cName"/></p>
                </fieldset>

            <fieldset id="endereco">
                <legend>Endereço do Usuário</legend>
                <p><label for="cRua">Logradouro:</label><input type="text" name"tRua" id="cRua" size="13" maxlength="80" placeholder="Rua, Avenida, travessa."/></p>
                <p><label for="cNum">Número:</label><input type="number" name"tNum" id="cNum" min="0" max"99999"/></p>
                <p><label for="cEst">Estado:</label>
                    <select name="tEst" id="cEste">
                        <optgroup label="Região Sudeste"> 
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="SP" selected>São Paulo</option>                      
                        </optgroup>
                        <optgroup label="Região Norte">
                            <option value="AM">Amazonas</option>
                            <option value="AC">Acre</option>                        
                        </optgroup>
                        <optgroup label="Região Sul">
                            <option value="SC">Santa Catarina</option>
                            <option value="RS">Rio Grande do Sul</option>                   
                        </optgroup>
                    </select></p>
                <p><label for="cCid">Cidade:</label>
                <input type="text" name="tCid" id="cCid" maxlength="40" size="20" placeholder="Sua Cidade" list="cidades"></p>
                <datalist id="cidades"> 
                    <option value="Rio de Janeiro"> </option>
                    <option value="Nova Iguaçu"> </option>
                    <option value="Niteói"> </option>
                    <option value="Belford Roxo"> </option>
                </datalist>
                </fieldset>

            <fieldset id="mensagem"><legend>Mensagem do Usuário</legend>
                <p><label for="cMsg">Mensagem:</label>
                <textarea name="tMsg" id="cMsg" cols="35" rows="5" placeholder="Deixe aqui sua mensagem"></textarea></p>
            </fieldset>

            <fieldset id="pedido"><legend>Quero um Google Glass</legend>
                <p><input type="checkbox" name="tPed" id="cPed" checked/>
                <label for="cPed">Gostaria de adquirir um Google Glass quando disponível</label></p>
                <p><label for="cCor">Cor:</label>
                <input type="color" name="tCor" id="cCor" value="#0000ff"/></p>
                <p><label for="cQtd">Quantidade:</label>
                <input type="number" name="tQtd" id="cQtd" min="0" max="5" value="0"/></p>
                <p><label for="cTot">Preço Total: R$</label>
                <input type="tex" name="tTot" id="cTot" placeholder="Total a Pagar" readonly/></p>
            </fieldset>

        <input type="image" name="tEnviar" src="_imagens/botao-enviar.png"/>
        </form>

</section>
      </div>
         
          <?php include "rod.php" ?>            
                <img id="imgrod"src="_imagens/logorod.jpg"/>
      </div>
  </div>
      <br>
    </body>
</html>






