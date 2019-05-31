<?php

namespace App\Entity\Gcdb;

/**
 * AdmTipoComplemento
 */
class AdmTipoComplemento
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string|null
     */
    private $nome;

    /**
     * @var string|null
     */
    private $sigla;


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
     * Set nome.
     *
     * @param string|null $nome
     *
     * @return AdmTipoComplemento
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
     * Set sigla.
     *
     * @param string|null $sigla
     *
     * @return AdmTipoComplemento
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
}
