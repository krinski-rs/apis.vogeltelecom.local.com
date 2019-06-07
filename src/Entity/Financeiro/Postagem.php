<?php

namespace App\Entity\Financeiro;

/**
 * Postagem
 */
class Postagem
{
    /**
     * @var int
     */
    private $postCodigoid;

    /**
     * @var int
     */
    private $usuaCodigoid;

    /**
     * @var \DateTime
     */
    private $postDatainc = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime|null
     */
    private $postDatarecebimento;

    /**
     * @var \App\Entity\Financeiro\Ar
     */
    private $arCodigoid;

    /**
     * @var \App\Entity\Financeiro\Fatura
     */
    private $fatuCodigoid;


    /**
     * Get postCodigoid.
     *
     * @return int
     */
    public function getPostCodigoid()
    {
        return $this->postCodigoid;
    }

    /**
     * Set usuaCodigoid.
     *
     * @param int $usuaCodigoid
     *
     * @return Postagem
     */
    public function setUsuaCodigoid($usuaCodigoid)
    {
        $this->usuaCodigoid = $usuaCodigoid;

        return $this;
    }

    /**
     * Get usuaCodigoid.
     *
     * @return int
     */
    public function getUsuaCodigoid()
    {
        return $this->usuaCodigoid;
    }

    /**
     * Set postDatainc.
     *
     * @param \DateTime $postDatainc
     *
     * @return Postagem
     */
    public function setPostDatainc($postDatainc)
    {
        $this->postDatainc = $postDatainc;

        return $this;
    }

    /**
     * Get postDatainc.
     *
     * @return \DateTime
     */
    public function getPostDatainc()
    {
        return $this->postDatainc;
    }

    /**
     * Set postDatarecebimento.
     *
     * @param \DateTime|null $postDatarecebimento
     *
     * @return Postagem
     */
    public function setPostDatarecebimento($postDatarecebimento = null)
    {
        $this->postDatarecebimento = $postDatarecebimento;

        return $this;
    }

    /**
     * Get postDatarecebimento.
     *
     * @return \DateTime|null
     */
    public function getPostDatarecebimento()
    {
        return $this->postDatarecebimento;
    }

    /**
     * Set arCodigoid.
     *
     * @param \App\Entity\Financeiro\Ar|null $arCodigoid
     *
     * @return Postagem
     */
    public function setArCodigoid(\App\Entity\Financeiro\Ar $arCodigoid = null)
    {
        $this->arCodigoid = $arCodigoid;

        return $this;
    }

    /**
     * Get arCodigoid.
     *
     * @return \App\Entity\Financeiro\Ar|null
     */
    public function getArCodigoid()
    {
        return $this->arCodigoid;
    }

    /**
     * Set fatuCodigoid.
     *
     * @param \App\Entity\Financeiro\Fatura|null $fatuCodigoid
     *
     * @return Postagem
     */
    public function setFatuCodigoid(\App\Entity\Financeiro\Fatura $fatuCodigoid = null)
    {
        $this->fatuCodigoid = $fatuCodigoid;

        return $this;
    }

    /**
     * Get fatuCodigoid.
     *
     * @return \App\Entity\Financeiro\Fatura|null
     */
    public function getFatuCodigoid()
    {
        return $this->fatuCodigoid;
    }
}
