<?php

namespace App\Entity\Financeiro;

/**
 * ServicoDiscriminacao
 */
class ServicoDiscriminacao
{
    /**
     * @var int
     */
    private $servdiscCodigoid;

    /**
     * @var string
     */
    private $servdiscValorpadrao;

    /**
     * @var \App\Entity\Financeiro\Servico
     */
    private $servCodigoid;

    /**
     * @var \App\Entity\Financeiro\Discriminacao
     */
    private $idDiscriminacao;


    /**
     * Get servdiscCodigoid.
     *
     * @return int
     */
    public function getServdiscCodigoid()
    {
        return $this->servdiscCodigoid;
    }

    /**
     * Set servdiscValorpadrao.
     *
     * @param string $servdiscValorpadrao
     *
     * @return ServicoDiscriminacao
     */
    public function setServdiscValorpadrao($servdiscValorpadrao)
    {
        $this->servdiscValorpadrao = $servdiscValorpadrao;

        return $this;
    }

    /**
     * Get servdiscValorpadrao.
     *
     * @return string
     */
    public function getServdiscValorpadrao()
    {
        return $this->servdiscValorpadrao;
    }

    /**
     * Set servCodigoid.
     *
     * @param \App\Entity\Financeiro\Servico|null $servCodigoid
     *
     * @return ServicoDiscriminacao
     */
    public function setServCodigoid(\App\Entity\Financeiro\Servico $servCodigoid = null)
    {
        $this->servCodigoid = $servCodigoid;

        return $this;
    }

    /**
     * Get servCodigoid.
     *
     * @return \App\Entity\Financeiro\Servico|null
     */
    public function getServCodigoid()
    {
        return $this->servCodigoid;
    }

    /**
     * Set idDiscriminacao.
     *
     * @param \App\Entity\Financeiro\Discriminacao|null $idDiscriminacao
     *
     * @return ServicoDiscriminacao
     */
    public function setIdDiscriminacao(\App\Entity\Financeiro\Discriminacao $idDiscriminacao = null)
    {
        $this->idDiscriminacao = $idDiscriminacao;

        return $this;
    }

    /**
     * Get idDiscriminacao.
     *
     * @return \App\Entity\Financeiro\Discriminacao|null
     */
    public function getIdDiscriminacao()
    {
        return $this->idDiscriminacao;
    }
}
