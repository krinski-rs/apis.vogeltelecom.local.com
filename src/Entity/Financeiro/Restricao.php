<?php

namespace App\Entity\Financeiro;

class Restricao
{
    private $restCodigoid;

    private $restContratardeterceiro;

    private $restDivulgaramarca;

    private $restMudarmeiotransmicao;

    private $restTransferirdireitos;

    private $contCodigoid;

    public function getRestCodigoid(): ?int
    {
        return $this->restCodigoid;
    }

    public function getRestContratardeterceiro(): ?bool
    {
        return $this->restContratardeterceiro;
    }

    public function setRestContratardeterceiro(bool $restContratardeterceiro): self
    {
        $this->restContratardeterceiro = $restContratardeterceiro;

        return $this;
    }

    public function getRestDivulgaramarca(): ?bool
    {
        return $this->restDivulgaramarca;
    }

    public function setRestDivulgaramarca(bool $restDivulgaramarca): self
    {
        $this->restDivulgaramarca = $restDivulgaramarca;

        return $this;
    }

    public function getRestMudarmeiotransmicao(): ?bool
    {
        return $this->restMudarmeiotransmicao;
    }

    public function setRestMudarmeiotransmicao(bool $restMudarmeiotransmicao): self
    {
        $this->restMudarmeiotransmicao = $restMudarmeiotransmicao;

        return $this;
    }

    public function getRestTransferirdireitos(): ?bool
    {
        return $this->restTransferirdireitos;
    }

    public function setRestTransferirdireitos(bool $restTransferirdireitos): self
    {
        $this->restTransferirdireitos = $restTransferirdireitos;

        return $this;
    }

    public function getContCodigoid(): ?Contrato
    {
        return $this->contCodigoid;
    }

    public function setContCodigoid(?Contrato $contCodigoid): self
    {
        $this->contCodigoid = $contCodigoid;

        return $this;
    }
}
