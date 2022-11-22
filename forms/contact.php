
<?php
$to = "eiron23@rocketmail.com";
$subject = $_POST['subject'].' - FROM eironpogi.site';
$txt = $_POST['message'];
$headers = "From: ".$_POST['email'] . "\r\n";

if(mail($to,$subject,$txt,$headers)){
    echo 'Your message has been sent. Thank you!';
}else{
    echo 'Message sending failed. Please try again.';
}
?>