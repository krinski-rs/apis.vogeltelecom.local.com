<?php

namespace App\Entity\Financeiro;

/**
 * Contratoservico
 */
class Contratoservico
{
    /**
     * @var int
     */
    private $contservCodigoid;

    /**
     * @var string|null
     */
    private $contservCircuito;

    /**
     * @var \App\Entity\Financeiro\Contrato
     */
    private $contCodigoid;

    /**
     * @var \App\Entity\Financeiro\Servicocapacidade
     */
    private $servcapaCodigoid;


    /**
     * Get contservCodigoid.
     *
     * @return int
     */
    public function getContservCodigoid()
    {
        return $this->contservCodigoid;
    }

    /**
     * Set contservCircuito.
     *
     * @param string|null $contservCircuito
     *
     * @return Contratoservico
     */
    public function setContservCircuito($contservCircuito = null)
    {
        $this->contservCircuito = $contservCircuito;

        return $this;
    }

    /**
     * Get contservCircuito.
     *
     * @return string|null
     */
    public function getContservCircuito()
    {
        return $this->contservCircuito;
    }

    /**
     * Set contCodigoid.
     *
     * @param \App\Entity\Financeiro\Contrato|null $contCodigoid
     *
     * @return Contratoservico
     */
    public function setContCodigoid(\App\Entity\Financeiro\Contrato $contCodigoid = null)
    {
        $this->contCodigoid = $contCodigoid;

        return $this;
    }

    /**
     * Get contCodigoid.
     *
     * @return \App\Entity\Financeiro\Contrato|null
     */
    public function getContCodigoid()
    {
        return $this->contCodigoid;
    }

    /**
     * Set servcapaCodigoid.
     *
     * @param \App\Entity\Financeiro\Servicocapacidade|null $servcapaCodigoid
     *
     * @return Contratoservico
     */
    public function setServcapaCodigoid(\App\Entity\Financeiro\Servicocapacidade $servcapaCodigoid = null)
    {
        $this->servcapaCodigoid = $servcapaCodigoid;

        return $this;
    }

    /**
     * Get servcapaCodigoid.
     *
     * @return \App\Entity\Financeiro\Servicocapacidade|null
     */
    public function getServcapaCodigoid()
    {
        return $this->servcapaCodigoid;
    }
}
