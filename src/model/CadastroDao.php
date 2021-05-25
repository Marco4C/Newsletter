<?php

namespace newsletter\model;

require_once __DIR__ . '/Conexao.php';

class CadastroDao
{
    public function create(Cadastro $cadastro)
    {
        $sql = 'INSERT INTO TB_CADASTRO (NOME,EMAIL, CELULAR, EMPRESA, CARGO, SETOR, RECEBE_INFORMACOES, RECEBE_NEWSLETTER) VALUES (?,?,?,?,?,?,?,?)';
        $stmt = Conexao::getConexao()->prepare($sql);
        $stmt->bindValue(1, $cadastro->getNome());
        $stmt->bindValue(2, $cadastro->getEmail());
        $stmt->bindValue(3, $cadastro->getCelular());
        $stmt->bindValue(4, $cadastro->getEmpresa());
        $stmt->bindValue(5, $cadastro->getCargo());
        $stmt->bindValue(6, $cadastro->getSetor());
        $stmt->bindValue(7, $cadastro->getReceberInformacoes());
        $stmt->bindValue(8, $cadastro->getReceberNewsletter());
        $stmt->execute();
    }

    public function read()
    {
        $sql = 'SELECT
					C.[ID]
					,[NOME]
					,[EMAIL]
					,[CELULAR]
					,[EMPRESA]
					,CA.[CARGO]
					,SE.[SETOR]
					,[RECEBE_INFORMACOES]
					,[RECEBE_NEWSLETTER]
				FROM
					[cvx].[dbo].[TB_CADASTRO] C
					JOIN TB_CARGO CA ON C.CARGO = CA.ID
					JOIN TB_SETOR SE ON C.SETOR = SE.ID';
        $stmt = Conexao::getConexao()->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function search($id)
    {
        $sql = 'SELECT
					C.[ID]
					,[NOME]
					,[EMAIL]
					,[CELULAR]
					,[EMPRESA]
					,CA.[ID] CARGO
					,SE.[ID] SETOR
					,[RECEBE_INFORMACOES]
					,[RECEBE_NEWSLETTER]
				FROM
					[cvx].[dbo].[TB_CADASTRO] C
					JOIN TB_CARGO CA ON C.CARGO = CA.ID
					JOIN TB_SETOR SE ON C.SETOR = SE.ID
				WHERE C.[ID] = ?';
        $stmt = Conexao::getConexao()->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function update(Cadastro $cadastro)
    {
        $sql = 'UPDATE TB_CADASTRO SET NOME = ?, EMAIL = ?, CELULAR = ?, EMPRESA = ?, CARGO = ?, SETOR = ?, RECEBE_INFORMACOES = ?, RECEBE_NEWSLETTER = ? WHERE ID = ?';

        $stmt = Conexao::getConexao()->prepare($sql);
        $stmt->bindValue(1, $cadastro->getNome());
        $stmt->bindValue(2, $cadastro->getEmail());
        $stmt->bindValue(3, $cadastro->getCelular());
        $stmt->bindValue(4, $cadastro->getEmpresa());
        $stmt->bindValue(5, $cadastro->getCargo());
        $stmt->bindValue(6, $cadastro->getSetor());
        $stmt->bindValue(7, $cadastro->getReceberInformacoes());
        $stmt->bindValue(8, $cadastro->getReceberNewsletter());
        $stmt->bindValue(9, $cadastro->getId());

        $stmt->execute();
    }

    public function delete($cadastro)
    {
        $sql = 'DELETE FROM TB_CADASTRO WHERE ID = ?';
        $stmt = Conexao::getConexao()->prepare($sql);
        $stmt->bindValue(1, $cadastro->getid());
        $stmt->execute();
    }
}
