<?php 

$errores = '';
$enviado = '';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email =  $_POST['email'];
    $message = $_POST['message'];

    //name validate
    if (!empty($name)) {
        $name = trim($name);
        $name = filter_var($name ,FILTER_SANITIZE_STRING);
    }
    else{
        $errores .= 'Please, enter a name! <br />';
    }

    //email validate
    if (!empty($email)){
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errores .= 'Please enter a valid email! <br />';
            }
    } else  {
                $errores .= 'Please enter a email! <br />';
            }

     //message validate       
     if (!empty($message)) {
         $message = htmlspecialchars($message);
         $message = trim($message);
         $message = stripslashes($message);
     } else{
         $errores .= 'Please enter a message! </br>';
     }   

     if (!$errores) {
            $send_to = 'yourname@yourcompany.com';
            $asunto = 'Message send form Mypage.com';
            $prepare_message = "From: $name \n";
            $prepare_message .= "TO:  $email \n";
            $prepare_message .= "Message:" . $message; 
            
            //mail($send_to, $asunto, $prepare_message);
            $enviado = true;
     }
}

require 'index.view.php';


?> 