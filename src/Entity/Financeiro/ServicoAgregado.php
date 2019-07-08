<?php

namespace App\Entity\Financeiro;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class ServicoAgregado
{
    private $servagreCodigoid;

    private $servagreNome;

    private $servagreAtivo;

    private $servagreTipo;

    private $servagreApelido;

    private $servCodigoid;

    public function __construct()
    {
        $this->servCodigoid = new ArrayCollection();
    }

    public function getServagreCodigoid(): ?int
    {
        return $this->servagreCodigoid;
    }

    public function getServagreNome(): ?string
    {
        return $this->servagreNome;
    }

    public function setServagreNome(string $servagreNome): self
    {
        $this->servagreNome = $servagreNome;

        return $this;
    }

    public function getServagreAtivo(): ?bool
    {
        return $this->servagreAtivo;
    }

    public function setServagreAtivo(bool $servagreAtivo): self
    {
        $this->servagreAtivo = $servagreAtivo;

        return $this;
    }

    public function getServagreTipo(): ?string
    {
        return $this->servagreTipo;
    }

    public function setServagreTipo(string $servagreTipo): self
    {
        $this->servagreTipo = $servagreTipo;

        return $this;
    }

    public function getServagreApelido(): ?string
    {
        return $this->servagreApelido;
    }

    public function setServagreApelido(string $servagreApelido): self
    {
        $this->servagreApelido = $servagreApelido;

        return $this;
    }

    /**
     * @return Collection|Servico[]
     */
    public function getServCodigoid(): Collection
    {
        return $this->servCodigoid;
    }

    public function addServCodigoid(Servico $servCodigoid): self
    {
        if (!$this->servCodigoid->contains($servCodigoid)) {
            $this->servCodigoid[] = $servCodigoid;
            $servCodigoid->addServagreCodigoid($this);
        }

        return $this;
    }

    public function removeServCodigoid(Servico $servCodigoid): self
    {
        if ($this->servCodigoid->contains($servCodigoid)) {
            $this->servCodigoid->removeElement($servCodigoid);
            $servCodigoid->removeServagreCodigoid($this);
        }

        return $this;
    }
}
