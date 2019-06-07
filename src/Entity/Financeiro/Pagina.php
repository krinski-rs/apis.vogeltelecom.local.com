<?php

namespace App\Entity\Financeiro;

/**
 * Pagina
 */
class Pagina
{
    /**
     * @var int
     */
    private $pagiCodigoid;

    /**
     * @var int
     */
    private $pagiPagina;

    /**
     * @var string
     */
    private $pagiNome;

    /**
     * @var string
     */
    private $pagiExtensao;

    /**
     * @var \DateTime
     */
    private $pagiDatainc = 'CURRENT_TIMESTAMP';

    /**
     * @var string|null
     */
    private $pagiTexto;

    /**
     * @var \App\Entity\Financeiro\Documento
     */
    private $docuCodigoid;

    /**
     * @var \App\Entity\Financeiro\Pagina
     */
    private $pagiProxima;


    /**
     * Get pagiCodigoid.
     *
     * @return int
     */
    public function getPagiCodigoid()
    {
        return $this->pagiCodigoid;
    }

    /**
     * Set pagiPagina.
     *
     * @param int $pagiPagina
     *
     * @return Pagina
     */
    public function setPagiPagina($pagiPagina)
    {
        $this->pagiPagina = $pagiPagina;

        return $this;
    }

    /**
     * Get pagiPagina.
     *
     * @return int
     */
    public function getPagiPagina()
    {
        return $this->pagiPagina;
    }

    /**
     * Set pagiNome.
     *
     * @param string $pagiNome
     *
     * @return Pagina
     */
    public function setPagiNome($pagiNome)
    {
        $this->pagiNome = $pagiNome;

        return $this;
    }

    /**
     * Get pagiNome.
     *
     * @return string
     */
    public function getPagiNome()
    {
        return $this->pagiNome;
    }

    /**
     * Set pagiExtensao.
     *
     * @param string $pagiExtensao
     *
     * @return Pagina
     */
    public function setPagiExtensao($pagiExtensao)
    {
        $this->pagiExtensao = $pagiExtensao;

        return $this;
    }

    /**
     * Get pagiExtensao.
     *
     * @return string
     */
    public function getPagiExtensao()
    {
        return $this->pagiExtensao;
    }

    /**
     * Set pagiDatainc.
     *
     * @param \DateTime $pagiDatainc
     *
     * @return Pagina
     */
    public function setPagiDatainc($pagiDatainc)
    {
        $this->pagiDatainc = $pagiDatainc;

        return $this;
    }

    /**
     * Get pagiDatainc.
     *
     * @return \DateTime
     */
    public function getPagiDatainc()
    {
        return $this->pagiDatainc;
    }

    /**
     * Set pagiTexto.
     *
     * @param string|null $pagiTexto
     *
     * @return Pagina
     */
    public function setPagiTexto($pagiTexto = null)
    {
        $this->pagiTexto = $pagiTexto;

        return $this;
    }

    /**
     * Get pagiTexto.
     *
     * @return string|null
     */
    public function getPagiTexto()
    {
        return $this->pagiTexto;
    }

    /**
     * Set docuCodigoid.
     *
     * @param \App\Entity\Financeiro\Documento|null $docuCodigoid
     *
     * @return Pagina
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
     * Set pagiProxima.
     *
     * @param \App\Entity\Financeiro\Pagina|null $pagiProxima
     *
     * @return Pagina
     */
    public function setPagiProxima(\App\Entity\Financeiro\Pagina $pagiProxima = null)
    {
        $this->pagiProxima = $pagiProxima;

        return $this;
    }

    /**
     * Get pagiProxima.
     *
     * @return \App\Entity\Financeiro\Pagina|null
     */
    public function getPagiProxima()
    {
        return $this->pagiProxima;
    }
}
