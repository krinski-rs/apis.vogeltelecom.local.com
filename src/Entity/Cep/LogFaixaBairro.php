<?php

namespace App\Entity\Cep;

/**
 * LogFaixaBairro
 */
class LogFaixaBairro
{
    /**
     * @var int
     */
    private $fcbNuOrdem;

    /**
     * @var string
     */
    private $fcbRadIni;

    /**
     * @var string
     */
    private $fcbSufIni;

    /**
     * @var string
     */
    private $fcbRadFim;

    /**
     * @var string
     */
    private $fcbSufFim;

    /**
     * @var \App\Entity\Cep\LogBairro
     */
    private $baiNuSequencial;


    /**
     * Set fcbNuOrdem.
     *
     * @param int $fcbNuOrdem
     *
     * @return LogFaixaBairro
     */
    public function setFcbNuOrdem($fcbNuOrdem)
    {
        $this->fcbNuOrdem = $fcbNuOrdem;

        return $this;
    }

    /**
     * Get fcbNuOrdem.
     *
     * @return int
     */
    public function getFcbNuOrdem()
    {
        return $this->fcbNuOrdem;
    }

    /**
     * Set fcbRadIni.
     *
     * @param string $fcbRadIni
     *
     * @return LogFaixaBairro
     */
    public function setFcbRadIni($fcbRadIni)
    {
        $this->fcbRadIni = $fcbRadIni;

        return $this;
    }

    /**
     * Get fcbRadIni.
     *
     * @return string
     */
    public function getFcbRadIni()
    {
        return $this->fcbRadIni;
    }

    /**
     * Set fcbSufIni.
     *
     * @param string $fcbSufIni
     *
     * @return LogFaixaBairro
     */
    public function setFcbSufIni($fcbSufIni)
    {
        $this->fcbSufIni = $fcbSufIni;

        return $this;
    }

    /**
     * Get fcbSufIni.
     *
     * @return string
     */
    public function getFcbSufIni()
    {
        return $this->fcbSufIni;
    }

    /**
     * Set fcbRadFim.
     *
     * @param string $fcbRadFim
     *
     * @return LogFaixaBairro
     */
    public function setFcbRadFim($fcbRadFim)
    {
        $this->fcbRadFim = $fcbRadFim;

        return $this;
    }

    /**
     * Get fcbRadFim.
     *
     * @return string
     */
    public function getFcbRadFim()
    {
        return $this->fcbRadFim;
    }

    /**
     * Set fcbSufFim.
     *
     * @param string $fcbSufFim
     *
     * @return LogFaixaBairro
     */
    public function setFcbSufFim($fcbSufFim)
    {
        $this->fcbSufFim = $fcbSufFim;

        return $this;
    }

    /**
     * Get fcbSufFim.
     *
     * @return string
     */
    public function getFcbSufFim()
    {
        return $this->fcbSufFim;
    }

    /**
     * Set baiNuSequencial.
     *
     * @param \App\Entity\Cep\LogBairro $baiNuSequencial
     *
     * @return LogFaixaBairro
     */
    public function setBaiNuSequencial(\App\Entity\Cep\LogBairro $baiNuSequencial)
    {
        $this->baiNuSequencial = $baiNuSequencial;

        return $this;
    }

    /**
     * Get baiNuSequencial.
     *
     * @return \App\Entity\Cep\LogBairro
     */
    public function getBaiNuSequencial()
    {
        return $this->baiNuSequencial;
    }
}
