<?php
if (!empty($_POST["send"])) {
    $nameone = $_POST ["nameone"];
    $nametwo = $_POST["nametwo"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $subject = $_POST["subject"];

    $toEmail = "info@leosliving.com";
    $mailHeaders = "From:" . $nameone . $nametwo . "<" . $email . ">\r\n";
    if (mail($toEmail, $subject , $mailHeaders)) {
        $message = "Yaay! we have received your contact info! We will get back to you ASAP.";
        $type = "success";
        # code...
    }

}



?>