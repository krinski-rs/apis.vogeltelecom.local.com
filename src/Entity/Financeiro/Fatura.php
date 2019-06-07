<?php

namespace App\Entity\Financeiro;

/**
 * Fatura
 */
class Fatura
{
    /**
     * @var int
     */
    private $fatuCodigoid;

    /**
     * @var int|null
     */
    private $usuaCodigoid;

    /**
     * @var \DateTime
     */
    private $fatuDatainc = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     */
    private $fatuDatavencimento = '0000-00-00 00:00:00';

    /**
     * @var string
     */
    private $fatuValor;

    /**
     * @var int
     */
    private $fatuNsr;

    /**
     * @var bool
     */
    private $fatuEmitido;

    /**
     * @var \DateTime|null
     */
    private $fatuDatade;

    /**
     * @var \DateTime|null
     */
    private $fatuDataate;

    /**
     * @var string|null
     */
    private $fatuExcedente;

    /**
     * @var string|null
     */
    private $fatuConsumido;

    /**
     * @var string|null
     */
    private $fatuCodigobarra;

    /**
     * @var string|null
     */
    private $fatuLinhadigitavel;

    /**
     * @var string|null
     */
    private $fatuNossonumero;

    /**
     * @var string|null
     */
    private $fatuValorjuros;

    /**
     * @var string|null
     */
    private $fatuValormulta;

    /**
     * @var \App\Entity\Financeiro\Arquivoremessa
     */
    private $arquremeCodigoid;


    /**
     * Get fatuCodigoid.
     *
     * @return int
     */
    public function getFatuCodigoid()
    {
        return $this->fatuCodigoid;
    }

    /**
     * Set usuaCodigoid.
     *
     * @param int|null $usuaCodigoid
     *
     * @return Fatura
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
     * Set fatuDatainc.
     *
     * @param \DateTime $fatuDatainc
     *
     * @return Fatura
     */
    public function setFatuDatainc($fatuDatainc)
    {
        $this->fatuDatainc = $fatuDatainc;

        return $this;
    }

    /**
     * Get fatuDatainc.
     *
     * @return \DateTime
     */
    public function getFatuDatainc()
    {
        return $this->fatuDatainc;
    }

    /**
     * Set fatuDatavencimento.
     *
     * @param \DateTime $fatuDatavencimento
     *
     * @return Fatura
     */
    public function setFatuDatavencimento($fatuDatavencimento)
    {
        $this->fatuDatavencimento = $fatuDatavencimento;

        return $this;
    }

    /**
     * Get fatuDatavencimento.
     *
     * @return \DateTime
     */
    public function getFatuDatavencimento()
    {
        return $this->fatuDatavencimento;
    }

    /**
     * Set fatuValor.
     *
     * @param string $fatuValor
     *
     * @return Fatura
     */
    public function setFatuValor($fatuValor)
    {
        $this->fatuValor = $fatuValor;

        return $this;
    }

    /**
     * Get fatuValor.
     *
     * @return string
     */
    public function getFatuValor()
    {
        return $this->fatuValor;
    }

    /**
     * Set fatuNsr.
     *
     * @param int $fatuNsr
     *
     * @return Fatura
     */
    public function setFatuNsr($fatuNsr)
    {
        $this->fatuNsr = $fatuNsr;

        return $this;
    }

    /**
     * Get fatuNsr.
     *
     * @return int
     */
    public function getFatuNsr()
    {
        return $this->fatuNsr;
    }

    /**
     * Set fatuEmitido.
     *
     * @param bool $fatuEmitido
     *
     * @return Fatura
     */
    public function setFatuEmitido($fatuEmitido)
    {
        $this->fatuEmitido = $fatuEmitido;

        return $this;
    }

    /**
     * Get fatuEmitido.
     *
     * @return bool
     */
    public function getFatuEmitido()
    {
        return $this->fatuEmitido;
    }

    /**
     * Set fatuDatade.
     *
     * @param \DateTime|null $fatuDatade
     *
     * @return Fatura
     */
    public function setFatuDatade($fatuDatade = null)
    {
        $this->fatuDatade = $fatuDatade;

        return $this;
    }

    /**
     * Get fatuDatade.
     *
     * @return \DateTime|null
     */
    public function getFatuDatade()
    {
        return $this->fatuDatade;
    }

    /**
     * Set fatuDataate.
     *
     * @param \DateTime|null $fatuDataate
     *
     * @return Fatura
     */
    public function setFatuDataate($fatuDataate = null)
    {
        $this->fatuDataate = $fatuDataate;

        return $this;
    }

    /**
     * Get fatuDataate.
     *
     * @return \DateTime|null
     */
    public function getFatuDataate()
    {
        return $this->fatuDataate;
    }

    /**
     * Set fatuExcedente.
     *
     * @param string|null $fatuExcedente
     *
     * @return Fatura
     */
    public function setFatuExcedente($fatuExcedente = null)
    {
        $this->fatuExcedente = $fatuExcedente;

        return $this;
    }

    /**
     * Get fatuExcedente.
     *
     * @return string|null
     */
    public function getFatuExcedente()
    {
        return $this->fatuExcedente;
    }

    /**
     * Set fatuConsumido.
     *
     * @param string|null $fatuConsumido
     *
     * @return Fatura
     */
    public function setFatuConsumido($fatuConsumido = null)
    {
        $this->fatuConsumido = $fatuConsumido;

        return $this;
    }

    /**
     * Get fatuConsumido.
     *
     * @return string|null
     */
    public function getFatuConsumido()
    {
        return $this->fatuConsumido;
    }

    /**
     * Set fatuCodigobarra.
     *
     * @param string|null $fatuCodigobarra
     *
     * @return Fatura
     */
    public function setFatuCodigobarra($fatuCodigobarra = null)
    {
        $this->fatuCodigobarra = $fatuCodigobarra;

        return $this;
    }

    /**
     * Get fatuCodigobarra.
     *
     * @return string|null
     */
    public function getFatuCodigobarra()
    {
        return $this->fatuCodigobarra;
    }

    /**
     * Set fatuLinhadigitavel.
     *
     * @param string|null $fatuLinhadigitavel
     *
     * @return Fatura
     */
    public function setFatuLinhadigitavel($fatuLinhadigitavel = null)
    {
        $this->fatuLinhadigitavel = $fatuLinhadigitavel;

        return $this;
    }

    /**
     * Get fatuLinhadigitavel.
     *
     * @return string|null
     */
    public function getFatuLinhadigitavel()
    {
        return $this->fatuLinhadigitavel;
    }

    /**
     * Set fatuNossonumero.
     *
     * @param string|null $fatuNossonumero
     *
     * @return Fatura
     */
    public function setFatuNossonumero($fatuNossonumero = null)
    {
        $this->fatuNossonumero = $fatuNossonumero;

        return $this;
    }

    /**
     * Get fatuNossonumero.
     *
     * @return string|null
     */
    public function getFatuNossonumero()
    {
        return $this->fatuNossonumero;
    }

    /**
     * Set fatuValorjuros.
     *
     * @param string|null $fatuValorjuros
     *
     * @return Fatura
     */
    public function setFatuValorjuros($fatuValorjuros = null)
    {
        $this->fatuValorjuros = $fatuValorjuros;

        return $this;
    }

    /**
     * Get fatuValorjuros.
     *
     * @return string|null
     */
    public function getFatuValorjuros()
    {
        return $this->fatuValorjuros;
    }

    /**
     * Set fatuValormulta.
     *
     * @param string|null $fatuValormulta
     *
     * @return Fatura
     */
    public function setFatuValormulta($fatuValormulta = null)
    {
        $this->fatuValormulta = $fatuValormulta;

        return $this;
    }

    /**
     * Get fatuValormulta.
     *
     * @return string|null
     */
    public function getFatuValormulta()
    {
        return $this->fatuValormulta;
    }

    /**
     * Set arquremeCodigoid.
     *
     * @param \App\Entity\Financeiro\Arquivoremessa|null $arquremeCodigoid
     *
     * @return Fatura
     */
    public function setArquremeCodigoid(\App\Entity\Financeiro\Arquivoremessa $arquremeCodigoid = null)
    {
        $this->arquremeCodigoid = $arquremeCodigoid;

        return $this;
    }

    /**
     * Get arquremeCodigoid.
     *
     * @return \App\Entity\Financeiro\Arquivoremessa|null
     */
    public function getArquremeCodigoid()
    {
        return $this->arquremeCodigoid;
    }
}
