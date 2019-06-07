<?php

namespace App\Entity\Financeiro;

/**
 * Documentopesquisa
 */
class Documentopesquisa
{
    /**
     * @var int
     */
    private $docupesqCodigoid;

    /**
     * @var string
     */
    private $docupesqDado;

    /**
     * @var \App\Entity\Financeiro\Documento
     */
    private $docuCodigoid;

    /**
     * @var \App\Entity\Financeiro\Pesquisa
     */
    private $pesqCodigoid;


    /**
     * Get docupesqCodigoid.
     *
     * @return int
     */
    public function getDocupesqCodigoid()
    {
        return $this->docupesqCodigoid;
    }

    /**
     * Set docupesqDado.
     *
     * @param string $docupesqDado
     *
     * @return Documentopesquisa
     */
    public function setDocupesqDado($docupesqDado)
    {
        $this->docupesqDado = $docupesqDado;

        return $this;
    }

    /**
     * Get docupesqDado.
     *
     * @return string
     */
    public function getDocupesqDado()
    {
        return $this->docupesqDado;
    }

    /**
     * Set docuCodigoid.
     *
     * @param \App\Entity\Financeiro\Documento|null $docuCodigoid
     *
     * @return Documentopesquisa
     */
    public function setDocuCodigoid(\App\Entity\Financeiro\Documento $docuCodigoid = null)
    {
        $this->docuCodigoid = $docuCodigoid;

        return $this;
    }

    /**
     * Get docuCodigoid.
     *
     * @return \App\Entity\Financeiro\Documento|null
     */
    public function getDocuCodigoid()
    {
        return $this->docuCodigoid;
    }

    /**
     * Set pesqCodigoid.
     *
     * @param \App\Entity\Financeiro\Pesquisa|null $pesqCodigoid
     *
     * @return Documentopesquisa
     */
    public function setPesqCodigoid(\App\Entity\Financeiro\Pesquisa $pesqCodigoid = null)
    {
        $this->pesqCodigoid = $pesqCodigoid;

        return $this;
    }

    /**
     * Get pesqCodigoid.
     *
     * @return \App\Entity\Financeiro\Pesquisa|null
     */
    public function getPesqCodigoid()
    {
        return $this->pesqCodigoid;
    }
}
