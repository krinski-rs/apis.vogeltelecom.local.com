<?php

namespace App\Entity\Financeiro;

/**
 * Nivel
 */
class Nivel
{
    /**
     * @var int
     */
    private $niveCodigoid;

    /**
     * @var string
     */
    private $niveNome;


    /**
     * Get niveCodigoid.
     *
     * @return int
     */
    public function getNiveCodigoid()
    {
        return $this->niveCodigoid;
    }

    /**
     * Set niveNome.
     *
     * @param string $niveNome
     *
     * @return Nivel
     */
    public function setNiveNome($niveNome)
    {
        $this->niveNome = $niveNome;

        return $this;
    }

    /**
     * Get niveNome.
     *
     * @return string
     */
    public function getNiveNome()
    {
        return $this->niveNome;
    }
}
