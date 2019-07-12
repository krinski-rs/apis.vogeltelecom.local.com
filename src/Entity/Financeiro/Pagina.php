<?php

namespace App\Entity\Financeiro;

class Pagina
{
    private $pagiCodigoid;

    private $pagiPagina;

    private $pagiNome;

    private $pagiExtensao;

    private $pagiDatainc;

    private $pagiTexto;

    private $docuCodigoid;

    private $pagiProxima;

    public function getPagiCodigoid(): ?int
    {
        return $this->pagiCodigoid;
    }

    public function getPagiPagina(): ?int
    {
        return $this->pagiPagina;
    }

    public function setPagiPagina(int $pagiPagina): self
    {
        $this->pagiPagina = $pagiPagina;

        return $this;
    }

    public function getPagiNome(): ?string
    {
        return $this->pagiNome;
    }

    public function setPagiNome(string $pagiNome): self
    {
        $this->pagiNome = $pagiNome;

        return $this;
    }

    public function getPagiExtensao(): ?string
    {
        return $this->pagiExtensao;
    }

    public function setPagiExtensao(string $pagiExtensao): self
    {
        $this->pagiExtensao = $pagiExtensao;

        return $this;
    }

    public function getPagiDatainc(): ?\DateTimeInterface
    {
        return $this->pagiDatainc;
    }

    public function setPagiDatainc(\DateTimeInterface $pagiDatainc): self
    {
        $this->pagiDatainc = $pagiDatainc;

        return $this;
    }

    public function getPagiTexto(): ?string
    {
        return $this->pagiTexto;
    }

    public function setPagiTexto(?string $pagiTexto): self
    {
        $this->pagiTexto = $pagiTexto;

        return $this;
    }

    public function getDocuCodigoid(): ?Documento
    {
        return $this->docuCodigoid;
    }

    public function setDocuCodigoid(?Documento $docuCodigoid): self
    {
        $this->docuCodigoid = $docuCodigoid;

        return $this;
    }

    public function getPagiProxima(): ?self
    {
        return $this->pagiProxima;
    }

    public function setPagiProxima(?self $pagiProxima): self
    {
        $this->pagiProxima = $pagiProxima;

        return $this;
    }
}
