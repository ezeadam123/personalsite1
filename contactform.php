

<?php

if(isset($_POST["submit"])){

    #code ..
    $name = $_POST['name'];
    $email_sender = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['msg'];


    $email_from = "";

    $mailTo = "adamobbl123@gmail.com";
    $email_subject = "New Form Submission";
    $email_body = "User Name: $name.\n" " User Email: $email_sender.\n"
    "User Message: $message.\n";

    $to = "adamobbl123@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";
    mail($to, $email_subject, $email_body, $headers);

    header("Location: index.html");
}

?>