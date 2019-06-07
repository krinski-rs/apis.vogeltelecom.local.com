<?php

namespace App\Entity\Financeiro;

/**
 * Slanivel
 */
class Slanivel
{
    /**
     * @var int
     */
    private $slaniveCodigoid;

    /**
     * @var int
     */
    private $slaniveRespostacomercial;

    /**
     * @var int
     */
    private $slaniveResolucaocomercial;

    /**
     * @var int
     */
    private $slaniveResolucaoextra;

    /**
     * @var int
     */
    private $slaniveRespostaextra;

    /**
     * @var \App\Entity\Financeiro\Nivel
     */
    private $niveCodigoid;

    /**
     * @var \App\Entity\Financeiro\Sla
     */
    private $slaCodigoid;


    /**
     * Get slaniveCodigoid.
     *
     * @return int
     */
    public function getSlaniveCodigoid()
    {
        return $this->slaniveCodigoid;
    }

    /**
     * Set slaniveRespostacomercial.
     *
     * @param int $slaniveRespostacomercial
     *
     * @return Slanivel
     */
    public function setSlaniveRespostacomercial($slaniveRespostacomercial)
    {
        $this->slaniveRespostacomercial = $slaniveRespostacomercial;

        return $this;
    }

    /**
     * Get slaniveRespostacomercial.
     *
     * @return int
     */
    public function getSlaniveRespostacomercial()
    {
        return $this->slaniveRespostacomercial;
    }

    /**
     * Set slaniveResolucaocomercial.
     *
     * @param int $slaniveResolucaocomercial
     *
     * @return Slanivel
     */
    public function setSlaniveResolucaocomercial($slaniveResolucaocomercial)
    {
        $this->slaniveResolucaocomercial = $slaniveResolucaocomercial;

        return $this;
    }

    /**
     * Get slaniveResolucaocomercial.
     *
     * @return int
     */
    public function getSlaniveResolucaocomercial()
    {
        return $this->slaniveResolucaocomercial;
    }

    /**
     * Set slaniveResolucaoextra.
     *
     * @param int $slaniveResolucaoextra
     *
     * @return Slanivel
     */
    public function setSlaniveResolucaoextra($slaniveResolucaoextra)
    {
        $this->slaniveResolucaoextra = $slaniveResolucaoextra;

        return $this;
    }

    /**
     * Get slaniveResolucaoextra.
     *
     * @return int
     */
    public function getSlaniveResolucaoextra()
    {
        return $this->slaniveResolucaoextra;
    }

    /**
     * Set slaniveRespostaextra.
     *
     * @param int $slaniveRespostaextra
     *
     * @return Slanivel
     */
    public function setSlaniveRespostaextra($slaniveRespostaextra)
    {
        $this->slaniveRespostaextra = $slaniveRespostaextra;

        return $this;
    }

    /**
     * Get slaniveRespostaextra.
     *
     * @return int
     */
    public function getSlaniveRespostaextra()
    {
        return $this->slaniveRespostaextra;
    }

    /**
     * Set niveCodigoid.
     *
     * @param \App\Entity\Financeiro\Nivel|null $niveCodigoid
     *
     * @return Slanivel
     */
    public function setNiveCodigoid(\App\Entity\Financeiro\Nivel $niveCodigoid = null)
    {
        $this->niveCodigoid = $niveCodigoid;

        return $this;
    }

    /**
     * Get niveCodigoid.
     *
     * @return \App\Entity\Financeiro\Nivel|null
     */
    public function getNiveCodigoid()
    {
        return $this->niveCodigoid;
    }

    /**
     * Set slaCodigoid.
     *
     * @param \App\Entity\Financeiro\Sla|null $slaCodigoid
     *
     * @return Slanivel
     */
    public function setSlaCodigoid(\App\Entity\Financeiro\Sla $slaCodigoid = null)
    {
        $this->slaCodigoid = $slaCodigoid;

        return $this;
    }

    /**
     * Get slaCodigoid.
     *
     * @return \App\Entity\Financeiro\Sla|null
     */
    public function getSlaCodigoid()
    {
        return $this->slaCodigoid;
    }
}
