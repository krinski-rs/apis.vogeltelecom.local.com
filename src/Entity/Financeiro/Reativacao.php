<?php

namespace App\Entity\Financeiro;

/**
 * Reativacao
 */
class Reativacao
{
    /**
     * @var int
     */
    private $reatCodigoid;

    /**
     * @var int|null
     */
    private $usuaCodigoid;

    /**
     * @var \DateTime
     */
    private $reatDatainc = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime|null
     */
    private $reatDatareativado;

    /**
     * @var \App\Entity\Financeiro\Contrato
     */
    private $contCodigoid;


    /**
     * Get reatCodigoid.
     *
     * @return int
     */
    public function getReatCodigoid()
    {
        return $this->reatCodigoid;
    }

    /**
     * Set usuaCodigoid.
     *
     * @param int|null $usuaCodigoid
     *
     * @return Reativacao
     */
    public function setUsuaCodigoid($usuaCodigoid = null)
    {
        $this->usuaCodigoid = $usuaCodigoid;

        return $this;
    }

    /**
     * Get usuaCodigoid.
     *
     * @return int|null
     */
    public function getUsuaCodigoid()
    {
        return $this->usuaCodigoid;
    }

    /**
     * Set reatDatainc.
     *
     * @param \DateTime $reatDatainc
     *
     * @return Reativacao
     */
    public function setReatDatainc($reatDatainc)
    {
        $this->reatDatainc = $reatDatainc;

        return $this;
    }

    /**
     * Get reatDatainc.
     *
     * @return \DateTime
     */
    public function getReatDatainc()
    {
        return $this->reatDatainc;
    }

    /**
     * Set reatDatareativado.
     *
     * @param \DateTime|null $reatDatareativado
     *
     * @return Reativacao
     */
    public function setReatDatareativado($reatDatareativado = null)
    {
        $this->reatDatareativado = $reatDatareativado;

        return $this;
    }

    /**
     * Get reatDatareativado.
     *
     * @return \DateTime|null
     */
    public function getReatDatareativado()
    {
        return $this->reatDatareativado;
    }

    /**
     * Set contCodigoid.
     *
     * @param \App\Entity\Financeiro\Contrato|null $contCodigoid
     *
     * @return Reativacao
     */
    public function setContCodigoid(\App\Entity\Financeiro\Contrato $contCodigoid = null)
    {
        $this->contCodigoid = $contCodigoid;

        return $this;
    }

    /**
     * Get contCodigoid.
     *
     * @return \App\Entity\Financeiro\Contrato|null
     */
    public function getContCodigoid()
    {
        return $this->contCodigoid;
    }
}
