<?php
    $_POST = $name;
    $_POST = $email;
    $_POST = $message;
    $to      = 'wandaaizulf@gmail.com';
    $subject = @$name;
    $message = @$message;
    $headers = 'From:'. @$email;

    mail($to, $subject, $message, $headers);
    echo "The Email Massage was Sent.";
?>