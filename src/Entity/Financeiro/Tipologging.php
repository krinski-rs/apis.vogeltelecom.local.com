<?php

namespace App\Entity\Financeiro;

/**
 * Tipologging
 */
class Tipologging
{
    /**
     * @var int
     */
    private $tipologgCodigoid;

    /**
     * @var string
     */
    private $tipologgNome;


    /**
     * Get tipologgCodigoid.
     *
     * @return int
     */
    public function getTipologgCodigoid()
    {
        return $this->tipologgCodigoid;
    }

    /**
     * Set tipologgNome.
     *
     * @param string $tipologgNome
     *
     * @return Tipologging
     */
    public function setTipologgNome($tipologgNome)
    {
        $this->tipologgNome = $tipologgNome;

        return $this;
    }

    /**
     * Get tipologgNome.
     *
     * @return string
     */
    public function getTipologgNome()
    {
        return $this->tipologgNome;
    }
}
