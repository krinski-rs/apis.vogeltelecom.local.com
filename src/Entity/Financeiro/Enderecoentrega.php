<?php

namespace App\Entity\Financeiro;

use App\Entity\Gcdb\AdmCidades;
use App\Entity\Gcdb\AdmLogradouro;
use App\Entity\Gcdb\AdmPais;
use App\Entity\Gcdb\AdmUf;
use App\Entity\Gcdb\Circuito;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class Enderecoentrega
{
    private $endeentrCodigoid;

    private $contCodigoid;

    private $endeentrConcentrador;

    private $endeentrBairro;

    private $endeentrLogradouro;

    private $endeentrCep;

    private $endeentrNumero;

    private $endeentrComplemento;

    private $endeentrPonta;

    private $endeentrLatitude;

    private $endeentrLongitude;

    private $endeentrDesignadorOld;

    private $circuitos;

    private $admCidades;

    private $admPais;

    private $admUf;

    private $admLogradouro;

    public function __construct()
    {
        $this->circuitos = new ArrayCollection();
    }

    public function getEndeentrCodigoid(): ?int
    {
        return $this->endeentrCodigoid;
    }

    public function getContCodigoid(): ?int
    {
        return $this->contCodigoid;
    }

    public function setContCodigoid(?int $contCodigoid): self
    {
        $this->contCodigoid = $contCodigoid;

        return $this;
    }

    public function getEndeentrConcentrador(): ?bool
    {
        return $this->endeentrConcentrador;
    }

    public function setEndeentrConcentrador(bool $endeentrConcentrador): self
    {
        $this->endeentrConcentrador = $endeentrConcentrador;

        return $this;
    }

    public function getEndeentrBairro(): ?string
    {
        return $this->endeentrBairro;
    }

    public function setEndeentrBairro(string $endeentrBairro): self
    {
        $this->endeentrBairro = $endeentrBairro;

        return $this;
    }

    public function getEndeentrLogradouro(): ?string
    {
        return $this->endeentrLogradouro;
    }

    public function setEndeentrLogradouro(string $endeentrLogradouro): self
    {
        $this->endeentrLogradouro = $endeentrLogradouro;

        return $this;
    }

    public function getEndeentrCep(): ?string
    {
        return $this->endeentrCep;
    }

    public function setEndeentrCep(string $endeentrCep): self
    {
        $this->endeentrCep = $endeentrCep;

        return $this;
    }

    public function getEndeentrNumero(): ?int
    {
        return $this->endeentrNumero;
    }

    public function setEndeentrNumero(int $endeentrNumero): self
    {
        $this->endeentrNumero = $endeentrNumero;

        return $this;
    }

    public function getEndeentrComplemento(): ?string
    {
        return $this->endeentrComplemento;
    }

    public function setEndeentrComplemento(?string $endeentrComplemento): self
    {
        $this->endeentrComplemento = $endeentrComplemento;

        return $this;
    }

    public function getEndeentrPonta(): ?string
    {
        return $this->endeentrPonta;
    }

    public function setEndeentrPonta(?string $endeentrPonta): self
    {
        $this->endeentrPonta = $endeentrPonta;

        return $this;
    }

    public function getEndeentrLatitude(): ?string
    {
        return $this->endeentrLatitude;
    }

    public function setEndeentrLatitude(?string $endeentrLatitude): self
    {
        $this->endeentrLatitude = $endeentrLatitude;

        return $this;
    }

    public function getEndeentrLongitude(): ?string
    {
        return $this->endeentrLongitude;
    }

    public function setEndeentrLongitude(?string $endeentrLongitude): self
    {
        $this->endeentrLongitude = $endeentrLongitude;

        return $this;
    }

    public function getEndeentrDesignadorOld(): ?string
    {
        return $this->endeentrDesignadorOld;
    }

    public function setEndeentrDesignadorOld(?string $endeentrDesignadorOld): self
    {
        $this->endeentrDesignadorOld = $endeentrDesignadorOld;

        return $this;
    }

    /**
     * @return Collection|Circuito[]
     */
    public function getCircuitos(): Collection
    {
        return $this->circuitos;
    }

    public function addCircuito(Circuito $circuito): self
    {
        if (!$this->circuitos->contains($circuito)) {
            $this->circuitos[] = $circuito;
            $circuito->setEnderecoentrega($this);
        }

        return $this;
    }

    public function removeCircuito(Circuito $circuito): self
    {
        if ($this->circuitos->contains($circuito)) {
            $this->circuitos->removeElement($circuito);
            // set the owning side to null (unless already changed)
            if ($circuito->getEnderecoentrega() === $this) {
                $circuito->setEnderecoentrega(null);
            }
        }

        return $this;
    }

    public function getAdmCidades(): ?AdmCidades
    {
        return $this->admCidades;
    }

    public function setAdmCidades(?AdmCidades $admCidades): self
    {
        $this->admCidades = $admCidades;

        return $this;
    }

    public function getAdmPais(): ?AdmPais
    {
        return $this->admPais;
    }

    public function setAdmPais(?AdmPais $admPais): self
    {
        $this->admPais = $admPais;

        return $this;
    }

    public function getAdmUf(): ?AdmUf
    {
        return $this->admUf;
    }

    public function setAdmUf(?AdmUf $admUf): self
    {
        $this->admUf = $admUf;

        return $this;
    }

    public function getAdmLogradouro(): ?AdmLogradouro
    {
        return $this->admLogradouro;
    }

    public function setAdmLogradouro(?AdmLogradouro $admLogradouro): self
    {
        $this->admLogradouro = $admLogradouro;

        return $this;
    }
}
