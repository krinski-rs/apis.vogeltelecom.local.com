<?php

namespace App\Entity\Financeiro;

/**
 * Ipciepe
 */
class Ipciepe
{
    /**
     * @var int
     */
    private $ipciepeCodigoid;

    /**
     * @var \DateTime
     */
    private $ipciepeDatainc = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     */
    private $ipciepePercentual;

    /**
     * @var string
     */
    private $ipciepeAcumuladonoano = '0.00';

    /**
     * @var string
     */
    private $ipciepeAcumulado12meses = '0.00';

    /**
     * @var \DateTime
     */
    private $ipciepePrazo = '0000-00-00 00:00:00';


    /**
     * Get ipciepeCodigoid.
     *
     * @return int
     */
    public function getIpciepeCodigoid()
    {
        return $this->ipciepeCodigoid;
    }

    /**
     * Set ipciepeDatainc.
     *
     * @param \DateTime $ipciepeDatainc
     *
     * @return Ipciepe
     */
    public function setIpciepeDatainc($ipciepeDatainc)
    {
        $this->ipciepeDatainc = $ipciepeDatainc;

        return $this;
    }

    /**
     * Get ipciepeDatainc.
     *
     * @return \DateTime
     */
    public function getIpciepeDatainc()
    {
        return $this->ipciepeDatainc;
    }

    /**
     * Set ipciepePercentual.
     *
     * @param string $ipciepePercentual
     *
     * @return Ipciepe
     */
    public function setIpciepePercentual($ipciepePercentual)
    {
        $this->ipciepePercentual = $ipciepePercentual;

        return $this;
    }

    /**
     * Get ipciepePercentual.
     *
     * @return string
     */
    public function getIpciepePercentual()
    {
        return $this->ipciepePercentual;
    }

    /**
     * Set ipciepeAcumuladonoano.
     *
     * @param string $ipciepeAcumuladonoano
     *
     * @return Ipciepe
     */
    public function setIpciepeAcumuladonoano($ipciepeAcumuladonoano)
    {
        $this->ipciepeAcumuladonoano = $ipciepeAcumuladonoano;

        return $this;
    }

    /**
     * Get ipciepeAcumuladonoano.
     *
     * @return string
     */
    public function getIpciepeAcumuladonoano()
    {
        return $this->ipciepeAcumuladonoano;
    }

    /**
     * Set ipciepeAcumulado12meses.
     *
     * @param string $ipciepeAcumulado12meses
     *
     * @return Ipciepe
     */
    public function setIpciepeAcumulado12meses($ipciepeAcumulado12meses)
    {
        $this->ipciepeAcumulado12meses = $ipciepeAcumulado12meses;

        return $this;
    }

    /**
     * Get ipciepeAcumulado12meses.
     *
     * @return string
     */
    public function getIpciepeAcumulado12meses()
    {
        return $this->ipciepeAcumulado12meses;
    }

    /**
     * Set ipciepePrazo.
     *
     * @param \DateTime $ipciepePrazo
     *
     * @return Ipciepe
     */
    public function setIpciepePrazo($ipciepePrazo)
    {
        $this->ipciepePrazo = $ipciepePrazo;

        return $this;
    }

    /**
     * Get ipciepePrazo.
     *
     * @return \DateTime
     */
    public function getIpciepePrazo()
    {
        return $this->ipciepePrazo;
    }
}
