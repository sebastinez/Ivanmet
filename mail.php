<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require __DIR__ . '/vendor/autoload.php'; 
$mail = new PHPMailer(true);

try {
  //Server settings
  $mail->SMTPDebug = 2;                                       // Enable verbose debug output
  $mail->isSMTP();                                            // Set mailer to use SMTP
  $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
  $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
  $mail->Username   = 'comercial@ivanmet.com.ar';                     // SMTP username
  $mail->Password   = 'iplan2019';                               // SMTP password
  $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
  $mail->Port       = 465;                                    // TCP port to connect to

  //Recipients
  $mail->setFrom('comercial@ivanmet.com.ar', 'IVANMET');
  $mail->addAddress($_POST["mail"], $_POST["name"]);     // Add a recipient
  $mail->addReplyTo($_POST["mail"], $_POST["name"]);

  // Content
  $mail->isHTML(true);                                  // Set email format to HTML
  $mail->Subject = 'Contacto de Formulario Pagina Web';
  $mail->Body    = 'Nombre: '.$_POST["nombre"].'<br>'.'Empresa: '.$_POST["empresa"].'<br>'.'Correo electronico: '.$_POST["mail"].'<br>'.'Telefono: '.$_POST["telefono"].'<br>'.'Comentario: '.$_POST["body"].'<br>';

  $mail->send();
  echo 'Message has been sent';
} catch (Exception $e) {
  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>