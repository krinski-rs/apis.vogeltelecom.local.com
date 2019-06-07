<?php

namespace App\Entity\Financeiro;

/**
 * Arquivoremessa
 */
class Arquivoremessa
{
    /**
     * @var int
     */
    private $arquremeCodigoid;

    /**
     * @var string
     */
    private $arquremeNome;

    /**
     * @var int
     */
    private $arquremeIndice;

    /**
     * @var string
     */
    private $arquremeTexto;

    /**
     * @var \DateTime|null
     */
    private $arquremeDataenvio;

    /**
     * @var \DateTime
     */
    private $arquremeDatainc = '0000-00-00 00:00:00';


    /**
     * Get arquremeCodigoid.
     *
     * @return int
     */
    public function getArquremeCodigoid()
    {
        return $this->arquremeCodigoid;
    }

    /**
     * Set arquremeNome.
     *
     * @param string $arquremeNome
     *
     * @return Arquivoremessa
     */
    public function setArquremeNome($arquremeNome)
    {
        $this->arquremeNome = $arquremeNome;

        return $this;
    }

    /**
     * Get arquremeNome.
     *
     * @return string
     */
    public function getArquremeNome()
    {
        return $this->arquremeNome;
    }

    /**
     * Set arquremeIndice.
     *
     * @param int $arquremeIndice
     *
     * @return Arquivoremessa
     */
    public function setArquremeIndice($arquremeIndice)
    {
        $this->arquremeIndice = $arquremeIndice;

        return $this;
    }

    /**
     * Get arquremeIndice.
     *
     * @return int
     */
    public function getArquremeIndice()
    {
        return $this->arquremeIndice;
    }

    /**
     * Set arquremeTexto.
     *
     * @param string $arquremeTexto
     *
     * @return Arquivoremessa
     */
    public function setArquremeTexto($arquremeTexto)
    {
        $this->arquremeTexto = $arquremeTexto;

        return $this;
    }

    /**
     * Get arquremeTexto.
     *
     * @return string
     */
    public function getArquremeTexto()
    {
        return $this->arquremeTexto;
    }

    /**
     * Set arquremeDataenvio.
     *
     * @param \DateTime|null $arquremeDataenvio
     *
     * @return Arquivoremessa
     */
    public function setArquremeDataenvio($arquremeDataenvio = null)
    {
        $this->arquremeDataenvio = $arquremeDataenvio;

        return $this;
    }

    /**
     * Get arquremeDataenvio.
     *
     * @return \DateTime|null
     */
    public function getArquremeDataenvio()
    {
        return $this->arquremeDataenvio;
    }

    /**
     * Set arquremeDatainc.
     *
     * @param \DateTime $arquremeDatainc
     *
     * @return Arquivoremessa
     */
    public function setArquremeDatainc($arquremeDatainc)
    {
        $this->arquremeDatainc = $arquremeDatainc;

        return $this;
    }

    /**
     * Get arquremeDatainc.
     *
     * @return \DateTime
     */
    public function getArquremeDatainc()
    {
        return $this->arquremeDatainc;
    }
}
