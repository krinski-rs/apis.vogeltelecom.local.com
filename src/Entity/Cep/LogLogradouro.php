<?php

namespace App\Entity\Cep;

/**
 * LogLogradouro
 */
class LogLogradouro
{
    /**
     * @var int
     */
    private $logNuSequencial = '0';

    /**
     * @var string
     */
    private $ufeSg;

    /**
     * @var string
     */
    private $logNo;

    /**
     * @var string
     */
    private $logNome;

    /**
     * @var int|null
     */
    private $baiNuSequencialFim = '0';

    /**
     * @var string
     */
    private $cep;

    /**
     * @var string|null
     */
    private $logComplemento;

    /**
     * @var string|null
     */
    private $logTipoLogradouro;

    /**
     * @var string
     */
    private $logStatusTipoLog;

    /**
     * @var string
     */
    private $logNoSemAcento;

    /**
     * @var string|null
     */
    private $indUop;

    /**
     * @var string|null
     */
    private $indGru;

    /**
     * @var string|null
     */
    private $temp;

    /**
     * @var \App\Entity\Cep\LogBairro
     */
    private $baiNuSequencialIni;

    /**
     * @var \App\Entity\Cep\LogLocalidade
     */
    private $locNuSequencial;


    /**
     * Get logNuSequencial.
     *
     * @return int
     */
    public function getLogNuSequencial()
    {
        return $this->logNuSequencial;
    }

    /**
     * Set ufeSg.
     *
     * @param string $ufeSg
     *
     * @return LogLogradouro
     */
    public function setUfeSg($ufeSg)
    {
        $this->ufeSg = $ufeSg;

        return $this;
    }

    /**
     * Get ufeSg.
     *
     * @return string
     */
    public function getUfeSg()
    {
        return $this->ufeSg;
    }

    /**
     * Set logNo.
     *
     * @param string $logNo
     *
     * @return LogLogradouro
     */
    public function setLogNo($logNo)
    {
        $this->logNo = $logNo;

        return $this;
    }

    /**
     * Get logNo.
     *
     * @return string
     */
    public function getLogNo()
    {
        return $this->logNo;
    }

    /**
     * Set logNome.
     *
     * @param string $logNome
     *
     * @return LogLogradouro
     */
    public function setLogNome($logNome)
    {
        $this->logNome = $logNome;

        return $this;
    }

    /**
     * Get logNome.
     *
     * @return string
     */
    public function getLogNome()
    {
        return $this->logNome;
    }

    /**
     * Set baiNuSequencialFim.
     *
     * @param int|null $baiNuSequencialFim
     *
     * @return LogLogradouro
     */
    public function setBaiNuSequencialFim($baiNuSequencialFim = null)
    {
        $this->baiNuSequencialFim = $baiNuSequencialFim;

        return $this;
    }

    /**
     * Get baiNuSequencialFim.
     *
     * @return int|null
     */
    public function getBaiNuSequencialFim()
    {
        return $this->baiNuSequencialFim;
    }

    /**
     * Set cep.
     *
     * @param string $cep
     *
     * @return LogLogradouro
     */
    public function setCep($cep)
    {
        $this->cep = $cep;

        return $this;
    }

    /**
     * Get cep.
     *
     * @return string
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * Set logComplemento.
     *
     * @param string|null $logComplemento
     *
     * @return LogLogradouro
     */
    public function setLogComplemento($logComplemento = null)
    {
        $this->logComplemento = $logComplemento;

        return $this;
    }

    /**
     * Get logComplemento.
     *
     * @return string|null
     */
    public function getLogComplemento()
    {
        return $this->logComplemento;
    }

    /**
     * Set logTipoLogradouro.
     *
     * @param string|null $logTipoLogradouro
     *
     * @return LogLogradouro
     */
    public function setLogTipoLogradouro($logTipoLogradouro = null)
    {
        $this->logTipoLogradouro = $logTipoLogradouro;

        return $this;
    }

    /**
     * Get logTipoLogradouro.
     *
     * @return string|null
     */
    public function getLogTipoLogradouro()
    {
        return $this->logTipoLogradouro;
    }

    /**
     * Set logStatusTipoLog.
     *
     * @param string $logStatusTipoLog
     *
     * @return LogLogradouro
     */
    public function setLogStatusTipoLog($logStatusTipoLog)
    {
        $this->logStatusTipoLog = $logStatusTipoLog;

        return $this;
    }

    /**
     * Get logStatusTipoLog.
     *
     * @return string
     */
    public function getLogStatusTipoLog()
    {
        return $this->logStatusTipoLog;
    }

    /**
     * Set logNoSemAcento.
     *
     * @param string $logNoSemAcento
     *
     * @return LogLogradouro
     */
    public function setLogNoSemAcento($logNoSemAcento)
    {
        $this->logNoSemAcento = $logNoSemAcento;

        return $this;
    }

    /**
     * Get logNoSemAcento.
     *
     * @return string
     */
    public function getLogNoSemAcento()
    {
        return $this->logNoSemAcento;
    }

    /**
     * Set indUop.
     *
     * @param string|null $indUop
     *
     * @return LogLogradouro
     */
    public function setIndUop($indUop = null)
    {
        $this->indUop = $indUop;

        return $this;
    }

    /**
     * Get indUop.
     *
     * @return string|null
     */
    public function getIndUop()
    {
        return $this->indUop;
    }

    /**
     * Set indGru.
     *
     * @param string|null $indGru
     *
     * @return LogLogradouro
     */
    public function setIndGru($indGru = null)
    {
        $this->indGru = $indGru;

        return $this;
    }

    /**
     * Get indGru.
     *
     * @return string|null
     */
    public function getIndGru()
    {
        return $this->indGru;
    }

    /**
     * Set temp.
     *
     * @param string|null $temp
     *
     * @return LogLogradouro
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
     * Set baiNuSequencialIni.
     *
     * @param \App\Entity\Cep\LogBairro|null $baiNuSequencialIni
     *
     * @return LogLogradouro
     */
    public function setBaiNuSequencialIni(\App\Entity\Cep\LogBairro $baiNuSequencialIni = null)
    {
        $this->baiNuSequencialIni = $baiNuSequencialIni;

        return $this;
    }

    /**
     * Get baiNuSequencialIni.
     *
     * @return \App\Entity\Cep\LogBairro|null
     */
    public function getBaiNuSequencialIni()
    {
        return $this->baiNuSequencialIni;
    }

    /**
     * Set locNuSequencial.
     *
     * @param \App\Entity\Cep\LogLocalidade|null $locNuSequencial
     *
     * @return LogLogradouro
     */
    public function setLocNuSequencial(\App\Entity\Cep\LogLocalidade $locNuSequencial = null)
    {
        $this->locNuSequencial = $locNuSequencial;

        return $this;
    }

    /**
     * Get locNuSequencial.
     *
     * @return \App\Entity\Cep\LogLocalidade|null
     */
    public function getLocNuSequencial()
    {
        return $this->locNuSequencial;
    }
}
