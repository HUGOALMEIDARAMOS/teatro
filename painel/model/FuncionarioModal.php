<?php
/**
 * Created by PhpStorm.
 * User: hugo
 * Date: 31/08/18
 * Time: 00:34
 */

class FuncionarioModal
{

    private $idfuncionario;
    private $nomefncionario;
    private $identificacao;
    private $login_email;
    private $senha;
    private $endereco;
    private $tipo_funcionario;

    /**
     * @return mixed
     */
    public function getIdfuncionario()
    {
        return $this->idfuncionario;
    }

    /**
     * @param mixed $idfuncionario
     */
    public function setIdfuncionario($idfuncionario)
    {
        $this->idfuncionario = $idfuncionario;
    }

    /**
     * @return mixed
     */
    public function getNomefncionario()
    {
        return $this->nomefncionario;
    }

    /**
     * @param mixed $nomefncionario
     */
    public function setNomefncionario($nomefncionario)
    {
        $this->nomefncionario = $nomefncionario;
    }

    /**
     * @return mixed
     */
    public function getIdentificacao()
    {
        return $this->identificacao;
    }

    /**
     * @param mixed $identificacao
     */
    public function setIdentificacao($identificacao)
    {
        $this->identificacao = $identificacao;
    }

    /**
     * @return mixed
     */
    public function getLoginEmail()
    {
        return $this->login_email;
    }

    /**
     * @param mixed $login_email
     */
    public function setLoginEmail($login_email)
    {
        $this->login_email = $login_email;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    /**
     * @return mixed
     */
    public function getTipoFuncionario()
    {
        return $this->tipo_funcionario;
    }

    /**
     * @param mixed $tipo_funcionario
     */
    public function setTipoFuncionario($tipo_funcionario)
    {
        $this->tipo_funcionario = $tipo_funcionario;
    }




}