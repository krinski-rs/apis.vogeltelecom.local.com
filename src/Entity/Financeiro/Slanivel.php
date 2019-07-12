<?php

namespace App\Entity\Financeiro;

class Slanivel
{
    private $slaniveCodigoid;

    private $slaniveRespostacomercial;

    private $slaniveResolucaocomercial;

    private $slaniveResolucaoextra;

    private $slaniveRespostaextra;

    private $niveCodigoid;

    private $slaCodigoid;

    public function getSlaniveCodigoid(): ?int
    {
        return $this->slaniveCodigoid;
    }

    public function getSlaniveRespostacomercial(): ?int
    {
        return $this->slaniveRespostacomercial;
    }

    public function setSlaniveRespostacomercial(int $slaniveRespostacomercial): self
    {
        $this->slaniveRespostacomercial = $slaniveRespostacomercial;

        return $this;
    }

    public function getSlaniveResolucaocomercial(): ?int
    {
        return $this->slaniveResolucaocomercial;
    }

    public function setSlaniveResolucaocomercial(int $slaniveResolucaocomercial): self
    {
        $this->slaniveResolucaocomercial = $slaniveResolucaocomercial;

        return $this;
    }

    public function getSlaniveResolucaoextra(): ?int
    {
        return $this->slaniveResolucaoextra;
    }

    public function setSlaniveResolucaoextra(int $slaniveResolucaoextra): self
    {
        $this->slaniveResolucaoextra = $slaniveResolucaoextra;

        return $this;
    }

    public function getSlaniveRespostaextra(): ?int
    {
        return $this->slaniveRespostaextra;
    }

    public function setSlaniveRespostaextra(int $slaniveRespostaextra): self
    {
        $this->slaniveRespostaextra = $slaniveRespostaextra;

        return $this;
    }

    public function getNiveCodigoid(): ?Nivel
    {
        return $this->niveCodigoid;
    }

    public function setNiveCodigoid(?Nivel $niveCodigoid): self
    {
        $this->niveCodigoid = $niveCodigoid;

        return $this;
    }

    public function getSlaCodigoid(): ?Sla
    {
        return $this->slaCodigoid;
    }

    public function setSlaCodigoid(?Sla $slaCodigoid): self
    {
        $this->slaCodigoid = $slaCodigoid;

        return $this;
    }
}
