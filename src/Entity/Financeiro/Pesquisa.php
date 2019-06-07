<?php

namespace App\Entity\Financeiro;

/**
 * Pesquisa
 */
class Pesquisa
{
    /**
     * @var int
     */
    private $pesqCodigoid;

    /**
     * @var string
     */
    private $pesqNome;

    /**
     * @var string
     */
    private $pesqTipo;


    /**
     * Get pesqCodigoid.
     *
     * @return int
     */
    public function getPesqCodigoid()
    {
        return $this->pesqCodigoid;
    }

    /**
     * Set pesqNome.
     *
     * @param string $pesqNome
     *
     * @return Pesquisa
     */
    public function setPesqNome($pesqNome)
    {
        $this->pesqNome = $pesqNome;

        return $this;
    }

    /**
     * Get pesqNome.
     *
     * @return string
     */
    public function getPesqNome()
    {
        return $this->pesqNome;
    }

    /**
     * Set pesqTipo.
     *
     * @param string $pesqTipo
     *
     * @return Pesquisa
     */
    public function setPesqTipo($pesqTipo)
    {
        $this->pesqTipo = $pesqTipo;

        return $this;
    }

    /**
     * Get pesqTipo.
     *
     * @return string
     */
    public function getPesqTipo()
    {
        return $this->pesqTipo;
    }
}
