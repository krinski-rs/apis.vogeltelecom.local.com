<?php

namespace App\Entity\Cep;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class LogLocalidade
{
    private $locNuSequencial;

    private $locNosub;

    private $locNo;

    private $cep;

    private $locInSituacao;

    private $locInTipoLocalidade;

    private $locNuSequencialSub;

    private $temp;

    private $locCodigoIbge;

    private $logLogradouro;

    private $logBairro;

    private $logGrandeUsuario;

    private $ufeSg;

    public function __construct()
    {
        $this->logLogradouro = new ArrayCollection();
        $this->logBairro = new ArrayCollection();
        $this->logGrandeUsuario = new ArrayCollection();
    }

    public function getLocNuSequencial(): ?int
    {
        return $this->locNuSequencial;
    }

    public function getLocNosub(): ?string
    {
        return $this->locNosub;
    }

    public function setLocNosub(?string $locNosub): self
    {
        $this->locNosub = $locNosub;

        return $this;
    }

    public function getLocNo(): ?string
    {
        return $this->locNo;
    }

    public function setLocNo(?string $locNo): self
    {
        $this->locNo = $locNo;

        return $this;
    }

    public function getCep(): ?string
    {
        return $this->cep;
    }

    public function setCep(?string $cep): self
    {
        $this->cep = $cep;

        return $this;
    }

    public function getLocInSituacao(): ?int
    {
        return $this->locInSituacao;
    }

    public function setLocInSituacao(?int $locInSituacao): self
    {
        $this->locInSituacao = $locInSituacao;

        return $this;
    }

    public function getLocInTipoLocalidade(): ?string
    {
        return $this->locInTipoLocalidade;
    }

    public function setLocInTipoLocalidade(string $locInTipoLocalidade): self
    {
        $this->locInTipoLocalidade = $locInTipoLocalidade;

        return $this;
    }

    public function getLocNuSequencialSub(): ?int
    {
        return $this->locNuSequencialSub;
    }

    public function setLocNuSequencialSub(?int $locNuSequencialSub): self
    {
        $this->locNuSequencialSub = $locNuSequencialSub;

        return $this;
    }

    public function getTemp(): ?string
    {
        return $this->temp;
    }

    public function setTemp(?string $temp): self
    {
        $this->temp = $temp;

        return $this;
    }

    public function getLocCodigoIbge(): ?int
    {
        return $this->locCodigoIbge;
    }

    public function setLocCodigoIbge(?int $locCodigoIbge): self
    {
        $this->locCodigoIbge = $locCodigoIbge;

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
            $logLogradouro->setLogLocalidade($this);
        }

        return $this;
    }

    public function removeLogLogradouro(LogLogradouro $logLogradouro): self
    {
        if ($this->logLogradouro->contains($logLogradouro)) {
            $this->logLogradouro->removeElement($logLogradouro);
            // set the owning side to null (unless already changed)
            if ($logLogradouro->getLogLocalidade() === $this) {
                $logLogradouro->setLogLocalidade(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|LogBairro[]
     */
    public function getLogBairro(): Collection
    {
        return $this->logBairro;
    }

    public function addLogBairro(LogBairro $logBairro): self
    {
        if (!$this->logBairro->contains($logBairro)) {
            $this->logBairro[] = $logBairro;
            $logBairro->setLogLocalidade($this);
        }

        return $this;
    }

    public function removeLogBairro(LogBairro $logBairro): self
    {
        if ($this->logBairro->contains($logBairro)) {
            $this->logBairro->removeElement($logBairro);
            // set the owning side to null (unless already changed)
            if ($logBairro->getLogLocalidade() === $this) {
                $logBairro->setLogLocalidade(null);
            }
        }

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
            $logGrandeUsuario->setLogLocalidade($this);
        }

        return $this;
    }

    public function removeLogGrandeUsuario(LogGrandeUsuario $logGrandeUsuario): self
    {
        if ($this->logGrandeUsuario->contains($logGrandeUsuario)) {
            $this->logGrandeUsuario->removeElement($logGrandeUsuario);
            // set the owning side to null (unless already changed)
            if ($logGrandeUsuario->getLogLocalidade() === $this) {
                $logGrandeUsuario->setLogLocalidade(null);
            }
        }

        return $this;
    }

    public function getUfeSg(): ?LogFaixaUf
    {
        return $this->ufeSg;
    }

    public function setUfeSg(?LogFaixaUf $ufeSg): self
    {
        $this->ufeSg = $ufeSg;

        return $this;
    }
}
