<?php

namespace App\Entity\Financeiro;

/**
 * ContratoAprovacaoFechamento
 */
class ContratoAprovacaoFechamento
{
    /**
     * @var int
     */
    private $idContrato;

    /**
     * @var bool|null
     */
    private $active;

    /**
     * @var int|null
     */
    private $aprovedBy;

    /**
     * @var int|null
     */
    private $chanceId;

    /**
     * @var \DateTime|null
     */
    private $dateAproval;

    /**
     * @var \DateTime|null
     */
    private $dateClosed;

    /**
     * @var \DateTime|null
     */
    private $dateRecord;

    /**
     * @var float|null
     */
    private $delta;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var string|null
     */
    private $tag;

    /**
     * @var int|null
     */
    private $walletId;

    /**
     * @var int|null
     */
    private $classification;

    /**
     * @var int|null
     */
    private $vendaValeu;

    /**
     * @var int|null
     */
    private $tipovenda;


    /**
     * Get idContrato.
     *
     * @return int
     */
    public function getIdContrato()
    {
        return $this->idContrato;
    }

    /**
     * Set active.
     *
     * @param bool|null $active
     *
     * @return ContratoAprovacaoFechamento
     */
    public function setActive($active = null)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active.
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set aprovedBy.
     *
     * @param int|null $aprovedBy
     *
     * @return ContratoAprovacaoFechamento
     */
    public function setAprovedBy($aprovedBy = null)
    {
        $this->aprovedBy = $aprovedBy;

        return $this;
    }

    /**
     * Get aprovedBy.
     *
     * @return int|null
     */
    public function getAprovedBy()
    {
        return $this->aprovedBy;
    }

    /**
     * Set chanceId.
     *
     * @param int|null $chanceId
     *
     * @return ContratoAprovacaoFechamento
     */
    public function setChanceId($chanceId = null)
    {
        $this->chanceId = $chanceId;

        return $this;
    }

    /**
     * Get chanceId.
     *
     * @return int|null
     */
    public function getChanceId()
    {
        return $this->chanceId;
    }

    /**
     * Set dateAproval.
     *
     * @param \DateTime|null $dateAproval
     *
     * @return ContratoAprovacaoFechamento
     */
    public function setDateAproval($dateAproval = null)
    {
        $this->dateAproval = $dateAproval;

        return $this;
    }

    /**
     * Get dateAproval.
     *
     * @return \DateTime|null
     */
    public function getDateAproval()
    {
        return $this->dateAproval;
    }

    /**
     * Set dateClosed.
     *
     * @param \DateTime|null $dateClosed
     *
     * @return ContratoAprovacaoFechamento
     */
    public function setDateClosed($dateClosed = null)
    {
        $this->dateClosed = $dateClosed;

        return $this;
    }

    /**
     * Get dateClosed.
     *
     * @return \DateTime|null
     */
    public function getDateClosed()
    {
        return $this->dateClosed;
    }

    /**
     * Set dateRecord.
     *
     * @param \DateTime|null $dateRecord
     *
     * @return ContratoAprovacaoFechamento
     */
    public function setDateRecord($dateRecord = null)
    {
        $this->dateRecord = $dateRecord;

        return $this;
    }

    /**
     * Get dateRecord.
     *
     * @return \DateTime|null
     */
    public function getDateRecord()
    {
        return $this->dateRecord;
    }

    /**
     * Set delta.
     *
     * @param float|null $delta
     *
     * @return ContratoAprovacaoFechamento
     */
    public function setDelta($delta = null)
    {
        $this->delta = $delta;

        return $this;
    }

    /**
     * Get delta.
     *
     * @return float|null
     */
    public function getDelta()
    {
        return $this->delta;
    }

    /**
     * Set description.
     *
     * @param string|null $description
     *
     * @return ContratoAprovacaoFechamento
     */
    public function setDescription($description = null)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set tag.
     *
     * @param string|null $tag
     *
     * @return ContratoAprovacaoFechamento
     */
    public function setTag($tag = null)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get tag.
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Set walletId.
     *
     * @param int|null $walletId
     *
     * @return ContratoAprovacaoFechamento
     */
    public function setWalletId($walletId = null)
    {
        $this->walletId = $walletId;

        return $this;
    }

    /**
     * Get walletId.
     *
     * @return int|null
     */
    public function getWalletId()
    {
        return $this->walletId;
    }

    /**
     * Set classification.
     *
     * @param int|null $classification
     *
     * @return ContratoAprovacaoFechamento
     */
    public function setClassification($classification = null)
    {
        $this->classification = $classification;

        return $this;
    }

    /**
     * Get classification.
     *
     * @return int|null
     */
    public function getClassification()
    {
        return $this->classification;
    }

    /**
     * Set vendaValeu.
     *
     * @param int|null $vendaValeu
     *
     * @return ContratoAprovacaoFechamento
     */
    public function setVendaValeu($vendaValeu = null)
    {
        $this->vendaValeu = $vendaValeu;

        return $this;
    }

    /**
     * Get vendaValeu.
     *
     * @return int|null
     */
    public function getVendaValeu()
    {
        return $this->vendaValeu;
    }

    /**
     * Set tipovenda.
     *
     * @param int|null $tipovenda
     *
     * @return ContratoAprovacaoFechamento
     */
    public function setTipovenda($tipovenda = null)
    {
        $this->tipovenda = $tipovenda;

        return $this;
    }

    /**
     * Get tipovenda.
     *
     * @return int|null
     */
    public function getTipovenda()
    {
        return $this->tipovenda;
    }
}
