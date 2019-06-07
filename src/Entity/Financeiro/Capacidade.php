<?php

namespace App\Entity\Financeiro;

/**
 * Capacidade
 */
class Capacidade
{
    /**
     * @var int
     */
    private $capaCodigoid;

    /**
     * @var int
     */
    private $capaCapacidade;


    /**
     * Get capaCodigoid.
     *
     * @return int
     */
    public function getCapaCodigoid()
    {
        return $this->capaCodigoid;
    }

    /**
     * Set capaCapacidade.
     *
     * @param int $capaCapacidade
     *
     * @return Capacidade
     */
    public function setCapaCapacidade($capaCapacidade)
    {
        $this->capaCapacidade = $capaCapacidade;

        return $this;
    }

    /**
     * Get capaCapacidade.
     *
     * @return int
     */
    public function getCapaCapacidade()
    {
        return $this->capaCapacidade;
    }
}
