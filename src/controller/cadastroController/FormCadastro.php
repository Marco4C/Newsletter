<?php

namespace newsletter\controller;

class FormCadastro
{
    public function processaRequisicao()
    {
        require_once __DIR__ . '\\..\\..\\..\\view\\cadastroView\\formulario-novo-cadastro.php';
    }
}
