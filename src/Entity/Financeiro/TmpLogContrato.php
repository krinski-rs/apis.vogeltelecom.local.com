<?php

namespace App\Entity\Financeiro;

/**
 * TmpLogContrato
 */
class TmpLogContrato
{
    /**
     * @var int
     */
    private $idLog;

    /**
     * @var \DateTime
     */
    private $dataInc;

    /**
     * @var string
     */
    private $obs;

    /**
     * @var \App\Entity\Financeiro\TmpContrato
     */
    private $idTmpContrato;


    /**
     * Get idLog.
     *
     * @return int
     */
    public function getIdLog()
    {
        return $this->idLog;
    }

    /**
     * Set dataInc.
     *
     * @param \DateTime $dataInc
     *
     * @return TmpLogContrato
     */
    public function setDataInc($dataInc)
    {
        $this->dataInc = $dataInc;

        return $this;
    }

    /**
     * Get dataInc.
     *
     * @return \DateTime
     */
    public function getDataInc()
    {
        return $this->dataInc;
    }

    /**
     * Set obs.
     *
     * @param string $obs
     *
     * @return TmpLogContrato
     */
    public function setObs($obs)
    {
        $this->obs = $obs;

        return $this;
    }

    /**
     * Get obs.
     *
     * @return string
     */
    public function getObs()
    {
        return $this->obs;
    }

    /**
     * Set idTmpContrato.
     *
     * @param \App\Entity\Financeiro\TmpContrato|null $idTmpContrato
     *
     * @return TmpLogContrato
     */
    public function setIdTmpContrato(\App\Entity\Financeiro\TmpContrato $idTmpContrato = null)
    {
        $this->idTmpContrato = $idTmpContrato;

        return $this;
    }

    /**
     * Get idTmpContrato.
     *
     * @return \App\Entity\Financeiro\TmpContrato|null
     */
    public function getIdTmpContrato()
    {
        return $this->idTmpContrato;
    }
}
