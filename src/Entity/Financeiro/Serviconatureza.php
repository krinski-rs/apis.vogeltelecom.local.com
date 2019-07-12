<?php

namespace App\Entity\Financeiro;

class Serviconatureza
{
    private $servnatuCodigoid;

    private $servnatuPercentual;

    private $servnatuBaseicms;

    private $servnatuCedente;

    private $dadobancCodigoid;

    private $natuCodigoid;

    private $servCodigoid;

    public function getServnatuCodigoid(): ?int
    {
        return $this->servnatuCodigoid;
    }

    public function getServnatuPercentual()
    {
        return $this->servnatuPercentual;
    }

    public function setServnatuPercentual($servnatuPercentual): self
    {
        $this->servnatuPercentual = $servnatuPercentual;

        return $this;
    }

    public function getServnatuBaseicms()
    {
        return $this->servnatuBaseicms;
    }

    public function setServnatuBaseicms($servnatuBaseicms): self
    {
        $this->servnatuBaseicms = $servnatuBaseicms;

        return $this;
    }

    public function getServnatuCedente(): ?bool
    {
        return $this->servnatuCedente;
    }

    public function setServnatuCedente(bool $servnatuCedente): self
    {
        $this->servnatuCedente = $servnatuCedente;

        return $this;
    }

    public function getDadobancCodigoid(): ?Dadosbancarios
    {
        return $this->dadobancCodigoid;
    }

    public function setDadobancCodigoid(?Dadosbancarios $dadobancCodigoid): self
    {
        $this->dadobancCodigoid = $dadobancCodigoid;

        return $this;
    }

    public function getNatuCodigoid(): ?Natureza
    {
        return $this->natuCodigoid;
    }

    public function setNatuCodigoid(?Natureza $natuCodigoid): self
    {
        $this->natuCodigoid = $natuCodigoid;

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
