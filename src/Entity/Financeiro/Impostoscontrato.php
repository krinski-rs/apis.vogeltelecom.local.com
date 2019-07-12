<?php

namespace App\Entity\Financeiro;

class Impostoscontrato
{
    private $impocontCodigoid;

    private $impocontPisReter;

    private $impocontPisDestacar;

    private $impocontPisValor;

    private $impocontPisReducao;

    private $impocontCofinsReter;

    private $impocontCofinsDestacar;

    private $impocontCofinsValor;

    private $impocontCofinsReducao;

    private $impocontIrReter;

    private $impocontIrDestacar;

    private $impocontIrValor;

    private $impocontIrReducao;

    private $impocontIsllReter;

    private $impocontIsllDestacar;

    private $impocontIsllValor;

    private $impocontIsllReducao;

    private $impocontIssqnReter;

    private $impocontIssqnDestacar;

    private $impocontIssqnValor;

    private $impocontIssqnReducao;

    private $impocontIcmsReter;

    private $impocontIcmsDestacar;

    private $impocontIcmsValor;

    private $impocontIcmsReducao;

    private $ativPisValor;

    private $ativPisReter;

    private $ativCofinsValor;

    private $ativCofinsReter;

    private $ativIrValor;

    private $ativIrReter;

    private $ativCsllValor;

    private $ativCsllReter;

    private $ativIssqnValor;

    private $ativIssqnReter;

    private $contCodigoid;

    public function getImpocontCodigoid(): ?int
    {
        return $this->impocontCodigoid;
    }

    public function getImpocontPisReter(): ?bool
    {
        return $this->impocontPisReter;
    }

    public function setImpocontPisReter(bool $impocontPisReter): self
    {
        $this->impocontPisReter = $impocontPisReter;

        return $this;
    }

    public function getImpocontPisDestacar(): ?bool
    {
        return $this->impocontPisDestacar;
    }

    public function setImpocontPisDestacar(bool $impocontPisDestacar): self
    {
        $this->impocontPisDestacar = $impocontPisDestacar;

        return $this;
    }

    public function getImpocontPisValor()
    {
        return $this->impocontPisValor;
    }

    public function setImpocontPisValor($impocontPisValor): self
    {
        $this->impocontPisValor = $impocontPisValor;

        return $this;
    }

    public function getImpocontPisReducao()
    {
        return $this->impocontPisReducao;
    }

    public function setImpocontPisReducao($impocontPisReducao): self
    {
        $this->impocontPisReducao = $impocontPisReducao;

        return $this;
    }

    public function getImpocontCofinsReter(): ?bool
    {
        return $this->impocontCofinsReter;
    }

    public function setImpocontCofinsReter(bool $impocontCofinsReter): self
    {
        $this->impocontCofinsReter = $impocontCofinsReter;

        return $this;
    }

    public function getImpocontCofinsDestacar(): ?bool
    {
        return $this->impocontCofinsDestacar;
    }

    public function setImpocontCofinsDestacar(bool $impocontCofinsDestacar): self
    {
        $this->impocontCofinsDestacar = $impocontCofinsDestacar;

        return $this;
    }

    public function getImpocontCofinsValor()
    {
        return $this->impocontCofinsValor;
    }

    public function setImpocontCofinsValor($impocontCofinsValor): self
    {
        $this->impocontCofinsValor = $impocontCofinsValor;

        return $this;
    }

    public function getImpocontCofinsReducao()
    {
        return $this->impocontCofinsReducao;
    }

    public function setImpocontCofinsReducao($impocontCofinsReducao): self
    {
        $this->impocontCofinsReducao = $impocontCofinsReducao;

        return $this;
    }

    public function getImpocontIrReter(): ?bool
    {
        return $this->impocontIrReter;
    }

    public function setImpocontIrReter(bool $impocontIrReter): self
    {
        $this->impocontIrReter = $impocontIrReter;

        return $this;
    }

    public function getImpocontIrDestacar(): ?bool
    {
        return $this->impocontIrDestacar;
    }

    public function setImpocontIrDestacar(bool $impocontIrDestacar): self
    {
        $this->impocontIrDestacar = $impocontIrDestacar;

        return $this;
    }

    public function getImpocontIrValor()
    {
        return $this->impocontIrValor;
    }

    public function setImpocontIrValor($impocontIrValor): self
    {
        $this->impocontIrValor = $impocontIrValor;

        return $this;
    }

    public function getImpocontIrReducao()
    {
        return $this->impocontIrReducao;
    }

    public function setImpocontIrReducao($impocontIrReducao): self
    {
        $this->impocontIrReducao = $impocontIrReducao;

        return $this;
    }

    public function getImpocontIsllReter(): ?bool
    {
        return $this->impocontIsllReter;
    }

    public function setImpocontIsllReter(bool $impocontIsllReter): self
    {
        $this->impocontIsllReter = $impocontIsllReter;

        return $this;
    }

    public function getImpocontIsllDestacar(): ?bool
    {
        return $this->impocontIsllDestacar;
    }

    public function setImpocontIsllDestacar(bool $impocontIsllDestacar): self
    {
        $this->impocontIsllDestacar = $impocontIsllDestacar;

        return $this;
    }

    public function getImpocontIsllValor()
    {
        return $this->impocontIsllValor;
    }

    public function setImpocontIsllValor($impocontIsllValor): self
    {
        $this->impocontIsllValor = $impocontIsllValor;

        return $this;
    }

    public function getImpocontIsllReducao()
    {
        return $this->impocontIsllReducao;
    }

    public function setImpocontIsllReducao($impocontIsllReducao): self
    {
        $this->impocontIsllReducao = $impocontIsllReducao;

        return $this;
    }

    public function getImpocontIssqnReter(): ?bool
    {
        return $this->impocontIssqnReter;
    }

    public function setImpocontIssqnReter(bool $impocontIssqnReter): self
    {
        $this->impocontIssqnReter = $impocontIssqnReter;

        return $this;
    }

    public function getImpocontIssqnDestacar(): ?bool
    {
        return $this->impocontIssqnDestacar;
    }

    public function setImpocontIssqnDestacar(bool $impocontIssqnDestacar): self
    {
        $this->impocontIssqnDestacar = $impocontIssqnDestacar;

        return $this;
    }

    public function getImpocontIssqnValor()
    {
        return $this->impocontIssqnValor;
    }

    public function setImpocontIssqnValor($impocontIssqnValor): self
    {
        $this->impocontIssqnValor = $impocontIssqnValor;

        return $this;
    }

    public function getImpocontIssqnReducao()
    {
        return $this->impocontIssqnReducao;
    }

    public function setImpocontIssqnReducao($impocontIssqnReducao): self
    {
        $this->impocontIssqnReducao = $impocontIssqnReducao;

        return $this;
    }

    public function getImpocontIcmsReter(): ?bool
    {
        return $this->impocontIcmsReter;
    }

    public function setImpocontIcmsReter(bool $impocontIcmsReter): self
    {
        $this->impocontIcmsReter = $impocontIcmsReter;

        return $this;
    }

    public function getImpocontIcmsDestacar(): ?bool
    {
        return $this->impocontIcmsDestacar;
    }

    public function setImpocontIcmsDestacar(bool $impocontIcmsDestacar): self
    {
        $this->impocontIcmsDestacar = $impocontIcmsDestacar;

        return $this;
    }

    public function getImpocontIcmsValor()
    {
        return $this->impocontIcmsValor;
    }

    public function setImpocontIcmsValor($impocontIcmsValor): self
    {
        $this->impocontIcmsValor = $impocontIcmsValor;

        return $this;
    }

    public function getImpocontIcmsReducao()
    {
        return $this->impocontIcmsReducao;
    }

    public function setImpocontIcmsReducao($impocontIcmsReducao): self
    {
        $this->impocontIcmsReducao = $impocontIcmsReducao;

        return $this;
    }

    public function getAtivPisValor()
    {
        return $this->ativPisValor;
    }

    public function setAtivPisValor($ativPisValor): self
    {
        $this->ativPisValor = $ativPisValor;

        return $this;
    }

    public function getAtivPisReter(): ?bool
    {
        return $this->ativPisReter;
    }

    public function setAtivPisReter(?bool $ativPisReter): self
    {
        $this->ativPisReter = $ativPisReter;

        return $this;
    }

    public function getAtivCofinsValor()
    {
        return $this->ativCofinsValor;
    }

    public function setAtivCofinsValor($ativCofinsValor): self
    {
        $this->ativCofinsValor = $ativCofinsValor;

        return $this;
    }

    public function getAtivCofinsReter(): ?bool
    {
        return $this->ativCofinsReter;
    }

    public function setAtivCofinsReter(?bool $ativCofinsReter): self
    {
        $this->ativCofinsReter = $ativCofinsReter;

        return $this;
    }

    public function getAtivIrValor()
    {
        return $this->ativIrValor;
    }

    public function setAtivIrValor($ativIrValor): self
    {
        $this->ativIrValor = $ativIrValor;

        return $this;
    }

    public function getAtivIrReter(): ?bool
    {
        return $this->ativIrReter;
    }

    public function setAtivIrReter(?bool $ativIrReter): self
    {
        $this->ativIrReter = $ativIrReter;

        return $this;
    }

    public function getAtivCsllValor()
    {
        return $this->ativCsllValor;
    }

    public function setAtivCsllValor($ativCsllValor): self
    {
        $this->ativCsllValor = $ativCsllValor;

        return $this;
    }

    public function getAtivCsllReter(): ?bool
    {
        return $this->ativCsllReter;
    }

    public function setAtivCsllReter(?bool $ativCsllReter): self
    {
        $this->ativCsllReter = $ativCsllReter;

        return $this;
    }

    public function getAtivIssqnValor()
    {
        return $this->ativIssqnValor;
    }

    public function setAtivIssqnValor($ativIssqnValor): self
    {
        $this->ativIssqnValor = $ativIssqnValor;

        return $this;
    }

    public function getAtivIssqnReter(): ?bool
    {
        return $this->ativIssqnReter;
    }

    public function setAtivIssqnReter(?bool $ativIssqnReter): self
    {
        $this->ativIssqnReter = $ativIssqnReter;

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
