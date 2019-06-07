<?php

namespace App\Entity\Financeiro;

/**
 * Textolegal
 */
class Textolegal
{
    /**
     * @var int
     */
    private $textlegaCodigoid;

    /**
     * @var string
     */
    private $textlegaTexto;

    /**
     * @var \App\Entity\Financeiro\Contrato
     */
    private $contCodigoid;


    /**
     * Get textlegaCodigoid.
     *
     * @return int
     */
    public function getTextlegaCodigoid()
    {
        return $this->textlegaCodigoid;
    }

    /**
     * Set textlegaTexto.
     *
     * @param string $textlegaTexto
     *
     * @return Textolegal
     */
    public function setTextlegaTexto($textlegaTexto)
    {
        $this->textlegaTexto = $textlegaTexto;

        return $this;
    }

    /**
     * Get textlegaTexto.
     *
     * @return string
     */
    public function getTextlegaTexto()
    {
        return $this->textlegaTexto;
    }

    /**
     * Set contCodigoid.
     *
     * @param \App\Entity\Financeiro\Contrato|null $contCodigoid
     *
     * @return Textolegal
     */
    public function setContCodigoid(\App\Entity\Financeiro\Contrato $contCodigoid = null)
    {
        $this->contCodigoid = $contCodigoid;

        return $this;
    }

    /**
     * Get contCodigoid.
     *
     * @return \App\Entity\Financeiro\Contrato|null
     */
    public function getContCodigoid()
    {
        return $this->contCodigoid;
    }
}
