<?php

namespace App\Entity\Cep;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class LogLogradouro
{
    private $logNuSequencial;

    private $ufeSg;

    private $logNo;

    private $logNome;

    private $baiNuSequencialFim;

    private $cep;

    private $logComplemento;

    private $logTipoLogradouro;

    private $logStatusTipoLog;

    private $logNoSemAcento;

    private $indUop;

    private $indGru;

    private $temp;

    private $logGrandeUsuario;

    private $logBairro;

    private $logLocalidade;

    public function __construct()
    {
        $this->logGrandeUsuario = new ArrayCollection();
    }

    public function getLogNuSequencial(): ?int
    {
        return $this->logNuSequencial;
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

    public function getLogNo(): ?string
    {
        return $this->logNo;
    }

    public function setLogNo(string $logNo): self
    {
        $this->logNo = $logNo;

        return $this;
    }

    public function getLogNome(): ?string
    {
        return $this->logNome;
    }

    public function setLogNome(string $logNome): self
    {
        $this->logNome = $logNome;

        return $this;
    }

    public function getBaiNuSequencialFim(): ?int
    {
        return $this->baiNuSequencialFim;
    }

    public function setBaiNuSequencialFim(?int $baiNuSequencialFim): self
    {
        $this->baiNuSequencialFim = $baiNuSequencialFim;

        return $this;
    }

    public function getCep(): ?string
    {
        return $this->cep;
    }

    public function setCep(string $cep): self
    {
        $this->cep = $cep;

        return $this;
    }

    public function getLogComplemento(): ?string
    {
        return $this->logComplemento;
    }

    public function setLogComplemento(?string $logComplemento): self
    {
        $this->logComplemento = $logComplemento;

        return $this;
    }

    public function getLogTipoLogradouro(): ?string
    {
        return $this->logTipoLogradouro;
    }

    public function setLogTipoLogradouro(?string $logTipoLogradouro): self
    {
        $this->logTipoLogradouro = $logTipoLogradouro;

        return $this;
    }

    public function getLogStatusTipoLog(): ?string
    {
        return $this->logStatusTipoLog;
    }

    public function setLogStatusTipoLog(string $logStatusTipoLog): self
    {
        $this->logStatusTipoLog = $logStatusTipoLog;

        return $this;
    }

    public function getLogNoSemAcento(): ?string
    {
        return $this->logNoSemAcento;
    }

    public function setLogNoSemAcento(string $logNoSemAcento): self
    {
        $this->logNoSemAcento = $logNoSemAcento;

        return $this;
    }

    public function getIndUop(): ?string
    {
        return $this->indUop;
    }

    public function setIndUop(?string $indUop): self
    {
        $this->indUop = $indUop;

        return $this;
    }

    public function getIndGru(): ?string
    {
        return $this->indGru;
    }

    public function setIndGru(?string $indGru): self
    {
        $this->indGru = $indGru;

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
            $logGrandeUsuario->setLogLogradouro($this);
        }

        return $this;
    }

    public function removeLogGrandeUsuario(LogGrandeUsuario $logGrandeUsuario): self
    {
        if ($this->logGrandeUsuario->contains($logGrandeUsuario)) {
            $this->logGrandeUsuario->removeElement($logGrandeUsuario);
            // set the owning side to null (unless already changed)
            if ($logGrandeUsuario->getLogLogradouro() === $this) {
                $logGrandeUsuario->setLogLogradouro(null);
            }
        }

        return $this;
    }

    public function getLogBairro(): ?LogBairro
    {
        return $this->logBairro;
    }

    public function setLogBairro(?LogBairro $logBairro): self
    {
        $this->logBairro = $logBairro;

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
