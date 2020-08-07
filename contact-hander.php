<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];
    $phone = $_POST['number'];

    $email_from = 'yap.yeasin@outlook.com';
    
    $email_subject ="New From Submission";
    
    $email_boby = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Message: $message.\n";
                            "User phone: $phone.\n";
                            

    $to = "yap.yeasin@gmail.com";
    
    $headers = "From: $email_from \r\n";

    $headers .="Reply-to: $visitor_email \r\n";

    mail($to,$email_subject,$email_boby,$headers);

    header("Location:index.html");

?> 