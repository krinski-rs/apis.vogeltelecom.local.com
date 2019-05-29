<?php

namespace App\Entity\Financeiro;

/**
 * Tipodocumento
 */
class Tipodocumento
{
    /**
     * @var int
     */
    private $tipodocuCodigoid;

    /**
     * @var string
     */
    private $tipodocuNome;


    /**
     * Get tipodocuCodigoid.
     *
     * @return int
     */
    public function getTipodocuCodigoid()
    {
        return $this->tipodocuCodigoid;
    }

    /**
     * Set tipodocuNome.
     *
     * @param string $tipodocuNome
     *
     * @return Tipodocumento
     */
    public function setTipodocuNome($tipodocuNome)
    {
        $this->tipodocuNome = $tipodocuNome;

        return $this;
    }

    /**
     * Get tipodocuNome.
     *
     * @return string
     */
    public function getTipodocuNome()
    {
        return $this->tipodocuNome;
    }
}
