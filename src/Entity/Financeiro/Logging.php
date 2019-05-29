<?php

namespace App\Entity\Financeiro;

/**
 * Logging
 */
class Logging
{
    /**
     * @var int
     */
    private $loggCodigoid;

    /**
     * @var int|null
     */
    private $usuaCodigoid;

    /**
     * @var \DateTime
     */
    private $loggDatainc = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     */
    private $loggIp;

    /**
     * @var string|null
     */
    private $loggOldendata;

    /**
     * @var string|null
     */
    private $loggDatabase;

    /**
     * @var string|null
     */
    private $loggTable;

    /**
     * @var int|null
     */
    private $loggTableid;

    /**
     * @var \App\Entity\Financeiro\Tipologging
     */
    private $tipologgCodigoid;


    /**
     * Get loggCodigoid.
     *
     * @return int
     */
    public function getLoggCodigoid()
    {
        return $this->loggCodigoid;
    }

    /**
     * Set usuaCodigoid.
     *
     * @param int|null $usuaCodigoid
     *
     * @return Logging
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
     * Set loggDatainc.
     *
     * @param \DateTime $loggDatainc
     *
     * @return Logging
     */
    public function setLoggDatainc($loggDatainc)
    {
        $this->loggDatainc = $loggDatainc;

        return $this;
    }

    /**
     * Get loggDatainc.
     *
     * @return \DateTime
     */
    public function getLoggDatainc()
    {
        return $this->loggDatainc;
    }

    /**
     * Set loggIp.
     *
     * @param string $loggIp
     *
     * @return Logging
     */
    public function setLoggIp($loggIp)
    {
        $this->loggIp = $loggIp;

        return $this;
    }

    /**
     * Get loggIp.
     *
     * @return string
     */
    public function getLoggIp()
    {
        return $this->loggIp;
    }

    /**
     * Set loggOldendata.
     *
     * @param string|null $loggOldendata
     *
     * @return Logging
     */
    public function setLoggOldendata($loggOldendata = null)
    {
        $this->loggOldendata = $loggOldendata;

        return $this;
    }

    /**
     * Get loggOldendata.
     *
     * @return string|null
     */
    public function getLoggOldendata()
    {
        return $this->loggOldendata;
    }

    /**
     * Set loggDatabase.
     *
     * @param string|null $loggDatabase
     *
     * @return Logging
     */
    public function setLoggDatabase($loggDatabase = null)
    {
        $this->loggDatabase = $loggDatabase;

        return $this;
    }

    /**
     * Get loggDatabase.
     *
     * @return string|null
     */
    public function getLoggDatabase()
    {
        return $this->loggDatabase;
    }

    /**
     * Set loggTable.
     *
     * @param string|null $loggTable
     *
     * @return Logging
     */
    public function setLoggTable($loggTable = null)
    {
        $this->loggTable = $loggTable;

        return $this;
    }

    /**
     * Get loggTable.
     *
     * @return string|null
     */
    public function getLoggTable()
    {
        return $this->loggTable;
    }

    /**
     * Set loggTableid.
     *
     * @param int|null $loggTableid
     *
     * @return Logging
     */
    public function setLoggTableid($loggTableid = null)
    {
        $this->loggTableid = $loggTableid;

        return $this;
    }

    /**
     * Get loggTableid.
     *
     * @return int|null
     */
    public function getLoggTableid()
    {
        return $this->loggTableid;
    }

    /**
     * Set tipologgCodigoid.
     *
     * @param \App\Entity\Financeiro\Tipologging|null $tipologgCodigoid
     *
     * @return Logging
     */
    public function setTipologgCodigoid(\App\Entity\Financeiro\Tipologging $tipologgCodigoid = null)
    {
        $this->tipologgCodigoid = $tipologgCodigoid;

        return $this;
    }

    /**
     * Get tipologgCodigoid.
     *
     * @return \App\Entity\Financeiro\Tipologging|null
     */
    public function getTipologgCodigoid()
    {
        return $this->tipologgCodigoid;
    }
}
