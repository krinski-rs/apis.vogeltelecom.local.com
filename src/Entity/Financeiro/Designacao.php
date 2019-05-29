<?php

namespace App\Entity\Financeiro;

/**
 * Designacao
 */
class Designacao
{
    /**
     * @var int
     */
    private $desigCodigoid;

    /**
     * @var int|null
     */
    private $endeentrCodigoid;

    /**
     * @var int|null
     */
    private $clieCodigoid;

    /**
     * @var string|null
     */
    private $desigStt;

    /**
     * @var int
     */
    private $desigNumero = '0';

    /**
     * @var string|null
     */
    private $desigPedido;

    /**
     * @var int|null
     */
    private $desigPonta;


    /**
     * Get desigCodigoid.
     *
     * @return int
     */
    public function getDesigCodigoid()
    {
        return $this->desigCodigoid;
    }

    /**
     * Set endeentrCodigoid.
     *
     * @param int|null $endeentrCodigoid
     *
     * @return Designacao
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
     * Set clieCodigoid.
     *
     * @param int|null $clieCodigoid
     *
     * @return Designacao
     */
    public function setClieCodigoid($clieCodigoid = null)
    {
        $this->clieCodigoid = $clieCodigoid;

        return $this;
    }

    /**
     * Get clieCodigoid.
     *
     * @return int|null
     */
    public function getClieCodigoid()
    {
        return $this->clieCodigoid;
    }

    /**
     * Set desigStt.
     *
     * @param string|null $desigStt
     *
     * @return Designacao
     */
    public function setDesigStt($desigStt = null)
    {
        $this->desigStt = $desigStt;

        return $this;
    }

    /**
     * Get desigStt.
     *
     * @return string|null
     */
    public function getDesigStt()
    {
        return $this->desigStt;
    }

    /**
     * Set desigNumero.
     *
     * @param int $desigNumero
     *
     * @return Designacao
     */
    public function setDesigNumero($desigNumero)
    {
        $this->desigNumero = $desigNumero;

        return $this;
    }

    /**
     * Get desigNumero.
     *
     * @return int
     */
    public function getDesigNumero()
    {
        return $this->desigNumero;
    }

    /**
     * Set desigPedido.
     *
     * @param string|null $desigPedido
     *
     * @return Designacao
     */
    public function setDesigPedido($desigPedido = null)
    {
        $this->desigPedido = $desigPedido;

        return $this;
    }

    /**
     * Get desigPedido.
     *
     * @return string|null
     */
    public function getDesigPedido()
    {
        return $this->desigPedido;
    }

    /**
     * Set desigPonta.
     *
     * @param int|null $desigPonta
     *
     * @return Designacao
     */
    public function setDesigPonta($desigPonta = null)
    {
        $this->desigPonta = $desigPonta;

        return $this;
    }

    /**
     * Get desigPonta.
     *
     * @return int|null
     */
    public function getDesigPonta()
    {
        return $this->desigPonta;
    }
}
