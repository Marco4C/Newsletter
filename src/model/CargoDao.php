<?php

namespace newsletter\model;

require_once __DIR__ . '/Conexao.php';

class CargoDao
{
    public function read()
    {
        $sql = 'SELECT * FROM TB_CARGO CA';
        $stmt = Conexao::getConexao()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}
