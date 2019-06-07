<?php

namespace App\Entity\Financeiro;

/**
 * ServicoAtributo
 */
class ServicoAtributo
{
    /**
     * @var int
     */
    private $idServicoAtributo;

    /**
     * @var int|null
     */
    private $registrante;

    /**
     * @var bool|null
     */
    private $ativo;

    /**
     * @var \App\Entity\Financeiro\Atributo
     */
    private $atriCodigoid;

    /**
     * @var \App\Entity\Financeiro\Servico
     */
    private $servCodigoid;


    /**
     * Get idServicoAtributo.
     *
     * @return int
     */
    public function getIdServicoAtributo()
    {
        return $this->idServicoAtributo;
    }

    /**
     * Set registrante.
     *
     * @param int|null $registrante
     *
     * @return ServicoAtributo
     */
    public function setRegistrante($registrante = null)
    {
        $this->registrante = $registrante;

        return $this;
    }

    /**
     * Get registrante.
     *
     * @return int|null
     */
    public function getRegistrante()
    {
        return $this->registrante;
    }

    /**
     * Set ativo.
     *
     * @param bool|null $ativo
     *
     * @return ServicoAtributo
     */
    public function setAtivo($ativo = null)
    {
        $this->ativo = $ativo;

        return $this;
    }

    /**
     * Get ativo.
     *
     * @return bool|null
     */
    public function getAtivo()
    {
        return $this->ativo;
    }

    /**
     * Set atriCodigoid.
     *
     * @param \App\Entity\Financeiro\Atributo|null $atriCodigoid
     *
     * @return ServicoAtributo
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

    /**
     * Set servCodigoid.
     *
     * @param \App\Entity\Financeiro\Servico|null $servCodigoid
     *
     * @return ServicoAtributo
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
