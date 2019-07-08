<?php

namespace App\Entity\Financeiro;

class Postagem
{
    private $postCodigoid;

    private $usuaCodigoid;

    private $postDatainc;

    private $postDatarecebimento;

    private $arCodigoid;

    private $fatuCodigoid;

    public function getPostCodigoid(): ?int
    {
        return $this->postCodigoid;
    }

    public function getUsuaCodigoid(): ?int
    {
        return $this->usuaCodigoid;
    }

    public function setUsuaCodigoid(int $usuaCodigoid): self
    {
        $this->usuaCodigoid = $usuaCodigoid;

        return $this;
    }

    public function getPostDatainc(): ?\DateTimeInterface
    {
        return $this->postDatainc;
    }

    public function setPostDatainc(\DateTimeInterface $postDatainc): self
    {
        $this->postDatainc = $postDatainc;

        return $this;
    }

    public function getPostDatarecebimento(): ?\DateTimeInterface
    {
        return $this->postDatarecebimento;
    }

    public function setPostDatarecebimento(?\DateTimeInterface $postDatarecebimento): self
    {
        $this->postDatarecebimento = $postDatarecebimento;

        return $this;
    }

    public function getArCodigoid(): ?Ar
    {
        return $this->arCodigoid;
    }

    public function setArCodigoid(?Ar $arCodigoid): self
    {
        $this->arCodigoid = $arCodigoid;

        return $this;
    }

    public function getFatuCodigoid(): ?Fatura
    {
        return $this->fatuCodigoid;
    }

    public function setFatuCodigoid(?Fatura $fatuCodigoid): self
    {
        $this->fatuCodigoid = $fatuCodigoid;

        return $this;
    }
}
