<?php

namespace App\Entity\Financeiro;

/**
 * Recebimento
 */
class Recebimento
{
    /**
     * @var int
     */
    private $receCodigoid;

    /**
     * @var \DateTime
     */
    private $receDatainc = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     */
    private $receValor;

    /**
     * @var string
     */
    private $receValormulta;

    /**
     * @var string
     */
    private $receValorjuros;

    /**
     * @var \DateTime
     */
    private $receDatarecebido = '0000-00-00 00:00:00';

    /**
     * @var \App\Entity\Financeiro\Fatura
     */
    private $fatuCodigoid;

    /**
     * @var \App\Entity\Financeiro\Lotebancario
     */
    private $lotebancCodigoid;


    /**
     * Get receCodigoid.
     *
     * @return int
     */
    public function getReceCodigoid()
    {
        return $this->receCodigoid;
    }

    /**
     * Set receDatainc.
     *
     * @param \DateTime $receDatainc
     *
     * @return Recebimento
     */
    public function setReceDatainc($receDatainc)
    {
        $this->receDatainc = $receDatainc;

        return $this;
    }

    /**
     * Get receDatainc.
     *
     * @return \DateTime
     */
    public function getReceDatainc()
    {
        return $this->receDatainc;
    }

    /**
     * Set receValor.
     *
     * @param string $receValor
     *
     * @return Recebimento
     */
    public function setReceValor($receValor)
    {
        $this->receValor = $receValor;

        return $this;
    }

    /**
     * Get receValor.
     *
     * @return string
     */
    public function getReceValor()
    {
        return $this->receValor;
    }

    /**
     * Set receValormulta.
     *
     * @param string $receValormulta
     *
     * @return Recebimento
     */
    public function setReceValormulta($receValormulta)
    {
        $this->receValormulta = $receValormulta;

        return $this;
    }

    /**
     * Get receValormulta.
     *
     * @return string
     */
    public function getReceValormulta()
    {
        return $this->receValormulta;
    }

    /**
     * Set receValorjuros.
     *
     * @param string $receValorjuros
     *
     * @return Recebimento
     */
    public function setReceValorjuros($receValorjuros)
    {
        $this->receValorjuros = $receValorjuros;

        return $this;
    }

    /**
     * Get receValorjuros.
     *
     * @return string
     */
    public function getReceValorjuros()
    {
        return $this->receValorjuros;
    }

    /**
     * Set receDatarecebido.
     *
     * @param \DateTime $receDatarecebido
     *
     * @return Recebimento
     */
    public function setReceDatarecebido($receDatarecebido)
    {
        $this->receDatarecebido = $receDatarecebido;

        return $this;
    }

    /**
     * Get receDatarecebido.
     *
     * @return \DateTime
     */
    public function getReceDatarecebido()
    {
        return $this->receDatarecebido;
    }

    /**
     * Set fatuCodigoid.
     *
     * @param \App\Entity\Financeiro\Fatura|null $fatuCodigoid
     *
     * @return Recebimento
     */
    public function setFatuCodigoid(\App\Entity\Financeiro\Fatura $fatuCodigoid = null)
    {
        $this->fatuCodigoid = $fatuCodigoid;

        return $this;
    }

    /**
     * Get fatuCodigoid.
     *
     * @return \App\Entity\Financeiro\Fatura|null
     */
    public function getFatuCodigoid()
    {
        return $this->fatuCodigoid;
    }

    /**
     * Set lotebancCodigoid.
     *
     * @param \App\Entity\Financeiro\Lotebancario|null $lotebancCodigoid
     *
     * @return Recebimento
     */
    public function setLotebancCodigoid(\App\Entity\Financeiro\Lotebancario $lotebancCodigoid = null)
    {
        $this->lotebancCodigoid = $lotebancCodigoid;

        return $this;
    }

    /**
     * Get lotebancCodigoid.
     *
     * @return \App\Entity\Financeiro\Lotebancario|null
     */
    public function getLotebancCodigoid()
    {
        return $this->lotebancCodigoid;
    }
}
