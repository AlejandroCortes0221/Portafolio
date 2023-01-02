<?php
if(isset($POST['enviar'])){
    if(!empty($_POST['Nombre']) && !empty($_POST['Email'])&& !empty($_POST['Asunto'])&& !empty($_POST['Mensaje'])){
        $nombre = $POST['Nombre'];
        $email = $POST['Email'];
        $asunto = $POST['Asunto'];
        $mensaje = $POST['Mensaje'];
        $header = "From: norepl@example.com" . "\r\n";
        $header.= "Reply-To: norepl@example.com" . "\r\n";
        $header .= "X-Mailer: PHP" . phpversion();
        mail($email,$asunto,$mendaje,$header);
        if($email){
           echo "Swal . fire('¡¡Email enviao exitosamente!!', 'Has click en el boton', 'success')" ;
        }
    }
}
?>