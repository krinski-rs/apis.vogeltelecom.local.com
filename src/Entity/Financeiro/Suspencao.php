<?php

namespace App\Entity\Financeiro;

/**
 * Suspencao
 */
class Suspencao
{
    /**
     * @var int
     */
    private $suspCodigoid;

    /**
     * @var int|null
     */
    private $usuaCodigoid;

    /**
     * @var \DateTime
     */
    private $suspDatainc = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime|null
     */
    private $suspDatasuspenso;

    /**
     * @var \App\Entity\Financeiro\Contrato
     */
    private $contCodigoid;


    /**
     * Get suspCodigoid.
     *
     * @return int
     */
    public function getSuspCodigoid()
    {
        return $this->suspCodigoid;
    }

    /**
     * Set usuaCodigoid.
     *
     * @param int|null $usuaCodigoid
     *
     * @return Suspencao
     */
    public function setUsuaCodigoid($usuaCodigoid = null)
    {
        $this->usuaCodigoid = $usuaCodigoid;

        return $this;
    }

    /**
     * Get usuaCodigoid.
     *
     * @return int|null
     */
    public function getUsuaCodigoid()
    {
        return $this->usuaCodigoid;
    }

    /**
     * Set suspDatainc.
     *
     * @param \DateTime $suspDatainc
     *
     * @return Suspencao
     */
    public function setSuspDatainc($suspDatainc)
    {
        $this->suspDatainc = $suspDatainc;

        return $this;
    }

    /**
     * Get suspDatainc.
     *
     * @return \DateTime
     */
    public function getSuspDatainc()
    {
        return $this->suspDatainc;
    }

    /**
     * Set suspDatasuspenso.
     *
     * @param \DateTime|null $suspDatasuspenso
     *
     * @return Suspencao
     */
    public function setSuspDatasuspenso($suspDatasuspenso = null)
    {
        $this->suspDatasuspenso = $suspDatasuspenso;

        return $this;
    }

    /**
     * Get suspDatasuspenso.
     *
     * @return \DateTime|null
     */
    public function getSuspDatasuspenso()
    {
        return $this->suspDatasuspenso;
    }

    /**
     * Set contCodigoid.
     *
     * @param \App\Entity\Financeiro\Contrato|null $contCodigoid
     *
     * @return Suspencao
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
}
