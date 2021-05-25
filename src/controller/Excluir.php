<?php

namespace newsletter\controller;

require_once __DIR__ . '\\..\\model\\Cadastro.php';
require_once __DIR__ . '\\..\\model\\CadastroDao.php';

use newsletter\model\Cadastro;
use newsletter\model\CadastroDao;

class Excluir
{
    public function processaRequisicao()
    {
        $id = str_replace('/excluir/', '', $_SERVER['REQUEST_URI']);

        $cadastroDao = new CadastroDao();
        $array = $cadastroDao->search($id);

        $cadastro = new Cadastro();
        $cadastro->setId($array[0]['ID']);

        echo $cadastroDao->delete($cadastro);
        $listar = new Listar();
        $listar->processaRequisicao();
    }
}
