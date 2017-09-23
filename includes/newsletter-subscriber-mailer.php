<?php


if($_SERVER['REQUEST_METHOD']=="POST"){
    $name=strip_tags(trim($_POST['name']));
    $email=filter_var(trim($_POST['email']),FILTER_SANITIZE_EMAIL);
    $recipient=$_POST['recipient'];
    $subject=$_POST['subject'];
    //validation
    if(empty($name)||empty($email)){
        http_response_code(400);
        echo 'Please fill out all fields';
        exit;
    }
    //build the email
    $message="Name: .$name\n";
    $message.-"Email: .$email\n";
    //build headers
    $headers="From: $name<$email>";
    ini_set('sendmail_from', "email@domain.com");
    //send email
    if(mail($recipient,$subject,$message,$headers)){
        http_response_code(200);
        echo 'You are now subscribe';
    }
    else{
        http_response_code(500);
        echo 'There was a problem';
    }
}
else{
    http_response_code(403);
    echo 'There is a problem';
}