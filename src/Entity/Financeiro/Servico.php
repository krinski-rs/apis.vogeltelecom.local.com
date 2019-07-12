<?php

namespace App\Entity\Financeiro;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class Servico
{
    private $servCodigoid;

    private $servNome;

    private $servDescricao;

    private $servDatainc;

    private $servApelido;

    private $servDependente;

    private $servAtivo;

    private $grupservCodigoid;

    private $servagreCodigoid;

    public function __construct()
    {
        $this->servagreCodigoid = new ArrayCollection();
    }

    public function getServCodigoid(): ?int
    {
        return $this->servCodigoid;
    }

    public function getServNome(): ?string
    {
        return $this->servNome;
    }

    public function setServNome(string $servNome): self
    {
        $this->servNome = $servNome;

        return $this;
    }

    public function getServDescricao(): ?string
    {
        return $this->servDescricao;
    }

    public function setServDescricao(string $servDescricao): self
    {
        $this->servDescricao = $servDescricao;

        return $this;
    }

    public function getServDatainc(): ?\DateTimeInterface
    {
        return $this->servDatainc;
    }

    public function setServDatainc(\DateTimeInterface $servDatainc): self
    {
        $this->servDatainc = $servDatainc;

        return $this;
    }

    public function getServApelido(): ?string
    {
        return $this->servApelido;
    }

    public function setServApelido(string $servApelido): self
    {
        $this->servApelido = $servApelido;

        return $this;
    }

    public function getServDependente(): ?bool
    {
        return $this->servDependente;
    }

    public function setServDependente(bool $servDependente): self
    {
        $this->servDependente = $servDependente;

        return $this;
    }

    public function getServAtivo(): ?bool
    {
        return $this->servAtivo;
    }

    public function setServAtivo(bool $servAtivo): self
    {
        $this->servAtivo = $servAtivo;

        return $this;
    }

    public function getGrupservCodigoid(): ?Gruposervico
    {
        return $this->grupservCodigoid;
    }

    public function setGrupservCodigoid(?Gruposervico $grupservCodigoid): self
    {
        $this->grupservCodigoid = $grupservCodigoid;

        return $this;
    }

    /**
     * @return Collection|ServicoAgregado[]
     */
    public function getServagreCodigoid(): Collection
    {
        return $this->servagreCodigoid;
    }

    public function addServagreCodigoid(ServicoAgregado $servagreCodigoid): self
    {
        if (!$this->servagreCodigoid->contains($servagreCodigoid)) {
            $this->servagreCodigoid[] = $servagreCodigoid;
        }

        return $this;
    }

    public function removeServagreCodigoid(ServicoAgregado $servagreCodigoid): self
    {
        if ($this->servagreCodigoid->contains($servagreCodigoid)) {
            $this->servagreCodigoid->removeElement($servagreCodigoid);
        }

        return $this;
    }
}
