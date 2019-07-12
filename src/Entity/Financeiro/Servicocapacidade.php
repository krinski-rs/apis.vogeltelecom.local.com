<?php

namespace App\Entity\Financeiro;

class Servicocapacidade
{
    private $servcapaCodigoid;

    private $servicapaDatainc;

    private $servcapaVisibilidade;

    private $capaCodigoid;

    private $mediCodigoid;

    private $scrimediCodigoid;

    private $servCodigoid;

    public function getServcapaCodigoid(): ?int
    {
        return $this->servcapaCodigoid;
    }

    public function getServicapaDatainc(): ?\DateTimeInterface
    {
        return $this->servicapaDatainc;
    }

    public function setServicapaDatainc(\DateTimeInterface $servicapaDatainc): self
    {
        $this->servicapaDatainc = $servicapaDatainc;

        return $this;
    }

    public function getServcapaVisibilidade(): ?bool
    {
        return $this->servcapaVisibilidade;
    }

    public function setServcapaVisibilidade(bool $servcapaVisibilidade): self
    {
        $this->servcapaVisibilidade = $servcapaVisibilidade;

        return $this;
    }

    public function getCapaCodigoid(): ?Capacidade
    {
        return $this->capaCodigoid;
    }

    public function setCapaCodigoid(?Capacidade $capaCodigoid): self
    {
        $this->capaCodigoid = $capaCodigoid;

        return $this;
    }

    public function getMediCodigoid(): ?Medida
    {
        return $this->mediCodigoid;
    }

    public function setMediCodigoid(?Medida $mediCodigoid): self
    {
        $this->mediCodigoid = $mediCodigoid;

        return $this;
    }

    public function getScrimediCodigoid(): ?Scriptmedicao
    {
        return $this->scrimediCodigoid;
    }

    public function setScrimediCodigoid(?Scriptmedicao $scrimediCodigoid): self
    {
        $this->scrimediCodigoid = $scrimediCodigoid;

        return $this;
    }

    public function getServCodigoid(): ?Servico
    {
        return $this->servCodigoid;
    }

    public function setServCodigoid(?Servico $servCodigoid): self
    {
        $this->servCodigoid = $servCodigoid;

        return $this;
    }
}
