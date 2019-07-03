<?php
/**
 * Created by PhpStorm.
 * User: hugo
 * Date: 28/08/18
 * Time: 16:24
 */

class CategoriaModel
{
    private $tipo_funcionario;
    private $nivel;

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

    /**
     * @return mixed
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * @param mixed $nivel
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;
    }



}