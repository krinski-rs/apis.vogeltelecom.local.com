<?php

namespace App\Entity\Financeiro;

/**
 * ServicosWanServicoAgregado
 */
class ServicosWanServicoAgregado
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $tprIdServico;

    /**
     * @var \DateTime
     */
    private $dataInc = 'CURRENT_TIMESTAMP';

    /**
     * @var \App\Entity\Financeiro\ServicoAgregado
     */
    private $servagreCodigoid;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set tprIdServico.
     *
     * @param string $tprIdServico
     *
     * @return ServicosWanServicoAgregado
     */
    public function setTprIdServico($tprIdServico)
    {
        $this->tprIdServico = $tprIdServico;

        return $this;
    }

    /**
     * Get tprIdServico.
     *
     * @return string
     */
    public function getTprIdServico()
    {
        return $this->tprIdServico;
    }

    /**
     * Set dataInc.
     *
     * @param \DateTime $dataInc
     *
     * @return ServicosWanServicoAgregado
     */
    public function setDataInc($dataInc)
    {
        $this->dataInc = $dataInc;

        return $this;
    }

    /**
     * Get dataInc.
     *
     * @return \DateTime
     */
    public function getDataInc()
    {
        return $this->dataInc;
    }

    /**
     * Set servagreCodigoid.
     *
     * @param \App\Entity\Financeiro\ServicoAgregado|null $servagreCodigoid
     *
     * @return ServicosWanServicoAgregado
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
}
