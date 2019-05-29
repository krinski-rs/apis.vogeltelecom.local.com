<?php

namespace App\Entity\Financeiro;

/**
 * Notificacaovencimento
 */
class Notificacaovencimento
{
    /**
     * @var int
     */
    private $notvencCodigoid;

    /**
     * @var \DateTime
     */
    private $notvencDatainc = 'CURRENT_TIMESTAMP';

    /**
     * @var int
     */
    private $notvencUsuacodigoid;

    /**
     * @var \DateTime|null
     */
    private $notvencDataconfirmacao;

    /**
     * @var string|null
     */
    private $notvencDescricaoconfirmacao;

    /**
     * @var \App\Entity\Financeiro\Contrato
     */
    private $contCodigoid;


    /**
     * Get notvencCodigoid.
     *
     * @return int
     */
    public function getNotvencCodigoid()
    {
        return $this->notvencCodigoid;
    }

    /**
     * Set notvencDatainc.
     *
     * @param \DateTime $notvencDatainc
     *
     * @return Notificacaovencimento
     */
    public function setNotvencDatainc($notvencDatainc)
    {
        $this->notvencDatainc = $notvencDatainc;

        return $this;
    }

    /**
     * Get notvencDatainc.
     *
     * @return \DateTime
     */
    public function getNotvencDatainc()
    {
        return $this->notvencDatainc;
    }

    /**
     * Set notvencUsuacodigoid.
     *
     * @param int $notvencUsuacodigoid
     *
     * @return Notificacaovencimento
     */
    public function setNotvencUsuacodigoid($notvencUsuacodigoid)
    {
        $this->notvencUsuacodigoid = $notvencUsuacodigoid;

        return $this;
    }

    /**
     * Get notvencUsuacodigoid.
     *
     * @return int
     */
    public function getNotvencUsuacodigoid()
    {
        return $this->notvencUsuacodigoid;
    }

    /**
     * Set notvencDataconfirmacao.
     *
     * @param \DateTime|null $notvencDataconfirmacao
     *
     * @return Notificacaovencimento
     */
    public function setNotvencDataconfirmacao($notvencDataconfirmacao = null)
    {
        $this->notvencDataconfirmacao = $notvencDataconfirmacao;

        return $this;
    }

    /**
     * Get notvencDataconfirmacao.
     *
     * @return \DateTime|null
     */
    public function getNotvencDataconfirmacao()
    {
        return $this->notvencDataconfirmacao;
    }

    /**
     * Set notvencDescricaoconfirmacao.
     *
     * @param string|null $notvencDescricaoconfirmacao
     *
     * @return Notificacaovencimento
     */
    public function setNotvencDescricaoconfirmacao($notvencDescricaoconfirmacao = null)
    {
        $this->notvencDescricaoconfirmacao = $notvencDescricaoconfirmacao;

        return $this;
    }

    /**
     * Get notvencDescricaoconfirmacao.
     *
     * @return string|null
     */
    public function getNotvencDescricaoconfirmacao()
    {
        return $this->notvencDescricaoconfirmacao;
    }

    /**
     * Set contCodigoid.
     *
     * @param \App\Entity\Financeiro\Contrato|null $contCodigoid
     *
     * @return Notificacaovencimento
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
