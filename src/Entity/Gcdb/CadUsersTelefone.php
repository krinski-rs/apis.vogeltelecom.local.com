<?php

namespace App\Entity\Gcdb;

/**
 * CadUsersTelefone
 */
class CadUsersTelefone
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int|null
     */
    private $ddi;

    /**
     * @var string|null
     */
    private $ddd;

    /**
     * @var string|null
     */
    private $telefone;

    /**
     * @var int|null
     */
    private $ramal;

    /**
     * @var bool|null
     */
    private $principal;

    /**
     * @var bool|null
     */
    private $emergencia;

    /**
     * @var \App\Entity\Gcdb\AdmTipoTelefone
     */
    private $admTiposTelefone;

    /**
     * @var \App\Entity\Gcdb\CadUsers
     */
    private $cadUser;


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
     * Set ddi.
     *
     * @param int|null $ddi
     *
     * @return CadUsersTelefone
     */
    public function setDdi($ddi = null)
    {
        $this->ddi = $ddi;

        return $this;
    }

    /**
     * Get ddi.
     *
     * @return int|null
     */
    public function getDdi()
    {
        return $this->ddi;
    }

    /**
     * Set ddd.
     *
     * @param string|null $ddd
     *
     * @return CadUsersTelefone
     */
    public function setDdd($ddd = null)
    {
        $this->ddd = $ddd;

        return $this;
    }

    /**
     * Get ddd.
     *
     * @return string|null
     */
    public function getDdd()
    {
        return $this->ddd;
    }

    /**
     * Set telefone.
     *
     * @param string|null $telefone
     *
     * @return CadUsersTelefone
     */
    public function setTelefone($telefone = null)
    {
        $this->telefone = $telefone;

        return $this;
    }

    /**
     * Get telefone.
     *
     * @return string|null
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set ramal.
     *
     * @param int|null $ramal
     *
     * @return CadUsersTelefone
     */
    public function setRamal($ramal = null)
    {
        $this->ramal = $ramal;

        return $this;
    }

    /**
     * Get ramal.
     *
     * @return int|null
     */
    public function getRamal()
    {
        return $this->ramal;
    }

    /**
     * Set principal.
     *
     * @param bool|null $principal
     *
     * @return CadUsersTelefone
     */
    public function setPrincipal($principal = null)
    {
        $this->principal = $principal;

        return $this;
    }

    /**
     * Get principal.
     *
     * @return bool|null
     */
    public function getPrincipal()
    {
        return $this->principal;
    }

    /**
     * Set emergencia.
     *
     * @param bool|null $emergencia
     *
     * @return CadUsersTelefone
     */
    public function setEmergencia($emergencia = null)
    {
        $this->emergencia = $emergencia;

        return $this;
    }

    /**
     * Get emergencia.
     *
     * @return bool|null
     */
    public function getEmergencia()
    {
        return $this->emergencia;
    }

    /**
     * Set admTiposTelefone.
     *
     * @param \App\Entity\Gcdb\AdmTipoTelefone|null $admTiposTelefone
     *
     * @return CadUsersTelefone
     */
    public function setAdmTiposTelefone(\App\Entity\Gcdb\AdmTipoTelefone $admTiposTelefone = null)
    {
        $this->admTiposTelefone = $admTiposTelefone;

        return $this;
    }

    /**
     * Get admTiposTelefone.
     *
     * @return \App\Entity\Gcdb\AdmTipoTelefone|null
     */
    public function getAdmTiposTelefone()
    {
        return $this->admTiposTelefone;
    }

    /**
     * Set cadUser.
     *
     * @param \App\Entity\Gcdb\CadUsers|null $cadUser
     *
     * @return CadUsersTelefone
     */
    public function setCadUser(\App\Entity\Gcdb\CadUsers $cadUser = null)
    {
        $this->cadUser = $cadUser;

        return $this;
    }

    /**
     * Get cadUser.
     *
     * @return \App\Entity\Gcdb\CadUsers|null
     */
    public function getCadUser()
    {
        return $this->cadUser;
    }
}
