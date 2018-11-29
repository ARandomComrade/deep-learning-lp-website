<?php

    

    $name = $_POST['name'];
    $visitorEmail = $_POST['email'];
    $message = $_POST['message'];

    $emailFrom = 'team-licenseplate@seniorproject.com';
    $emailSubject = 'New Form Submission from www.team-licenseplate.info';

    $emailBody = "User Name: $name.\n".
                 "User Email: $visitorEmail.\n".
                 "User Message: $message.\n";


    $to = "rdouma81@gmail.com";
    $headers = "From: $emailFrom \r\n";
    $headers .= "Reply-To: $visitorEmail \r\n";

    mail($to, $emailSubject, $emailBody, $headers);

    header('Content-type: text/html; charset=utf-8');
    header("Location: index.html");

    exit();
?>