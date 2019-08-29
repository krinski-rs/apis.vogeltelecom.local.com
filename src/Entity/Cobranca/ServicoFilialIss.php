<?php

namespace App\Entity\Cobranca;

class ServicoFilialIss
{
    private $idServicoFilialIss;

    private $idFilial;

    private $codigoIss;

    private $invoiceTypeServico;

    public function getIdServicoFilialIss(): ?int
    {
        return $this->idServicoFilialIss;
    }

    public function getIdFilial(): ?int
    {
        return $this->idFilial;
    }

    public function setIdFilial(?int $idFilial): self
    {
        $this->idFilial = $idFilial;

        return $this;
    }

    public function getCodigoIss(): ?string
    {
        return $this->codigoIss;
    }

    public function setCodigoIss(?string $codigoIss): self
    {
        $this->codigoIss = $codigoIss;

        return $this;
    }

    public function getInvoiceTypeServico(): ?InvoiceTypeServico
    {
        return $this->invoiceTypeServico;
    }

    public function setInvoiceTypeServico(?InvoiceTypeServico $invoiceTypeServico): self
    {
        $this->invoiceTypeServico = $invoiceTypeServico;

        return $this;
    }
}
