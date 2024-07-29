<?php

if (isset($_POST['submit'])){

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);
    

   

    $emailto = "Onyxzservicesltd@gmail.com";
    $header = "from " . $email;
    $messageto = "You have received a mail from " . $name . "\n\n" . $message;

    mail($emailto, $subject, $messageto, $header);
    header("location: contact.php?Successful");



}



?>