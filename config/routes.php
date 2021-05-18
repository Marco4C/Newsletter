<?php

require_once __DIR__ . '/../src/controller/cadastroController/FormCadastro.php';
require_once __DIR__ . '/../src/controller/cadastroController/FormEditar.php';
require_once __DIR__ . '/../src/controller/cadastroController/Criar.php';
require_once __DIR__ . '/../src/controller/cadastroController/Editar.php';
require_once __DIR__ . '/../src/controller/cadastroController/Listar.php';

use newsletter\controller\Criar;
use newsletter\controller\Editar;
use newsletter\controller\Listar;
use newsletter\controller\FormCadastro;
use newsletter\controller\FormEditar;

return [
    '/form_cadastro' => FormCadastro::class,
    '/novo_cadastro' => Criar::class,
    '/listar' => Listar::class,
    '/editar/[0-9]+' => FormEditar::class,
    '/cadastro_editado' => Editar::class,
    '/user/create' => 'User@create',
    '/user/[a-z0-9]+' => 'User@index'
];
