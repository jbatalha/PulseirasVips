<?php
require_once("phpmailer/class.phpmailer.php");
require_once("phpmailer/class.smtp.php");

$opcao = $_POST['tOp']; 
$nome = $_POST['tNome'];
$email = $_POST['tMail'];
$telefone = $_POST['tTel'];
$end = $_POST["tRua"]." , ".$_POST["tNum"];
$cidade = $_POST['tCid'];
$estado = $_POST['tEst'];
$mensagem = $_POST['Msg'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');


$mail = new PHPMailer(); 
$mail->SetLanguage("br"); 
$mail->IsMail(); 
$mail->IsHTML(true);
$mail->WordWrap = 50; 
$mail->From = $email; 
$mail->FromName = $nome; 
$mail->AddAddress("joseanebp@yahoo.com.br"); 
$mail->Subject = $opcao; 
$body = "
    <style type='text/css'>
    body {
    margin:0px;
    font-family:Verdane;
    font-size:12px;
    color: #666666;
    }
    a{
    color: #666666;
    text-decoration: none;
    }
    a:hover {
    color: #FF0000;
    text-decoration: none;
    }
    </style>
    <html>
        <table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
            <tr>
              <td>
    <tr>
                 <td width='500'>Nome:$nome</td>
                </tr>
                <tr>
                  <td width='320'>E-mail:<b>$email</b></td>
       </tr>
        <tr>
                  <td width='320'>Telefone:<b>$telefone</b></td>
                </tr>
        tr>
                  <td width='320'>Endereco:<b>$end</b></td>
                </tr>
        <tr>
                <td width='320'>Cidade:<b>$cidade</b></td>
                </tr>
                <tr>
                  <td width='320'>Estado:<b>$estado</b></td>
                </tr>
       <tr>
                  <td width='320'>Assunto:$opcao</td>
                </tr>
                <tr>
                  <td width='320'>Mensagem:$mensagem</td>
                </tr>
            </td>
          </tr>  
          <tr>
            <td>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></td>
          </tr>
        </table>
    </html>
	";

  $mail->MsgHTML($body); 

	$mail->IsSMTP();
	$mail->SMTPAuth = false;
	$mail->Host = "smtp.dominio.net";


  $mail->Send();
  
  $mail->ClearAllRecipients();

  header("Location: enviada.php");

	?>