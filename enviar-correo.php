<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';



function enviarEmail($email){
  $mail = new PHPMailer(true);

  try {
    // Configuración del servidor
    $mail->isSMTP();
    $mail->Host       = 'smtp.office365.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = '34461608@itbeltran.com.ar';       // ← cambiá esto
    $mail->Password   = 'Dayanalisis2022';      // ← y esto también
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;
  
    // Remitente y destinatario
    $mail->setFrom('34461608@itbeltran.com.ar', 'Tinta Nocturna');
    
   $mail->addAddress($email);   // ← viene de suscribir.php
  
    // Contenido
    $mail->CharSet = 'UTF-8'; // ← esto es lo más importante
    $mail->isHTML(true);
    $mail->Subject = 'Bienvenidx a Tinta Nocturna';
    $mail->Body    = '
      <h2>Tu suscripción fue sellada con tinta digital 🖋️</h2>
      <p>Pronto te llegarán relatos ocultos, susurros de autorxs y novedades que no se atreven a dormir...</p>
      <p style="font-style: italic;">Gracias por sumarte a la noche.</p>
    ';
  

  
   if  ($mail->send()){
    echo " Correo enviado con éxito  a " . $email;
  } else  {
    echo " Error al enviar: " . $mail->ErrorInfo;
  }  
  }
  catch ( Exception $e) {
    echo "Excepcion capturada: " . $mail->ErrorInfo;
  }
}
