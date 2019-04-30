<?php

namespace App\Entity\Cep;

/**
 * LogFaixaCpc
 */
class LogFaixaCpc
{
    /**
     * @var int
     */
    private $cpcNuInicial = '0';

    /**
     * @var int
     */
    private $cpcNuFinal = '0';

    /**
     * @var \App\Entity\Cep\LogCpc
     */
    private $cpcNuSequencial;


    /**
     * Set cpcNuInicial.
     *
     * @param int $cpcNuInicial
     *
     * @return LogFaixaCpc
     */
    public function setCpcNuInicial($cpcNuInicial)
    {
        $this->cpcNuInicial = $cpcNuInicial;

        return $this;
    }

    /**
     * Get cpcNuInicial.
     *
     * @return int
     */
    public function getCpcNuInicial()
    {
        return $this->cpcNuInicial;
    }

    /**
     * Set cpcNuFinal.
     *
     * @param int $cpcNuFinal
     *
     * @return LogFaixaCpc
     */
    public function setCpcNuFinal($cpcNuFinal)
    {
        $this->cpcNuFinal = $cpcNuFinal;

        return $this;
    }

    /**
     * Get cpcNuFinal.
     *
     * @return int
     */
    public function getCpcNuFinal()
    {
        return $this->cpcNuFinal;
    }

    /**
     * Set cpcNuSequencial.
     *
     * @param \App\Entity\Cep\LogCpc $cpcNuSequencial
     *
     * @return LogFaixaCpc
     */
    public function setCpcNuSequencial(\App\Entity\Cep\LogCpc $cpcNuSequencial)
    {
        $this->cpcNuSequencial = $cpcNuSequencial;

        return $this;
    }

    /**
     * Get cpcNuSequencial.
     *
     * @return \App\Entity\Cep\LogCpc
     */
    public function getCpcNuSequencial()
    {
        return $this->cpcNuSequencial;
    }
}
