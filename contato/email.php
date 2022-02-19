<?php
if (isset($_POST['BTEnvia'])) {
 
 //Variaveis de POST, Alterar somente se necessário 
 //====================================================
 $fname = $_POST['nome'];
 $fwhatsapp = $_POST['whatsapp'];
 $femail = $_POST['email']; 
 $fassunto = $_POST['assunto']; 
 $fmensagem = $_POST['mensagem']; 
 $fdata = $_POST['data']; 
 
 //====================================================
 
 //REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
 //==================================================== 
 $email_remetente = "form@vxbconsultoria.com.br"; // deve ser uma conta de email do seu dominio (este email é o remetente)
 //====================================================
 
 //Configurações do email, ajustar conforme necessidade
 //==================================================== 
 $email_destinatario = "pedrohgois@gmail.com"; // pode ser qualquer email que receberá as mensagens (destinatário)
 $email_reply = "$email"; 
 $email_assunto = "Contato feito através do site"; // Este será o assunto da mensagem
 //====================================================
 
 //Monta o Corpo da Mensagem
 //====================================================
 $email_conteudo = "Nome: $fname \n"; 
 $email_conteudo .= "Whatsapp: $fwhatsapp \n";
 $email_conteudo .= "Email: $femail \n";
 $email_conteudo .= "Assunto: $fassunto \n"; 
 $email_conteudo .= "Mensagem: $fmensagem \n"; 
 $email_conteudo .= "Melhor data para contato: $fdata \n"; 
 //====================================================
 
 //Seta os Headers (Alterar somente caso necessario) 
 //==================================================== 
 $email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
 //====================================================
 
 //Enviando o email 
 //==================================================== 
 if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){ 
 echo "</b>E-Mail enviado com sucesso!</b>"; 
 } 
 else{ 
 echo "</b>Falha no envio do E-Mail!</b>"; } 
 //====================================================
} 
?>
 
