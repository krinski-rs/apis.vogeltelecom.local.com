<?php

namespace App\Entity\Financeiro;

class ContratoAprovacaoFechamento
{
    private $idContrato;

    private $active;

    private $aprovedBy;

    private $chanceId;

    private $dateAproval;

    private $dateClosed;

    private $dateRecord;

    private $delta;

    private $description;

    private $tag;

    private $walletId;

    private $classification;

    private $vendaValeu;

    private $tipovenda;

    public function getIdContrato(): ?int
    {
        return $this->idContrato;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(?bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getAprovedBy(): ?int
    {
        return $this->aprovedBy;
    }

    public function setAprovedBy(?int $aprovedBy): self
    {
        $this->aprovedBy = $aprovedBy;

        return $this;
    }

    public function getChanceId(): ?int
    {
        return $this->chanceId;
    }

    public function setChanceId(?int $chanceId): self
    {
        $this->chanceId = $chanceId;

        return $this;
    }

    public function getDateAproval(): ?\DateTimeInterface
    {
        return $this->dateAproval;
    }

    public function setDateAproval(?\DateTimeInterface $dateAproval): self
    {
        $this->dateAproval = $dateAproval;

        return $this;
    }

    public function getDateClosed(): ?\DateTimeInterface
    {
        return $this->dateClosed;
    }

    public function setDateClosed(?\DateTimeInterface $dateClosed): self
    {
        $this->dateClosed = $dateClosed;

        return $this;
    }

    public function getDateRecord(): ?\DateTimeInterface
    {
        return $this->dateRecord;
    }

    public function setDateRecord(?\DateTimeInterface $dateRecord): self
    {
        $this->dateRecord = $dateRecord;

        return $this;
    }

    public function getDelta(): ?float
    {
        return $this->delta;
    }

    public function setDelta(?float $delta): self
    {
        $this->delta = $delta;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getTag(): ?string
    {
        return $this->tag;
    }

    public function setTag(?string $tag): self
    {
        $this->tag = $tag;

        return $this;
    }

    public function getWalletId(): ?int
    {
        return $this->walletId;
    }

    public function setWalletId(?int $walletId): self
    {
        $this->walletId = $walletId;

        return $this;
    }

    public function getClassification(): ?int
    {
        return $this->classification;
    }

    public function setClassification(?int $classification): self
    {
        $this->classification = $classification;

        return $this;
    }

    public function getVendaValeu(): ?int
    {
        return $this->vendaValeu;
    }

    public function setVendaValeu(?int $vendaValeu): self
    {
        $this->vendaValeu = $vendaValeu;

        return $this;
    }

    public function getTipovenda(): ?int
    {
        return $this->tipovenda;
    }

    public function setTipovenda(?int $tipovenda): self
    {
        $this->tipovenda = $tipovenda;

        return $this;
    }
}
