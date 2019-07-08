<?php

namespace App\Entity\Financeiro;

class Suspencao
{
    private $suspCodigoid;

    private $usuaCodigoid;

    private $suspDatainc;

    private $suspDatasuspenso;

    private $contCodigoid;

    public function getSuspCodigoid(): ?int
    {
        return $this->suspCodigoid;
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

    public function getSuspDatainc(): ?\DateTimeInterface
    {
        return $this->suspDatainc;
    }

    public function setSuspDatainc(\DateTimeInterface $suspDatainc): self
    {
        $this->suspDatainc = $suspDatainc;

        return $this;
    }

    public function getSuspDatasuspenso(): ?\DateTimeInterface
    {
        return $this->suspDatasuspenso;
    }

    public function setSuspDatasuspenso(?\DateTimeInterface $suspDatasuspenso): self
    {
        $this->suspDatasuspenso = $suspDatasuspenso;

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
