<?php

namespace App\Entity\Cep;

/**
 * LogBairro
 */
class LogBairro
{
    /**
     * @var int
     */
    private $baiNuSequencial;

    /**
     * @var string
     */
    private $ufeSg;

    /**
     * @var string
     */
    private $baiNo;

    /**
     * @var string|null
     */
    private $baiNoAbrev;

    /**
     * @var \App\Entity\Cep\LogLocalidade
     */
    private $locNuSequencial;


    /**
     * Get baiNuSequencial.
     *
     * @return int
     */
    public function getBaiNuSequencial()
    {
        return $this->baiNuSequencial;
    }

    /**
     * Set ufeSg.
     *
     * @param string $ufeSg
     *
     * @return LogBairro
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
     * Set baiNo.
     *
     * @param string $baiNo
     *
     * @return LogBairro
     */
    public function setBaiNo($baiNo)
    {
        $this->baiNo = $baiNo;

        return $this;
    }

    /**
     * Get baiNo.
     *
     * @return string
     */
    public function getBaiNo()
    {
        return $this->baiNo;
    }

    /**
     * Set baiNoAbrev.
     *
     * @param string|null $baiNoAbrev
     *
     * @return LogBairro
     */
    public function setBaiNoAbrev($baiNoAbrev = null)
    {
        $this->baiNoAbrev = $baiNoAbrev;

        return $this;
    }

    /**
     * Get baiNoAbrev.
     *
     * @return string|null
     */
    public function getBaiNoAbrev()
    {
        return $this->baiNoAbrev;
    }

    /**
     * Set locNuSequencial.
     *
     * @param \App\Entity\Cep\LogLocalidade|null $locNuSequencial
     *
     * @return LogBairro
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
