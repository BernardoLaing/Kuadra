<?php
  $name = $_POST['nombre'];
  $company = $_POST['empresa'];
  $email = $_POST['correo'];
  $telefono = $_POST['telefono'];
  $message = $_POST['mensaje'];
  $consulta = $_POST['consulta'];
  $formcontent="De: $name \n Empresa: $company \n Tipo de Consulta: $consulta \n Comentarios Adicionales: $message \n Telefono: $telefono \n Email: $email";
  $recipient = "valter.nunez@outlook.com";
  $subject = "Forma de Contacto Pagina Web KUADRA";
  $mailheader = "De: $email \r\n";
  mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
  header('Location: index.html');
  exit();
?>
