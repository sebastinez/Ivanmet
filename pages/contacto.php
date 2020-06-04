<?php require(dirname(__DIR__)."/localization/contacto.php"); ?>

<div class="secctionfotos zindex" id="contactbg"></div>

<div class="body-container">
<div class="secctionfotos" id="contactprimary"></div>
  <div class="body-container-header">
  <?php if ($lang === "en") { echo $contact_en_title;} else { echo $contact_es_title;} ?>
</div>
  <div class="body-container-text">
  <?php if ($lang === "en") { echo $contact_en;} else { echo $contact_es;}
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require (dirname(__DIR__).'/vendor/autoload.php');

if(isset($_POST["nombre"])) {
$mail = new PHPMailer(true);

try {
  //Server settings
/*   $mail->SMTPDebug = 2;                                       // Enable verbose debug output */
  $mail->isSMTP();                                            // Set mailer to use SMTP
  $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
  $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
  $mail->Username   = 'comercial@ivanmet.com.ar';                     // SMTP username
  $mail->Password   = 'iplan2019';                               // SMTP password
  $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
  $mail->Port       = 465;                                    // TCP port to connect to

  //Recipients
  $mail->setFrom('comercial@ivanmet.com.ar', 'IVANMET');
  $mail->addAddress('ivanmet@ivanmet.com.ar');     // Add a recipient
  $mail->addAddress('comercial@ivanmet.com.ar');     // Add a recipient
  $mail->addReplyTo($_POST["mail"], $_POST["nombre"]);

  // Content
  $mail->isHTML(true);                                  // Set email format to HTML
  $mail->Subject = 'Contacto de Formulario Pagina Web';
  $mail->Body    = 'Se recibio una consulta a traves del formulario de contacto:<br><br><b>Nombre:</b> '.$_POST["nombre"].'<br>'.'<b>Empresa:</b> '.$_POST["empresa"].'<br>'.'<b>Correo electronico:</b> '.$_POST["mail"].'<br>'.'<b>Telefono:</b> '.$_POST["telefono"].'<br>'.'<b>Comentario:</b> '.$_POST["body"].'<br>';

  $mail->send();
  echo '<h2>Su consulta fue enviada</h2>';
} catch (Exception $e) {
  echo "<h2>Hubo un problema al enviar su consulta. Error: {$mail->ErrorInfo}</h2>";
}
} else {

?>
    <form class="ui form" action="?page=contacto" method="POST">
      <div class="field"><label><script>document.write(lang === "en" ? "Name":"Nombre");</script></label><input name="nombre" type="text"required></div>
      <div class="field"><label><script>document.write(lang === "en" ? "Company":"Empresa");</script></label><input name="empresa" type="text"></div>
      <div class="field"><label><script>document.write(lang === "en" ? "Email":"Correo electrónico");</script></label><input name="mail" type="email" required>
      </div>
      <div class="field"><label><script>document.write(lang === "en" ? "Phone":"Teléfono");</script></label><input name="telefono" type="text" required></div>
      <div class="field"><label><script>document.write(lang === "en" ? "Message":"Mensaje");</script></label><textarea name="body"required></textarea></div>
      <div class="field"><button class="ui button primary" type="submit"><script>document.write(lang === "en" ? "Submit":"Enviar");</script></button></div>
    </form>
   <?php } ?>
  </div>



</div>
