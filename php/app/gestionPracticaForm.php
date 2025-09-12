<?php

include_once "../config/helpers.php";

// Ya estoy en backend (endPoint de la aplicación)
// Aquí recibo los valores de los input del formulario, a través de sus claves (name)

// 1) RECOGER LOS VALORES DEL FORM EN VARIABLES
$nombre = $_POST['nom'];
$telefono = $_POST['tel'];
$correo = $_POST['email'];


// 2) COMPROBAR QUE SE RECIBE BIEN
// echo $nombre.'<br>';
// echo $telefono.'<br>';
// echo $correo;


// 3) VERIFICAR QUE LOS CAMPOS SEAN CORRECTOS
if(empty($nombre)){
    mensaje_error2('nombre', 'vacio', $nombre, $telefono, $correo);
}
if(empty($telefono)){
    mensaje_error2('telefono', 'vacio', $nombre, $telefono, $correo);
}
if(empty($correo)){
    mensaje_error2('correo', 'vacio', $nombre, $telefono, $correo);
}
if(validar_email($correo)==false){
    mensaje_error2('correo', 'sintaxis', $nombre, $telefono, $correo);
}
$numCarac = strlen($nombre);
if($numCarac < 3 || $numCarac > 20){
    mensaje_error2('nombre', 'caracteres', $nombre, $telefono, $correo);
}

// 4) ENVÍO DE CORREOS
// enviar un correo al usuario que ha escrito
// Crear el template del correo y darle valor a las variables que necesita phpMailer

// recoger más variables que necesita el phpMailer:correo emisor y el nombre emisor,el correo receptor y su nombre, título del correo
$correoEmisor ="no-reply@webda.eus"; //debe ser un correo que esté dado de alta en el servidor (webda.eus)
$nombreEmisor ="Panadería Aginaga Formulario 2";
$correoDestinatario = $correo;
$nombreDestinatario= $nombre;
$asunto = "Hemos recibido tu correo, $nombre - Panadería Aginaga";
$cuerpo='
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>'.$asunto.'</title>
</head>
<body align="center" style="padding: 1.5rem;background-color: rgb(255, 227, 227);">
    <h1>Hemos recibido tu correo, '.$nombre.'</h1>
    <p>Estos son los datos que hemos recibido en la web de <a href="https://profe.webda.eus/proyecto05/">profe.webda.eus/proyecto05</a> de tu solicitud de contacto:</p>
    <table align="center">
        <tr>
            <td align="left" style="background-color: white;padding: 0.5rem 1rem;border: 1px solid black">Nombre:</td>
            <td align="left" style="background-color: white;padding: 0.5rem 1rem;border: 1px solid black">'.$nombre.'</td>
        </tr>
        <tr>
            <td align="left" style="background-color: white;padding: 0.5rem 1rem;border: 1px solid black">Teléfono:</td>
            <td align="left" style="background-color: white;padding: 0.5rem 1rem;border: 1px solid black">'.$telefono.'</td>
        </tr>
        <tr>
            <td align="left" style="background-color: white;padding: 0.5rem 1rem;border: 1px solid black">Correo Electrónico:</td>
            <td align="left" style="background-color: white;padding: 0.5rem 1rem;border: 1px solid black">'.$correo.'</td>
        </tr>        
    </table>

    <p>Gracias por escribirnos, nuestro equipo se pondrá en contacto contigo lo antes posible.</p>
    <p>Equipo de Panadería Agianga</p>
    <a href="https://profe.webda.eus/proyecto05/">profe.webda.eus/proyecto05</a>

</body> 
</html>
';
include "./envioPhpMailer.php"; //necesite ejecutar el envío de correo.

// enviar un correo al admin de la web
// recoger más variables que necesita el phpMailer:correo emisor y el nombre emisor,el correo receptor y su nombre, título del correo
$correoEmisor ="no-reply@webda.eus";
$nombreEmisor ="Web Panadería formulario 2";
$correoDestinatario = "aranaz@webda.eus";
$nombreDestinatario= "Admin de la web";
$asunto = "Has recibido una nueva solicitud de contacto en la web, de $nombre";
$cuerpo='
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>'.$asunto.'</title>
</head>
<body align="center" style="padding: 1.5rem;background-color: rgb(255, 227, 227);">
    <h1>Has recibido un nuevo mensaje de '.$nombre.'</h1>
    <p>Estos son los datos que hemos recibido en la web de <a href="https://profe.webda.eus/proyecto05/">profe.webda.eus/proyecto05</a> de solicitud de contacto:</p>
    <table align="center">
        <tr>
            <td align="left" style="background-color: white;padding: 0.5rem 1rem;border: 1px solid black">Nombre:</td>
            <td align="left" style="background-color: white;padding: 0.5rem 1rem;border: 1px solid black">'.$nombre.'</td>
        </tr>
        <tr>
            <td align="left" style="background-color: white;padding: 0.5rem 1rem;border: 1px solid black">Teléfono:</td>
            <td align="left" style="background-color: white;padding: 0.5rem 1rem;border: 1px solid black">'.$telefono.'</td>
        </tr>
        <tr>
            <td align="left" style="background-color: white;padding: 0.5rem 1rem;border: 1px solid black">Correo Electrónico:</td>
            <td align="left" style="background-color: white;padding: 0.5rem 1rem;border: 1px solid black">'.$correo.'</td>
        </tr>        
    </table>

    <p>Un saludo</p>
    <p>Equipo de Panadería Agianga</p>
    <a href="https://profe.webda.eus/proyecto05/">profe.webda.eus/proyecto05</a>

</body> 
</html>
';
include "./envioPhpMailer.php";

// 5) REDIRECCIÓN A LA PÁGINA GRACIAS.PHP
header("location:../../gracias.php?nombre=$nombre");






?>