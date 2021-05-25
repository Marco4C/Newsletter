<?php

require_once __DIR__ . '/../src/controller/FormCadastro.php';
require_once __DIR__ . '/../src/controller/FormEditar.php';
require_once __DIR__ . '/../src/controller/Criar.php';
require_once __DIR__ . '/../src/controller/Editar.php';
require_once __DIR__ . '/../src/controller/Listar.php';
require_once __DIR__ . '/../src/controller/Excluir.php';

use newsletter\controller\Criar;
use newsletter\controller\Editar;
use newsletter\controller\Listar;
use newsletter\controller\Excluir;
use newsletter\controller\FormCadastro;
use newsletter\controller\FormEditar;

return [
    '/' => Listar::class,
    '/form_cadastro' => FormCadastro::class,
    '/criar' => Criar::class,
    '/listar' => Listar::class,
    '/editar/[0-9]+' => FormEditar::class,
    '/cadastro_editado' => Editar::class,
    '/excluir/[0-9]+' => Excluir::class,
    '/user/create' => 'User@create',
    '/user/[a-z0-9]+' => 'User@index'
];
