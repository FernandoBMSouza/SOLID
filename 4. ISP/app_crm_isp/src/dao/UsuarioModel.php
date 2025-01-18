<?php

namespace src\dao;
use src\BD;
use src\componentes\Log;
use src\componentes\Notificacao;
use src\interfaces\INotificacao;
use src\interfaces\ILog;
use src\interfaces\ICadastro;

class UsuarioModel extends BD implements ICadastro, INotificacao, ILog
{
    public function salvar()
    {
        //logica de salvar
    }
    public function registrarLog(Log $log)
    {
        // logica
    }
    public function enviarNotificacao(Notificacao $notificacao)
    {
        // logica
    }
}

?>