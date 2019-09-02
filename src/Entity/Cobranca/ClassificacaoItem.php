<?php

namespace App\Entity\Cobranca;

class ClassificacaoItem
{
    private $clasitemCodigoid;

    private $clasitemNome;

    private $clasitemAtivo;

    private $clasitemDatainc;

    public function getClasitemCodigoid(): ?int
    {
        return $this->clasitemCodigoid;
    }

    public function getClasitemNome(): ?string
    {
        return $this->clasitemNome;
    }

    public function setClasitemNome(string $clasitemNome): self
    {
        $this->clasitemNome = $clasitemNome;

        return $this;
    }

    public function getClasitemAtivo(): ?bool
    {
        return $this->clasitemAtivo;
    }

    public function setClasitemAtivo(bool $clasitemAtivo): self
    {
        $this->clasitemAtivo = $clasitemAtivo;

        return $this;
    }

    public function getClasitemDatainc(): ?\DateTimeInterface
    {
        return $this->clasitemDatainc;
    }

    public function setClasitemDatainc(\DateTimeInterface $clasitemDatainc): self
    {
        $this->clasitemDatainc = $clasitemDatainc;

        return $this;
    }
}
