<?php

namespace newsletter\model;

class Conexao
{

    private static $instancia;
    public static function getConexao()
    {
        if (!isset(self::$instancia)) :
            self::$instancia = new \PDO('mysql:host=localhost;dbname=database;charset=utf8', 'root', '');
        endif;
            return self::$instancia;
    }
}
