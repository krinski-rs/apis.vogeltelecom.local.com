<?php

namespace App\Entity\Financeiro;

/**
 * ServicosWanServicosVogel
 */
class ServicosWanServicosVogel
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int|null
     */
    private $servicoWanId;

    /**
     * @var \DateTime|null
     */
    private $dataHoraCriacao = 'CURRENT_TIMESTAMP';

    /**
     * @var string|null
     */
    private $tprIdServico;

    /**
     * @var int|null
     */
    private $peso;

    /**
     * @var \App\Entity\Financeiro\Servico
     */
    private $servicoVogel;


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
     * Set servicoWanId.
     *
     * @param int|null $servicoWanId
     *
     * @return ServicosWanServicosVogel
     */
    public function setServicoWanId($servicoWanId = null)
    {
        $this->servicoWanId = $servicoWanId;

        return $this;
    }

    /**
     * Get servicoWanId.
     *
     * @return int|null
     */
    public function getServicoWanId()
    {
        return $this->servicoWanId;
    }

    /**
     * Set dataHoraCriacao.
     *
     * @param \DateTime|null $dataHoraCriacao
     *
     * @return ServicosWanServicosVogel
     */
    public function setDataHoraCriacao($dataHoraCriacao = null)
    {
        $this->dataHoraCriacao = $dataHoraCriacao;

        return $this;
    }

    /**
     * Get dataHoraCriacao.
     *
     * @return \DateTime|null
     */
    public function getDataHoraCriacao()
    {
        return $this->dataHoraCriacao;
    }

    /**
     * Set tprIdServico.
     *
     * @param string|null $tprIdServico
     *
     * @return ServicosWanServicosVogel
     */
    public function setTprIdServico($tprIdServico = null)
    {
        $this->tprIdServico = $tprIdServico;

        return $this;
    }

    /**
     * Get tprIdServico.
     *
     * @return string|null
     */
    public function getTprIdServico()
    {
        return $this->tprIdServico;
    }

    /**
     * Set peso.
     *
     * @param int|null $peso
     *
     * @return ServicosWanServicosVogel
     */
    public function setPeso($peso = null)
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Get peso.
     *
     * @return int|null
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set servicoVogel.
     *
     * @param \App\Entity\Financeiro\Servico|null $servicoVogel
     *
     * @return ServicosWanServicosVogel
     */
    public function setServicoVogel(\App\Entity\Financeiro\Servico $servicoVogel = null)
    {
        $this->servicoVogel = $servicoVogel;

        return $this;
    }

    /**
     * Get servicoVogel.
     *
     * @return \App\Entity\Financeiro\Servico|null
     */
    public function getServicoVogel()
    {
        return $this->servicoVogel;
    }
}
