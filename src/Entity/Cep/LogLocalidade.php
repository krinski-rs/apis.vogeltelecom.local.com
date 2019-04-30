<?php

namespace App\Entity\Cep;

/**
 * LogLocalidade
 */
class LogLocalidade
{
    /**
     * @var int
     */
    private $locNuSequencial = '0';

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
    private $locNuSequencialSub = '0';

    /**
     * @var string|null
     */
    private $temp;

    /**
     * @var \App\Entity\Cep\LogFaixaUf
     */
    private $ufeSg;


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
}
