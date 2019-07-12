<?php

namespace App\Entity\Financeiro;

class Rescisao
{
    private $rescCodigoid;

    private $rescDatarecebimento;

    private $rescDatainc;

    private $contCodigoid;

    public function getRescCodigoid(): ?int
    {
        return $this->rescCodigoid;
    }

    public function getRescDatarecebimento(): ?\DateTimeInterface
    {
        return $this->rescDatarecebimento;
    }

    public function setRescDatarecebimento(\DateTimeInterface $rescDatarecebimento): self
    {
        $this->rescDatarecebimento = $rescDatarecebimento;

        return $this;
    }

    public function getRescDatainc(): ?\DateTimeInterface
    {
        return $this->rescDatainc;
    }

    public function setRescDatainc(\DateTimeInterface $rescDatainc): self
    {
        $this->rescDatainc = $rescDatainc;

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
