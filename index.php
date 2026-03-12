<?php
include_once "Notifikasi.php";
include_once "Email.php";
include_once "SMS.php";
include_once "WhatsApp.php";
$email = new Email();
$sms = new SMS();
$wa = new WhatsApp();
$email->kirim();
$sms->kirim();
$wa->kirim();
?>