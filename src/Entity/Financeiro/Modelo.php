<?php

namespace App\Entity\Financeiro;

/**
 * Modelo
 */
class Modelo
{
    /**
     * @var int
     */
    private $modeCodigoid;

    /**
     * @var string
     */
    private $modeNome;

    /**
     * @var bool
     */
    private $modeAtivo;

    /**
     * @var \DateTime
     */
    private $modeDatainc = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime|null
     */
    private $modeDatafim;

    /**
     * @var \App\Entity\Financeiro\Contrato
     */
    private $contCodigoid;


    /**
     * Get modeCodigoid.
     *
     * @return int
     */
    public function getModeCodigoid()
    {
        return $this->modeCodigoid;
    }

    /**
     * Set modeNome.
     *
     * @param string $modeNome
     *
     * @return Modelo
     */
    public function setModeNome($modeNome)
    {
        $this->modeNome = $modeNome;

        return $this;
    }

    /**
     * Get modeNome.
     *
     * @return string
     */
    public function getModeNome()
    {
        return $this->modeNome;
    }

    /**
     * Set modeAtivo.
     *
     * @param bool $modeAtivo
     *
     * @return Modelo
     */
    public function setModeAtivo($modeAtivo)
    {
        $this->modeAtivo = $modeAtivo;

        return $this;
    }

    /**
     * Get modeAtivo.
     *
     * @return bool
     */
    public function getModeAtivo()
    {
        return $this->modeAtivo;
    }

    /**
     * Set modeDatainc.
     *
     * @param \DateTime $modeDatainc
     *
     * @return Modelo
     */
    public function setModeDatainc($modeDatainc)
    {
        $this->modeDatainc = $modeDatainc;

        return $this;
    }

    /**
     * Get modeDatainc.
     *
     * @return \DateTime
     */
    public function getModeDatainc()
    {
        return $this->modeDatainc;
    }

    /**
     * Set modeDatafim.
     *
     * @param \DateTime|null $modeDatafim
     *
     * @return Modelo
     */
    public function setModeDatafim($modeDatafim = null)
    {
        $this->modeDatafim = $modeDatafim;

        return $this;
    }

    /**
     * Get modeDatafim.
     *
     * @return \DateTime|null
     */
    public function getModeDatafim()
    {
        return $this->modeDatafim;
    }

    /**
     * Set contCodigoid.
     *
     * @param \App\Entity\Financeiro\Contrato|null $contCodigoid
     *
     * @return Modelo
     */
    public function setContCodigoid(\App\Entity\Financeiro\Contrato $contCodigoid = null)
    {
        $this->contCodigoid = $contCodigoid;

        return $this;
    }

    /**
     * Get contCodigoid.
     *
     * @return \App\Entity\Financeiro\Contrato|null
     */
    public function getContCodigoid()
    {
        return $this->contCodigoid;
    }
}
