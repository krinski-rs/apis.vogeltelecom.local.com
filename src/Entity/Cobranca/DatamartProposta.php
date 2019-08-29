<?php

namespace App\Entity\Cobranca;

class DatamartProposta
{
    private $id;

    private $proposalId;

    private $client;

    private $salesman;

    private $dateRecord;

    private $nameProtocol;

    private $dateProposal;

    private $service;

    private $status;

    private $dateAssignment;

    private $prevMonthlyPayment;

    private $prevSpeed;

    private $activationRule;

    private $estimatedDate;

    private $datePayment;

    private $tipoProposta;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProposalId(): ?int
    {
        return $this->proposalId;
    }

    public function setProposalId(?int $proposalId): self
    {
        $this->proposalId = $proposalId;

        return $this;
    }

    public function getClient(): ?string
    {
        return $this->client;
    }

    public function setClient(?string $client): self
    {
        $this->client = $client;

        return $this;
    }

    public function getSalesman(): ?string
    {
        return $this->salesman;
    }

    public function setSalesman(?string $salesman): self
    {
        $this->salesman = $salesman;

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

    public function getNameProtocol(): ?string
    {
        return $this->nameProtocol;
    }

    public function setNameProtocol(?string $nameProtocol): self
    {
        $this->nameProtocol = $nameProtocol;

        return $this;
    }

    public function getDateProposal(): ?\DateTimeInterface
    {
        return $this->dateProposal;
    }

    public function setDateProposal(?\DateTimeInterface $dateProposal): self
    {
        $this->dateProposal = $dateProposal;

        return $this;
    }

    public function getService(): ?string
    {
        return $this->service;
    }

    public function setService(?string $service): self
    {
        $this->service = $service;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(?int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getDateAssignment(): ?\DateTimeInterface
    {
        return $this->dateAssignment;
    }

    public function setDateAssignment(?\DateTimeInterface $dateAssignment): self
    {
        $this->dateAssignment = $dateAssignment;

        return $this;
    }

    public function getPrevMonthlyPayment(): ?string
    {
        return $this->prevMonthlyPayment;
    }

    public function setPrevMonthlyPayment(?string $prevMonthlyPayment): self
    {
        $this->prevMonthlyPayment = $prevMonthlyPayment;

        return $this;
    }

    public function getPrevSpeed(): ?string
    {
        return $this->prevSpeed;
    }

    public function setPrevSpeed(?string $prevSpeed): self
    {
        $this->prevSpeed = $prevSpeed;

        return $this;
    }

    public function getActivationRule(): ?int
    {
        return $this->activationRule;
    }

    public function setActivationRule(?int $activationRule): self
    {
        $this->activationRule = $activationRule;

        return $this;
    }

    public function getEstimatedDate(): ?\DateTimeInterface
    {
        return $this->estimatedDate;
    }

    public function setEstimatedDate(?\DateTimeInterface $estimatedDate): self
    {
        $this->estimatedDate = $estimatedDate;

        return $this;
    }

    public function getDatePayment(): ?\DateTimeInterface
    {
        return $this->datePayment;
    }

    public function setDatePayment(?\DateTimeInterface $datePayment): self
    {
        $this->datePayment = $datePayment;

        return $this;
    }

    public function getTipoProposta(): ?string
    {
        return $this->tipoProposta;
    }

    public function setTipoProposta(?string $tipoProposta): self
    {
        $this->tipoProposta = $tipoProposta;

        return $this;
    }
}
