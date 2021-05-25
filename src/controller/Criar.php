<?php

namespace newsletter\controller;

require_once __DIR__ . '\\..\\model\\Cadastro.php';
require_once __DIR__ . '\\..\\model\\CadastroDao.php';

use newsletter\model\Cadastro;
use newsletter\model\CadastroDao;

class Criar
{
    public function processaRequisicao()
    {
        $cadastro = new Cadastro();
        $cadastro->setNome($_POST['nome']);
        $cadastro->setEmail($_POST['email']);
        $cadastro->setCelular($_POST['celular']);
        $cadastro->setEmpresa($_POST['empresa']);
        $cadastro->setCargo($_POST['cargo']);
        $cadastro->setSetor($_POST['setor']);
        $cadastro->setReceberInformacoes(isset($_POST['informacoes']) === true ? 'true' : 'false');
        $cadastro->setReceberNewsletter(isset($_POST['newsletter']) === true ? 'true' : 'false');
        $cadastroDao = new CadastroDao();
        $cadastroDao->create($cadastro);

        require_once __DIR__ . '\\..\\..\\view\\cadastroView\\cadastro-criado.php';
    }
}
