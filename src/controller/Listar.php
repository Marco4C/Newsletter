<?php

namespace newsletter\controller;

use newsletter\model\CadastroDao;

class Listar
{
    public function processaRequisicao()
    {
        $cadastro = new CadastroDao();
        $lista = $cadastro->read();
        require_once __DIR__ . '\\..\\..\\view\\cadastroView\\listar.php';
    }
}
