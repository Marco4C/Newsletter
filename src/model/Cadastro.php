<?php

namespace newsletter\model;

class Cadastro
{
    private $id;
    private $nome;
    private $email;
    private $celular;
    private $empresa;
    private $cargo;
    private $setor;
    private $receberInformacoes;
    private $receberNewsletter;

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of celular
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * Set the value of celular
     *
     * @return  self
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;

        return $this;
    }

    /**
     * Get the value of empresa
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }

    /**
     * Set the value of empresa
     *
     * @return  self
     */
    public function setEmpresa($empresa)
    {
        $this->empresa = $empresa;

        return $this;
    }

    /**
     * Get the value of cargo
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * Set the value of cargo
     *
     * @return  self
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;

        return $this;
    }

    /**
     * Get the value of setor
     */
    public function getSetor()
    {
        return $this->setor;
    }

    /**
     * Set the value of setor
     *
     * @return  self
     */
    public function setSetor($setor)
    {
        $this->setor = $setor;

        return $this;
    }

    /**
     * Get the value of receberInformacoes
     */
    public function getReceberInformacoes()
    {
        return $this->receberInformacoes;
    }

    /**
     * Set the value of receberInformacoes
     *
     * @return  self
     */
    public function setReceberInformacoes($receberInformacoes)
    {
        $this->receberInformacoes = $receberInformacoes;

        return $this;
    }

    /**
     * Get the value of receberNewsletter
     */
    public function getReceberNewsletter()
    {
        return $this->receberNewsletter;
    }

    /**
     * Set the value of receberNewsletter
     *
     * @return  self
     */
    public function setReceberNewsletter($receberNewsletter)
    {
        $this->receberNewsletter = $receberNewsletter;

        return $this;
    }
}
