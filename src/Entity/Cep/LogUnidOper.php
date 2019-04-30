<?php

namespace App\Entity\Cep;

/**
 * LogUnidOper
 */
class LogUnidOper
{
    /**
     * @var int
     */
    private $uopNuSequencial;

    /**
     * @var string
     */
    private $ufeSg;

    /**
     * @var string
     */
    private $uopNo;

    /**
     * @var string
     */
    private $cep;

    /**
     * @var string
     */
    private $uopEndereco;

    /**
     * @var string|null
     */
    private $uopInCp;

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
     * Get uopNuSequencial.
     *
     * @return int
     */
    public function getUopNuSequencial()
    {
        return $this->uopNuSequencial;
    }

    /**
     * Set ufeSg.
     *
     * @param string $ufeSg
     *
     * @return LogUnidOper
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
     * Set uopNo.
     *
     * @param string $uopNo
     *
     * @return LogUnidOper
     */
    public function setUopNo($uopNo)
    {
        $this->uopNo = $uopNo;

        return $this;
    }

    /**
     * Get uopNo.
     *
     * @return string
     */
    public function getUopNo()
    {
        return $this->uopNo;
    }

    /**
     * Set cep.
     *
     * @param string $cep
     *
     * @return LogUnidOper
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
     * Set uopEndereco.
     *
     * @param string $uopEndereco
     *
     * @return LogUnidOper
     */
    public function setUopEndereco($uopEndereco)
    {
        $this->uopEndereco = $uopEndereco;

        return $this;
    }

    /**
     * Get uopEndereco.
     *
     * @return string
     */
    public function getUopEndereco()
    {
        return $this->uopEndereco;
    }

    /**
     * Set uopInCp.
     *
     * @param string|null $uopInCp
     *
     * @return LogUnidOper
     */
    public function setUopInCp($uopInCp = null)
    {
        $this->uopInCp = $uopInCp;

        return $this;
    }

    /**
     * Get uopInCp.
     *
     * @return string|null
     */
    public function getUopInCp()
    {
        return $this->uopInCp;
    }

    /**
     * Set temp.
     *
     * @param string|null $temp
     *
     * @return LogUnidOper
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
     * @return LogUnidOper
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
     * @return LogUnidOper
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
     * @return LogUnidOper
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
