<?php

namespace App\Entity\Financeiro;

/**
 * Ar
 */
class Ar
{
    /**
     * @var int
     */
    private $arCodigoid;

    /**
     * @var string
     */
    private $arNumero;

    /**
     * @var \App\Entity\Financeiro\Rangear
     */
    private $rangarCodigoid;


    /**
     * Get arCodigoid.
     *
     * @return int
     */
    public function getArCodigoid()
    {
        return $this->arCodigoid;
    }

    /**
     * Set arNumero.
     *
     * @param string $arNumero
     *
     * @return Ar
     */
    public function setArNumero($arNumero)
    {
        $this->arNumero = $arNumero;

        return $this;
    }

    /**
     * Get arNumero.
     *
     * @return string
     */
    public function getArNumero()
    {
        return $this->arNumero;
    }

    /**
     * Set rangarCodigoid.
     *
     * @param \App\Entity\Financeiro\Rangear|null $rangarCodigoid
     *
     * @return Ar
     */
    public function setRangarCodigoid(\App\Entity\Financeiro\Rangear $rangarCodigoid = null)
    {
        $this->rangarCodigoid = $rangarCodigoid;

        return $this;
    }

    /**
     * Get rangarCodigoid.
     *
     * @return \App\Entity\Financeiro\Rangear|null
     */
    public function getRangarCodigoid()
    {
        return $this->rangarCodigoid;
    }
}
