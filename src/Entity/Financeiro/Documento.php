<?php

namespace App\Entity\Financeiro;

/**
 * Documento
 */
class Documento
{
    /**
     * @var int
     */
    private $docuCodigoid;

    /**
     * @var string
     */
    private $docuNome;

    /**
     * @var \DateTime
     */
    private $docuDatainc = 'CURRENT_TIMESTAMP';

    /**
     * @var int|null
     */
    private $docuUsuainc;

    /**
     * @var \DateTime|null
     */
    private $docuDatafim;

    /**
     * @var int|null
     */
    private $docuUsuafim;

    /**
     * @var bool|null
     */
    private $docuAprovado;

    /**
     * @var \App\Entity\Financeiro\Contrato
     */
    private $contCodigoid;

    /**
     * @var \App\Entity\Financeiro\Tipodocumento
     */
    private $tipodocuCodigoid;


    /**
     * Get docuCodigoid.
     *
     * @return int
     */
    public function getDocuCodigoid()
    {
        return $this->docuCodigoid;
    }

    /**
     * Set docuNome.
     *
     * @param string $docuNome
     *
     * @return Documento
     */
    public function setDocuNome($docuNome)
    {
        $this->docuNome = $docuNome;

        return $this;
    }

    /**
     * Get docuNome.
     *
     * @return string
     */
    public function getDocuNome()
    {
        return $this->docuNome;
    }

    /**
     * Set docuDatainc.
     *
     * @param \DateTime $docuDatainc
     *
     * @return Documento
     */
    public function setDocuDatainc($docuDatainc)
    {
        $this->docuDatainc = $docuDatainc;

        return $this;
    }

    /**
     * Get docuDatainc.
     *
     * @return \DateTime
     */
    public function getDocuDatainc()
    {
        return $this->docuDatainc;
    }

    /**
     * Set docuUsuainc.
     *
     * @param int|null $docuUsuainc
     *
     * @return Documento
     */
    public function setDocuUsuainc($docuUsuainc = null)
    {
        $this->docuUsuainc = $docuUsuainc;

        return $this;
    }

    /**
     * Get docuUsuainc.
     *
     * @return int|null
     */
    public function getDocuUsuainc()
    {
        return $this->docuUsuainc;
    }

    /**
     * Set docuDatafim.
     *
     * @param \DateTime|null $docuDatafim
     *
     * @return Documento
     */
    public function setDocuDatafim($docuDatafim = null)
    {
        $this->docuDatafim = $docuDatafim;

        return $this;
    }

    /**
     * Get docuDatafim.
     *
     * @return \DateTime|null
     */
    public function getDocuDatafim()
    {
        return $this->docuDatafim;
    }

    /**
     * Set docuUsuafim.
     *
     * @param int|null $docuUsuafim
     *
     * @return Documento
     */
    public function setDocuUsuafim($docuUsuafim = null)
    {
        $this->docuUsuafim = $docuUsuafim;

        return $this;
    }

    /**
     * Get docuUsuafim.
     *
     * @return int|null
     */
    public function getDocuUsuafim()
    {
        return $this->docuUsuafim;
    }

    /**
     * Set docuAprovado.
     *
     * @param bool|null $docuAprovado
     *
     * @return Documento
     */
    public function setDocuAprovado($docuAprovado = null)
    {
        $this->docuAprovado = $docuAprovado;

        return $this;
    }

    /**
     * Get docuAprovado.
     *
     * @return bool|null
     */
    public function getDocuAprovado()
    {
        return $this->docuAprovado;
    }

    /**
     * Set contCodigoid.
     *
     * @param \App\Entity\Financeiro\Contrato|null $contCodigoid
     *
     * @return Documento
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

    /**
     * Set tipodocuCodigoid.
     *
     * @param \App\Entity\Financeiro\Tipodocumento|null $tipodocuCodigoid
     *
     * @return Documento
     */
    public function setTipodocuCodigoid(\App\Entity\Financeiro\Tipodocumento $tipodocuCodigoid = null)
    {
        $this->tipodocuCodigoid = $tipodocuCodigoid;

        return $this;
    }

    /**
     * Get tipodocuCodigoid.
     *
     * @return \App\Entity\Financeiro\Tipodocumento|null
     */
    public function getTipodocuCodigoid()
    {
        return $this->tipodocuCodigoid;
    }
}
