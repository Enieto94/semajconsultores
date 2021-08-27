<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Formulario</title>

</head>

<body>
<?php

$Nombre = $_POST['nombres'];
$Telefono = $_POST['telefono'];
$Correo = $_POST['correo'];
$Motivo = $_POST['motivo'];
$Modalidad = $_POST['modalidad'];
$Fecha = $_POST['fecha'];


if ($Nombre=='' || $Telefono == '' || $Correo == '' || $Motivo == '' || $Modalidad == '' || $Fecha == ''){ 

echo "<script>alert('Los campos marcados con * son obligatorios');location.href ='javascript:history.back()';</script>";

}else{


    require 'phpmailer/class.phpmailer.php';
    require 'phpmailer/class.smtp.php'; //incluimos la clase para envíos por SMTP
    $mail = new PHPMailer();

    $mail->From     = $Correo;
    $mail->FromName = $Nombre; 
    $mail->AddAddress("info@semajconsultores.com.co"); // Dirección a la que llegaran los mensajes.
   
// Aquí van los datos que apareceran en el correo que reciba
            
    $mail->WordWrap = 50; 
    $mail->IsHTML(true);     
    $mail->Subject  =  "Nuevo Cliente desea contactar con usted";
    $mail->Body     =  "Nombre: $Nombre \n<br/>"."Correo: $Correo \n<br/>"."Telefono: $Telefono \n<br/>"."Motivo: $Motivo \n<br/>"."Modalidad: $Modalidad \n<br/>"."Fecha: $Fecha \n<br/>";
    // $mail->AddAttachment($archivo['tmp_name'], $archivo['name']);   
    
    

// Datos del servidor SMTP

    $mail->IsSMTP();
    $mail->CharSet = 'UTF-8';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "ssl";
    $mail->Host = "mail.semajconsultores.com.co"; //servidor smtp, esto lo puedes dejar igual
    $mail->Port = 465; //puerto smtp de gmail, tambien lo puedes dejar igual
    $mail->Username = 'info@semajconsultores.com.co';  // Tu correo gmail
    $mail->Password = 'Julioc4r0$.'; // Tu contrasena gmail
    $mail->FromName = 'Contacto Semaj'; // 
    $mail->From = 'info@semajconsultores.com.co'; //email de remitente desde donde se envía el correo, este caso para evitar spam es el mismo que tu correo gmail
    
    if ($mail->Send())
    echo "<script>alert('Formulario enviado exitosamente, le responderemos lo más pronto posible.');location.href ='javascript:history.back()';</script>";
    // echo "$Nombre $Correo $Telefono $Motivo $Modalidad $Fecha";
    else
    echo "<script>alert('Error al enviar el formulario');location.href ='javascript:history.back()';</script>";

}

?>
</body>
</html>