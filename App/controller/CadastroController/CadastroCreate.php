<?php

namespace App\controller\cadastro;

require_once '../../../vendor/autoload.php';
use App\model\Cadastro;
use App\model\CadastroDao;

$cadastro = new Cadastro();
var_dump($_POST);
$cadastro->setNome($_POST['nome']);
$cadastro->setEmail($_POST['email']);

echo $cadastro->getNome();

$cadastroDao = new CadastroDao();
$cadastroDao->create($cadastro);
