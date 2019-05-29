<?php

namespace App\Entity\Financeiro;

/**
 * Ativacaotemplate
 */
class Ativacaotemplate
{
    /**
     * @var int
     */
    private $ativtempCodigoid;

    /**
     * @var string
     */
    private $ativtempNome;

    /**
     * @var \App\Entity\Financeiro\Servico
     */
    private $servCodigoid;


    /**
     * Get ativtempCodigoid.
     *
     * @return int
     */
    public function getAtivtempCodigoid()
    {
        return $this->ativtempCodigoid;
    }

    /**
     * Set ativtempNome.
     *
     * @param string $ativtempNome
     *
     * @return Ativacaotemplate
     */
    public function setAtivtempNome($ativtempNome)
    {
        $this->ativtempNome = $ativtempNome;

        return $this;
    }

    /**
     * Get ativtempNome.
     *
     * @return string
     */
    public function getAtivtempNome()
    {
        return $this->ativtempNome;
    }

    /**
     * Set servCodigoid.
     *
     * @param \App\Entity\Financeiro\Servico|null $servCodigoid
     *
     * @return Ativacaotemplate
     */
    public function setServCodigoid(\App\Entity\Financeiro\Servico $servCodigoid = null)
    {
        $this->servCodigoid = $servCodigoid;

        return $this;
    }

    /**
     * Get servCodigoid.
     *
     * @return \App\Entity\Financeiro\Servico|null
     */
    public function getServCodigoid()
    {
        return $this->servCodigoid;
    }
}
