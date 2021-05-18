<?php

namespace newsletter\controller;

require_once __DIR__ . '\\..\\..\\model\\Cadastro.php';
require_once __DIR__ . '\\..\\..\\model\\CadastroDao.php';

use newsletter\model\Cadastro;
use newsletter\model\CadastroDao;

class Criar
{
    public function processaRequisicao()
    {
        $cadastro = new Cadastro();
        $cadastro->setNome($_POST['nome']);
        $cadastro->setEmail($_POST['email']);

        $cadastroDao = new CadastroDao();
        echo $cadastroDao->create($cadastro);
        require_once __DIR__ . '\\..\\..\\..\\view\\cadastroView\\cadastro-criado.php';
    }
}
