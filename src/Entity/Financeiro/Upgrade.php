<?php

namespace App\Entity\Financeiro;

/**
 * Upgrade
 */
class Upgrade
{
    /**
     * @var int
     */
    private $upgrCodigoid;

    /**
     * @var int
     */
    private $endeentrCodigoid;

    /**
     * @var int|null
     */
    private $upgrAposativacao;

    /**
     * @var \DateTime|null
     */
    private $upgrDatafixa;

    /**
     * @var \DateTime|null
     */
    private $upgrDataupgrade;

    /**
     * @var \DateTime
     */
    private $upgrDatainc = '0000-00-00 00:00:00';

    /**
     * @var int|null
     */
    private $upgrUsuario;

    /**
     * @var int|null
     */
    private $proposalId;

    /**
     * @var \App\Entity\Financeiro\Contrato
     */
    private $contCodigoid;

    /**
     * @var \App\Entity\Financeiro\Servicocapacidade
     */
    private $servcapaCodigoid;

    /**
     * @var \App\Entity\Financeiro\Upgrade
     */
    private $upgrProximocodigoid;


    /**
     * Get upgrCodigoid.
     *
     * @return int
     */
    public function getUpgrCodigoid()
    {
        return $this->upgrCodigoid;
    }

    /**
     * Set endeentrCodigoid.
     *
     * @param int $endeentrCodigoid
     *
     * @return Upgrade
     */
    public function setEndeentrCodigoid($endeentrCodigoid)
    {
        $this->endeentrCodigoid = $endeentrCodigoid;

        return $this;
    }

    /**
     * Get endeentrCodigoid.
     *
     * @return int
     */
    public function getEndeentrCodigoid()
    {
        return $this->endeentrCodigoid;
    }

    /**
     * Set upgrAposativacao.
     *
     * @param int|null $upgrAposativacao
     *
     * @return Upgrade
     */
    public function setUpgrAposativacao($upgrAposativacao = null)
    {
        $this->upgrAposativacao = $upgrAposativacao;

        return $this;
    }

    /**
     * Get upgrAposativacao.
     *
     * @return int|null
     */
    public function getUpgrAposativacao()
    {
        return $this->upgrAposativacao;
    }

    /**
     * Set upgrDatafixa.
     *
     * @param \DateTime|null $upgrDatafixa
     *
     * @return Upgrade
     */
    public function setUpgrDatafixa($upgrDatafixa = null)
    {
        $this->upgrDatafixa = $upgrDatafixa;

        return $this;
    }

    /**
     * Get upgrDatafixa.
     *
     * @return \DateTime|null
     */
    public function getUpgrDatafixa()
    {
        return $this->upgrDatafixa;
    }

    /**
     * Set upgrDataupgrade.
     *
     * @param \DateTime|null $upgrDataupgrade
     *
     * @return Upgrade
     */
    public function setUpgrDataupgrade($upgrDataupgrade = null)
    {
        $this->upgrDataupgrade = $upgrDataupgrade;

        return $this;
    }

    /**
     * Get upgrDataupgrade.
     *
     * @return \DateTime|null
     */
    public function getUpgrDataupgrade()
    {
        return $this->upgrDataupgrade;
    }

    /**
     * Set upgrDatainc.
     *
     * @param \DateTime $upgrDatainc
     *
     * @return Upgrade
     */
    public function setUpgrDatainc($upgrDatainc)
    {
        $this->upgrDatainc = $upgrDatainc;

        return $this;
    }

    /**
     * Get upgrDatainc.
     *
     * @return \DateTime
     */
    public function getUpgrDatainc()
    {
        return $this->upgrDatainc;
    }

    /**
     * Set upgrUsuario.
     *
     * @param int|null $upgrUsuario
     *
     * @return Upgrade
     */
    public function setUpgrUsuario($upgrUsuario = null)
    {
        $this->upgrUsuario = $upgrUsuario;

        return $this;
    }

    /**
     * Get upgrUsuario.
     *
     * @return int|null
     */
    public function getUpgrUsuario()
    {
        return $this->upgrUsuario;
    }

    /**
     * Set proposalId.
     *
     * @param int|null $proposalId
     *
     * @return Upgrade
     */
    public function setProposalId($proposalId = null)
    {
        $this->proposalId = $proposalId;

        return $this;
    }

    /**
     * Get proposalId.
     *
     * @return int|null
     */
    public function getProposalId()
    {
        return $this->proposalId;
    }

    /**
     * Set contCodigoid.
     *
     * @param \App\Entity\Financeiro\Contrato|null $contCodigoid
     *
     * @return Upgrade
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
     * Set servcapaCodigoid.
     *
     * @param \App\Entity\Financeiro\Servicocapacidade|null $servcapaCodigoid
     *
     * @return Upgrade
     */
    public function setServcapaCodigoid(\App\Entity\Financeiro\Servicocapacidade $servcapaCodigoid = null)
    {
        $this->servcapaCodigoid = $servcapaCodigoid;

        return $this;
    }

    /**
     * Get servcapaCodigoid.
     *
     * @return \App\Entity\Financeiro\Servicocapacidade|null
     */
    public function getServcapaCodigoid()
    {
        return $this->servcapaCodigoid;
    }

    /**
     * Set upgrProximocodigoid.
     *
     * @param \App\Entity\Financeiro\Upgrade|null $upgrProximocodigoid
     *
     * @return Upgrade
     */
    public function setUpgrProximocodigoid(\App\Entity\Financeiro\Upgrade $upgrProximocodigoid = null)
    {
        $this->upgrProximocodigoid = $upgrProximocodigoid;

        return $this;
    }

    /**
     * Get upgrProximocodigoid.
     *
     * @return \App\Entity\Financeiro\Upgrade|null
     */
    public function getUpgrProximocodigoid()
    {
        return $this->upgrProximocodigoid;
    }
}
