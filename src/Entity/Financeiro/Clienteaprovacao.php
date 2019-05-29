<?php

namespace App\Entity\Financeiro;

/**
 * Clienteaprovacao
 */
class Clienteaprovacao
{
    /**
     * @var int
     */
    private $clieaproCodigoid;

    /**
     * @var int
     */
    private $clieCodigoid;

    /**
     * @var int
     */
    private $usuaCodigoid;

    /**
     * @var int
     */
    private $clieaproDelin;

    /**
     * @var \App\Entity\Financeiro\Aprovacao
     */
    private $aproCodigoid;


    /**
     * Get clieaproCodigoid.
     *
     * @return int
     */
    public function getClieaproCodigoid()
    {
        return $this->clieaproCodigoid;
    }

    /**
     * Set clieCodigoid.
     *
     * @param int $clieCodigoid
     *
     * @return Clienteaprovacao
     */
    public function setClieCodigoid($clieCodigoid)
    {
        $this->clieCodigoid = $clieCodigoid;

        return $this;
    }

    /**
     * Get clieCodigoid.
     *
     * @return int
     */
    public function getClieCodigoid()
    {
        return $this->clieCodigoid;
    }

    /**
     * Set usuaCodigoid.
     *
     * @param int $usuaCodigoid
     *
     * @return Clienteaprovacao
     */
    public function setUsuaCodigoid($usuaCodigoid)
    {
        $this->usuaCodigoid = $usuaCodigoid;

        return $this;
    }

    /**
     * Get usuaCodigoid.
     *
     * @return int
     */
    public function getUsuaCodigoid()
    {
        return $this->usuaCodigoid;
    }

    /**
     * Set clieaproDelin.
     *
     * @param int $clieaproDelin
     *
     * @return Clienteaprovacao
     */
    public function setClieaproDelin($clieaproDelin)
    {
        $this->clieaproDelin = $clieaproDelin;

        return $this;
    }

    /**
     * Get clieaproDelin.
     *
     * @return int
     */
    public function getClieaproDelin()
    {
        return $this->clieaproDelin;
    }

    /**
     * Set aproCodigoid.
     *
     * @param \App\Entity\Financeiro\Aprovacao|null $aproCodigoid
     *
     * @return Clienteaprovacao
     */
    public function setAproCodigoid(\App\Entity\Financeiro\Aprovacao $aproCodigoid = null)
    {
        $this->aproCodigoid = $aproCodigoid;

        return $this;
    }

    /**
     * Get aproCodigoid.
     *
     * @return \App\Entity\Financeiro\Aprovacao|null
     */
    public function getAproCodigoid()
    {
        return $this->aproCodigoid;
    }
}
