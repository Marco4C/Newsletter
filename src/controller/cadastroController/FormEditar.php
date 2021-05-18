<?php

namespace newsletter\controller;

use newsletter\model\Cadastro;
use newsletter\model\CadastroDao;

class FormEditar
{
    public function processaRequisicao()
    {
        $id = str_replace('/editar/', '', $_SERVER['REQUEST_URI']);
        $cadastroDao = new CadastroDao();
        $array = $cadastroDao->search($id);
        $cadastro = new Cadastro();
        $cadastro->setId($array[0]['ID']);
        $cadastro->setNome($array[0]['NOME']);
        $cadastro->setEmail($array[0]['EMAIL']);
        require_once __DIR__ . '\\..\\..\\..\\view\\cadastroView\\formulario-editar-cadastro.php';
    }
}
