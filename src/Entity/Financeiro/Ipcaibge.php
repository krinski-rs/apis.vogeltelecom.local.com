<?php

namespace App\Entity\Financeiro;

/**
 * Ipcaibge
 */
class Ipcaibge
{
    /**
     * @var int
     */
    private $ipcaibgeCodigoid;

    /**
     * @var \DateTime
     */
    private $ipcaibgeDatainc = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     */
    private $ipcaibgePercentual;

    /**
     * @var string
     */
    private $ipcaibgeAcumuladonoano = '0.00';

    /**
     * @var string
     */
    private $ipcaibgeAcumulado12meses = '0.00';

    /**
     * @var \DateTime
     */
    private $ipcaibgePrazo = '0000-00-00 00:00:00';


    /**
     * Get ipcaibgeCodigoid.
     *
     * @return int
     */
    public function getIpcaibgeCodigoid()
    {
        return $this->ipcaibgeCodigoid;
    }

    /**
     * Set ipcaibgeDatainc.
     *
     * @param \DateTime $ipcaibgeDatainc
     *
     * @return Ipcaibge
     */
    public function setIpcaibgeDatainc($ipcaibgeDatainc)
    {
        $this->ipcaibgeDatainc = $ipcaibgeDatainc;

        return $this;
    }

    /**
     * Get ipcaibgeDatainc.
     *
     * @return \DateTime
     */
    public function getIpcaibgeDatainc()
    {
        return $this->ipcaibgeDatainc;
    }

    /**
     * Set ipcaibgePercentual.
     *
     * @param string $ipcaibgePercentual
     *
     * @return Ipcaibge
     */
    public function setIpcaibgePercentual($ipcaibgePercentual)
    {
        $this->ipcaibgePercentual = $ipcaibgePercentual;

        return $this;
    }

    /**
     * Get ipcaibgePercentual.
     *
     * @return string
     */
    public function getIpcaibgePercentual()
    {
        return $this->ipcaibgePercentual;
    }

    /**
     * Set ipcaibgeAcumuladonoano.
     *
     * @param string $ipcaibgeAcumuladonoano
     *
     * @return Ipcaibge
     */
    public function setIpcaibgeAcumuladonoano($ipcaibgeAcumuladonoano)
    {
        $this->ipcaibgeAcumuladonoano = $ipcaibgeAcumuladonoano;

        return $this;
    }

    /**
     * Get ipcaibgeAcumuladonoano.
     *
     * @return string
     */
    public function getIpcaibgeAcumuladonoano()
    {
        return $this->ipcaibgeAcumuladonoano;
    }

    /**
     * Set ipcaibgeAcumulado12meses.
     *
     * @param string $ipcaibgeAcumulado12meses
     *
     * @return Ipcaibge
     */
    public function setIpcaibgeAcumulado12meses($ipcaibgeAcumulado12meses)
    {
        $this->ipcaibgeAcumulado12meses = $ipcaibgeAcumulado12meses;

        return $this;
    }

    /**
     * Get ipcaibgeAcumulado12meses.
     *
     * @return string
     */
    public function getIpcaibgeAcumulado12meses()
    {
        return $this->ipcaibgeAcumulado12meses;
    }

    /**
     * Set ipcaibgePrazo.
     *
     * @param \DateTime $ipcaibgePrazo
     *
     * @return Ipcaibge
     */
    public function setIpcaibgePrazo($ipcaibgePrazo)
    {
        $this->ipcaibgePrazo = $ipcaibgePrazo;

        return $this;
    }

    /**
     * Get ipcaibgePrazo.
     *
     * @return \DateTime
     */
    public function getIpcaibgePrazo()
    {
        return $this->ipcaibgePrazo;
    }
}
