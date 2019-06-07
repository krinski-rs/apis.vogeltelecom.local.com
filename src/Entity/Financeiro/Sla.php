<?php

namespace App\Entity\Financeiro;

/**
 * Sla
 */
class Sla
{
    /**
     * @var int
     */
    private $slaCodigoid;

    /**
     * @var string
     */
    private $slaNome;

    /**
     * @var \DateTime
     */
    private $slaDatainc = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime|null
     */
    private $slaDatafim;

    /**
     * @var string
     */
    private $slaDisponibilidade;

    /**
     * @var \App\Entity\Financeiro\Sla
     */
    private $slaProximocodigoid;


    /**
     * Get slaCodigoid.
     *
     * @return int
     */
    public function getSlaCodigoid()
    {
        return $this->slaCodigoid;
    }

    /**
     * Set slaNome.
     *
     * @param string $slaNome
     *
     * @return Sla
     */
    public function setSlaNome($slaNome)
    {
        $this->slaNome = $slaNome;

        return $this;
    }

    /**
     * Get slaNome.
     *
     * @return string
     */
    public function getSlaNome()
    {
        return $this->slaNome;
    }

    /**
     * Set slaDatainc.
     *
     * @param \DateTime $slaDatainc
     *
     * @return Sla
     */
    public function setSlaDatainc($slaDatainc)
    {
        $this->slaDatainc = $slaDatainc;

        return $this;
    }

    /**
     * Get slaDatainc.
     *
     * @return \DateTime
     */
    public function getSlaDatainc()
    {
        return $this->slaDatainc;
    }

    /**
     * Set slaDatafim.
     *
     * @param \DateTime|null $slaDatafim
     *
     * @return Sla
     */
    public function setSlaDatafim($slaDatafim = null)
    {
        $this->slaDatafim = $slaDatafim;

        return $this;
    }

    /**
     * Get slaDatafim.
     *
     * @return \DateTime|null
     */
    public function getSlaDatafim()
    {
        return $this->slaDatafim;
    }

    /**
     * Set slaDisponibilidade.
     *
     * @param string $slaDisponibilidade
     *
     * @return Sla
     */
    public function setSlaDisponibilidade($slaDisponibilidade)
    {
        $this->slaDisponibilidade = $slaDisponibilidade;

        return $this;
    }

    /**
     * Get slaDisponibilidade.
     *
     * @return string
     */
    public function getSlaDisponibilidade()
    {
        return $this->slaDisponibilidade;
    }

    /**
     * Set slaProximocodigoid.
     *
     * @param \App\Entity\Financeiro\Sla|null $slaProximocodigoid
     *
     * @return Sla
     */
    public function setSlaProximocodigoid(\App\Entity\Financeiro\Sla $slaProximocodigoid = null)
    {
        $this->slaProximocodigoid = $slaProximocodigoid;

        return $this;
    }

    /**
     * Get slaProximocodigoid.
     *
     * @return \App\Entity\Financeiro\Sla|null
     */
    public function getSlaProximocodigoid()
    {
        return $this->slaProximocodigoid;
    }
}
