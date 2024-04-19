<?php
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
 require 'phpmailer/src/Exception.php';
 require 'phpmailer/src/PHPMailer.php';
 require 'phpmailer/src/SMTP.php';
 if(isset($_POST["send"]))
 {
    $mail= new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->SMPTAuth=true;
    $mail->Username='shiorxonobloqulov01@gmail.com';
    $mail->Password='qgadzfnrnnyduvax';

    $mail->STPSecure='ssl';
    $mail->Port=465;

    $mail->setFrom('shiorxonobloqulov01@gmail.com');
    $mail->addAddress($_POST["email"]);

    $mail->isHTML('true');

    $mail->Subject=$_POST["subject"];
    $mail->Body=$_POST["message"];

    $mail->Send();

    echo
    " <script>
    alert('Sent Successfully');
    document.location.href='index.php';
    </script>

    ";

  

 }
?>