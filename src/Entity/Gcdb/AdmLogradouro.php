<?php

namespace App\Entity\Gcdb;

/**
 * AdmLogradouro
 */
class AdmLogradouro
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
     * @return AdmLogradouro
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
}
