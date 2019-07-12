<?php

namespace App\Entity\Financeiro;

class Notificacaovencimento
{
    private $notvencCodigoid;

    private $notvencDatainc;

    private $notvencUsuacodigoid;

    private $notvencDataconfirmacao;

    private $notvencDescricaoconfirmacao;

    private $contCodigoid;

    public function getNotvencCodigoid(): ?int
    {
        return $this->notvencCodigoid;
    }

    public function getNotvencDatainc(): ?\DateTimeInterface
    {
        return $this->notvencDatainc;
    }

    public function setNotvencDatainc(\DateTimeInterface $notvencDatainc): self
    {
        $this->notvencDatainc = $notvencDatainc;

        return $this;
    }

    public function getNotvencUsuacodigoid(): ?int
    {
        return $this->notvencUsuacodigoid;
    }

    public function setNotvencUsuacodigoid(int $notvencUsuacodigoid): self
    {
        $this->notvencUsuacodigoid = $notvencUsuacodigoid;

        return $this;
    }

    public function getNotvencDataconfirmacao(): ?\DateTimeInterface
    {
        return $this->notvencDataconfirmacao;
    }

    public function setNotvencDataconfirmacao(?\DateTimeInterface $notvencDataconfirmacao): self
    {
        $this->notvencDataconfirmacao = $notvencDataconfirmacao;

        return $this;
    }

    public function getNotvencDescricaoconfirmacao(): ?string
    {
        return $this->notvencDescricaoconfirmacao;
    }

    public function setNotvencDescricaoconfirmacao(?string $notvencDescricaoconfirmacao): self
    {
        $this->notvencDescricaoconfirmacao = $notvencDescricaoconfirmacao;

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
