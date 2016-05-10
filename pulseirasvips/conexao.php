<?php
    
    /**
    * Este arquivo tem como objetivo
    * realizar a conexão com o banco de dados.
    * Para obter uma conexão de sucesso, seus parâmetros 
    * com o banco devem ser configurados aqui.
    */
    error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $nome_do_banco = "pulseirasvips";

    $db = mysql_connect($servidor, $usuario, $senha);
    $conexao = mysql_select_db($nome_do_banco, $db);

?>
