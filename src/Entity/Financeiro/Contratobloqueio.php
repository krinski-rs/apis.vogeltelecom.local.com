<?php

namespace App\Entity\Financeiro;

/**
 * Contratobloqueio
 */
class Contratobloqueio
{
    /**
     * @var int
     */
    private $contbloqCodigoid;

    /**
     * @var string|null
     */
    private $contbloqMotivo;

    /**
     * @var int|null
     */
    private $contbloqUsuario;

    /**
     * @var \DateTime|null
     */
    private $contbloqDatainc = 'CURRENT_TIMESTAMP';

    /**
     * @var \App\Entity\Financeiro\Bloqueio
     */
    private $bloqCodigoid;

    /**
     * @var \App\Entity\Financeiro\Contrato
     */
    private $contCodigoid;


    /**
     * Get contbloqCodigoid.
     *
     * @return int
     */
    public function getContbloqCodigoid()
    {
        return $this->contbloqCodigoid;
    }

    /**
     * Set contbloqMotivo.
     *
     * @param string|null $contbloqMotivo
     *
     * @return Contratobloqueio
     */
    public function setContbloqMotivo($contbloqMotivo = null)
    {
        $this->contbloqMotivo = $contbloqMotivo;

        return $this;
    }

    /**
     * Get contbloqMotivo.
     *
     * @return string|null
     */
    public function getContbloqMotivo()
    {
        return $this->contbloqMotivo;
    }

    /**
     * Set contbloqUsuario.
     *
     * @param int|null $contbloqUsuario
     *
     * @return Contratobloqueio
     */
    public function setContbloqUsuario($contbloqUsuario = null)
    {
        $this->contbloqUsuario = $contbloqUsuario;

        return $this;
    }

    /**
     * Get contbloqUsuario.
     *
     * @return int|null
     */
    public function getContbloqUsuario()
    {
        return $this->contbloqUsuario;
    }

    /**
     * Set contbloqDatainc.
     *
     * @param \DateTime|null $contbloqDatainc
     *
     * @return Contratobloqueio
     */
    public function setContbloqDatainc($contbloqDatainc = null)
    {
        $this->contbloqDatainc = $contbloqDatainc;

        return $this;
    }

    /**
     * Get contbloqDatainc.
     *
     * @return \DateTime|null
     */
    public function getContbloqDatainc()
    {
        return $this->contbloqDatainc;
    }

    /**
     * Set bloqCodigoid.
     *
     * @param \App\Entity\Financeiro\Bloqueio|null $bloqCodigoid
     *
     * @return Contratobloqueio
     */
    public function setBloqCodigoid(\App\Entity\Financeiro\Bloqueio $bloqCodigoid = null)
    {
        $this->bloqCodigoid = $bloqCodigoid;

        return $this;
    }

    /**
     * Get bloqCodigoid.
     *
     * @return \App\Entity\Financeiro\Bloqueio|null
     */
    public function getBloqCodigoid()
    {
        return $this->bloqCodigoid;
    }

    /**
     * Set contCodigoid.
     *
     * @param \App\Entity\Financeiro\Contrato|null $contCodigoid
     *
     * @return Contratobloqueio
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
