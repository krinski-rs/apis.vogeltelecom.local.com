<?php

namespace App\Entity\Financeiro;

/**
 * ContratovalorDiscriminacao
 */
class ContratovalorDiscriminacao
{
    /**
     * @var int
     */
    private $contDiscriminacaoCodigoid;

    /**
     * @var string
     */
    private $valor;

    /**
     * @var \App\Entity\Financeiro\Contratovalor
     */
    private $contvaloCodigoid;

    /**
     * @var \App\Entity\Financeiro\Discriminacao
     */
    private $discriminacaoCodigoid;


    /**
     * Get contDiscriminacaoCodigoid.
     *
     * @return int
     */
    public function getContDiscriminacaoCodigoid()
    {
        return $this->contDiscriminacaoCodigoid;
    }

    /**
     * Set valor.
     *
     * @param string $valor
     *
     * @return ContratovalorDiscriminacao
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor.
     *
     * @return string
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set contvaloCodigoid.
     *
     * @param \App\Entity\Financeiro\Contratovalor|null $contvaloCodigoid
     *
     * @return ContratovalorDiscriminacao
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
     * Set discriminacaoCodigoid.
     *
     * @param \App\Entity\Financeiro\Discriminacao|null $discriminacaoCodigoid
     *
     * @return ContratovalorDiscriminacao
     */
    public function setDiscriminacaoCodigoid(\App\Entity\Financeiro\Discriminacao $discriminacaoCodigoid = null)
    {
        $this->discriminacaoCodigoid = $discriminacaoCodigoid;

        return $this;
    }

    /**
     * Get discriminacaoCodigoid.
     *
     * @return \App\Entity\Financeiro\Discriminacao|null
     */
    public function getDiscriminacaoCodigoid()
    {
        return $this->discriminacaoCodigoid;
    }
}
