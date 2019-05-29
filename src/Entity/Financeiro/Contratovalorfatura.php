<?php

namespace App\Entity\Financeiro;

/**
 * Contratovalorfatura
 */
class Contratovalorfatura
{
    /**
     * @var int
     */
    private $contvalofatuCodigoid;

    /**
     * @var \App\Entity\Financeiro\Contratovalor
     */
    private $contvaloCodigoid;

    /**
     * @var \App\Entity\Financeiro\Fatura
     */
    private $fatuCodigoid;


    /**
     * Get contvalofatuCodigoid.
     *
     * @return int
     */
    public function getContvalofatuCodigoid()
    {
        return $this->contvalofatuCodigoid;
    }

    /**
     * Set contvaloCodigoid.
     *
     * @param \App\Entity\Financeiro\Contratovalor|null $contvaloCodigoid
     *
     * @return Contratovalorfatura
     */
    public function setContvaloCodigoid(\App\Entity\Financeiro\Contratovalor $contvaloCodigoid = null)
    {
        $this->contvaloCodigoid = $contvaloCodigoid;

        return $this;
    }

    /**
     * Get contvaloCodigoid.
     *
     * @return \App\Entity\Financeiro\Contratovalor|null
     */
    public function getContvaloCodigoid()
    {
        return $this->contvaloCodigoid;
    }

    /**
     * Set fatuCodigoid.
     *
     * @param \App\Entity\Financeiro\Fatura|null $fatuCodigoid
     *
     * @return Contratovalorfatura
     */
    public function setFatuCodigoid(\App\Entity\Financeiro\Fatura $fatuCodigoid = null)
    {
        $this->fatuCodigoid = $fatuCodigoid;

        return $this;
    }

    /**
     * Get fatuCodigoid.
     *
     * @return \App\Entity\Financeiro\Fatura|null
     */
    public function getFatuCodigoid()
    {
        return $this->fatuCodigoid;
    }
}
