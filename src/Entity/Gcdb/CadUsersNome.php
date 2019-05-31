<?php

namespace App\Entity\Gcdb;

/**
 * CadUsersNome
 */
class CadUsersNome
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
     * @var \App\Entity\Gcdb\CadUsers
     */
    private $cadUser;

    /**
     * @var \App\Entity\Gcdb\AdmTipoNome
     */
    private $admTipoNome;


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
     * @return CadUsersNome
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
     * Set cadUser.
     *
     * @param \App\Entity\Gcdb\CadUsers|null $cadUser
     *
     * @return CadUsersNome
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

    /**
     * Set admTipoNome.
     *
     * @param \App\Entity\Gcdb\AdmTipoNome|null $admTipoNome
     *
     * @return CadUsersNome
     */
    public function setAdmTipoNome(\App\Entity\Gcdb\AdmTipoNome $admTipoNome = null)
    {
        $this->admTipoNome = $admTipoNome;

        return $this;
    }

    /**
     * Get admTipoNome.
     *
     * @return \App\Entity\Gcdb\AdmTipoNome|null
     */
    public function getAdmTipoNome()
    {
        return $this->admTipoNome;
    }
}
