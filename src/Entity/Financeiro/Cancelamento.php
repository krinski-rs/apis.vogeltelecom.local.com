<?php

namespace App\Entity\Financeiro;

/**
 * Cancelamento
 */
class Cancelamento
{
    /**
     * @var int
     */
    private $cancCodigoid;

    /**
     * @var int
     */
    private $usrCodigoid;

    /**
     * @var \DateTime
     */
    private $cancDatasolicitacao = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime|null
     */
    private $cancDatacancelado;

    /**
     * @var bool
     */
    private $cancCumpriraviso = '1';

    /**
     * @var \DateTime|null
     */
    private $cancDatainc;

    /**
     * @var \App\Entity\Financeiro\Contrato
     */
    private $contCodigoid;


    /**
     * Get cancCodigoid.
     *
     * @return int
     */
    public function getCancCodigoid()
    {
        return $this->cancCodigoid;
    }

    /**
     * Set usrCodigoid.
     *
     * @param int $usrCodigoid
     *
     * @return Cancelamento
     */
    public function setUsrCodigoid($usrCodigoid)
    {
        $this->usrCodigoid = $usrCodigoid;

        return $this;
    }

    /**
     * Get usrCodigoid.
     *
     * @return int
     */
    public function getUsrCodigoid()
    {
        return $this->usrCodigoid;
    }

    /**
     * Set cancDatasolicitacao.
     *
     * @param \DateTime $cancDatasolicitacao
     *
     * @return Cancelamento
     */
    public function setCancDatasolicitacao($cancDatasolicitacao)
    {
        $this->cancDatasolicitacao = $cancDatasolicitacao;

        return $this;
    }

    /**
     * Get cancDatasolicitacao.
     *
     * @return \DateTime
     */
    public function getCancDatasolicitacao()
    {
        return $this->cancDatasolicitacao;
    }

    /**
     * Set cancDatacancelado.
     *
     * @param \DateTime|null $cancDatacancelado
     *
     * @return Cancelamento
     */
    public function setCancDatacancelado($cancDatacancelado = null)
    {
        $this->cancDatacancelado = $cancDatacancelado;

        return $this;
    }

    /**
     * Get cancDatacancelado.
     *
     * @return \DateTime|null
     */
    public function getCancDatacancelado()
    {
        return $this->cancDatacancelado;
    }

    /**
     * Set cancCumpriraviso.
     *
     * @param bool $cancCumpriraviso
     *
     * @return Cancelamento
     */
    public function setCancCumpriraviso($cancCumpriraviso)
    {
        $this->cancCumpriraviso = $cancCumpriraviso;

        return $this;
    }

    /**
     * Get cancCumpriraviso.
     *
     * @return bool
     */
    public function getCancCumpriraviso()
    {
        return $this->cancCumpriraviso;
    }

    /**
     * Set cancDatainc.
     *
     * @param \DateTime|null $cancDatainc
     *
     * @return Cancelamento
     */
    public function setCancDatainc($cancDatainc = null)
    {
        $this->cancDatainc = $cancDatainc;

        return $this;
    }

    /**
     * Get cancDatainc.
     *
     * @return \DateTime|null
     */
    public function getCancDatainc()
    {
        return $this->cancDatainc;
    }

    /**
     * Set contCodigoid.
     *
     * @param \App\Entity\Financeiro\Contrato|null $contCodigoid
     *
     * @return Cancelamento
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
