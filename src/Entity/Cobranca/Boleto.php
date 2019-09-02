<?php

namespace App\Entity\Cobranca;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class Boleto
{
    private $boleCodigoid;

    private $dateVencimento;

    private $documentoNumero;

    private $codigo;

    private $idBoletoPagador;

    private $idBoletoStatus;

    private $descricao;

    private $dateRecord;

    private $valorDocumento;

    private $nossoNumero;

    private $valordiaTaxamesJuro;

    private $carteira;

    private $cc;

    public function __construct()
    {
        $this->cc = new ArrayCollection();
    }

    public function getBoleCodigoid(): ?int
    {
        return $this->boleCodigoid;
    }

    public function getDateVencimento(): ?\DateTimeInterface
    {
        return $this->dateVencimento;
    }

    public function setDateVencimento(\DateTimeInterface $dateVencimento): self
    {
        $this->dateVencimento = $dateVencimento;

        return $this;
    }

    public function getDocumentoNumero(): ?string
    {
        return $this->documentoNumero;
    }

    public function setDocumentoNumero(?string $documentoNumero): self
    {
        $this->documentoNumero = $documentoNumero;

        return $this;
    }

    public function getCodigo(): ?string
    {
        return $this->codigo;
    }

    public function setCodigo(?string $codigo): self
    {
        $this->codigo = $codigo;

        return $this;
    }

    public function getIdBoletoPagador(): ?int
    {
        return $this->idBoletoPagador;
    }

    public function setIdBoletoPagador(int $idBoletoPagador): self
    {
        $this->idBoletoPagador = $idBoletoPagador;

        return $this;
    }

    public function getIdBoletoStatus(): ?int
    {
        return $this->idBoletoStatus;
    }

    public function setIdBoletoStatus(int $idBoletoStatus): self
    {
        $this->idBoletoStatus = $idBoletoStatus;

        return $this;
    }

    public function getDescricao(): ?string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getDateRecord(): ?\DateTimeInterface
    {
        return $this->dateRecord;
    }

    public function setDateRecord(\DateTimeInterface $dateRecord): self
    {
        $this->dateRecord = $dateRecord;

        return $this;
    }

    public function getValorDocumento()
    {
        return $this->valorDocumento;
    }

    public function setValorDocumento($valorDocumento): self
    {
        $this->valorDocumento = $valorDocumento;

        return $this;
    }

    public function getNossoNumero(): ?string
    {
        return $this->nossoNumero;
    }

    public function setNossoNumero(?string $nossoNumero): self
    {
        $this->nossoNumero = $nossoNumero;

        return $this;
    }

    public function getValordiaTaxamesJuro()
    {
        return $this->valordiaTaxamesJuro;
    }

    public function setValordiaTaxamesJuro($valordiaTaxamesJuro): self
    {
        $this->valordiaTaxamesJuro = $valordiaTaxamesJuro;

        return $this;
    }

    public function getCarteira(): ?int
    {
        return $this->carteira;
    }

    public function setCarteira(?int $carteira): self
    {
        $this->carteira = $carteira;

        return $this;
    }

    /**
     * @return Collection|Cc[]
     */
    public function getCc(): Collection
    {
        return $this->cc;
    }

    public function addCc(Cc $cc): self
    {
        if (!$this->cc->contains($cc)) {
            $this->cc[] = $cc;
        }

        return $this;
    }

    public function removeCc(Cc $cc): self
    {
        if ($this->cc->contains($cc)) {
            $this->cc->removeElement($cc);
        }

        return $this;
    }
}
