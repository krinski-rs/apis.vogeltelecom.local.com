<?php

namespace App\Entity\Financeiro;

class Ativacao
{
    private $ativCodigoid;

    private $usuaCodigoid;

    private $ativDatainc;

    private $ativDataativado;

    private $ativApospagamento;

    private $ativAposassinatura;

    private $ativDatafixa;

    private $ativDiasapos;

    private $ativCobraraposativacao;

    private $ativCobraraposassinatura;

    private $ativCobrardatafixa;

    private $ativCobrardiasapos;

    private $ativCobraraposprimeiraparcela;

    private $ativDataalterado;

    private $ativPagamentotaxa;

    private $contCodigoid;

    public function getAtivCodigoid(): ?int
    {
        return $this->ativCodigoid;
    }

    public function getUsuaCodigoid(): ?int
    {
        return $this->usuaCodigoid;
    }

    public function setUsuaCodigoid(?int $usuaCodigoid): self
    {
        $this->usuaCodigoid = $usuaCodigoid;

        return $this;
    }

    public function getAtivDatainc(): ?\DateTimeInterface
    {
        return $this->ativDatainc;
    }

    public function setAtivDatainc(\DateTimeInterface $ativDatainc): self
    {
        $this->ativDatainc = $ativDatainc;

        return $this;
    }

    public function getAtivDataativado(): ?\DateTimeInterface
    {
        return $this->ativDataativado;
    }

    public function setAtivDataativado(?\DateTimeInterface $ativDataativado): self
    {
        $this->ativDataativado = $ativDataativado;

        return $this;
    }

    public function getAtivApospagamento(): ?bool
    {
        return $this->ativApospagamento;
    }

    public function setAtivApospagamento(bool $ativApospagamento): self
    {
        $this->ativApospagamento = $ativApospagamento;

        return $this;
    }

    public function getAtivAposassinatura(): ?bool
    {
        return $this->ativAposassinatura;
    }

    public function setAtivAposassinatura(bool $ativAposassinatura): self
    {
        $this->ativAposassinatura = $ativAposassinatura;

        return $this;
    }

    public function getAtivDatafixa(): ?\DateTimeInterface
    {
        return $this->ativDatafixa;
    }

    public function setAtivDatafixa(?\DateTimeInterface $ativDatafixa): self
    {
        $this->ativDatafixa = $ativDatafixa;

        return $this;
    }

    public function getAtivDiasapos(): ?int
    {
        return $this->ativDiasapos;
    }

    public function setAtivDiasapos(?int $ativDiasapos): self
    {
        $this->ativDiasapos = $ativDiasapos;

        return $this;
    }

    public function getAtivCobraraposativacao(): ?bool
    {
        return $this->ativCobraraposativacao;
    }

    public function setAtivCobraraposativacao(bool $ativCobraraposativacao): self
    {
        $this->ativCobraraposativacao = $ativCobraraposativacao;

        return $this;
    }

    public function getAtivCobraraposassinatura(): ?bool
    {
        return $this->ativCobraraposassinatura;
    }

    public function setAtivCobraraposassinatura(bool $ativCobraraposassinatura): self
    {
        $this->ativCobraraposassinatura = $ativCobraraposassinatura;

        return $this;
    }

    public function getAtivCobrardatafixa(): ?\DateTimeInterface
    {
        return $this->ativCobrardatafixa;
    }

    public function setAtivCobrardatafixa(?\DateTimeInterface $ativCobrardatafixa): self
    {
        $this->ativCobrardatafixa = $ativCobrardatafixa;

        return $this;
    }

    public function getAtivCobrardiasapos(): ?int
    {
        return $this->ativCobrardiasapos;
    }

    public function setAtivCobrardiasapos(?int $ativCobrardiasapos): self
    {
        $this->ativCobrardiasapos = $ativCobrardiasapos;

        return $this;
    }

    public function getAtivCobraraposprimeiraparcela(): ?bool
    {
        return $this->ativCobraraposprimeiraparcela;
    }

    public function setAtivCobraraposprimeiraparcela(?bool $ativCobraraposprimeiraparcela): self
    {
        $this->ativCobraraposprimeiraparcela = $ativCobraraposprimeiraparcela;

        return $this;
    }

    public function getAtivDataalterado(): ?\DateTimeInterface
    {
        return $this->ativDataalterado;
    }

    public function setAtivDataalterado(?\DateTimeInterface $ativDataalterado): self
    {
        $this->ativDataalterado = $ativDataalterado;

        return $this;
    }

    public function getAtivPagamentotaxa(): ?\DateTimeInterface
    {
        return $this->ativPagamentotaxa;
    }

    public function setAtivPagamentotaxa(?\DateTimeInterface $ativPagamentotaxa): self
    {
        $this->ativPagamentotaxa = $ativPagamentotaxa;

        return $this;
    }

    public function getContCodigoid(): ?Contrato
    {
        return $this->contCodigoid;
    }

    public function setContCodigoid(?Contrato $contCodigoid): self
    {
        $this->contCodigoid = $contCodigoid;

        return $this;
    }
}
