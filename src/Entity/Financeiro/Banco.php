<?php

namespace App\Entity\Financeiro;

class Banco
{
    private $bancCodigoid;

    private $bancCodigobacen;

    private $bancNome;

    private $bancSegmento;

    private $bancCnpj;

    public function getBancCodigoid(): ?int
    {
        return $this->bancCodigoid;
    }

    public function getBancCodigobacen(): ?string
    {
        return $this->bancCodigobacen;
    }

    public function setBancCodigobacen(string $bancCodigobacen): self
    {
        $this->bancCodigobacen = $bancCodigobacen;

        return $this;
    }

    public function getBancNome(): ?string
    {
        return $this->bancNome;
    }

    public function setBancNome(string $bancNome): self
    {
        $this->bancNome = $bancNome;

        return $this;
    }

    public function getBancSegmento(): ?string
    {
        return $this->bancSegmento;
    }

    public function setBancSegmento(string $bancSegmento): self
    {
        $this->bancSegmento = $bancSegmento;

        return $this;
    }

    public function getBancCnpj(): ?string
    {
        return $this->bancCnpj;
    }

    public function setBancCnpj(string $bancCnpj): self
    {
        $this->bancCnpj = $bancCnpj;

        return $this;
    }
}
