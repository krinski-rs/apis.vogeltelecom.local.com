<?php

namespace App\Entity\Financeiro;

/**
 * Contratoaprovacao
 */
class Contratoaprovacao
{
    /**
     * @var int
     */
    private $contaproCodigoid;

    /**
     * @var int
     */
    private $usuaCodigoid;

    /**
     * @var \DateTime
     */
    private $contaproDatainc = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime|null
     */
    private $contaproDataaprovado;

    /**
     * @var bool|null
     */
    private $contaproAprovado;

    /**
     * @var \App\Entity\Financeiro\Contrato
     */
    private $contCodigoid;


    /**
     * Get contaproCodigoid.
     *
     * @return int
     */
    public function getContaproCodigoid()
    {
        return $this->contaproCodigoid;
    }

    /**
     * Set usuaCodigoid.
     *
     * @param int $usuaCodigoid
     *
     * @return Contratoaprovacao
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
     * Set contaproDatainc.
     *
     * @param \DateTime $contaproDatainc
     *
     * @return Contratoaprovacao
     */
    public function setContaproDatainc($contaproDatainc)
    {
        $this->contaproDatainc = $contaproDatainc;

        return $this;
    }

    /**
     * Get contaproDatainc.
     *
     * @return \DateTime
     */
    public function getContaproDatainc()
    {
        return $this->contaproDatainc;
    }

    /**
     * Set contaproDataaprovado.
     *
     * @param \DateTime|null $contaproDataaprovado
     *
     * @return Contratoaprovacao
     */
    public function setContaproDataaprovado($contaproDataaprovado = null)
    {
        $this->contaproDataaprovado = $contaproDataaprovado;

        return $this;
    }

    /**
     * Get contaproDataaprovado.
     *
     * @return \DateTime|null
     */
    public function getContaproDataaprovado()
    {
        return $this->contaproDataaprovado;
    }

    /**
     * Set contaproAprovado.
     *
     * @param bool|null $contaproAprovado
     *
     * @return Contratoaprovacao
     */
    public function setContaproAprovado($contaproAprovado = null)
    {
        $this->contaproAprovado = $contaproAprovado;

        return $this;
    }

    /**
     * Get contaproAprovado.
     *
     * @return bool|null
     */
    public function getContaproAprovado()
    {
        return $this->contaproAprovado;
    }

    /**
     * Set contCodigoid.
     *
     * @param \App\Entity\Financeiro\Contrato|null $contCodigoid
     *
     * @return Contratoaprovacao
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
