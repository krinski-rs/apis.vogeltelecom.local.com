<?php

namespace App\Entity\Financeiro;

/**
 * Atributovalor
 */
class Atributovalor
{
    /**
     * @var int
     */
    private $atrivaloCodigoid;

    /**
     * @var string
     */
    private $atrivaloValor;

    /**
     * @var string|null
     */
    private $mask;

    /**
     * @var \App\Entity\Financeiro\Atributo
     */
    private $atriCodigoid;


    /**
     * Get atrivaloCodigoid.
     *
     * @return int
     */
    public function getAtrivaloCodigoid()
    {
        return $this->atrivaloCodigoid;
    }

    /**
     * Set atrivaloValor.
     *
     * @param string $atrivaloValor
     *
     * @return Atributovalor
     */
    public function setAtrivaloValor($atrivaloValor)
    {
        $this->atrivaloValor = $atrivaloValor;

        return $this;
    }

    /**
     * Get atrivaloValor.
     *
     * @return string
     */
    public function getAtrivaloValor()
    {
        return $this->atrivaloValor;
    }

    /**
     * Set mask.
     *
     * @param string|null $mask
     *
     * @return Atributovalor
     */
    public function setMask($mask = null)
    {
        $this->mask = $mask;

        return $this;
    }

    /**
     * Get mask.
     *
     * @return string|null
     */
    public function getMask()
    {
        return $this->mask;
    }

    /**
     * Set atriCodigoid.
     *
     * @param \App\Entity\Financeiro\Atributo|null $atriCodigoid
     *
     * @return Atributovalor
     */
    public function setAtriCodigoid(\App\Entity\Financeiro\Atributo $atriCodigoid = null)
    {
        $this->atriCodigoid = $atriCodigoid;

        return $this;
    }

    /**
     * Get atriCodigoid.
     *
     * @return \App\Entity\Financeiro\Atributo|null
     */
    public function getAtriCodigoid()
    {
        return $this->atriCodigoid;
    }
}
