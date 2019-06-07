<?php

namespace App\Entity\Gcdb;

/**
 * AdmTipoNome
 */
class AdmTipoNome
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
    private $tipo;


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
     * @return AdmTipoNome
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
     * Set tipo.
     *
     * @param string|null $tipo
     *
     * @return AdmTipoNome
     */
    public function setTipo($tipo = null)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo.
     *
     * @return string|null
     */
    public function getTipo()
    {
        return $this->tipo;
    }
}
