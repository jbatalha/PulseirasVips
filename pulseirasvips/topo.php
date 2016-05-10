<?php 
session_start();
if (!isset($_SESSION["email"])){
$_SESSION["nome"] = "";
$_SESSION["email"] = "";
$_SESSION["tipo_usuario"] = "";	
}

?>

<div id="topo"class="row class="col-sm-11 col-md-11"">
            <img id="imgtopo" Class="img-responsive" src="_imagens/logomarca2.jpg" alt="logomarca2"/>
            <nav id="navegacao"class="navbar navbar-default" role="navigation">
                <div class="row">               
                  <!-- Menu comum para todos os usuarios -->
                    <div class="navbar-header">
                          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> 
                            <span class="sr-only">Pulseiras Vips</span> 
                          </button> <a class="navbar-brand" href="index.php">Home</a>
                    </div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
					<?php					
					if((($_SESSION['tipo_usuario'])=='U')||(empty($_SESSION['nome']))){ 
						//menu para os usuarios
						echo("
                                <li class='dropdown'><a class='dropdown-toggle' href='#' data-toggle='dropdown'>Pulseiras Vips <b class='caret'></b></a>
                                    <ul class='dropdown-menu'>
                                        <li><a href='historia.php'>História</a></li>
                                        <li class='divider'></li>
                                        <li><a href='centralatendimento.php'>Central de Atendimento</a></li>
                                        <li class='divider'></li>
                                        <li><a href='fale-conosco.php'>Fale Conosco</a></li>
                                        <li class='divider'></li>
                                        <li><a href='duvidas.php'>Dúvidas Frequentes</a></li>
                                    </ul>
                                </li>
                                <li class='dropdown'><a class='dropdown-toggle' href='#' data-toggle='dropdown'>Produtos <b class='caret'></b></a>
                                    <ul class='dropdown-menu'>
                                        <li><a href='catalogo.php'>Catálogo</a></li>
                                        <li class='divider'></li>
                                        <li><a href='dicas.php'>Dicas</a></li>
                                        <li class='divider'></li>
                                        <li><a href='comocomprar.php'>Como Comprar</a></li>
                                    </ul>
                                </li>
								");
					}elseif (($_SESSION['tipo_usuario'])=='A'){
						//menu para os administradores
						echo("
                                <li class='dropdown'><a class='dropdown-toggle' href='#' data-toggle='dropdown'>Produtos<b class='caret'></b></a>
                                    <ul class='dropdown-menu'>
                                        <li><a href='inserir.php'>Cadastrar</a></li>
                                        <li class='divider'></li>
                                        <li><a href='alterar.php'>Alterar</a></li>
                                        <li class='divider'></li>
                                        <li><a href='alterar.php'>Excluir</a></li>
                                    </ul>
                                </li>
								");									
						}
						
						//verifica se o usuario está logado				
						if(empty($_SESSION['nome']) && empty($_SESSION['email'])){ 
							echo("
                                <li><a href='cadastro.php'>Cadastre-se</a></li>
                                <li class='dropdown'><a class='dropdown-toggle' href='#' data-toggle='dropdown'>Login<b class='caret'></b></a>
                                    <ul class='dropdown-menu'>
                                        <form  class='col-md-2' method='post' id='login' action='logar.php'>
                                          <fieldset id='usuario'>                                            
                                            <p><label ></label><input type='email' name='tMail' id='cMail' size='20' maxlength='40' placeholder='E-mail'/></p>
                                            <p><label ></label><input type='password' name='tSenha' id='cSenha' size='20' maxlength='8' placeholder=' Sua Senha'/></p>                                                                      
                                          </fieldset>                          
                                          <button class='btn btn-default' type='submit'>Enviar</button>
                                        </form>                                        
                                    </ul> 
								</li>
								");
								}
								else{
								echo("
								<li class='dropdown'><a class='dropdown-toggle' href='#' data-toggle='dropdown'>Cadastro<b class='caret'></b></a>
                                    <ul class='dropdown-menu'>
                                        <li><a href='atualizarcadastro.php'>Atualizar Dados</a></li>
                                        <li class='divider'></li>
										<li><a href='atualizarsenha.php'>Alterar Senha</a></li>
                                        <li class='divider'></li>
                                    </ul> 
								</li>
								<li><a href='logout.php'>Logout</a></li>
								");
								}	
								?>
                          </ul>
                          <form class="navbar-form navbar-right" role="search" action="busca.php">
                              <div class="form-group"><input class="form-control" name="pesquisa" type="text" placeholder="Pesquisar" /></div>
                              <button class="btn btn-default" type="submit">Pesquisar</button>
                          </form>
                    </div><!-- /.navbar-collapse --> 
                    </div>            
            </nav>
      </div>


