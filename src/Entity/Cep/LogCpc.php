<?php

namespace App\Entity\Cep;

/**
 * LogCpc
 */
class LogCpc
{
    /**
     * @var int
     */
    private $cpcNuSequencial;

    /**
     * @var string
     */
    private $ufeSg;

    /**
     * @var string
     */
    private $cep;

    /**
     * @var string
     */
    private $cpcNo;

    /**
     * @var string
     */
    private $cpcEndereco;

    /**
     * @var string|null
     */
    private $cpcTipo;

    /**
     * @var string|null
     */
    private $cpcAbrangencia;

    /**
     * @var string|null
     */
    private $temp;

    /**
     * @var \App\Entity\Cep\LogLocalidade
     */
    private $locNuSequencial;


    /**
     * Get cpcNuSequencial.
     *
     * @return int
     */
    public function getCpcNuSequencial()
    {
        return $this->cpcNuSequencial;
    }

    /**
     * Set ufeSg.
     *
     * @param string $ufeSg
     *
     * @return LogCpc
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
     * Set cep.
     *
     * @param string $cep
     *
     * @return LogCpc
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
     * Set cpcNo.
     *
     * @param string $cpcNo
     *
     * @return LogCpc
     */
    public function setCpcNo($cpcNo)
    {
        $this->cpcNo = $cpcNo;

        return $this;
    }

    /**
     * Get cpcNo.
     *
     * @return string
     */
    public function getCpcNo()
    {
        return $this->cpcNo;
    }

    /**
     * Set cpcEndereco.
     *
     * @param string $cpcEndereco
     *
     * @return LogCpc
     */
    public function setCpcEndereco($cpcEndereco)
    {
        $this->cpcEndereco = $cpcEndereco;

        return $this;
    }

    /**
     * Get cpcEndereco.
     *
     * @return string
     */
    public function getCpcEndereco()
    {
        return $this->cpcEndereco;
    }

    /**
     * Set cpcTipo.
     *
     * @param string|null $cpcTipo
     *
     * @return LogCpc
     */
    public function setCpcTipo($cpcTipo = null)
    {
        $this->cpcTipo = $cpcTipo;

        return $this;
    }

    /**
     * Get cpcTipo.
     *
     * @return string|null
     */
    public function getCpcTipo()
    {
        return $this->cpcTipo;
    }

    /**
     * Set cpcAbrangencia.
     *
     * @param string|null $cpcAbrangencia
     *
     * @return LogCpc
     */
    public function setCpcAbrangencia($cpcAbrangencia = null)
    {
        $this->cpcAbrangencia = $cpcAbrangencia;

        return $this;
    }

    /**
     * Get cpcAbrangencia.
     *
     * @return string|null
     */
    public function getCpcAbrangencia()
    {
        return $this->cpcAbrangencia;
    }

    /**
     * Set temp.
     *
     * @param string|null $temp
     *
     * @return LogCpc
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
     * @return LogCpc
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
}
