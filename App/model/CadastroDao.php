<?php

namespace App\model;

class CadastroDao
{
    public function create(Cadastro $cadastro)
    {
        $sql = 'INSERT INTO CADASTRO (NOME,EMAIL) VALUES (?,?)';
        $stmt = Conexao::getConexao()->prepare($sql);
        $stmt->bindValue(1, $cadastro->getNome());
        $stmt->bindValue(2, $cadastro->getEmail());
        $stmt->execute();
    }

    public function read()
    {
        $sql = 'SELECT * FROM CADASTRO';
        $stmt = Conexao::getConexao()->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function update(Cadastro $cadastro)
    {
        $sql = 'UPDATE CADASTRO SET NOME = ?, EMAIL = ? WHERE ID = ?';

        $stmt = Conexao::getConexao()->prepare($sql);
        $stmt->bindValue(1, $cadastro->getNome());
        $stmt->bindValue(2, $cadastro->getEmail());
        $stmt->bindValue(3, $cadastro->getId());

        $stmt->execute();
    }

    public function delete($idCadastro)
    {
        $sql = 'DELETE FROM CADASTRO WHERE ID = ?';
        $stmt = Conexao::getConexao()->prepare($sql);
        $stmt->bindValue(1, $idCadastro);
        $stmt->execute();
    }
}
