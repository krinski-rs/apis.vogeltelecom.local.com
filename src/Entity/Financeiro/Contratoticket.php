<?php

namespace App\Entity\Financeiro;

/**
 * Contratoticket
 */
class Contratoticket
{
    /**
     * @var int
     */
    private $conttickCodigoid;

    /**
     * @var int
     */
    private $tickCodigoid;

    /**
     * @var \App\Entity\Financeiro\Contrato
     */
    private $contCodigoid;


    /**
     * Get conttickCodigoid.
     *
     * @return int
     */
    public function getConttickCodigoid()
    {
        return $this->conttickCodigoid;
    }

    /**
     * Set tickCodigoid.
     *
     * @param int $tickCodigoid
     *
     * @return Contratoticket
     */
    public function setTickCodigoid($tickCodigoid)
    {
        $this->tickCodigoid = $tickCodigoid;

        return $this;
    }

    /**
     * Get tickCodigoid.
     *
     * @return int
     */
    public function getTickCodigoid()
    {
        return $this->tickCodigoid;
    }

    /**
     * Set contCodigoid.
     *
     * @param \App\Entity\Financeiro\Contrato|null $contCodigoid
     *
     * @return Contratoticket
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
