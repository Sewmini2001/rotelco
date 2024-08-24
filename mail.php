<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';

    if (isset($_POST['submit'])) {

    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'noreply@eTechno.lk';
    $mail->Password = 'SsrRotelco999@@';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    
    $to = filter_var($_POST['to'], FILTER_SANITIZE_EMAIL);
    $name = htmlspecialchars($_POST['name']);
    $price = htmlspecialchars($_POST['price']);
    $description = htmlspecialchars($_POST['description']);

    
    if (!filter_var($to, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address.";
        exit;
    }


    if (mail($to, $subject, $message, $headers)) {
        echo "Item Details Sent Successfully...";
    } else {
        echo "Sorry!!! Please check again...";
    }
}

?>
