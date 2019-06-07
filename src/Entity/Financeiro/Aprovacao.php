<?php

namespace App\Entity\Financeiro;

/**
 * Aprovacao
 */
class Aprovacao
{
    /**
     * @var int
     */
    private $aproCodigoid;

    /**
     * @var string
     */
    private $aproNome;

    /**
     * @var int
     */
    private $aproTipo;


    /**
     * Get aproCodigoid.
     *
     * @return int
     */
    public function getAproCodigoid()
    {
        return $this->aproCodigoid;
    }

    /**
     * Set aproNome.
     *
     * @param string $aproNome
     *
     * @return Aprovacao
     */
    public function setAproNome($aproNome)
    {
        $this->aproNome = $aproNome;

        return $this;
    }

    /**
     * Get aproNome.
     *
     * @return string
     */
    public function getAproNome()
    {
        return $this->aproNome;
    }

    /**
     * Set aproTipo.
     *
     * @param int $aproTipo
     *
     * @return Aprovacao
     */
    public function setAproTipo($aproTipo)
    {
        $this->aproTipo = $aproTipo;

        return $this;
    }

    /**
     * Get aproTipo.
     *
     * @return int
     */
    public function getAproTipo()
    {
        return $this->aproTipo;
    }
}
