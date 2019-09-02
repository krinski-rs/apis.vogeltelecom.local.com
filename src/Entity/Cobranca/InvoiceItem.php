<?php

namespace App\Entity\Cobranca;

class InvoiceItem
{
    private $invoiceRegistros;

    private $custumer;

    private $contract;

    private $dateRecord;

    private $dateValit;

    private $value;

    private $designador;

    private $description;

    private $idUser;

    private $cadUsersMatriz;

    private $idTypeServico;

    private $dateFirst;

    private $dateLast;

    private $externalDoc;

    private $classificacaoItem;

    private $banco;

    private $invoice;

    private $statusInvoice;

    private $invoiceType;

    public function getInvoiceRegistros(): ?int
    {
        return $this->invoiceRegistros;
    }

    public function getCustumer(): ?int
    {
        return $this->custumer;
    }

    public function setCustumer(int $custumer): self
    {
        $this->custumer = $custumer;

        return $this;
    }

    public function getContract(): ?int
    {
        return $this->contract;
    }

    public function setContract(?int $contract): self
    {
        $this->contract = $contract;

        return $this;
    }

    public function getDateRecord(): ?\DateTimeInterface
    {
        return $this->dateRecord;
    }

    public function setDateRecord(\DateTimeInterface $dateRecord): self
    {
        $this->dateRecord = $dateRecord;

        return $this;
    }

    public function getDateValit(): ?\DateTimeInterface
    {
        return $this->dateValit;
    }

    public function setDateValit(\DateTimeInterface $dateValit): self
    {
        $this->dateValit = $dateValit;

        return $this;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getDesignador(): ?int
    {
        return $this->designador;
    }

    public function setDesignador(?int $designador): self
    {
        $this->designador = $designador;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(int $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getCadUsersMatriz(): ?int
    {
        return $this->cadUsersMatriz;
    }

    public function setCadUsersMatriz(?int $cadUsersMatriz): self
    {
        $this->cadUsersMatriz = $cadUsersMatriz;

        return $this;
    }

    public function getIdTypeServico(): ?string
    {
        return $this->idTypeServico;
    }

    public function setIdTypeServico(?string $idTypeServico): self
    {
        $this->idTypeServico = $idTypeServico;

        return $this;
    }

    public function getDateFirst(): ?\DateTimeInterface
    {
        return $this->dateFirst;
    }

    public function setDateFirst(?\DateTimeInterface $dateFirst): self
    {
        $this->dateFirst = $dateFirst;

        return $this;
    }

    public function getDateLast(): ?\DateTimeInterface
    {
        return $this->dateLast;
    }

    public function setDateLast(?\DateTimeInterface $dateLast): self
    {
        $this->dateLast = $dateLast;

        return $this;
    }

    public function getExternalDoc(): ?string
    {
        return $this->externalDoc;
    }

    public function setExternalDoc(?string $externalDoc): self
    {
        $this->externalDoc = $externalDoc;

        return $this;
    }

    public function getClassificacaoItem(): ?ClassificacaoItem
    {
        return $this->classificacaoItem;
    }

    public function setClassificacaoItem(?ClassificacaoItem $classificacaoItem): self
    {
        $this->classificacaoItem = $classificacaoItem;

        return $this;
    }

    public function getBanco(): ?Banco
    {
        return $this->banco;
    }

    public function setBanco(?Banco $banco): self
    {
        $this->banco = $banco;

        return $this;
    }

    public function getInvoice(): ?Invoice
    {
        return $this->invoice;
    }

    public function setInvoice(?Invoice $invoice): self
    {
        $this->invoice = $invoice;

        return $this;
    }

    public function getStatusInvoice(): ?StatusInvoice
    {
        return $this->statusInvoice;
    }

    public function setStatusInvoice(?StatusInvoice $statusInvoice): self
    {
        $this->statusInvoice = $statusInvoice;

        return $this;
    }

    public function getInvoiceType(): ?InvoiceType
    {
        return $this->invoiceType;
    }

    public function setInvoiceType(?InvoiceType $invoiceType): self
    {
        $this->invoiceType = $invoiceType;

        return $this;
    }
}
