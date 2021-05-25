<?php

namespace newsletter\controller;

use newsletter\model\Cadastro;
use newsletter\model\CadastroDao;
use newsletter\model\CargoDao;
use newsletter\model\SetorDao;

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
        $cadastro->setCelular($array[0]['CELULAR']);
        $cadastro->setEmpresa($array[0]['EMPRESA']);
        $cadastro->setCargo($array[0]['CARGO']);
        $cadastro->setSetor($array[0]['SETOR']);
        $cadastro->setReceberInformacoes($array[0]['RECEBE_INFORMACOES']);
        $cadastro->setReceberNewsletter($array[0]['RECEBE_NEWSLETTER']);

        $cargoDao = new CargoDao();
        $cargos = $cargoDao->read();
        $setorDao = new SetorDao();
        $setores = $setorDao->read();
        require_once __DIR__ . '\\..\\..\\view\\cadastroView\\formulario-editar-cadastro.php';
    }
}
