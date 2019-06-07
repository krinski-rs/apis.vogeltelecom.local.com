<?php

namespace App\Entity\Financeiro;

/**
 * Ativacao
 */
class Ativacao
{
    /**
     * @var int
     */
    private $ativCodigoid;

    /**
     * @var int|null
     */
    private $usuaCodigoid;

    /**
     * @var \DateTime
     */
    private $ativDatainc = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime|null
     */
    private $ativDataativado;

    /**
     * @var bool
     */
    private $ativApospagamento;

    /**
     * @var bool
     */
    private $ativAposassinatura;

    /**
     * @var \DateTime|null
     */
    private $ativDatafixa;

    /**
     * @var int|null
     */
    private $ativDiasapos;

    /**
     * @var bool
     */
    private $ativCobraraposativacao;

    /**
     * @var bool
     */
    private $ativCobraraposassinatura;

    /**
     * @var \DateTime|null
     */
    private $ativCobrardatafixa;

    /**
     * @var int|null
     */
    private $ativCobrardiasapos;

    /**
     * @var bool|null
     */
    private $ativCobraraposprimeiraparcela;

    /**
     * @var \DateTime|null
     */
    private $ativDataalterado;

    /**
     * @var \DateTime|null
     */
    private $ativPagamentotaxa;

    /**
     * @var \App\Entity\Financeiro\Contrato
     */
    private $contCodigoid;


    /**
     * Get ativCodigoid.
     *
     * @return int
     */
    public function getAtivCodigoid()
    {
        return $this->ativCodigoid;
    }

    /**
     * Set usuaCodigoid.
     *
     * @param int|null $usuaCodigoid
     *
     * @return Ativacao
     */
    public function setUsuaCodigoid($usuaCodigoid = null)
    {
        $this->usuaCodigoid = $usuaCodigoid;

        return $this;
    }

    /**
     * Get usuaCodigoid.
     *
     * @return int|null
     */
    public function getUsuaCodigoid()
    {
        return $this->usuaCodigoid;
    }

    /**
     * Set ativDatainc.
     *
     * @param \DateTime $ativDatainc
     *
     * @return Ativacao
     */
    public function setAtivDatainc($ativDatainc)
    {
        $this->ativDatainc = $ativDatainc;

        return $this;
    }

    /**
     * Get ativDatainc.
     *
     * @return \DateTime
     */
    public function getAtivDatainc()
    {
        return $this->ativDatainc;
    }

    /**
     * Set ativDataativado.
     *
     * @param \DateTime|null $ativDataativado
     *
     * @return Ativacao
     */
    public function setAtivDataativado($ativDataativado = null)
    {
        $this->ativDataativado = $ativDataativado;

        return $this;
    }

    /**
     * Get ativDataativado.
     *
     * @return \DateTime|null
     */
    public function getAtivDataativado()
    {
        return $this->ativDataativado;
    }

    /**
     * Set ativApospagamento.
     *
     * @param bool $ativApospagamento
     *
     * @return Ativacao
     */
    public function setAtivApospagamento($ativApospagamento)
    {
        $this->ativApospagamento = $ativApospagamento;

        return $this;
    }

    /**
     * Get ativApospagamento.
     *
     * @return bool
     */
    public function getAtivApospagamento()
    {
        return $this->ativApospagamento;
    }

    /**
     * Set ativAposassinatura.
     *
     * @param bool $ativAposassinatura
     *
     * @return Ativacao
     */
    public function setAtivAposassinatura($ativAposassinatura)
    {
        $this->ativAposassinatura = $ativAposassinatura;

        return $this;
    }

    /**
     * Get ativAposassinatura.
     *
     * @return bool
     */
    public function getAtivAposassinatura()
    {
        return $this->ativAposassinatura;
    }

    /**
     * Set ativDatafixa.
     *
     * @param \DateTime|null $ativDatafixa
     *
     * @return Ativacao
     */
    public function setAtivDatafixa($ativDatafixa = null)
    {
        $this->ativDatafixa = $ativDatafixa;

        return $this;
    }

    /**
     * Get ativDatafixa.
     *
     * @return \DateTime|null
     */
    public function getAtivDatafixa()
    {
        return $this->ativDatafixa;
    }

    /**
     * Set ativDiasapos.
     *
     * @param int|null $ativDiasapos
     *
     * @return Ativacao
     */
    public function setAtivDiasapos($ativDiasapos = null)
    {
        $this->ativDiasapos = $ativDiasapos;

        return $this;
    }

    /**
     * Get ativDiasapos.
     *
     * @return int|null
     */
    public function getAtivDiasapos()
    {
        return $this->ativDiasapos;
    }

    /**
     * Set ativCobraraposativacao.
     *
     * @param bool $ativCobraraposativacao
     *
     * @return Ativacao
     */
    public function setAtivCobraraposativacao($ativCobraraposativacao)
    {
        $this->ativCobraraposativacao = $ativCobraraposativacao;

        return $this;
    }

    /**
     * Get ativCobraraposativacao.
     *
     * @return bool
     */
    public function getAtivCobraraposativacao()
    {
        return $this->ativCobraraposativacao;
    }

    /**
     * Set ativCobraraposassinatura.
     *
     * @param bool $ativCobraraposassinatura
     *
     * @return Ativacao
     */
    public function setAtivCobraraposassinatura($ativCobraraposassinatura)
    {
        $this->ativCobraraposassinatura = $ativCobraraposassinatura;

        return $this;
    }

    /**
     * Get ativCobraraposassinatura.
     *
     * @return bool
     */
    public function getAtivCobraraposassinatura()
    {
        return $this->ativCobraraposassinatura;
    }

    /**
     * Set ativCobrardatafixa.
     *
     * @param \DateTime|null $ativCobrardatafixa
     *
     * @return Ativacao
     */
    public function setAtivCobrardatafixa($ativCobrardatafixa = null)
    {
        $this->ativCobrardatafixa = $ativCobrardatafixa;

        return $this;
    }

    /**
     * Get ativCobrardatafixa.
     *
     * @return \DateTime|null
     */
    public function getAtivCobrardatafixa()
    {
        return $this->ativCobrardatafixa;
    }

    /**
     * Set ativCobrardiasapos.
     *
     * @param int|null $ativCobrardiasapos
     *
     * @return Ativacao
     */
    public function setAtivCobrardiasapos($ativCobrardiasapos = null)
    {
        $this->ativCobrardiasapos = $ativCobrardiasapos;

        return $this;
    }

    /**
     * Get ativCobrardiasapos.
     *
     * @return int|null
     */
    public function getAtivCobrardiasapos()
    {
        return $this->ativCobrardiasapos;
    }

    /**
     * Set ativCobraraposprimeiraparcela.
     *
     * @param bool|null $ativCobraraposprimeiraparcela
     *
     * @return Ativacao
     */
    public function setAtivCobraraposprimeiraparcela($ativCobraraposprimeiraparcela = null)
    {
        $this->ativCobraraposprimeiraparcela = $ativCobraraposprimeiraparcela;

        return $this;
    }

    /**
     * Get ativCobraraposprimeiraparcela.
     *
     * @return bool|null
     */
    public function getAtivCobraraposprimeiraparcela()
    {
        return $this->ativCobraraposprimeiraparcela;
    }

    /**
     * Set ativDataalterado.
     *
     * @param \DateTime|null $ativDataalterado
     *
     * @return Ativacao
     */
    public function setAtivDataalterado($ativDataalterado = null)
    {
        $this->ativDataalterado = $ativDataalterado;

        return $this;
    }

    /**
     * Get ativDataalterado.
     *
     * @return \DateTime|null
     */
    public function getAtivDataalterado()
    {
        return $this->ativDataalterado;
    }

    /**
     * Set ativPagamentotaxa.
     *
     * @param \DateTime|null $ativPagamentotaxa
     *
     * @return Ativacao
     */
    public function setAtivPagamentotaxa($ativPagamentotaxa = null)
    {
        $this->ativPagamentotaxa = $ativPagamentotaxa;

        return $this;
    }

    /**
     * Get ativPagamentotaxa.
     *
     * @return \DateTime|null
     */
    public function getAtivPagamentotaxa()
    {
        return $this->ativPagamentotaxa;
    }

    /**
     * Set contCodigoid.
     *
     * @param \App\Entity\Financeiro\Contrato|null $contCodigoid
     *
     * @return Ativacao
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
