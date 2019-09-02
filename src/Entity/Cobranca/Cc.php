<?php

namespace App\Entity\Cobranca;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class Cc
{
    private $ccCodigoid;

    private $customer;

    private $dataInc;

    private $valor;

    private $tipo;

    private $descricao;

    private $saldoAnterior;

    private $idUser;

    private $dataRegistroSistema;

    private $banco;

    private $ccOperacao;

    private $boleto;

    private $invoice;

    public function __construct()
    {
        $this->boleto = new ArrayCollection();
        $this->invoice = new ArrayCollection();
    }

    public function getCcCodigoid(): ?int
    {
        return $this->ccCodigoid;
    }

    public function getCustomer(): ?int
    {
        return $this->customer;
    }

    public function setCustomer(int $customer): self
    {
        $this->customer = $customer;

        return $this;
    }

    public function getDataInc(): ?\DateTimeInterface
    {
        return $this->dataInc;
    }

    public function setDataInc(\DateTimeInterface $dataInc): self
    {
        $this->dataInc = $dataInc;

        return $this;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor): self
    {
        $this->valor = $valor;

        return $this;
    }

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getDescricao(): ?string
    {
        return $this->descricao;
    }

    public function setDescricao(?string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getSaldoAnterior()
    {
        return $this->saldoAnterior;
    }

    public function setSaldoAnterior($saldoAnterior): self
    {
        $this->saldoAnterior = $saldoAnterior;

        return $this;
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(?int $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getDataRegistroSistema(): ?\DateTimeInterface
    {
        return $this->dataRegistroSistema;
    }

    public function setDataRegistroSistema(?\DateTimeInterface $dataRegistroSistema): self
    {
        $this->dataRegistroSistema = $dataRegistroSistema;

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

    public function getCcOperacao(): ?CcOperacao
    {
        return $this->ccOperacao;
    }

    public function setCcOperacao(?CcOperacao $ccOperacao): self
    {
        $this->ccOperacao = $ccOperacao;

        return $this;
    }

    /**
     * @return Collection|Boleto[]
     */
    public function getBoleto(): Collection
    {
        return $this->boleto;
    }

    public function addBoleto(Boleto $boleto): self
    {
        if (!$this->boleto->contains($boleto)) {
            $this->boleto[] = $boleto;
            $boleto->addCc($this);
        }

        return $this;
    }

    public function removeBoleto(Boleto $boleto): self
    {
        if ($this->boleto->contains($boleto)) {
            $this->boleto->removeElement($boleto);
            $boleto->removeCc($this);
        }

        return $this;
    }

    /**
     * @return Collection|Invoice[]
     */
    public function getInvoice(): Collection
    {
        return $this->invoice;
    }

    public function addInvoice(Invoice $invoice): self
    {
        if (!$this->invoice->contains($invoice)) {
            $this->invoice[] = $invoice;
            $invoice->addCc($this);
        }

        return $this;
    }

    public function removeInvoice(Invoice $invoice): self
    {
        if ($this->invoice->contains($invoice)) {
            $this->invoice->removeElement($invoice);
            $invoice->removeCc($this);
        }

        return $this;
    }
}
