<?php

namespace App\Entity\Financeiro;

/**
 * AtributoAdicional
 */
class AtributoAdicional
{
    /**
     * @var int
     */
    private $idAtributoAdiconal;

    /**
     * @var string|null
     */
    private $valor;

    /**
     * @var string|null
     */
    private $infoInterna;

    /**
     * @var string|null
     */
    private $infoExterna;

    /**
     * @var \DateTime|null
     */
    private $dataInc;

    /**
     * @var \App\Entity\Financeiro\Enderecoentregaatributovalor
     */
    private $endeentratrivaloCodigoid;


    /**
     * Get idAtributoAdiconal.
     *
     * @return int
     */
    public function getIdAtributoAdiconal()
    {
        return $this->idAtributoAdiconal;
    }

    /**
     * Set valor.
     *
     * @param string|null $valor
     *
     * @return AtributoAdicional
     */
    public function setValor($valor = null)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor.
     *
     * @return string|null
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set infoInterna.
     *
     * @param string|null $infoInterna
     *
     * @return AtributoAdicional
     */
    public function setInfoInterna($infoInterna = null)
    {
        $this->infoInterna = $infoInterna;

        return $this;
    }

    /**
     * Get infoInterna.
     *
     * @return string|null
     */
    public function getInfoInterna()
    {
        return $this->infoInterna;
    }

    /**
     * Set infoExterna.
     *
     * @param string|null $infoExterna
     *
     * @return AtributoAdicional
     */
    public function setInfoExterna($infoExterna = null)
    {
        $this->infoExterna = $infoExterna;

        return $this;
    }

    /**
     * Get infoExterna.
     *
     * @return string|null
     */
    public function getInfoExterna()
    {
        return $this->infoExterna;
    }

    /**
     * Set dataInc.
     *
     * @param \DateTime|null $dataInc
     *
     * @return AtributoAdicional
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
     * Set endeentratrivaloCodigoid.
     *
     * @param \App\Entity\Financeiro\Enderecoentregaatributovalor|null $endeentratrivaloCodigoid
     *
     * @return AtributoAdicional
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
