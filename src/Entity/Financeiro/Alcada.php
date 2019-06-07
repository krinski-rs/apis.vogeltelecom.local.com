<?php

namespace App\Entity\Financeiro;

/**
 * Alcada
 */
class Alcada
{
    /**
     * @var int
     */
    private $alcaCodigoid;

    /**
     * @var string
     */
    private $alcaPercentual;

    /**
     * @var \DateTime
     */
    private $alcaDatainc = 'CURRENT_TIMESTAMP';


    /**
     * Get alcaCodigoid.
     *
     * @return int
     */
    public function getAlcaCodigoid()
    {
        return $this->alcaCodigoid;
    }

    /**
     * Set alcaPercentual.
     *
     * @param string $alcaPercentual
     *
     * @return Alcada
     */
    public function setAlcaPercentual($alcaPercentual)
    {
        $this->alcaPercentual = $alcaPercentual;

        return $this;
    }

    /**
     * Get alcaPercentual.
     *
     * @return string
     */
    public function getAlcaPercentual()
    {
        return $this->alcaPercentual;
    }

    /**
     * Set alcaDatainc.
     *
     * @param \DateTime $alcaDatainc
     *
     * @return Alcada
     */
    public function setAlcaDatainc($alcaDatainc)
    {
        $this->alcaDatainc = $alcaDatainc;

        return $this;
    }

    /**
     * Get alcaDatainc.
     *
     * @return \DateTime
     */
    public function getAlcaDatainc()
    {
        return $this->alcaDatainc;
    }
}
