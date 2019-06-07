<?php

namespace App\Entity\Financeiro;

/**
 * Restricao
 */
class Restricao
{
    /**
     * @var int
     */
    private $restCodigoid;

    /**
     * @var bool
     */
    private $restContratardeterceiro;

    /**
     * @var bool
     */
    private $restDivulgaramarca;

    /**
     * @var bool
     */
    private $restMudarmeiotransmicao;

    /**
     * @var bool
     */
    private $restTransferirdireitos;

    /**
     * @var \App\Entity\Financeiro\Contrato
     */
    private $contCodigoid;


    /**
     * Get restCodigoid.
     *
     * @return int
     */
    public function getRestCodigoid()
    {
        return $this->restCodigoid;
    }

    /**
     * Set restContratardeterceiro.
     *
     * @param bool $restContratardeterceiro
     *
     * @return Restricao
     */
    public function setRestContratardeterceiro($restContratardeterceiro)
    {
        $this->restContratardeterceiro = $restContratardeterceiro;

        return $this;
    }

    /**
     * Get restContratardeterceiro.
     *
     * @return bool
     */
    public function getRestContratardeterceiro()
    {
        return $this->restContratardeterceiro;
    }

    /**
     * Set restDivulgaramarca.
     *
     * @param bool $restDivulgaramarca
     *
     * @return Restricao
     */
    public function setRestDivulgaramarca($restDivulgaramarca)
    {
        $this->restDivulgaramarca = $restDivulgaramarca;

        return $this;
    }

    /**
     * Get restDivulgaramarca.
     *
     * @return bool
     */
    public function getRestDivulgaramarca()
    {
        return $this->restDivulgaramarca;
    }

    /**
     * Set restMudarmeiotransmicao.
     *
     * @param bool $restMudarmeiotransmicao
     *
     * @return Restricao
     */
    public function setRestMudarmeiotransmicao($restMudarmeiotransmicao)
    {
        $this->restMudarmeiotransmicao = $restMudarmeiotransmicao;

        return $this;
    }

    /**
     * Get restMudarmeiotransmicao.
     *
     * @return bool
     */
    public function getRestMudarmeiotransmicao()
    {
        return $this->restMudarmeiotransmicao;
    }

    /**
     * Set restTransferirdireitos.
     *
     * @param bool $restTransferirdireitos
     *
     * @return Restricao
     */
    public function setRestTransferirdireitos($restTransferirdireitos)
    {
        $this->restTransferirdireitos = $restTransferirdireitos;

        return $this;
    }

    /**
     * Get restTransferirdireitos.
     *
     * @return bool
     */
    public function getRestTransferirdireitos()
    {
        return $this->restTransferirdireitos;
    }

    /**
     * Set contCodigoid.
     *
     * @param \App\Entity\Financeiro\Contrato|null $contCodigoid
     *
     * @return Restricao
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
