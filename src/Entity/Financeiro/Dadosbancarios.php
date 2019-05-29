<?php

namespace App\Entity\Financeiro;

/**
 * Dadosbancarios
 */
class Dadosbancarios
{
    /**
     * @var int
     */
    private $dadobancCodigoid;

    /**
     * @var string
     */
    private $dadobancAgencia;

    /**
     * @var string
     */
    private $dadobancConta;

    /**
     * @var int
     */
    private $emprCodigoid;

    /**
     * @var string|null
     */
    private $dadobancCodigocedente;

    /**
     * @var \App\Entity\Financeiro\Banco
     */
    private $bancCodigoid;


    /**
     * Get dadobancCodigoid.
     *
     * @return int
     */
    public function getDadobancCodigoid()
    {
        return $this->dadobancCodigoid;
    }

    /**
     * Set dadobancAgencia.
     *
     * @param string $dadobancAgencia
     *
     * @return Dadosbancarios
     */
    public function setDadobancAgencia($dadobancAgencia)
    {
        $this->dadobancAgencia = $dadobancAgencia;

        return $this;
    }

    /**
     * Get dadobancAgencia.
     *
     * @return string
     */
    public function getDadobancAgencia()
    {
        return $this->dadobancAgencia;
    }

    /**
     * Set dadobancConta.
     *
     * @param string $dadobancConta
     *
     * @return Dadosbancarios
     */
    public function setDadobancConta($dadobancConta)
    {
        $this->dadobancConta = $dadobancConta;

        return $this;
    }

    /**
     * Get dadobancConta.
     *
     * @return string
     */
    public function getDadobancConta()
    {
        return $this->dadobancConta;
    }

    /**
     * Set emprCodigoid.
     *
     * @param int $emprCodigoid
     *
     * @return Dadosbancarios
     */
    public function setEmprCodigoid($emprCodigoid)
    {
        $this->emprCodigoid = $emprCodigoid;

        return $this;
    }

    /**
     * Get emprCodigoid.
     *
     * @return int
     */
    public function getEmprCodigoid()
    {
        return $this->emprCodigoid;
    }

    /**
     * Set dadobancCodigocedente.
     *
     * @param string|null $dadobancCodigocedente
     *
     * @return Dadosbancarios
     */
    public function setDadobancCodigocedente($dadobancCodigocedente = null)
    {
        $this->dadobancCodigocedente = $dadobancCodigocedente;

        return $this;
    }

    /**
     * Get dadobancCodigocedente.
     *
     * @return string|null
     */
    public function getDadobancCodigocedente()
    {
        return $this->dadobancCodigocedente;
    }

    /**
     * Set bancCodigoid.
     *
     * @param \App\Entity\Financeiro\Banco|null $bancCodigoid
     *
     * @return Dadosbancarios
     */
    public function setBancCodigoid(\App\Entity\Financeiro\Banco $bancCodigoid = null)
    {
        $this->bancCodigoid = $bancCodigoid;

        return $this;
    }

    /**
     * Get bancCodigoid.
     *
     * @return \App\Entity\Financeiro\Banco|null
     */
    public function getBancCodigoid()
    {
        return $this->bancCodigoid;
    }
}
