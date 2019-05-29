<?php

namespace App\Entity\Financeiro;

/**
 * ContratoWanVogel
 */
class ContratoWanVogel
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $ctrCodigo;

    /**
     * @var \DateTime|null
     */
    private $dataInc;

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
     * Set ctrCodigo.
     *
     * @param int $ctrCodigo
     *
     * @return ContratoWanVogel
     */
    public function setCtrCodigo($ctrCodigo)
    {
        $this->ctrCodigo = $ctrCodigo;

        return $this;
    }

    /**
     * Get ctrCodigo.
     *
     * @return int
     */
    public function getCtrCodigo()
    {
        return $this->ctrCodigo;
    }

    /**
     * Set dataInc.
     *
     * @param \DateTime|null $dataInc
     *
     * @return ContratoWanVogel
     */
    public function setDataInc($dataInc = null)
    {
        $this->dataInc = $dataInc;

        return $this;
    }

    /**
     * Get dataInc.
     *
     * @return \DateTime|null
     */
    public function getDataInc()
    {
        return $this->dataInc;
    }

    /**
     * Set contCodigoid.
     *
     * @param \App\Entity\Financeiro\Contrato|null $contCodigoid
     *
     * @return ContratoWanVogel
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
