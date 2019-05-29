<?php

namespace App\Entity\Financeiro;

/**
 * Inpc
 */
class Inpc
{
    /**
     * @var int
     */
    private $inpcCodigoid;

    /**
     * @var \DateTime
     */
    private $inpcDatainc = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     */
    private $inpcPercentual;

    /**
     * @var string
     */
    private $inpcAcumuladonoano = '0.00';

    /**
     * @var string
     */
    private $inpcAcumulado12meses = '0.00';

    /**
     * @var \DateTime
     */
    private $inpcPrazo = '0000-00-00 00:00:00';


    /**
     * Get inpcCodigoid.
     *
     * @return int
     */
    public function getInpcCodigoid()
    {
        return $this->inpcCodigoid;
    }

    /**
     * Set inpcDatainc.
     *
     * @param \DateTime $inpcDatainc
     *
     * @return Inpc
     */
    public function setInpcDatainc($inpcDatainc)
    {
        $this->inpcDatainc = $inpcDatainc;

        return $this;
    }

    /**
     * Get inpcDatainc.
     *
     * @return \DateTime
     */
    public function getInpcDatainc()
    {
        return $this->inpcDatainc;
    }

    /**
     * Set inpcPercentual.
     *
     * @param string $inpcPercentual
     *
     * @return Inpc
     */
    public function setInpcPercentual($inpcPercentual)
    {
        $this->inpcPercentual = $inpcPercentual;

        return $this;
    }

    /**
     * Get inpcPercentual.
     *
     * @return string
     */
    public function getInpcPercentual()
    {
        return $this->inpcPercentual;
    }

    /**
     * Set inpcAcumuladonoano.
     *
     * @param string $inpcAcumuladonoano
     *
     * @return Inpc
     */
    public function setInpcAcumuladonoano($inpcAcumuladonoano)
    {
        $this->inpcAcumuladonoano = $inpcAcumuladonoano;

        return $this;
    }

    /**
     * Get inpcAcumuladonoano.
     *
     * @return string
     */
    public function getInpcAcumuladonoano()
    {
        return $this->inpcAcumuladonoano;
    }

    /**
     * Set inpcAcumulado12meses.
     *
     * @param string $inpcAcumulado12meses
     *
     * @return Inpc
     */
    public function setInpcAcumulado12meses($inpcAcumulado12meses)
    {
        $this->inpcAcumulado12meses = $inpcAcumulado12meses;

        return $this;
    }

    /**
     * Get inpcAcumulado12meses.
     *
     * @return string
     */
    public function getInpcAcumulado12meses()
    {
        return $this->inpcAcumulado12meses;
    }

    /**
     * Set inpcPrazo.
     *
     * @param \DateTime $inpcPrazo
     *
     * @return Inpc
     */
    public function setInpcPrazo($inpcPrazo)
    {
        $this->inpcPrazo = $inpcPrazo;

        return $this;
    }

    /**
     * Get inpcPrazo.
     *
     * @return \DateTime
     */
    public function getInpcPrazo()
    {
        return $this->inpcPrazo;
    }
}
