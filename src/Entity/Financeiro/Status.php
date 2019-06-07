<?php

namespace App\Entity\Financeiro;

/**
 * Status
 */
class Status
{
    /**
     * @var int
     */
    private $statCodigoid;

    /**
     * @var string
     */
    private $statNome;


    /**
     * Get statCodigoid.
     *
     * @return int
     */
    public function getStatCodigoid()
    {
        return $this->statCodigoid;
    }

    /**
     * Set statNome.
     *
     * @param string $statNome
     *
     * @return Status
     */
    public function setStatNome($statNome)
    {
        $this->statNome = $statNome;

        return $this;
    }

    /**
     * Get statNome.
     *
     * @return string
     */
    public function getStatNome()
    {
        return $this->statNome;
    }
}
