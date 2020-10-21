<?php
    $name = $_POST['name']; 
    $email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = "deidalopez7@gmail.com";
    $email_subject = "New Message"; 
    $email_body = "Name: $name.\n".
                    "Email: $email.\n".
                    "Message: $message.\n";

                    

    $to = ""
