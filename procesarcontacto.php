<?php
header('Content-Type: text/html; charset=UTF-8');

error_reporting( E_ALL & ~( E_NOTICE | E_STRICT | E_DEPRECATED ) ); //Aquí se genera un control de errores "NO BORRAR NI SUSTITUIR"
require_once "Mail.php"; //Aquí se llama a la función mail "NO BORRAR NI SUSTITUIR"

$to = 'fryntiz@gmail.com'; //Aquí definimos quien recibirá el formulario
$from = 'fryntiz@gmail.com'; //Aquí definimos que cuenta mandará el correo, generalmente perteneciente al mismo dominio
$host = 'smtp.gmail.com'; //Aquí definimos cual es el servidor de correo saliente desde el que se enviaran los correos
$username = 'fryntiz@gmail.com'; //Aqui se define el usuario de la cuenta de correo, en hostalia separado con punto en vez de @
$password = 'cibmiulziomrkyqx'; //Aquí se define la contraseña de la cuenta de correo que enviará el mensaje
$subject = 'Contacto desde la página web Curriculum Fryntiz'; //Aquí se define el asunto del correo
$port = '587'; //Definido el puerto que utilizará

//Datos importados mediante POST //utf8_decode() convierte carácteres raros a utf8
$nombre = utf8_decode($_POST['nombre']);
$apellidos = utf8_decode($_POST['apellidos']);
$email = utf8_decode($_POST['email']);
$telefono = utf8_decode($_POST['telefono']);
$comentario = utf8_decode($_POST['comentario']);

//Aquí se define el cuerpo de correo
$mensaje = "Detalles del formulario de contacto:\n\n";
$mensaje .= "Fecha: " . date("d-m-y") . "\n";
$mensaje .= "Hora: " . date("H:I:s") . "\n";
$mensaje .= "Nombre: " . $nombre . "\n";
$mensaje .= "Apellidos: " . $apellidos . "\n";
$mensaje .= "Correo electronico: " . $email . "\n";
$mensaje .= "Telefono: " . $telefono . "\n";
$mensaje .= "Comentario: " . $comentario . "\n\n";

//A partir de aquí empleamos la función mail para enviar el formulario

$headers = array ('From' => $from,
'To' => $to,
'Subject' => $subject);
$smtp = Mail::factory('smtp',
array ('host' => $host,
'auth' => true,
'username' => $username,
'password' => $password,
'port' => $port,
'SMTPAuth' => true,
'SMTPSecure' => "tsl"));

$mail = $smtp->send($to, $headers, $mensaje);

//Una vez aquí habremos enviado el mensaje mediante el formulario

//El siguiente codigo muestra en pantalla un mensaje indicando que el mensaje ha sido enviado y a que cuenta ES OPCIONAL desde Acens lo incluimos para verificar que el formulario de prueba esta funcionando

if (PEAR::isError($mail)) {
echo("

" . $mail->getMessage() . "
");
} else {
echo "Mensaje enviado <STRONG>correctamente</STRONG> a Raúl Caro Pastorino (fryntiz) para el correo ". $to. "<BR/> Me pondré en contacto con usted lo antes posible mediante el correo que ha introducido en el formulario anterior." ;
echo "<BR/>";
echo '<A href="index.php" title="Volver a la página principal">Volver a la página principal</A>';
}
?>
