<?php

namespace App\Entity\Financeiro;

class Dadosbancarios
{
    private $dadobancCodigoid;

    private $dadobancAgencia;

    private $dadobancConta;

    private $emprCodigoid;

    private $dadobancCodigocedente;

    private $bancCodigoid;

    public function getDadobancCodigoid(): ?int
    {
        return $this->dadobancCodigoid;
    }

    public function getDadobancAgencia(): ?string
    {
        return $this->dadobancAgencia;
    }

    public function setDadobancAgencia(string $dadobancAgencia): self
    {
        $this->dadobancAgencia = $dadobancAgencia;

        return $this;
    }

    public function getDadobancConta(): ?string
    {
        return $this->dadobancConta;
    }

    public function setDadobancConta(string $dadobancConta): self
    {
        $this->dadobancConta = $dadobancConta;

        return $this;
    }

    public function getEmprCodigoid(): ?int
    {
        return $this->emprCodigoid;
    }

    public function setEmprCodigoid(int $emprCodigoid): self
    {
        $this->emprCodigoid = $emprCodigoid;

        return $this;
    }

    public function getDadobancCodigocedente(): ?string
    {
        return $this->dadobancCodigocedente;
    }

    public function setDadobancCodigocedente(?string $dadobancCodigocedente): self
    {
        $this->dadobancCodigocedente = $dadobancCodigocedente;

        return $this;
    }

    public function getBancCodigoid(): ?Banco
    {
        return $this->bancCodigoid;
    }

    public function setBancCodigoid(?Banco $bancCodigoid): self
    {
        $this->bancCodigoid = $bancCodigoid;

        return $this;
    }
}
