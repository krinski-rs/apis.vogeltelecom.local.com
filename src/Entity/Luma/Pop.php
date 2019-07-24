<?php

namespace App\Entity\Luma;

use App\Entity\Gcdb\CircuitoPop;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class Pop
{
    private $idPop;

    private $nome;

    private $regionalResponsavel;

    private $compartilhado;

    private $processoAcesso;

    private $contatoFaltaLuz;

    private $anatelRegistro;

    private $dataInicio;

    private $dataFim;

    private $usuario;

    private $gerador;

    private $cag;

    private $ativo;

    private $ramal;

    private $usuarioAprovador;

    private $observacaoAprovador;

    private $dataAprovador;

    private $circuitoPop;

    private $poprelacaolocalizacao;

    public function __construct()
    {
        $this->circuitoPop = new ArrayCollection();
        $this->poprelacaolocalizacao = new ArrayCollection();
    }

    public function getIdPop(): ?int
    {
        return $this->idPop;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(?string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getRegionalResponsavel(): ?string
    {
        return $this->regionalResponsavel;
    }

    public function setRegionalResponsavel(?string $regionalResponsavel): self
    {
        $this->regionalResponsavel = $regionalResponsavel;

        return $this;
    }

    public function getCompartilhado(): ?string
    {
        return $this->compartilhado;
    }

    public function setCompartilhado(?string $compartilhado): self
    {
        $this->compartilhado = $compartilhado;

        return $this;
    }

    public function getProcessoAcesso(): ?string
    {
        return $this->processoAcesso;
    }

    public function setProcessoAcesso(?string $processoAcesso): self
    {
        $this->processoAcesso = $processoAcesso;

        return $this;
    }

    public function getContatoFaltaLuz(): ?string
    {
        return $this->contatoFaltaLuz;
    }

    public function setContatoFaltaLuz(?string $contatoFaltaLuz): self
    {
        $this->contatoFaltaLuz = $contatoFaltaLuz;

        return $this;
    }

    public function getAnatelRegistro(): ?string
    {
        return $this->anatelRegistro;
    }

    public function setAnatelRegistro(?string $anatelRegistro): self
    {
        $this->anatelRegistro = $anatelRegistro;

        return $this;
    }

    public function getDataInicio(): ?\DateTimeInterface
    {
        return $this->dataInicio;
    }

    public function setDataInicio(?\DateTimeInterface $dataInicio): self
    {
        $this->dataInicio = $dataInicio;

        return $this;
    }

    public function getDataFim(): ?\DateTimeInterface
    {
        return $this->dataFim;
    }

    public function setDataFim(?\DateTimeInterface $dataFim): self
    {
        $this->dataFim = $dataFim;

        return $this;
    }

    public function getUsuario(): ?string
    {
        return $this->usuario;
    }

    public function setUsuario(?string $usuario): self
    {
        $this->usuario = $usuario;

        return $this;
    }

    public function getGerador(): ?string
    {
        return $this->gerador;
    }

    public function setGerador(?string $gerador): self
    {
        $this->gerador = $gerador;

        return $this;
    }

    public function getCag(): ?string
    {
        return $this->cag;
    }

    public function setCag(?string $cag): self
    {
        $this->cag = $cag;

        return $this;
    }

    public function getAtivo(): ?string
    {
        return $this->ativo;
    }

    public function setAtivo(?string $ativo): self
    {
        $this->ativo = $ativo;

        return $this;
    }

    public function getRamal(): ?string
    {
        return $this->ramal;
    }

    public function setRamal(?string $ramal): self
    {
        $this->ramal = $ramal;

        return $this;
    }

    public function getUsuarioAprovador(): ?string
    {
        return $this->usuarioAprovador;
    }

    public function setUsuarioAprovador(?string $usuarioAprovador): self
    {
        $this->usuarioAprovador = $usuarioAprovador;

        return $this;
    }

    public function getObservacaoAprovador(): ?string
    {
        return $this->observacaoAprovador;
    }

    public function setObservacaoAprovador(?string $observacaoAprovador): self
    {
        $this->observacaoAprovador = $observacaoAprovador;

        return $this;
    }

    public function getDataAprovador(): ?\DateTimeInterface
    {
        return $this->dataAprovador;
    }

    public function setDataAprovador(?\DateTimeInterface $dataAprovador): self
    {
        $this->dataAprovador = $dataAprovador;

        return $this;
    }

    /**
     * @return Collection|CircuitoPop[]
     */
    public function getCircuitoPop(): Collection
    {
        return $this->circuitoPop;
    }

    public function addCircuitoPop(CircuitoPop $circuitoPop): self
    {
        if (!$this->circuitoPop->contains($circuitoPop)) {
            $this->circuitoPop[] = $circuitoPop;
            $circuitoPop->setCircuito($this);
        }

        return $this;
    }

    public function removeCircuitoPop(CircuitoPop $circuitoPop): self
    {
        if ($this->circuitoPop->contains($circuitoPop)) {
            $this->circuitoPop->removeElement($circuitoPop);
            // set the owning side to null (unless already changed)
            if ($circuitoPop->getCircuito() === $this) {
                $circuitoPop->setCircuito(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Poprelacaolocalizacao[]
     */
    public function getPoprelacaolocalizacao(): Collection
    {
        return $this->poprelacaolocalizacao;
    }

    public function addPoprelacaolocalizacao(Poprelacaolocalizacao $poprelacaolocalizacao): self
    {
        if (!$this->poprelacaolocalizacao->contains($poprelacaolocalizacao)) {
            $this->poprelacaolocalizacao[] = $poprelacaolocalizacao;
            $poprelacaolocalizacao->setPop($this);
        }

        return $this;
    }

    public function removePoprelacaolocalizacao(Poprelacaolocalizacao $poprelacaolocalizacao): self
    {
        if ($this->poprelacaolocalizacao->contains($poprelacaolocalizacao)) {
            $this->poprelacaolocalizacao->removeElement($poprelacaolocalizacao);
            // set the owning side to null (unless already changed)
            if ($poprelacaolocalizacao->getPop() === $this) {
                $poprelacaolocalizacao->setPop(null);
            }
        }

        return $this;
    }
}
