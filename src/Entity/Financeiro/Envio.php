<?php

namespace App\Entity\Financeiro;

/**
 * Envio
 */
class Envio
{
    /**
     * @var int
     */
    private $enviCodigoid;

    /**
     * @var string|null
     */
    private $enviNome;


    /**
     * Get enviCodigoid.
     *
     * @return int
     */
    public function getEnviCodigoid()
    {
        return $this->enviCodigoid;
    }

    /**
     * Set enviNome.
     *
     * @param string|null $enviNome
     *
     * @return Envio
     */
    public function setEnviNome($enviNome = null)
    {
        $this->enviNome = $enviNome;

        return $this;
    }

    /**
     * Get enviNome.
     *
     * @return string|null
     */
    public function getEnviNome()
    {
        return $this->enviNome;
    }
}
