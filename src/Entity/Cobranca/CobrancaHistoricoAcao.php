<?php

namespace App\Entity\Cobranca;

class CobrancaHistoricoAcao
{
    private $cobrancaAcaoId;

    private $cobrancaHistorico;

    public function getCobrancaAcaoId(): ?int
    {
        return $this->cobrancaAcaoId;
    }

    public function getCobrancaHistorico(): ?CobrancaHistorico
    {
        return $this->cobrancaHistorico;
    }

    public function setCobrancaHistorico(?CobrancaHistorico $cobrancaHistorico): self
    {
        $this->cobrancaHistorico = $cobrancaHistorico;

        return $this;
    }
}
