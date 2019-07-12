<?php

namespace App\Entity\Cep;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class LogBairro
{
    private $baiNuSequencial;

    private $ufeSg;

    private $baiNo;

    private $baiNoAbrev;

    private $logGrandeUsuario;

    private $logLogradouro;

    private $logLocalidade;

    public function __construct()
    {
        $this->logGrandeUsuario = new ArrayCollection();
        $this->logLogradouro = new ArrayCollection();
    }

    public function getBaiNuSequencial(): ?int
    {
        return $this->baiNuSequencial;
    }

    public function getUfeSg(): ?string
    {
        return $this->ufeSg;
    }

    public function setUfeSg(string $ufeSg): self
    {
        $this->ufeSg = $ufeSg;

        return $this;
    }

    public function getBaiNo(): ?string
    {
        return $this->baiNo;
    }

    public function setBaiNo(string $baiNo): self
    {
        $this->baiNo = $baiNo;

        return $this;
    }

    public function getBaiNoAbrev(): ?string
    {
        return $this->baiNoAbrev;
    }

    public function setBaiNoAbrev(?string $baiNoAbrev): self
    {
        $this->baiNoAbrev = $baiNoAbrev;

        return $this;
    }

    /**
     * @return Collection|LogGrandeUsuario[]
     */
    public function getLogGrandeUsuario(): Collection
    {
        return $this->logGrandeUsuario;
    }

    public function addLogGrandeUsuario(LogGrandeUsuario $logGrandeUsuario): self
    {
        if (!$this->logGrandeUsuario->contains($logGrandeUsuario)) {
            $this->logGrandeUsuario[] = $logGrandeUsuario;
            $logGrandeUsuario->setLogBairro($this);
        }

        return $this;
    }

    public function removeLogGrandeUsuario(LogGrandeUsuario $logGrandeUsuario): self
    {
        if ($this->logGrandeUsuario->contains($logGrandeUsuario)) {
            $this->logGrandeUsuario->removeElement($logGrandeUsuario);
            // set the owning side to null (unless already changed)
            if ($logGrandeUsuario->getLogBairro() === $this) {
                $logGrandeUsuario->setLogBairro(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|LogLogradouro[]
     */
    public function getLogLogradouro(): Collection
    {
        return $this->logLogradouro;
    }

    public function addLogLogradouro(LogLogradouro $logLogradouro): self
    {
        if (!$this->logLogradouro->contains($logLogradouro)) {
            $this->logLogradouro[] = $logLogradouro;
            $logLogradouro->setLogBairro($this);
        }

        return $this;
    }

    public function removeLogLogradouro(LogLogradouro $logLogradouro): self
    {
        if ($this->logLogradouro->contains($logLogradouro)) {
            $this->logLogradouro->removeElement($logLogradouro);
            // set the owning side to null (unless already changed)
            if ($logLogradouro->getLogBairro() === $this) {
                $logLogradouro->setLogBairro(null);
            }
        }

        return $this;
    }

    public function getLogLocalidade(): ?LogLocalidade
    {
        return $this->logLocalidade;
    }

    public function setLogLocalidade(?LogLocalidade $logLocalidade): self
    {
        $this->logLocalidade = $logLocalidade;

        return $this;
    }
}
