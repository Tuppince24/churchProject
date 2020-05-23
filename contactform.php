<?php

if (isset ($_POST['submit'])) {
    $name = $_POST['first'];
    $name = $_POST['last'];
    $mailFrom = $_POST['mail'];
    $mailFrom = $_POST['number'];
    $message = $_POST['message'];

    $mailTo = "winstonw857@aol.com";
    $headers = "from: "$mailFrom
    $txt = "You have recived an e-mail from ".$name.".\n\n".$message;

    mail($mailTo, $message, $txt, $headers);
    header("Locatiion: Prayer.html?mailsend");
}