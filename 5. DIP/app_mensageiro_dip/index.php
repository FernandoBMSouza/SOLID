<?php
require "src/IMensagemToken.php";
require "src/Mensageiro.php";
require "src/Email.php";
require "src/Sms.php";
require "src/Whatsapp.php";
use src\Mensageiro;
use src\Email;
use src\Sms;
use src\Whatsapp;

// ------ canal e-mail ------
$msg = new Mensageiro(new Email);
$msg->enviarToken();

echo '<br>';

// ------- canal sms --------
$msg = new Mensageiro(new Sms);
$msg->enviarToken();

echo '<br>';

// ------- canal sms --------
$msg = new Mensageiro(new Whatsapp);
$msg->enviarToken();

?>