<?php

namespace App\Entity\Financeiro;

/**
 * InformacaoAdicionalCircuito
 */
class InformacaoAdicionalCircuito
{
    /**
     * @var int
     */
    private $infoadiccircCodigoid;

    /**
     * @var \DateTime
     */
    private $infoadiccircDatainc = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     */
    private $infoadiccircDescricao;

    /**
     * @var string
     */
    private $infoadiccircTipo;

    /**
     * @var \App\Entity\Financeiro\Contrato
     */
    private $contCodigoid;

    /**
     * @var \App\Entity\Gcdb\AutUsuarios
     */
    private $usuaCodigoid;

    /**
     * @var \App\Entity\Gcdb\AutUsuarios
     */
    private $usuaCodigoidRemovido;


    /**
     * Get infoadiccircCodigoid.
     *
     * @return int
     */
    public function getInfoadiccircCodigoid()
    {
        return $this->infoadiccircCodigoid;
    }

    /**
     * Set infoadiccircDatainc.
     *
     * @param \DateTime $infoadiccircDatainc
     *
     * @return InformacaoAdicionalCircuito
     */
    public function setInfoadiccircDatainc($infoadiccircDatainc)
    {
        $this->infoadiccircDatainc = $infoadiccircDatainc;

        return $this;
    }

    /**
     * Get infoadiccircDatainc.
     *
     * @return \DateTime
     */
    public function getInfoadiccircDatainc()
    {
        return $this->infoadiccircDatainc;
    }

    /**
     * Set infoadiccircDescricao.
     *
     * @param string $infoadiccircDescricao
     *
     * @return InformacaoAdicionalCircuito
     */
    public function setInfoadiccircDescricao($infoadiccircDescricao)
    {
        $this->infoadiccircDescricao = $infoadiccircDescricao;

        return $this;
    }

    /**
     * Get infoadiccircDescricao.
     *
     * @return string
     */
    public function getInfoadiccircDescricao()
    {
        return $this->infoadiccircDescricao;
    }

    /**
     * Set infoadiccircTipo.
     *
     * @param string $infoadiccircTipo
     *
     * @return InformacaoAdicionalCircuito
     */
    public function setInfoadiccircTipo($infoadiccircTipo)
    {
        $this->infoadiccircTipo = $infoadiccircTipo;

        return $this;
    }

    /**
     * Get infoadiccircTipo.
     *
     * @return string
     */
    public function getInfoadiccircTipo()
    {
        return $this->infoadiccircTipo;
    }

    /**
     * Set contCodigoid.
     *
     * @param \App\Entity\Financeiro\Contrato|null $contCodigoid
     *
     * @return InformacaoAdicionalCircuito
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
     * Set usuaCodigoid.
     *
     * @param \App\Entity\Gcdb\AutUsuarios|null $usuaCodigoid
     *
     * @return InformacaoAdicionalCircuito
     */
    public function setUsuaCodigoid(\App\Entity\Gcdb\AutUsuarios $usuaCodigoid = null)
    {
        $this->usuaCodigoid = $usuaCodigoid;

        return $this;
    }

    /**
     * Get usuaCodigoid.
     *
     * @return \App\Entity\Gcdb\AutUsuarios|null
     */
    public function getUsuaCodigoid()
    {
        return $this->usuaCodigoid;
    }

    /**
     * Set usuaCodigoidRemovido.
     *
     * @param \App\Entity\Gcdb\AutUsuarios|null $usuaCodigoidRemovido
     *
     * @return InformacaoAdicionalCircuito
     */
    public function setUsuaCodigoidRemovido(\App\Entity\Gcdb\AutUsuarios $usuaCodigoidRemovido = null)
    {
        $this->usuaCodigoidRemovido = $usuaCodigoidRemovido;

        return $this;
    }

    /**
     * Get usuaCodigoidRemovido.
     *
     * @return \App\Entity\Gcdb\AutUsuarios|null
     */
    public function getUsuaCodigoidRemovido()
    {
        return $this->usuaCodigoidRemovido;
    }
}
