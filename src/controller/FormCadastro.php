<?php

namespace newsletter\controller;

require_once __DIR__ . '\\..\\model\\CargoDao.php';
require_once __DIR__ . '\\..\\model\\SetorDao.php';

use newsletter\model\CargoDao;
use newsletter\model\SetorDao;

class FormCadastro
{
    public function processaRequisicao()
    {
        $cargoDao = new CargoDao();
        $cargos = $cargoDao->read();
        $setorDao = new SetorDao();
        $setores = $setorDao->read();
        require_once __DIR__ . '\\..\\..\\view\\cadastroView\\formulario-novo-cadastro.php';
    }
}
