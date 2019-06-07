<?php

namespace App\Entity\Gcdb;

/**
 * AdmPais
 */
class AdmPais
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string|null
     */
    private $sigla;

    /**
     * @var string|null
     */
    private $nome;

    /**
     * @var int
     */
    private $codigoBacen = '0';


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set sigla.
     *
     * @param string|null $sigla
     *
     * @return AdmPais
     */
    public function setSigla($sigla = null)
    {
        $this->sigla = $sigla;

        return $this;
    }

    /**
     * Get sigla.
     *
     * @return string|null
     */
    public function getSigla()
    {
        return $this->sigla;
    }

    /**
     * Set nome.
     *
     * @param string|null $nome
     *
     * @return AdmPais
     */
    public function setNome($nome = null)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome.
     *
     * @return string|null
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set codigoBacen.
     *
     * @param int $codigoBacen
     *
     * @return AdmPais
     */
    public function setCodigoBacen($codigoBacen)
    {
        $this->codigoBacen = $codigoBacen;

        return $this;
    }

    /**
     * Get codigoBacen.
     *
     * @return int
     */
    public function getCodigoBacen()
    {
        return $this->codigoBacen;
    }
}
