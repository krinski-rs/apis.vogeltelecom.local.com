<?php

namespace App\Entity\Gcdb;

/**
 * Origemexterna
 */
class Origemexterna
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
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
     * @param string $nome
     *
     * @return Origemexterna
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome.
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }
}
