<?php
if (isset($_POST['BTEnvia'])) {
 
 //Variaveis de POST
 //====================================================
 $fname = $_POST['nome'];
 $fwhatsapp = $_POST['whatsapp'];
 $femail = $_POST['email']; 
 $fassunto = $_POST['assunto']; 
 $fmensagem = $_POST['mensagem']; 
 $fdata = $_POST['data']; 
 
 //====================================================
 
 //Remetente válido do domínio
 //==================================================== 
 $email_remetente = "form@vxbconsultoria.com.br";
 //====================================================
 
 //Configurações do email
 //==================================================== 
 $email_destinatario = "contato@vxbconsultoria.com.br"; // Destinatário
 $email_reply = "$email"; 
 $email_assunto = "Contato feito através do site"; // Assunto da mensagem
 //====================================================
 
 //Corpo da Mensagem
 //====================================================
 $email_conteudo = "Nome: $fname \n"; 
 $email_conteudo .= "Whatsapp: $fwhatsapp \n";
 $email_conteudo .= "Email: $femail \n";
 $email_conteudo .= "Assunto: $fassunto \n"; 
 $email_conteudo .= "Mensagem: $fmensagem \n"; 
 $email_conteudo .= "Melhor data para contato: $fdata \n"; 
 //====================================================
 
 //Seta os Headers
 //==================================================== 
 $email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
 //====================================================
 
 //Enviando o email 
 //==================================================== 
 if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){ 
  echo "<script>alert('Dados enviados com sucesso!');location.href = 'email.php';history.back()</script>";
} else {
    echo "<script>alert('Ocorreu um erro no envio, tente novamente.');history.back();</script>";
}
 //====================================================
} 
?>
 






