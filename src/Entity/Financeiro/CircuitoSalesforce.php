<?php

namespace App\Entity\Financeiro;

class CircuitoSalesforce
{
    private $id;

    private $idCircuitoSalesforce;

    private $idCircuitoProtheus;

    private $dataCriacao;

    private $dataIntegracao;

    private $dataIntegracaoProtheus;

    private $contCodigoid;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdCircuitoSalesforce(): ?string
    {
        return $this->idCircuitoSalesforce;
    }

    public function setIdCircuitoSalesforce(?string $idCircuitoSalesforce): self
    {
        $this->idCircuitoSalesforce = $idCircuitoSalesforce;

        return $this;
    }

    public function getIdCircuitoProtheus(): ?string
    {
        return $this->idCircuitoProtheus;
    }

    public function setIdCircuitoProtheus(?string $idCircuitoProtheus): self
    {
        $this->idCircuitoProtheus = $idCircuitoProtheus;

        return $this;
    }

    public function getDataCriacao(): ?\DateTimeInterface
    {
        return $this->dataCriacao;
    }

    public function setDataCriacao(\DateTimeInterface $dataCriacao): self
    {
        $this->dataCriacao = $dataCriacao;

        return $this;
    }

    public function getDataIntegracao(): ?\DateTimeInterface
    {
        return $this->dataIntegracao;
    }

    public function setDataIntegracao(?\DateTimeInterface $dataIntegracao): self
    {
        $this->dataIntegracao = $dataIntegracao;

        return $this;
    }

    public function getDataIntegracaoProtheus(): ?\DateTimeInterface
    {
        return $this->dataIntegracaoProtheus;
    }

    public function setDataIntegracaoProtheus(?\DateTimeInterface $dataIntegracaoProtheus): self
    {
        $this->dataIntegracaoProtheus = $dataIntegracaoProtheus;

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
