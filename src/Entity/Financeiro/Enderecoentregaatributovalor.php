<?php

namespace App\Entity\Financeiro;

/**
 * Enderecoentregaatributovalor
 */
class Enderecoentregaatributovalor
{
    /**
     * @var int
     */
    private $endeentratrivaloCodigoid;

    /**
     * @var int|null
     */
    private $endeentratrivaloPaicodigoid;

    /**
     * @var int|null
     */
    private $endeentrCodigoid;

    /**
     * @var string|null
     */
    private $endeentratrivaloValor;

    /**
     * @var string|null
     */
    private $endeentratrivaloDescricao;

    /**
     * @var \DateTime
     */
    private $dataInc = 'CURRENT_TIMESTAMP';

    /**
     * @var int|null
     */
    private $registrante;

    /**
     * @var \DateTime|null
     */
    private $endeentratrivaloDatafim;

    /**
     * @var \App\Entity\Financeiro\Atributovalor
     */
    private $atrivaloCodigoid;

    /**
     * @var \App\Entity\Financeiro\Contrato
     */
    private $contrato;


    /**
     * Get endeentratrivaloCodigoid.
     *
     * @return int
     */
    public function getEndeentratrivaloCodigoid()
    {
        return $this->endeentratrivaloCodigoid;
    }

    /**
     * Set endeentratrivaloPaicodigoid.
     *
     * @param int|null $endeentratrivaloPaicodigoid
     *
     * @return Enderecoentregaatributovalor
     */
    public function setEndeentratrivaloPaicodigoid($endeentratrivaloPaicodigoid = null)
    {
        $this->endeentratrivaloPaicodigoid = $endeentratrivaloPaicodigoid;

        return $this;
    }

    /**
     * Get endeentratrivaloPaicodigoid.
     *
     * @return int|null
     */
    public function getEndeentratrivaloPaicodigoid()
    {
        return $this->endeentratrivaloPaicodigoid;
    }

    /**
     * Set contCodigoid.
     *
     * @param int $contCodigoid
     *
     * @return Enderecoentregaatributovalor
     */
    public function setContCodigoid($contCodigoid)
    {
        $this->contCodigoid = $contCodigoid;

        return $this;
    }

    /**
     * Get contCodigoid.
     *
     * @return int
     */
    public function getContCodigoid()
    {
        return $this->contCodigoid;
    }

    /**
     * Set endeentrCodigoid.
     *
     * @param int|null $endeentrCodigoid
     *
     * @return Enderecoentregaatributovalor
     */
    public function setEndeentrCodigoid($endeentrCodigoid = null)
    {
        $this->endeentrCodigoid = $endeentrCodigoid;

        return $this;
    }

    /**
     * Get endeentrCodigoid.
     *
     * @return int|null
     */
    public function getEndeentrCodigoid()
    {
        return $this->endeentrCodigoid;
    }

    /**
     * Set endeentratrivaloValor.
     *
     * @param string|null $endeentratrivaloValor
     *
     * @return Enderecoentregaatributovalor
     */
    public function setEndeentratrivaloValor($endeentratrivaloValor = null)
    {
        $this->endeentratrivaloValor = $endeentratrivaloValor;

        return $this;
    }

    /**
     * Get endeentratrivaloValor.
     *
     * @return string|null
     */
    public function getEndeentratrivaloValor()
    {
        return $this->endeentratrivaloValor;
    }

    /**
     * Set endeentratrivaloDescricao.
     *
     * @param string|null $endeentratrivaloDescricao
     *
     * @return Enderecoentregaatributovalor
     */
    public function setEndeentratrivaloDescricao($endeentratrivaloDescricao = null)
    {
        $this->endeentratrivaloDescricao = $endeentratrivaloDescricao;

        return $this;
    }

    /**
     * Get endeentratrivaloDescricao.
     *
     * @return string|null
     */
    public function getEndeentratrivaloDescricao()
    {
        return $this->endeentratrivaloDescricao;
    }

    /**
     * Set dataInc.
     *
     * @param \DateTime $dataInc
     *
     * @return Enderecoentregaatributovalor
     */
    public function setDataInc($dataInc)
    {
        $this->dataInc = $dataInc;

        return $this;
    }

    /**
     * Get dataInc.
     *
     * @return \DateTime
     */
    public function getDataInc()
    {
        return $this->dataInc;
    }

    /**
     * Set registrante.
     *
     * @param int|null $registrante
     *
     * @return Enderecoentregaatributovalor
     */
    public function setRegistrante($registrante = null)
    {
        $this->registrante = $registrante;

        return $this;
    }

    /**
     * Get registrante.
     *
     * @return int|null
     */
    public function getRegistrante()
    {
        return $this->registrante;
    }

    /**
     * Set endeentratrivaloDatafim.
     *
     * @param \DateTime|null $endeentratrivaloDatafim
     *
     * @return Enderecoentregaatributovalor
     */
    public function setEndeentratrivaloDatafim($endeentratrivaloDatafim = null)
    {
        $this->endeentratrivaloDatafim = $endeentratrivaloDatafim;

        return $this;
    }

    /**
     * Get endeentratrivaloDatafim.
     *
     * @return \DateTime|null
     */
    public function getEndeentratrivaloDatafim()
    {
        return $this->endeentratrivaloDatafim;
    }

    /**
     * Set atrivaloCodigoid.
     *
     * @param \App\Entity\Financeiro\Atributovalor|null $atrivaloCodigoid
     *
     * @return Enderecoentregaatributovalor
     */
    public function setAtrivaloCodigoid(\App\Entity\Financeiro\Atributovalor $atrivaloCodigoid = null)
    {
        $this->atrivaloCodigoid = $atrivaloCodigoid;

        return $this;
    }

    /**
     * Get atrivaloCodigoid.
     *
     * @return \App\Entity\Financeiro\Atributovalor|null
     */
    public function getAtrivaloCodigoid()
    {
        return $this->atrivaloCodigoid;
    }

    /**
     * Set contrato.
     *
     * @param \App\Entity\Financeiro\Contrato|null $contrato
     *
     * @return Enderecoentregaatributovalor
     */
    public function setContrato(\App\Entity\Financeiro\Contrato $contrato = null)
    {
        $this->contrato = $contrato;

        return $this;
    }

    /**
     * Get contrato.
     *
     * @return \App\Entity\Financeiro\Contrato|null
     */
    public function getContrato()
    {
        return $this->contrato;
    }
}
