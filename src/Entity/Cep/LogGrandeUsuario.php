<?php

namespace App\Entity\Cep;

/**
 * LogGrandeUsuario
 */
class LogGrandeUsuario
{
    /**
     * @var int
     */
    private $gruNuSequencial;

    /**
     * @var string
     */
    private $ufeSg;

    /**
     * @var string
     */
    private $gruNo;

    /**
     * @var string
     */
    private $cep;

    /**
     * @var string
     */
    private $gruEndereco;

    /**
     * @var string|null
     */
    private $temp;

    /**
     * @var \App\Entity\Cep\LogLocalidade
     */
    private $logLocalidade;

    /**
     * @var \App\Entity\Cep\LogLogradouro
     */
    private $logLogradouro;

    /**
     * @var \App\Entity\Cep\LogBairro
     */
    private $logBairro;


    /**
     * Get gruNuSequencial.
     *
     * @return int
     */
    public function getGruNuSequencial()
    {
        return $this->gruNuSequencial;
    }

    /**
     * Set ufeSg.
     *
     * @param string $ufeSg
     *
     * @return LogGrandeUsuario
     */
    public function setUfeSg($ufeSg)
    {
        $this->ufeSg = $ufeSg;

        return $this;
    }

    /**
     * Get ufeSg.
     *
     * @return string
     */
    public function getUfeSg()
    {
        return $this->ufeSg;
    }

    /**
     * Set gruNo.
     *
     * @param string $gruNo
     *
     * @return LogGrandeUsuario
     */
    public function setGruNo($gruNo)
    {
        $this->gruNo = $gruNo;

        return $this;
    }

    /**
     * Get gruNo.
     *
     * @return string
     */
    public function getGruNo()
    {
        return $this->gruNo;
    }

    /**
     * Set cep.
     *
     * @param string $cep
     *
     * @return LogGrandeUsuario
     */
    public function setCep($cep)
    {
        $this->cep = $cep;

        return $this;
    }

    /**
     * Get cep.
     *
     * @return string
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * Set gruEndereco.
     *
     * @param string $gruEndereco
     *
     * @return LogGrandeUsuario
     */
    public function setGruEndereco($gruEndereco)
    {
        $this->gruEndereco = $gruEndereco;

        return $this;
    }

    /**
     * Get gruEndereco.
     *
     * @return string
     */
    public function getGruEndereco()
    {
        return $this->gruEndereco;
    }

    /**
     * Set temp.
     *
     * @param string|null $temp
     *
     * @return LogGrandeUsuario
     */
    public function setTemp($temp = null)
    {
        $this->temp = $temp;

        return $this;
    }

    /**
     * Get temp.
     *
     * @return string|null
     */
    public function getTemp()
    {
        return $this->temp;
    }

    /**
     * Set logLocalidade.
     *
     * @param \App\Entity\Cep\LogLocalidade|null $logLocalidade
     *
     * @return LogGrandeUsuario
     */
    public function setLogLocalidade(\App\Entity\Cep\LogLocalidade $logLocalidade = null)
    {
        $this->logLocalidade = $logLocalidade;

        return $this;
    }

    /**
     * Get logLocalidade.
     *
     * @return \App\Entity\Cep\LogLocalidade|null
     */
    public function getLogLocalidade()
    {
        return $this->logLocalidade;
    }

    /**
     * Set logLogradouro.
     *
     * @param \App\Entity\Cep\LogLogradouro|null $logLogradouro
     *
     * @return LogGrandeUsuario
     */
    public function setLogLogradouro(\App\Entity\Cep\LogLogradouro $logLogradouro = null)
    {
        $this->logLogradouro = $logLogradouro;

        return $this;
    }

    /**
     * Get logLogradouro.
     *
     * @return \App\Entity\Cep\LogLogradouro|null
     */
    public function getLogLogradouro()
    {
        return $this->logLogradouro;
    }

    /**
     * Set logBairro.
     *
     * @param \App\Entity\Cep\LogBairro|null $logBairro
     *
     * @return LogGrandeUsuario
     */
    public function setLogBairro(\App\Entity\Cep\LogBairro $logBairro = null)
    {
        $this->logBairro = $logBairro;

        return $this;
    }

    /**
     * Get logBairro.
     *
     * @return \App\Entity\Cep\LogBairro|null
     */
    public function getLogBairro()
    {
        return $this->logBairro;
    }
}
