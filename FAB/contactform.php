<?php   

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];
    
    $mailTo = "fabbincleaning@outlook.com";
    $headers = "From: ".$mailFrom;
    $txt = "A message has been sent to you from ".$name."\n\n".$message;
    
    mail($mailTo, $$subject, $txt, $headers);
    header("Location: index.php?emailsent");
    
}
