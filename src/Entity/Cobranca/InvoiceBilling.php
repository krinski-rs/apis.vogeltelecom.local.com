<?php

namespace App\Entity\Cobranca;

class InvoiceBilling
{
    private $idInvoiceBilling;

    private $cnpj;

    private $idFilial;

    private $recpag;

    private $pedidoOrigem;

    private $prefixo;

    private $numero;

    private $parcela;

    private $tipo;

    private $cgc;

    private $emissao;

    private $vencimento;

    private $vencimentoReal;

    private $valor;

    private $dtBaixa;

    private $saldo;

    private $dataInc;

    private $nomearquivo;

    public function getIdInvoiceBilling(): ?int
    {
        return $this->idInvoiceBilling;
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

    public function getRecpag(): ?string
    {
        return $this->recpag;
    }

    public function setRecpag(?string $recpag): self
    {
        $this->recpag = $recpag;

        return $this;
    }

    public function getPedidoOrigem(): ?string
    {
        return $this->pedidoOrigem;
    }

    public function setPedidoOrigem(?string $pedidoOrigem): self
    {
        $this->pedidoOrigem = $pedidoOrigem;

        return $this;
    }

    public function getPrefixo(): ?string
    {
        return $this->prefixo;
    }

    public function setPrefixo(?string $prefixo): self
    {
        $this->prefixo = $prefixo;

        return $this;
    }

    public function getNumero(): ?string
    {
        return $this->numero;
    }

    public function setNumero(?string $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getParcela()
    {
        return $this->parcela;
    }

    public function setParcela($parcela): self
    {
        $this->parcela = $parcela;

        return $this;
    }

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(?string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getCgc(): ?string
    {
        return $this->cgc;
    }

    public function setCgc(?string $cgc): self
    {
        $this->cgc = $cgc;

        return $this;
    }

    public function getEmissao(): ?\DateTimeInterface
    {
        return $this->emissao;
    }

    public function setEmissao(?\DateTimeInterface $emissao): self
    {
        $this->emissao = $emissao;

        return $this;
    }

    public function getVencimento(): ?\DateTimeInterface
    {
        return $this->vencimento;
    }

    public function setVencimento(?\DateTimeInterface $vencimento): self
    {
        $this->vencimento = $vencimento;

        return $this;
    }

    public function getVencimentoReal(): ?\DateTimeInterface
    {
        return $this->vencimentoReal;
    }

    public function setVencimentoReal(?\DateTimeInterface $vencimentoReal): self
    {
        $this->vencimentoReal = $vencimentoReal;

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

    public function getDtBaixa(): ?\DateTimeInterface
    {
        return $this->dtBaixa;
    }

    public function setDtBaixa(?\DateTimeInterface $dtBaixa): self
    {
        $this->dtBaixa = $dtBaixa;

        return $this;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setSaldo($saldo): self
    {
        $this->saldo = $saldo;

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
}
