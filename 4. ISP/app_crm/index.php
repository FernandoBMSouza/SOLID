<?php

require "src/BD.php";
require "src/interfaces/ICadastro.php";
require "src/componentes/Log.php";
require "src/componentes/Notificacao.php";
require "src/dao/ContratoModel.php";
require "src/dao/LeadModel.php";
require "src/dao/UsuarioModel.php";

use src\dao\ContratoModel;
use src\dao\LeadModel;
use src\dao\UsuarioModel;

$contratoModel = new ContratoModel();
print_r($contratoModel);
echo '<br>';

$leadModel = new LeadModel();
print_r($leadModel);
echo '<br>';

$usuarioModel = new UsuarioModel();
print_r($usuarioModel);
echo '<br>';


?>