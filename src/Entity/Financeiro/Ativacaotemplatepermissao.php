<?php

namespace App\Entity\Financeiro;

/**
 * Ativacaotemplatepermissao
 */
class Ativacaotemplatepermissao
{
    /**
     * @var int
     */
    private $ativtemppermiCodigoid;

    /**
     * @var int|null
     */
    private $ativtemppermiOrdem = '0';

    /**
     * @var \App\Entity\Financeiro\Ativacaotemplate
     */
    private $ativtempCodigoid;

    /**
     * @var \App\Entity\Financeiro\Atributo
     */
    private $atriCodigoid;


    /**
     * Get ativtemppermiCodigoid.
     *
     * @return int
     */
    public function getAtivtemppermiCodigoid()
    {
        return $this->ativtemppermiCodigoid;
    }

    /**
     * Set ativtemppermiOrdem.
     *
     * @param int|null $ativtemppermiOrdem
     *
     * @return Ativacaotemplatepermissao
     */
    public function setAtivtemppermiOrdem($ativtemppermiOrdem = null)
    {
        $this->ativtemppermiOrdem = $ativtemppermiOrdem;

        return $this;
    }

    /**
     * Get ativtemppermiOrdem.
     *
     * @return int|null
     */
    public function getAtivtemppermiOrdem()
    {
        return $this->ativtemppermiOrdem;
    }

    /**
     * Set ativtempCodigoid.
     *
     * @param \App\Entity\Financeiro\Ativacaotemplate|null $ativtempCodigoid
     *
     * @return Ativacaotemplatepermissao
     */
    public function setAtivtempCodigoid(\App\Entity\Financeiro\Ativacaotemplate $ativtempCodigoid = null)
    {
        $this->ativtempCodigoid = $ativtempCodigoid;

        return $this;
    }

    /**
     * Get ativtempCodigoid.
     *
     * @return \App\Entity\Financeiro\Ativacaotemplate|null
     */
    public function getAtivtempCodigoid()
    {
        return $this->ativtempCodigoid;
    }

    /**
     * Set atriCodigoid.
     *
     * @param \App\Entity\Financeiro\Atributo|null $atriCodigoid
     *
     * @return Ativacaotemplatepermissao
     */
    public function setAtriCodigoid(\App\Entity\Financeiro\Atributo $atriCodigoid = null)
    {
        $this->atriCodigoid = $atriCodigoid;

        return $this;
    }

    /**
     * Get atriCodigoid.
     *
     * @return \App\Entity\Financeiro\Atributo|null
     */
    public function getAtriCodigoid()
    {
        return $this->atriCodigoid;
    }
}
