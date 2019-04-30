<?php

namespace App\Entity\Cep;

/**
 * LogFaixaLocalidade
 */
class LogFaixaLocalidade
{
    /**
     * @var string
     */
    private $locRad1Ini;

    /**
     * @var string
     */
    private $locSuf1Ini;

    /**
     * @var string
     */
    private $locRad1Fim;

    /**
     * @var string
     */
    private $locSuf1Fim;

    /**
     * @var string|null
     */
    private $locRad2Ini;

    /**
     * @var string|null
     */
    private $locSuf2Ini;

    /**
     * @var string|null
     */
    private $locRad2Fim;

    /**
     * @var string|null
     */
    private $locSuf2Fim;

    /**
     * @var \App\Entity\Cep\LogLocalidade
     */
    private $locNuSequencial;


    /**
     * Set locRad1Ini.
     *
     * @param string $locRad1Ini
     *
     * @return LogFaixaLocalidade
     */
    public function setLocRad1Ini($locRad1Ini)
    {
        $this->locRad1Ini = $locRad1Ini;

        return $this;
    }

    /**
     * Get locRad1Ini.
     *
     * @return string
     */
    public function getLocRad1Ini()
    {
        return $this->locRad1Ini;
    }

    /**
     * Set locSuf1Ini.
     *
     * @param string $locSuf1Ini
     *
     * @return LogFaixaLocalidade
     */
    public function setLocSuf1Ini($locSuf1Ini)
    {
        $this->locSuf1Ini = $locSuf1Ini;

        return $this;
    }

    /**
     * Get locSuf1Ini.
     *
     * @return string
     */
    public function getLocSuf1Ini()
    {
        return $this->locSuf1Ini;
    }

    /**
     * Set locRad1Fim.
     *
     * @param string $locRad1Fim
     *
     * @return LogFaixaLocalidade
     */
    public function setLocRad1Fim($locRad1Fim)
    {
        $this->locRad1Fim = $locRad1Fim;

        return $this;
    }

    /**
     * Get locRad1Fim.
     *
     * @return string
     */
    public function getLocRad1Fim()
    {
        return $this->locRad1Fim;
    }

    /**
     * Set locSuf1Fim.
     *
     * @param string $locSuf1Fim
     *
     * @return LogFaixaLocalidade
     */
    public function setLocSuf1Fim($locSuf1Fim)
    {
        $this->locSuf1Fim = $locSuf1Fim;

        return $this;
    }

    /**
     * Get locSuf1Fim.
     *
     * @return string
     */
    public function getLocSuf1Fim()
    {
        return $this->locSuf1Fim;
    }

    /**
     * Set locRad2Ini.
     *
     * @param string|null $locRad2Ini
     *
     * @return LogFaixaLocalidade
     */
    public function setLocRad2Ini($locRad2Ini = null)
    {
        $this->locRad2Ini = $locRad2Ini;

        return $this;
    }

    /**
     * Get locRad2Ini.
     *
     * @return string|null
     */
    public function getLocRad2Ini()
    {
        return $this->locRad2Ini;
    }

    /**
     * Set locSuf2Ini.
     *
     * @param string|null $locSuf2Ini
     *
     * @return LogFaixaLocalidade
     */
    public function setLocSuf2Ini($locSuf2Ini = null)
    {
        $this->locSuf2Ini = $locSuf2Ini;

        return $this;
    }

    /**
     * Get locSuf2Ini.
     *
     * @return string|null
     */
    public function getLocSuf2Ini()
    {
        return $this->locSuf2Ini;
    }

    /**
     * Set locRad2Fim.
     *
     * @param string|null $locRad2Fim
     *
     * @return LogFaixaLocalidade
     */
    public function setLocRad2Fim($locRad2Fim = null)
    {
        $this->locRad2Fim = $locRad2Fim;

        return $this;
    }

    /**
     * Get locRad2Fim.
     *
     * @return string|null
     */
    public function getLocRad2Fim()
    {
        return $this->locRad2Fim;
    }

    /**
     * Set locSuf2Fim.
     *
     * @param string|null $locSuf2Fim
     *
     * @return LogFaixaLocalidade
     */
    public function setLocSuf2Fim($locSuf2Fim = null)
    {
        $this->locSuf2Fim = $locSuf2Fim;

        return $this;
    }

    /**
     * Get locSuf2Fim.
     *
     * @return string|null
     */
    public function getLocSuf2Fim()
    {
        return $this->locSuf2Fim;
    }

    /**
     * Set locNuSequencial.
     *
     * @param \App\Entity\Cep\LogLocalidade $locNuSequencial
     *
     * @return LogFaixaLocalidade
     */
    public function setLocNuSequencial(\App\Entity\Cep\LogLocalidade $locNuSequencial)
    {
        $this->locNuSequencial = $locNuSequencial;

        return $this;
    }

    /**
     * Get locNuSequencial.
     *
     * @return \App\Entity\Cep\LogLocalidade
     */
    public function getLocNuSequencial()
    {
        return $this->locNuSequencial;
    }
}
