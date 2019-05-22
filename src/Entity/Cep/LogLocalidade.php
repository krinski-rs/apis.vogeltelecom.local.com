<?php

namespace App\Entity\Cep;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * LogLocalidade
 */
class LogLocalidade
{
    /**
     * @var int
     */
    private $locNuSequencial;

    /**
     * @var string|null
     */
    private $locNosub;

    /**
     * @var string|null
     */
    private $locNo;

    /**
     * @var string|null
     */
    private $cep;

    /**
     * @var int|null
     */
    private $locInSituacao = '0';

    /**
     * @var string
     */
    private $locInTipoLocalidade;

    /**
     * @var int|null
     */
    private $locNuSequencialSub;

    /**
     * @var string|null
     */
    private $temp;

    /**
     * @var \App\Entity\Cep\LogFaixaUf
     */
    private $ufeSg;

    /**
     * @var int|null
     */
    private $locCodigoIbge;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $logLogradouro;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $logBairro;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $logGrandeUsuario;
    
    public function __construct() {
        $this->logLogradouro = new ArrayCollection();
        $this->logBairro = new ArrayCollection();
        $this->logGrandeUsuario = new ArrayCollection();
    }
    

    /**
     * Get locNuSequencial.
     *
     * @return int
     */
    public function getLocNuSequencial()
    {
        return $this->locNuSequencial;
    }

    /**
     * Set locNosub.
     *
     * @param string|null $locNosub
     *
     * @return LogLocalidade
     */
    public function setLocNosub($locNosub = null)
    {
        $this->locNosub = $locNosub;

        return $this;
    }

    /**
     * Get locNosub.
     *
     * @return string|null
     */
    public function getLocNosub()
    {
        return $this->locNosub;
    }

    /**
     * Set locNo.
     *
     * @param string|null $locNo
     *
     * @return LogLocalidade
     */
    public function setLocNo($locNo = null)
    {
        $this->locNo = $locNo;

        return $this;
    }

    /**
     * Get locNo.
     *
     * @return string|null
     */
    public function getLocNo()
    {
        return $this->locNo;
    }

    /**
     * Set cep.
     *
     * @param string|null $cep
     *
     * @return LogLocalidade
     */
    public function setCep($cep = null)
    {
        $this->cep = $cep;

        return $this;
    }

    /**
     * Get cep.
     *
     * @return string|null
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * Set locInSituacao.
     *
     * @param int|null $locInSituacao
     *
     * @return LogLocalidade
     */
    public function setLocInSituacao($locInSituacao = null)
    {
        $this->locInSituacao = $locInSituacao;

        return $this;
    }

    /**
     * Get locInSituacao.
     *
     * @return int|null
     */
    public function getLocInSituacao()
    {
        return $this->locInSituacao;
    }

    /**
     * Set locInTipoLocalidade.
     *
     * @param string $locInTipoLocalidade
     *
     * @return LogLocalidade
     */
    public function setLocInTipoLocalidade($locInTipoLocalidade)
    {
        $this->locInTipoLocalidade = $locInTipoLocalidade;

        return $this;
    }

    /**
     * Get locInTipoLocalidade.
     *
     * @return string
     */
    public function getLocInTipoLocalidade()
    {
        return $this->locInTipoLocalidade;
    }

    /**
     * Set locNuSequencialSub.
     *
     * @param int|null $locNuSequencialSub
     *
     * @return LogLocalidade
     */
    public function setLocNuSequencialSub($locNuSequencialSub = null)
    {
        $this->locNuSequencialSub = $locNuSequencialSub;

        return $this;
    }

    /**
     * Get locNuSequencialSub.
     *
     * @return int|null
     */
    public function getLocNuSequencialSub()
    {
        return $this->locNuSequencialSub;
    }

    /**
     * Set temp.
     *
     * @param string|null $temp
     *
     * @return LogLocalidade
     */
    public function setTemp($temp = null)
    {
        $this->temp = $temp;

        return $this;
    }

    /**
     * Get temp.
     *
     * @return string|null
     */
    public function getTemp()
    {
        return $this->temp;
    }

    /**
     * Set locCodigoIbge.
     *
     * @param int|null $locCodigoIbge
     *
     * @return LogLocalidade
     */
    public function setLocCodigoIbge($locCodigoIbge = null)
    {
        $this->locCodigoIbge = $locCodigoIbge;

        return $this;
    }

    /**
     * Get locCodigoIbge.
     *
     * @return int|null
     */
    public function getLocCodigoIbge()
    {
        return $this->locCodigoIbge;
    }

    /**
     * Set ufeSg.
     *
     * @param \App\Entity\Cep\LogFaixaUf|null $ufeSg
     *
     * @return LogLocalidade
     */
    public function setUfeSg(\App\Entity\Cep\LogFaixaUf $ufeSg = null)
    {
        $this->ufeSg = $ufeSg;

        return $this;
    }

    /**
     * Get ufeSg.
     *
     * @return \App\Entity\Cep\LogFaixaUf|null
     */
    public function getUfeSg()
    {
        return $this->ufeSg;
    }

    /**
     * Add logLogradouro.
     *
     * @param \App\Entity\Cep\LogLogradouro|null $logLogradouro
     *
     * @return LogLocalidade
     */
    public function addLogLogradouro(\App\Entity\Cep\LogLogradouro $logLogradouro = null)
    {
        $this->logLogradouro[] = $logLogradouro;

        return $this;
    }

    /**
     * Remove logLogradouro.
     *
     * @param \App\Entity\Cep\LogLogradouro|null $logLogradouro
     *
     * @return LogLocalidade
     */
    public function removeLogLogradouro(\App\Entity\Cep\LogLogradouro $logLogradouro = null)
    {
        $this->logLogradouro->removeElement($logLogradouro);

        return $this;
    }

    /**
     * Get logLogradouro.
     *
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getLogLogradouro()
    {
        return $this->logLogradouro;
    }

    /**
     * Add logBairro.
     *
     * @param \App\Entity\Cep\LogBairro|null $logBairro
     *
     * @return LogLocalidade
     */
    public function addLogBairro(\App\Entity\Cep\LogBairro $logBairro = null)
    {
        $this->logBairro[] = $logBairro;

        return $this;
    }

    /**
     * Remove logBairro.
     *
     * @param \App\Entity\Cep\LogLogradouro|null $logBairro
     *
     * @return LogLocalidade
     */
    public function removeLogBairro(\App\Entity\Cep\LogBairro $logBairro = null)
    {
        $this->logBairro->removeElement($logBairro);

        return $this;
    }

    /**
     * Get logBairro.
     *
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getLogBairro()
    {
        return $this->logBairro;
    }

    /**
     * Add logGrandeUsuario.
     *
     * @param \App\Entity\Cep\LogGrandeUsuario|null $logGrandeUsuario
     *
     * @return LogLocalidade
     */
    public function addLogGrandeUsuario(\App\Entity\Cep\LogGrandeUsuario $logGrandeUsuario = null)
    {
        $this->logGrandeUsuario[] = $logGrandeUsuario;

        return $this;
    }

    /**
     * Remove logGrandeUsuario.
     *
     * @param \App\Entity\Cep\LogGrandeUsuario|null $logGrandeUsuario
     *
     * @return LogLocalidade
     */
    public function removeLogGrandeUsuario(\App\Entity\Cep\LogGrandeUsuario $logGrandeUsuario = null)
    {
        $this->logGrandeUsuario->removeElement($logGrandeUsuario);

        return $this;
    }

    /**
     * Get logGrandeUsuario.
     *
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getLogGrandeUsuario()
    {
        return $this->logGrandeUsuario;
    }
}
