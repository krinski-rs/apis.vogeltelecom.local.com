<?php

namespace App\Entity\Financeiro;

/**
 * Desativacao
 */
class Desativacao
{
    /**
     * @var int
     */
    private $desaCodigoid;

    /**
     * @var int|null
     */
    private $usuaCodigoid;

    /**
     * @var \DateTime
     */
    private $desaDatainc = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime|null
     */
    private $desaDatadesativado;

    /**
     * @var bool
     */
    private $desaAtivo = '1';

    /**
     * @var \App\Entity\Financeiro\Contrato
     */
    private $contCodigoid;


    /**
     * Get desaCodigoid.
     *
     * @return int
     */
    public function getDesaCodigoid()
    {
        return $this->desaCodigoid;
    }

    /**
     * Set usuaCodigoid.
     *
     * @param int|null $usuaCodigoid
     *
     * @return Desativacao
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
     * Set desaDatainc.
     *
     * @param \DateTime $desaDatainc
     *
     * @return Desativacao
     */
    public function setDesaDatainc($desaDatainc)
    {
        $this->desaDatainc = $desaDatainc;

        return $this;
    }

    /**
     * Get desaDatainc.
     *
     * @return \DateTime
     */
    public function getDesaDatainc()
    {
        return $this->desaDatainc;
    }

    /**
     * Set desaDatadesativado.
     *
     * @param \DateTime|null $desaDatadesativado
     *
     * @return Desativacao
     */
    public function setDesaDatadesativado($desaDatadesativado = null)
    {
        $this->desaDatadesativado = $desaDatadesativado;

        return $this;
    }

    /**
     * Get desaDatadesativado.
     *
     * @return \DateTime|null
     */
    public function getDesaDatadesativado()
    {
        return $this->desaDatadesativado;
    }

    /**
     * Set desaAtivo.
     *
     * @param bool $desaAtivo
     *
     * @return Desativacao
     */
    public function setDesaAtivo($desaAtivo)
    {
        $this->desaAtivo = $desaAtivo;

        return $this;
    }

    /**
     * Get desaAtivo.
     *
     * @return bool
     */
    public function getDesaAtivo()
    {
        return $this->desaAtivo;
    }

    /**
     * Set contCodigoid.
     *
     * @param \App\Entity\Financeiro\Contrato|null $contCodigoid
     *
     * @return Desativacao
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
