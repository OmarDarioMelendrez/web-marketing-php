<?php 

if(isset($_POST['enviar'])) {
    if(!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['telefono']) && !empty($_POST['mensaje'])){
        $name = $_POST['nombre'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $mensaje = $_POST['mensaje'];
        $subject = "Contacto desde web";
        $body = "<h1>Contacto desde sitio Web</h1>
                <ul>
                <li>contacto: {$name}</li>
                <li>email: {$email}</li>
                <li>teléfono: {$telefono}</li>
                <li>mensaje: {$mensaje}</li>
                </ul>";
        $to = "hawksagencia@gmail.com";
        $headers =  'MIME-Version: 1.0' . "\r\n"; 
        $headers .= 'From: Web contact - Hawks <no-reply@c2110965.ferozo.com>' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
        $mail = mail($to,$subject,$body,$headers);
        if($mail){
            echo "<h4 class='form__success'>¡Mail enviado exitosamente!</h4>";
        }
    }
}