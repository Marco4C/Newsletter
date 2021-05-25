<?php

namespace newsletter\model;

class Conexao
{

    private static $instancia;
    public static function getConexao()
    {
        if (!isset(self::$instancia)) :
            self::$instancia = new \PDO('sqlsrv:Server=GPADRAO-047\SQLSERVER;Database=cvx', 'sa', 'Padrao@2020');
        endif;
            return self::$instancia;
    }
}
