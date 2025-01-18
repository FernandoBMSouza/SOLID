<?php
require "src/IMensagemToken.php";
require "src/Mensageiro.php";
require "src/Email.php";
require "src/Sms.php";
use src\Mensageiro;

// ------ canal e-mail ------
$msg = new Mensageiro();
$msg->setCanal('email');
$msg->enviarToken();

echo '<br>';

// ------- canal sms --------
$msg = new Mensageiro();
$msg->setCanal('sms');
$msg->enviarToken();

?>