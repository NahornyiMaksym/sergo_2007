<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
//$message = $_POST['message'];
$tel = $_POST['tel'];
$describe = $_POST['Describe'];
$work_breakdown = $_POST['work_breakdown'];


$email_from = 'v.lozovskyi@gmail.com';

$email_subject = "New Form submission111";

$email_body = "You have received a new message \n
Nombre: $name.\n".
    "Teléfono: $tel \n".
    "Correo electrónico: $visitor_email \n".
    "Describa su solicitud en un campo libre: $describe\n".
    "Desglose de trabajo (m2): $work_breakdown\n";


$to = "v.lozovskyi@gmail.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

if(mail($to,$email_subject,$email_body,$headers)) {
    echo 'Email sent';
} else {
    echo 'Error, try again.';
}
    ?>