<?php

namespace App\Entity\Financeiro;

/**
 * Contratocontato
 */
class Contratocontato
{
    /**
     * @var int
     */
    private $contcontCodigoid;

    /**
     * @var int
     */
    private $usrCodigoid;

    /**
     * @var string
     */
    private $contcontContato;

    /**
     * @var \App\Entity\Financeiro\Contrato
     */
    private $contCodigoid;


    /**
     * Get contcontCodigoid.
     *
     * @return int
     */
    public function getContcontCodigoid()
    {
        return $this->contcontCodigoid;
    }

    /**
     * Set usrCodigoid.
     *
     * @param int $usrCodigoid
     *
     * @return Contratocontato
     */
    public function setUsrCodigoid($usrCodigoid)
    {
        $this->usrCodigoid = $usrCodigoid;

        return $this;
    }

    /**
     * Get usrCodigoid.
     *
     * @return int
     */
    public function getUsrCodigoid()
    {
        return $this->usrCodigoid;
    }

    /**
     * Set contcontContato.
     *
     * @param string $contcontContato
     *
     * @return Contratocontato
     */
    public function setContcontContato($contcontContato)
    {
        $this->contcontContato = $contcontContato;

        return $this;
    }

    /**
     * Get contcontContato.
     *
     * @return string
     */
    public function getContcontContato()
    {
        return $this->contcontContato;
    }

    /**
     * Set contCodigoid.
     *
     * @param \App\Entity\Financeiro\Contrato|null $contCodigoid
     *
     * @return Contratocontato
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
