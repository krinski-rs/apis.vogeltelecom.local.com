<?php

namespace App\Entity\Financeiro;

/**
 * CircuitoSalesforce
 */
class CircuitoSalesforce
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int|null
     */
    private $idCircuitoSalesforce;

    /**
     * @var \DateTime
     */
    private $dataCriacao = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime|null
     */
    private $dataIntegracao;

    /**
     * @var \App\Entity\Financeiro\Contrato
     */
    private $contCodigoid;


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
     * Set idCircuitoSalesforce.
     *
     * @param int|null $idCircuitoSalesforce
     *
     * @return CircuitoSalesforce
     */
    public function setIdCircuitoSalesforce($idCircuitoSalesforce = null)
    {
        $this->idCircuitoSalesforce = $idCircuitoSalesforce;

        return $this;
    }

    /**
     * Get idCircuitoSalesforce.
     *
     * @return int|null
     */
    public function getIdCircuitoSalesforce()
    {
        return $this->idCircuitoSalesforce;
    }

    /**
     * Set dataCriacao.
     *
     * @param \DateTime $dataCriacao
     *
     * @return CircuitoSalesforce
     */
    public function setDataCriacao($dataCriacao)
    {
        $this->dataCriacao = $dataCriacao;

        return $this;
    }

    /**
     * Get dataCriacao.
     *
     * @return \DateTime
     */
    public function getDataCriacao()
    {
        return $this->dataCriacao;
    }

    /**
     * Set dataIntegracao.
     *
     * @param \DateTime|null $dataIntegracao
     *
     * @return CircuitoSalesforce
     */
    public function setDataIntegracao($dataIntegracao = null)
    {
        $this->dataIntegracao = $dataIntegracao;

        return $this;
    }

    /**
     * Get dataIntegracao.
     *
     * @return \DateTime|null
     */
    public function getDataIntegracao()
    {
        return $this->dataIntegracao;
    }

    /**
     * Set contCodigoid.
     *
     * @param \App\Entity\Financeiro\Contrato|null $contCodigoid
     *
     * @return CircuitoSalesforce
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
