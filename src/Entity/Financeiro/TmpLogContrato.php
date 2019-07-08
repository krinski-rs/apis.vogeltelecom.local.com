<?php

namespace App\Entity\Financeiro;

class TmpLogContrato
{
    private $idLog;

    private $dataInc;

    private $obs;

    private $idTmpContrato;

    public function getIdLog(): ?int
    {
        return $this->idLog;
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

    public function getObs(): ?string
    {
        return $this->obs;
    }

    public function setObs(string $obs): self
    {
        $this->obs = $obs;

        return $this;
    }

    public function getIdTmpContrato(): ?TmpContrato
    {
        return $this->idTmpContrato;
    }

    public function setIdTmpContrato(?TmpContrato $idTmpContrato): self
    {
        $this->idTmpContrato = $idTmpContrato;

        return $this;
    }
}
