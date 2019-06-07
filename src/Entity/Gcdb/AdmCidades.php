<?php

namespace App\Entity\Gcdb;

/**
 * AdmCidades
 */
class AdmCidades
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string|null
     */
    private $nome;

    /**
     * @var int|null
     */
    private $codigoIbge;

    /**
     * @var \App\Entity\Gcdb\AdmUf
     */
    private $admUf;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nome.
     *
     * @param string|null $nome
     *
     * @return AdmCidades
     */
    public function setNome($nome = null)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome.
     *
     * @return string|null
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set codigoIbge.
     *
     * @param int|null $codigoIbge
     *
     * @return AdmCidades
     */
    public function setCodigoIbge($codigoIbge = null)
    {
        $this->codigoIbge = $codigoIbge;

        return $this;
    }

    /**
     * Get codigoIbge.
     *
     * @return int|null
     */
    public function getCodigoIbge()
    {
        return $this->codigoIbge;
    }

    /**
     * Set admUf.
     *
     * @param \App\Entity\Gcdb\AdmUf|null $admUf
     *
     * @return AdmCidades
     */
    public function setAdmUf(\App\Entity\Gcdb\AdmUf $admUf = null)
    {
        $this->admUf = $admUf;

        return $this;
    }

    /**
     * Get admUf.
     *
     * @return \App\Entity\Gcdb\AdmUf|null
     */
    public function getAdmUf()
    {
        return $this->admUf;
    }
}
