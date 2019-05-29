<?php

namespace App\Entity\Financeiro;

/**
 * ContratoServicoAgregado
 */
class ContratoServicoAgregado
{
    /**
     * @var int
     */
    private $contservagreCodigoid;

    /**
     * @var string
     */
    private $contservagreValor;

    /**
     * @var \DateTime
     */
    private $contservagreDatainc = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime|null
     */
    private $contservagreDatafim;

    /**
     * @var string
     */
    private $contservagreDesconto;

    /**
     * @var \App\Entity\Financeiro\Servico
     */
    private $servCodigoid;

    /**
     * @var \App\Entity\Financeiro\Contrato
     */
    private $contCodigoid;

    /**
     * @var \App\Entity\Financeiro\ServicoAgregado
     */
    private $servagreCodigoid;

    /**
     * @var \App\Entity\Financeiro\Natureza
     */
    private $natuCodigoid;

    /**
     * @var \App\Entity\Financeiro\Periodicidade
     */
    private $periCodigoid;

    /**
     * @var \App\Entity\Financeiro\Moeda
     */
    private $moedCodigoid;


    /**
     * Get contservagreCodigoid.
     *
     * @return int
     */
    public function getContservagreCodigoid()
    {
        return $this->contservagreCodigoid;
    }

    /**
     * Set contservagreValor.
     *
     * @param string $contservagreValor
     *
     * @return ContratoServicoAgregado
     */
    public function setContservagreValor($contservagreValor)
    {
        $this->contservagreValor = $contservagreValor;

        return $this;
    }

    /**
     * Get contservagreValor.
     *
     * @return string
     */
    public function getContservagreValor()
    {
        return $this->contservagreValor;
    }

    /**
     * Set contservagreDatainc.
     *
     * @param \DateTime $contservagreDatainc
     *
     * @return ContratoServicoAgregado
     */
    public function setContservagreDatainc($contservagreDatainc)
    {
        $this->contservagreDatainc = $contservagreDatainc;

        return $this;
    }

    /**
     * Get contservagreDatainc.
     *
     * @return \DateTime
     */
    public function getContservagreDatainc()
    {
        return $this->contservagreDatainc;
    }

    /**
     * Set contservagreDatafim.
     *
     * @param \DateTime|null $contservagreDatafim
     *
     * @return ContratoServicoAgregado
     */
    public function setContservagreDatafim($contservagreDatafim = null)
    {
        $this->contservagreDatafim = $contservagreDatafim;

        return $this;
    }

    /**
     * Get contservagreDatafim.
     *
     * @return \DateTime|null
     */
    public function getContservagreDatafim()
    {
        return $this->contservagreDatafim;
    }

    /**
     * Set contservagreDesconto.
     *
     * @param string $contservagreDesconto
     *
     * @return ContratoServicoAgregado
     */
    public function setContservagreDesconto($contservagreDesconto)
    {
        $this->contservagreDesconto = $contservagreDesconto;

        return $this;
    }

    /**
     * Get contservagreDesconto.
     *
     * @return string
     */
    public function getContservagreDesconto()
    {
        return $this->contservagreDesconto;
    }

    /**
     * Set servCodigoid.
     *
     * @param \App\Entity\Financeiro\Servico|null $servCodigoid
     *
     * @return ContratoServicoAgregado
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
     * Set contCodigoid.
     *
     * @param \App\Entity\Financeiro\Contrato|null $contCodigoid
     *
     * @return ContratoServicoAgregado
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

    /**
     * Set servagreCodigoid.
     *
     * @param \App\Entity\Financeiro\ServicoAgregado|null $servagreCodigoid
     *
     * @return ContratoServicoAgregado
     */
    public function setServagreCodigoid(\App\Entity\Financeiro\ServicoAgregado $servagreCodigoid = null)
    {
        $this->servagreCodigoid = $servagreCodigoid;

        return $this;
    }

    /**
     * Get servagreCodigoid.
     *
     * @return \App\Entity\Financeiro\ServicoAgregado|null
     */
    public function getServagreCodigoid()
    {
        return $this->servagreCodigoid;
    }

    /**
     * Set natuCodigoid.
     *
     * @param \App\Entity\Financeiro\Natureza|null $natuCodigoid
     *
     * @return ContratoServicoAgregado
     */
    public function setNatuCodigoid(\App\Entity\Financeiro\Natureza $natuCodigoid = null)
    {
        $this->natuCodigoid = $natuCodigoid;

        return $this;
    }

    /**
     * Get natuCodigoid.
     *
     * @return \App\Entity\Financeiro\Natureza|null
     */
    public function getNatuCodigoid()
    {
        return $this->natuCodigoid;
    }

    /**
     * Set periCodigoid.
     *
     * @param \App\Entity\Financeiro\Periodicidade|null $periCodigoid
     *
     * @return ContratoServicoAgregado
     */
    public function setPeriCodigoid(\App\Entity\Financeiro\Periodicidade $periCodigoid = null)
    {
        $this->periCodigoid = $periCodigoid;

        return $this;
    }

    /**
     * Get periCodigoid.
     *
     * @return \App\Entity\Financeiro\Periodicidade|null
     */
    public function getPeriCodigoid()
    {
        return $this->periCodigoid;
    }

    /**
     * Set moedCodigoid.
     *
     * @param \App\Entity\Financeiro\Moeda|null $moedCodigoid
     *
     * @return ContratoServicoAgregado
     */
    public function setMoedCodigoid(\App\Entity\Financeiro\Moeda $moedCodigoid = null)
    {
        $this->moedCodigoid = $moedCodigoid;

        return $this;
    }

    /**
     * Get moedCodigoid.
     *
     * @return \App\Entity\Financeiro\Moeda|null
     */
    public function getMoedCodigoid()
    {
        return $this->moedCodigoid;
    }
}
