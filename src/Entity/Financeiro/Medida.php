<?php

namespace App\Entity\Financeiro;

/**
 * Medida
 */
class Medida
{
    /**
     * @var int
     */
    private $mediCodigoid;

    /**
     * @var string
     */
    private $mediNome;

    /**
     * @var string
     */
    private $mediSigla;

    /**
     * @var int
     */
    private $mediMultiplicador = '1024';

    /**
     * @var int
     */
    private $mediVezes = '0';

    /**
     * @var int
     */
    private $mediCategoria;


    /**
     * Get mediCodigoid.
     *
     * @return int
     */
    public function getMediCodigoid()
    {
        return $this->mediCodigoid;
    }

    /**
     * Set mediNome.
     *
     * @param string $mediNome
     *
     * @return Medida
     */
    public function setMediNome($mediNome)
    {
        $this->mediNome = $mediNome;

        return $this;
    }

    /**
     * Get mediNome.
     *
     * @return string
     */
    public function getMediNome()
    {
        return $this->mediNome;
    }

    /**
     * Set mediSigla.
     *
     * @param string $mediSigla
     *
     * @return Medida
     */
    public function setMediSigla($mediSigla)
    {
        $this->mediSigla = $mediSigla;

        return $this;
    }

    /**
     * Get mediSigla.
     *
     * @return string
     */
    public function getMediSigla()
    {
        return $this->mediSigla;
    }

    /**
     * Set mediMultiplicador.
     *
     * @param int $mediMultiplicador
     *
     * @return Medida
     */
    public function setMediMultiplicador($mediMultiplicador)
    {
        $this->mediMultiplicador = $mediMultiplicador;

        return $this;
    }

    /**
     * Get mediMultiplicador.
     *
     * @return int
     */
    public function getMediMultiplicador()
    {
        return $this->mediMultiplicador;
    }

    /**
     * Set mediVezes.
     *
     * @param int $mediVezes
     *
     * @return Medida
     */
    public function setMediVezes($mediVezes)
    {
        $this->mediVezes = $mediVezes;

        return $this;
    }

    /**
     * Get mediVezes.
     *
     * @return int
     */
    public function getMediVezes()
    {
        return $this->mediVezes;
    }

    /**
     * Set mediCategoria.
     *
     * @param int $mediCategoria
     *
     * @return Medida
     */
    public function setMediCategoria($mediCategoria)
    {
        $this->mediCategoria = $mediCategoria;

        return $this;
    }

    /**
     * Get mediCategoria.
     *
     * @return int
     */
    public function getMediCategoria()
    {
        return $this->mediCategoria;
    }
}
