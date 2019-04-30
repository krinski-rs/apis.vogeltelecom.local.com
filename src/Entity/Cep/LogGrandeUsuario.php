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
    private $locNuSequencial;

    /**
     * @var \App\Entity\Cep\LogLogradouro
     */
    private $logNuSequencial;

    /**
     * @var \App\Entity\Cep\LogBairro
     */
    private $baiNuSequencial;


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
     * Set locNuSequencial.
     *
     * @param \App\Entity\Cep\LogLocalidade|null $locNuSequencial
     *
     * @return LogGrandeUsuario
     */
    public function setLocNuSequencial(\App\Entity\Cep\LogLocalidade $locNuSequencial = null)
    {
        $this->locNuSequencial = $locNuSequencial;

        return $this;
    }

    /**
     * Get locNuSequencial.
     *
     * @return \App\Entity\Cep\LogLocalidade|null
     */
    public function getLocNuSequencial()
    {
        return $this->locNuSequencial;
    }

    /**
     * Set logNuSequencial.
     *
     * @param \App\Entity\Cep\LogLogradouro|null $logNuSequencial
     *
     * @return LogGrandeUsuario
     */
    public function setLogNuSequencial(\App\Entity\Cep\LogLogradouro $logNuSequencial = null)
    {
        $this->logNuSequencial = $logNuSequencial;

        return $this;
    }

    /**
     * Get logNuSequencial.
     *
     * @return \App\Entity\Cep\LogLogradouro|null
     */
    public function getLogNuSequencial()
    {
        return $this->logNuSequencial;
    }

    /**
     * Set baiNuSequencial.
     *
     * @param \App\Entity\Cep\LogBairro|null $baiNuSequencial
     *
     * @return LogGrandeUsuario
     */
    public function setBaiNuSequencial(\App\Entity\Cep\LogBairro $baiNuSequencial = null)
    {
        $this->baiNuSequencial = $baiNuSequencial;

        return $this;
    }

    /**
     * Get baiNuSequencial.
     *
     * @return \App\Entity\Cep\LogBairro|null
     */
    public function getBaiNuSequencial()
    {
        return $this->baiNuSequencial;
    }
}
