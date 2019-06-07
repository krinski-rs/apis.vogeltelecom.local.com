<?php

namespace App\Entity\Financeiro;

/**
 * Discriminacao
 */
class Discriminacao
{
    /**
     * @var int
     */
    private $idDiscriminacao;

    /**
     * @var string|null
     */
    private $descricao;


    /**
     * Get idDiscriminacao.
     *
     * @return int
     */
    public function getIdDiscriminacao()
    {
        return $this->idDiscriminacao;
    }

    /**
     * Set descricao.
     *
     * @param string|null $descricao
     *
     * @return Discriminacao
     */
    public function setDescricao($descricao = null)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get descricao.
     *
     * @return string|null
     */
    public function getDescricao()
    {
        return $this->descricao;
    }
}
