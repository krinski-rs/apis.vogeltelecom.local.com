<?php

namespace App\Entity\Financeiro;

/**
 * Ist
 */
class Ist
{
    /**
     * @var int
     */
    private $istCodigoid;

    /**
     * @var \DateTime
     */
    private $istDatainc = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     */
    private $istPercentual;

    /**
     * @var string
     */
    private $istAcumuladonoano = '0.00';

    /**
     * @var string
     */
    private $istAcumulado12meses = '0.00';

    /**
     * @var \DateTime
     */
    private $istPrazo = '0000-00-00 00:00:00';


    /**
     * Get istCodigoid.
     *
     * @return int
     */
    public function getIstCodigoid()
    {
        return $this->istCodigoid;
    }

    /**
     * Set istDatainc.
     *
     * @param \DateTime $istDatainc
     *
     * @return Ist
     */
    public function setIstDatainc($istDatainc)
    {
        $this->istDatainc = $istDatainc;

        return $this;
    }

    /**
     * Get istDatainc.
     *
     * @return \DateTime
     */
    public function getIstDatainc()
    {
        return $this->istDatainc;
    }

    /**
     * Set istPercentual.
     *
     * @param string $istPercentual
     *
     * @return Ist
     */
    public function setIstPercentual($istPercentual)
    {
        $this->istPercentual = $istPercentual;

        return $this;
    }

    /**
     * Get istPercentual.
     *
     * @return string
     */
    public function getIstPercentual()
    {
        return $this->istPercentual;
    }

    /**
     * Set istAcumuladonoano.
     *
     * @param string $istAcumuladonoano
     *
     * @return Ist
     */
    public function setIstAcumuladonoano($istAcumuladonoano)
    {
        $this->istAcumuladonoano = $istAcumuladonoano;

        return $this;
    }

    /**
     * Get istAcumuladonoano.
     *
     * @return string
     */
    public function getIstAcumuladonoano()
    {
        return $this->istAcumuladonoano;
    }

    /**
     * Set istAcumulado12meses.
     *
     * @param string $istAcumulado12meses
     *
     * @return Ist
     */
    public function setIstAcumulado12meses($istAcumulado12meses)
    {
        $this->istAcumulado12meses = $istAcumulado12meses;

        return $this;
    }

    /**
     * Get istAcumulado12meses.
     *
     * @return string
     */
    public function getIstAcumulado12meses()
    {
        return $this->istAcumulado12meses;
    }

    /**
     * Set istPrazo.
     *
     * @param \DateTime $istPrazo
     *
     * @return Ist
     */
    public function setIstPrazo($istPrazo)
    {
        $this->istPrazo = $istPrazo;

        return $this;
    }

    /**
     * Get istPrazo.
     *
     * @return \DateTime
     */
    public function getIstPrazo()
    {
        return $this->istPrazo;
    }
}
