<?php

namespace src;

class Whatsapp implements IMensagemToken
{
    public function enviar() : void
    {
        echo 'Whatsapp: Seu token é 555-333';
    }
}

?>