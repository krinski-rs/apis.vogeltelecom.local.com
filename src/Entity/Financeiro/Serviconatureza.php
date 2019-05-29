<?php

namespace App\Entity\Financeiro;

/**
 * Serviconatureza
 */
class Serviconatureza
{
    /**
     * @var int
     */
    private $servnatuCodigoid;

    /**
     * @var string
     */
    private $servnatuPercentual;

    /**
     * @var string
     */
    private $servnatuBaseicms;

    /**
     * @var bool
     */
    private $servnatuCedente;

    /**
     * @var \App\Entity\Financeiro\Dadosbancarios
     */
    private $dadobancCodigoid;

    /**
     * @var \App\Entity\Financeiro\Natureza
     */
    private $natuCodigoid;

    /**
     * @var \App\Entity\Financeiro\Servico
     */
    private $servCodigoid;


    /**
     * Get servnatuCodigoid.
     *
     * @return int
     */
    public function getServnatuCodigoid()
    {
        return $this->servnatuCodigoid;
    }

    /**
     * Set servnatuPercentual.
     *
     * @param string $servnatuPercentual
     *
     * @return Serviconatureza
     */
    public function setServnatuPercentual($servnatuPercentual)
    {
        $this->servnatuPercentual = $servnatuPercentual;

        return $this;
    }

    /**
     * Get servnatuPercentual.
     *
     * @return string
     */
    public function getServnatuPercentual()
    {
        return $this->servnatuPercentual;
    }

    /**
     * Set servnatuBaseicms.
     *
     * @param string $servnatuBaseicms
     *
     * @return Serviconatureza
     */
    public function setServnatuBaseicms($servnatuBaseicms)
    {
        $this->servnatuBaseicms = $servnatuBaseicms;

        return $this;
    }

    /**
     * Get servnatuBaseicms.
     *
     * @return string
     */
    public function getServnatuBaseicms()
    {
        return $this->servnatuBaseicms;
    }

    /**
     * Set servnatuCedente.
     *
     * @param bool $servnatuCedente
     *
     * @return Serviconatureza
     */
    public function setServnatuCedente($servnatuCedente)
    {
        $this->servnatuCedente = $servnatuCedente;

        return $this;
    }

    /**
     * Get servnatuCedente.
     *
     * @return bool
     */
    public function getServnatuCedente()
    {
        return $this->servnatuCedente;
    }

    /**
     * Set dadobancCodigoid.
     *
     * @param \App\Entity\Financeiro\Dadosbancarios|null $dadobancCodigoid
     *
     * @return Serviconatureza
     */
    public function setDadobancCodigoid(\App\Entity\Financeiro\Dadosbancarios $dadobancCodigoid = null)
    {
        $this->dadobancCodigoid = $dadobancCodigoid;

        return $this;
    }

    /**
     * Get dadobancCodigoid.
     *
     * @return \App\Entity\Financeiro\Dadosbancarios|null
     */
    public function getDadobancCodigoid()
    {
        return $this->dadobancCodigoid;
    }

    /**
     * Set natuCodigoid.
     *
     * @param \App\Entity\Financeiro\Natureza|null $natuCodigoid
     *
     * @return Serviconatureza
     */
    public function setNatuCodigoid(\App\Entity\Financeiro\Natureza $natuCodigoid = null)
    {
        $this->natuCodigoid = $natuCodigoid;

        return $this;
    }

    /**
     * Get natuCodigoid.
     *
     * @return \App\Entity\Financeiro\Natureza|null
     */
    public function getNatuCodigoid()
    {
        return $this->natuCodigoid;
    }

    /**
     * Set servCodigoid.
     *
     * @param \App\Entity\Financeiro\Servico|null $servCodigoid
     *
     * @return Serviconatureza
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
