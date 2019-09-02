<?php

namespace App\Entity\Cobranca;

class InvoiceInformationLog
{
    private $idInvoiceInformationLog;

    private $cnpj;

    private $idFilial;

    private $status;

    private $codigoPedidoProtheus;

    private $codigoPedido;

    private $cgcCliente;

    private $invoiceSerie;

    private $invoiceNumero;

    private $invoiceEmissao;

    private $codigoProduto;

    private $total;

    private $cfopOperacao;

    private $dataInc;

    private $nomearquivo;

    private $invoice;

    public function getIdInvoiceInformationLog(): ?int
    {
        return $this->idInvoiceInformationLog;
    }

    public function getCnpj(): ?string
    {
        return $this->cnpj;
    }

    public function setCnpj(?string $cnpj): self
    {
        $this->cnpj = $cnpj;

        return $this;
    }

    public function getIdFilial(): ?string
    {
        return $this->idFilial;
    }

    public function setIdFilial(?string $idFilial): self
    {
        $this->idFilial = $idFilial;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getCodigoPedidoProtheus(): ?string
    {
        return $this->codigoPedidoProtheus;
    }

    public function setCodigoPedidoProtheus(?string $codigoPedidoProtheus): self
    {
        $this->codigoPedidoProtheus = $codigoPedidoProtheus;

        return $this;
    }

    public function getCodigoPedido(): ?string
    {
        return $this->codigoPedido;
    }

    public function setCodigoPedido(?string $codigoPedido): self
    {
        $this->codigoPedido = $codigoPedido;

        return $this;
    }

    public function getCgcCliente(): ?string
    {
        return $this->cgcCliente;
    }

    public function setCgcCliente(?string $cgcCliente): self
    {
        $this->cgcCliente = $cgcCliente;

        return $this;
    }

    public function getInvoiceSerie(): ?string
    {
        return $this->invoiceSerie;
    }

    public function setInvoiceSerie(?string $invoiceSerie): self
    {
        $this->invoiceSerie = $invoiceSerie;

        return $this;
    }

    public function getInvoiceNumero(): ?string
    {
        return $this->invoiceNumero;
    }

    public function setInvoiceNumero(?string $invoiceNumero): self
    {
        $this->invoiceNumero = $invoiceNumero;

        return $this;
    }

    public function getInvoiceEmissao(): ?\DateTimeInterface
    {
        return $this->invoiceEmissao;
    }

    public function setInvoiceEmissao(?\DateTimeInterface $invoiceEmissao): self
    {
        $this->invoiceEmissao = $invoiceEmissao;

        return $this;
    }

    public function getCodigoProduto(): ?string
    {
        return $this->codigoProduto;
    }

    public function setCodigoProduto(?string $codigoProduto): self
    {
        $this->codigoProduto = $codigoProduto;

        return $this;
    }

    public function getTotal()
    {
        return $this->total;
    }

    public function setTotal($total): self
    {
        $this->total = $total;

        return $this;
    }

    public function getCfopOperacao()
    {
        return $this->cfopOperacao;
    }

    public function setCfopOperacao($cfopOperacao): self
    {
        $this->cfopOperacao = $cfopOperacao;

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

    public function getNomearquivo(): ?string
    {
        return $this->nomearquivo;
    }

    public function setNomearquivo(string $nomearquivo): self
    {
        $this->nomearquivo = $nomearquivo;

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
}
