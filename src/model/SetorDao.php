<?php

namespace newsletter\model;

require_once __DIR__ . '/Conexao.php';

class SetorDao
{
    public function read()
    {
        $sql = 'SELECT * FROM TB_SETOR';
        $stmt = Conexao::getConexao()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}
