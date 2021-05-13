<?php

require_once '../../../vendor/autoload.php';
use App\model\Cadastro;
use App\model\CadastroDao;

$cadastro = new Cadastro();
var_dump($_POST);
$cadastro->setNome($_POST['nome']);
$cadastro->setEmail($_POST['email']);

$cadastroDao = new CadastroDao();
if ($cadastroDao->create($cadastro)) :
    header('Location: /newsletter/App/view/cadastroView/cadastroCreateSuccessView.php', false);
else :
    echo 'fail';
endif;
