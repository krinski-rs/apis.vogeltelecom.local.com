<?php

namespace App\Entity\Financeiro;

/**
 * Lotebancario
 */
class Lotebancario
{
    /**
     * @var int
     */
    private $lotebancCodigoid;

    /**
     * @var int
     */
    private $usuaCodigoid;

    /**
     * @var \DateTime
     */
    private $lotebancDatainc = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     */
    private $lotebancTexto;

    /**
     * @var string
     */
    private $lotebancNome;

    /**
     * @var \App\Entity\Financeiro\Banco
     */
    private $bancCodigoid;


    /**
     * Get lotebancCodigoid.
     *
     * @return int
     */
    public function getLotebancCodigoid()
    {
        return $this->lotebancCodigoid;
    }

    /**
     * Set usuaCodigoid.
     *
     * @param int $usuaCodigoid
     *
     * @return Lotebancario
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
     * Set lotebancDatainc.
     *
     * @param \DateTime $lotebancDatainc
     *
     * @return Lotebancario
     */
    public function setLotebancDatainc($lotebancDatainc)
    {
        $this->lotebancDatainc = $lotebancDatainc;

        return $this;
    }

    /**
     * Get lotebancDatainc.
     *
     * @return \DateTime
     */
    public function getLotebancDatainc()
    {
        return $this->lotebancDatainc;
    }

    /**
     * Set lotebancTexto.
     *
     * @param string $lotebancTexto
     *
     * @return Lotebancario
     */
    public function setLotebancTexto($lotebancTexto)
    {
        $this->lotebancTexto = $lotebancTexto;

        return $this;
    }

    /**
     * Get lotebancTexto.
     *
     * @return string
     */
    public function getLotebancTexto()
    {
        return $this->lotebancTexto;
    }

    /**
     * Set lotebancNome.
     *
     * @param string $lotebancNome
     *
     * @return Lotebancario
     */
    public function setLotebancNome($lotebancNome)
    {
        $this->lotebancNome = $lotebancNome;

        return $this;
    }

    /**
     * Get lotebancNome.
     *
     * @return string
     */
    public function getLotebancNome()
    {
        return $this->lotebancNome;
    }

    /**
     * Set bancCodigoid.
     *
     * @param \App\Entity\Financeiro\Banco|null $bancCodigoid
     *
     * @return Lotebancario
     */
    public function setBancCodigoid(\App\Entity\Financeiro\Banco $bancCodigoid = null)
    {
        $this->bancCodigoid = $bancCodigoid;

        return $this;
    }

    /**
     * Get bancCodigoid.
     *
     * @return \App\Entity\Financeiro\Banco|null
     */
    public function getBancCodigoid()
    {
        return $this->bancCodigoid;
    }
}
