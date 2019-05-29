<?php

namespace App\Entity\Financeiro;

/**
 * Servicocapacidade
 */
class Servicocapacidade
{
    /**
     * @var int
     */
    private $servcapaCodigoid;

    /**
     * @var \DateTime
     */
    private $servicapaDatainc = 'CURRENT_TIMESTAMP';

    /**
     * @var bool
     */
    private $servcapaVisibilidade;

    /**
     * @var \App\Entity\Financeiro\Capacidade
     */
    private $capaCodigoid;

    /**
     * @var \App\Entity\Financeiro\Medida
     */
    private $mediCodigoid;

    /**
     * @var \App\Entity\Financeiro\Scriptmedicao
     */
    private $scrimediCodigoid;

    /**
     * @var \App\Entity\Financeiro\Servico
     */
    private $servCodigoid;


    /**
     * Get servcapaCodigoid.
     *
     * @return int
     */
    public function getServcapaCodigoid()
    {
        return $this->servcapaCodigoid;
    }

    /**
     * Set servicapaDatainc.
     *
     * @param \DateTime $servicapaDatainc
     *
     * @return Servicocapacidade
     */
    public function setServicapaDatainc($servicapaDatainc)
    {
        $this->servicapaDatainc = $servicapaDatainc;

        return $this;
    }

    /**
     * Get servicapaDatainc.
     *
     * @return \DateTime
     */
    public function getServicapaDatainc()
    {
        return $this->servicapaDatainc;
    }

    /**
     * Set servcapaVisibilidade.
     *
     * @param bool $servcapaVisibilidade
     *
     * @return Servicocapacidade
     */
    public function setServcapaVisibilidade($servcapaVisibilidade)
    {
        $this->servcapaVisibilidade = $servcapaVisibilidade;

        return $this;
    }

    /**
     * Get servcapaVisibilidade.
     *
     * @return bool
     */
    public function getServcapaVisibilidade()
    {
        return $this->servcapaVisibilidade;
    }

    /**
     * Set capaCodigoid.
     *
     * @param \App\Entity\Financeiro\Capacidade|null $capaCodigoid
     *
     * @return Servicocapacidade
     */
    public function setCapaCodigoid(\App\Entity\Financeiro\Capacidade $capaCodigoid = null)
    {
        $this->capaCodigoid = $capaCodigoid;

        return $this;
    }

    /**
     * Get capaCodigoid.
     *
     * @return \App\Entity\Financeiro\Capacidade|null
     */
    public function getCapaCodigoid()
    {
        return $this->capaCodigoid;
    }

    /**
     * Set mediCodigoid.
     *
     * @param \App\Entity\Financeiro\Medida|null $mediCodigoid
     *
     * @return Servicocapacidade
     */
    public function setMediCodigoid(\App\Entity\Financeiro\Medida $mediCodigoid = null)
    {
        $this->mediCodigoid = $mediCodigoid;

        return $this;
    }

    /**
     * Get mediCodigoid.
     *
     * @return \App\Entity\Financeiro\Medida|null
     */
    public function getMediCodigoid()
    {
        return $this->mediCodigoid;
    }

    /**
     * Set scrimediCodigoid.
     *
     * @param \App\Entity\Financeiro\Scriptmedicao|null $scrimediCodigoid
     *
     * @return Servicocapacidade
     */
    public function setScrimediCodigoid(\App\Entity\Financeiro\Scriptmedicao $scrimediCodigoid = null)
    {
        $this->scrimediCodigoid = $scrimediCodigoid;

        return $this;
    }

    /**
     * Get scrimediCodigoid.
     *
     * @return \App\Entity\Financeiro\Scriptmedicao|null
     */
    public function getScrimediCodigoid()
    {
        return $this->scrimediCodigoid;
    }

    /**
     * Set servCodigoid.
     *
     * @param \App\Entity\Financeiro\Servico|null $servCodigoid
     *
     * @return Servicocapacidade
     */
    public function setServCodigoid(\App\Entity\Financeiro\Servico $servCodigoid = null)
    {
        $this->servCodigoid = $servCodigoid;

        return $this;
    }

    /**
     * Get servCodigoid.
     *
     * @return \App\Entity\Financeiro\Servico|null
     */
    public function getServCodigoid()
    {
        return $this->servCodigoid;
    }
}
