<?php

namespace App\Entity\Cobranca;

class LoteArquivo
{
    private $arquCodigoid;

    private $arquivo;

    private $codAutenticidade;

    private $idUser;

    private $dataInc;

    public function getArquCodigoid(): ?int
    {
        return $this->arquCodigoid;
    }

    public function getArquivo(): ?string
    {
        return $this->arquivo;
    }

    public function setArquivo(string $arquivo): self
    {
        $this->arquivo = $arquivo;

        return $this;
    }

    public function getCodAutenticidade(): ?string
    {
        return $this->codAutenticidade;
    }

    public function setCodAutenticidade(string $codAutenticidade): self
    {
        $this->codAutenticidade = $codAutenticidade;

        return $this;
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(int $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getDataInc(): ?\DateTimeInterface
    {
        return $this->dataInc;
    }

    public function setDataInc(\DateTimeInterface $dataInc): self
    {
        $this->dataInc = $dataInc;

        return $this;
    }
}
