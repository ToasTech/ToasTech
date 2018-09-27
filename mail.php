<?php

if (isset($_POST['submit'])){
    $name = $_POST['name'] ;
    $mailFrom = $_POST['email'] ;
    $subject = "Message From My Website";
    $message = $_POST['comments'] ;
    $mailTO = "hason.osan@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "YOu Have received an e-mail from ".$name.".\n\n".$message ;
    mail($mailTO,$subject,$txt,$headers);
    header("Location: index.html?mailsend");
}
?>