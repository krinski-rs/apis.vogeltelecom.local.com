<?php

namespace App\Entity\Cobranca;

class Confissao
{
    private $confissaoId;

    private $customer;

    private $userId;

    private $dataInc;

    private $valueSumOld;

    private $valueSumNew;

    public function getConfissaoId(): ?int
    {
        return $this->confissaoId;
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

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(?int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getDataInc(): ?\DateTimeInterface
    {
        return $this->dataInc;
    }

    public function setDataInc(?\DateTimeInterface $dataInc): self
    {
        $this->dataInc = $dataInc;

        return $this;
    }

    public function getValueSumOld()
    {
        return $this->valueSumOld;
    }

    public function setValueSumOld($valueSumOld): self
    {
        $this->valueSumOld = $valueSumOld;

        return $this;
    }

    public function getValueSumNew()
    {
        return $this->valueSumNew;
    }

    public function setValueSumNew($valueSumNew): self
    {
        $this->valueSumNew = $valueSumNew;

        return $this;
    }
}
