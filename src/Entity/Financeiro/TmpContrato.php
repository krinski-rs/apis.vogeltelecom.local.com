<?php

namespace App\Entity\Financeiro;

class TmpContrato
{
    private $idTmpContrato;

    private $circuito;

    private $conta;

    private $cnpj;

    private $status;

    private $designacao;

    private $canalVenda;

    private $ativado;

    private $destivado;

    private $velocidade;

    private $produto;

    private $servico;

    private $pedido;

    private $valorAtivacao;

    private $valorSemImposto;

    private $valorComImposto;

    private $leitura;

    private $erro;

    private $idTmpContaCriada;

    public function getIdTmpContrato(): ?int
    {
        return $this->idTmpContrato;
    }

    public function getCircuito(): ?string
    {
        return $this->circuito;
    }

    public function setCircuito(?string $circuito): self
    {
        $this->circuito = $circuito;

        return $this;
    }

    public function getConta(): ?string
    {
        return $this->conta;
    }

    public function setConta(?string $conta): self
    {
        $this->conta = $conta;

        return $this;
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

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getDesignacao(): ?string
    {
        return $this->designacao;
    }

    public function setDesignacao(?string $designacao): self
    {
        $this->designacao = $designacao;

        return $this;
    }

    public function getCanalVenda(): ?string
    {
        return $this->canalVenda;
    }

    public function setCanalVenda(?string $canalVenda): self
    {
        $this->canalVenda = $canalVenda;

        return $this;
    }

    public function getAtivado(): ?\DateTimeInterface
    {
        return $this->ativado;
    }

    public function setAtivado(?\DateTimeInterface $ativado): self
    {
        $this->ativado = $ativado;

        return $this;
    }

    public function getDestivado(): ?\DateTimeInterface
    {
        return $this->destivado;
    }

    public function setDestivado(?\DateTimeInterface $destivado): self
    {
        $this->destivado = $destivado;

        return $this;
    }

    public function getVelocidade(): ?string
    {
        return $this->velocidade;
    }

    public function setVelocidade(?string $velocidade): self
    {
        $this->velocidade = $velocidade;

        return $this;
    }

    public function getProduto(): ?string
    {
        return $this->produto;
    }

    public function setProduto(?string $produto): self
    {
        $this->produto = $produto;

        return $this;
    }

    public function getServico(): ?string
    {
        return $this->servico;
    }

    public function setServico(?string $servico): self
    {
        $this->servico = $servico;

        return $this;
    }

    public function getPedido(): ?string
    {
        return $this->pedido;
    }

    public function setPedido(?string $pedido): self
    {
        $this->pedido = $pedido;

        return $this;
    }

    public function getValorAtivacao()
    {
        return $this->valorAtivacao;
    }

    public function setValorAtivacao($valorAtivacao): self
    {
        $this->valorAtivacao = $valorAtivacao;

        return $this;
    }

    public function getValorSemImposto()
    {
        return $this->valorSemImposto;
    }

    public function setValorSemImposto($valorSemImposto): self
    {
        $this->valorSemImposto = $valorSemImposto;

        return $this;
    }

    public function getValorComImposto()
    {
        return $this->valorComImposto;
    }

    public function setValorComImposto($valorComImposto): self
    {
        $this->valorComImposto = $valorComImposto;

        return $this;
    }

    public function getLeitura(): ?bool
    {
        return $this->leitura;
    }

    public function setLeitura(?bool $leitura): self
    {
        $this->leitura = $leitura;

        return $this;
    }

    public function getErro(): ?bool
    {
        return $this->erro;
    }

    public function setErro(?bool $erro): self
    {
        $this->erro = $erro;

        return $this;
    }

    public function getIdTmpContaCriada(): ?TmpContaCriada
    {
        return $this->idTmpContaCriada;
    }

    public function setIdTmpContaCriada(?TmpContaCriada $idTmpContaCriada): self
    {
        $this->idTmpContaCriada = $idTmpContaCriada;

        return $this;
    }
}
