<?php

namespace App\Entity\Cobranca;

class CobrancaHistorico
{
    private $id;

    private $customer;

    private $dateRecord;

    private $userId;

    private $valorVencido;

    private $contatoGcdbCadUserId;

    private $dataRevisao;

    private $dataConclusao;

    private $motivoPendencia;

    private $diasAtraso;

    private $descricao;

    private $contatoNome;

    private $contatoTelefone;

    private $contatoEmail;

    private $status;

    private $segmento;

    private $registrante;

    private $cobrancaHistoricoStatusId;

    private $registranteEdicao;

    private $dataUltimaEdicao;

    private $registranteEdicaoNome;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCustomer(): ?int
    {
        return $this->customer;
    }

    public function setCustomer(?int $customer): self
    {
        $this->customer = $customer;

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

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getValorVencido()
    {
        return $this->valorVencido;
    }

    public function setValorVencido($valorVencido): self
    {
        $this->valorVencido = $valorVencido;

        return $this;
    }

    public function getContatoGcdbCadUserId(): ?int
    {
        return $this->contatoGcdbCadUserId;
    }

    public function setContatoGcdbCadUserId(?int $contatoGcdbCadUserId): self
    {
        $this->contatoGcdbCadUserId = $contatoGcdbCadUserId;

        return $this;
    }

    public function getDataRevisao(): ?\DateTimeInterface
    {
        return $this->dataRevisao;
    }

    public function setDataRevisao(?\DateTimeInterface $dataRevisao): self
    {
        $this->dataRevisao = $dataRevisao;

        return $this;
    }

    public function getDataConclusao(): ?\DateTimeInterface
    {
        return $this->dataConclusao;
    }

    public function setDataConclusao(?\DateTimeInterface $dataConclusao): self
    {
        $this->dataConclusao = $dataConclusao;

        return $this;
    }

    public function getMotivoPendencia(): ?string
    {
        return $this->motivoPendencia;
    }

    public function setMotivoPendencia(?string $motivoPendencia): self
    {
        $this->motivoPendencia = $motivoPendencia;

        return $this;
    }

    public function getDiasAtraso(): ?int
    {
        return $this->diasAtraso;
    }

    public function setDiasAtraso(int $diasAtraso): self
    {
        $this->diasAtraso = $diasAtraso;

        return $this;
    }

    public function getDescricao(): ?string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getContatoNome(): ?string
    {
        return $this->contatoNome;
    }

    public function setContatoNome(?string $contatoNome): self
    {
        $this->contatoNome = $contatoNome;

        return $this;
    }

    public function getContatoTelefone(): ?string
    {
        return $this->contatoTelefone;
    }

    public function setContatoTelefone(?string $contatoTelefone): self
    {
        $this->contatoTelefone = $contatoTelefone;

        return $this;
    }

    public function getContatoEmail(): ?string
    {
        return $this->contatoEmail;
    }

    public function setContatoEmail(?string $contatoEmail): self
    {
        $this->contatoEmail = $contatoEmail;

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

    public function getSegmento(): ?string
    {
        return $this->segmento;
    }

    public function setSegmento(?string $segmento): self
    {
        $this->segmento = $segmento;

        return $this;
    }

    public function getRegistrante(): ?string
    {
        return $this->registrante;
    }

    public function setRegistrante(?string $registrante): self
    {
        $this->registrante = $registrante;

        return $this;
    }

    public function getCobrancaHistoricoStatusId(): ?int
    {
        return $this->cobrancaHistoricoStatusId;
    }

    public function setCobrancaHistoricoStatusId(int $cobrancaHistoricoStatusId): self
    {
        $this->cobrancaHistoricoStatusId = $cobrancaHistoricoStatusId;

        return $this;
    }

    public function getRegistranteEdicao(): ?int
    {
        return $this->registranteEdicao;
    }

    public function setRegistranteEdicao(?int $registranteEdicao): self
    {
        $this->registranteEdicao = $registranteEdicao;

        return $this;
    }

    public function getDataUltimaEdicao(): ?\DateTimeInterface
    {
        return $this->dataUltimaEdicao;
    }

    public function setDataUltimaEdicao(?\DateTimeInterface $dataUltimaEdicao): self
    {
        $this->dataUltimaEdicao = $dataUltimaEdicao;

        return $this;
    }

    public function getRegistranteEdicaoNome(): ?string
    {
        return $this->registranteEdicaoNome;
    }

    public function setRegistranteEdicaoNome(?string $registranteEdicaoNome): self
    {
        $this->registranteEdicaoNome = $registranteEdicaoNome;

        return $this;
    }
}
