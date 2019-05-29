<?php

namespace App\Entity\Financeiro;

/**
 * EnderecoentregaatributovalorHisto
 */
class EnderecoentregaatributovalorHisto
{
    /**
     * @var int
     */
    private $endeentratrivaloHisto;

    /**
     * @var int|null
     */
    private $atrivaloCodigoid;

    /**
     * @var string|null
     */
    private $endeentratrivaloValor;

    /**
     * @var string|null
     */
    private $endeentratrivaloDescricao;

    /**
     * @var \DateTime|null
     */
    private $dataInc;

    /**
     * @var int|null
     */
    private $registrante;

    /**
     * @var \App\Entity\Financeiro\Enderecoentregaatributovalor
     */
    private $endeentratrivaloCodigoid;


    /**
     * Get endeentratrivaloHisto.
     *
     * @return int
     */
    public function getEndeentratrivaloHisto()
    {
        return $this->endeentratrivaloHisto;
    }

    /**
     * Set atrivaloCodigoid.
     *
     * @param int|null $atrivaloCodigoid
     *
     * @return EnderecoentregaatributovalorHisto
     */
    public function setAtrivaloCodigoid($atrivaloCodigoid = null)
    {
        $this->atrivaloCodigoid = $atrivaloCodigoid;

        return $this;
    }

    /**
     * Get atrivaloCodigoid.
     *
     * @return int|null
     */
    public function getAtrivaloCodigoid()
    {
        return $this->atrivaloCodigoid;
    }

    /**
     * Set endeentratrivaloValor.
     *
     * @param string|null $endeentratrivaloValor
     *
     * @return EnderecoentregaatributovalorHisto
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
     * @return EnderecoentregaatributovalorHisto
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
     * @param \DateTime|null $dataInc
     *
     * @return EnderecoentregaatributovalorHisto
     */
    public function setDataInc($dataInc = null)
    {
        $this->dataInc = $dataInc;

        return $this;
    }

    /**
     * Get dataInc.
     *
     * @return \DateTime|null
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
     * @return EnderecoentregaatributovalorHisto
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
     * Set endeentratrivaloCodigoid.
     *
     * @param \App\Entity\Financeiro\Enderecoentregaatributovalor|null $endeentratrivaloCodigoid
     *
     * @return EnderecoentregaatributovalorHisto
     */
    public function setEndeentratrivaloCodigoid(\App\Entity\Financeiro\Enderecoentregaatributovalor $endeentratrivaloCodigoid = null)
    {
        $this->endeentratrivaloCodigoid = $endeentratrivaloCodigoid;

        return $this;
    }

    /**
     * Get endeentratrivaloCodigoid.
     *
     * @return \App\Entity\Financeiro\Enderecoentregaatributovalor|null
     */
    public function getEndeentratrivaloCodigoid()
    {
        return $this->endeentratrivaloCodigoid;
    }
}
