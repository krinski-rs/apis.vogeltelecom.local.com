<?php

namespace App\Entity\Gcdb;

/**
 * CadUsersEmail
 */
class CadUsersEmail
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string|null
     */
    private $email;

    /**
     * @var bool|null
     */
    private $mailing;

    /**
     * @var bool|null
     */
    private $principal;

    /**
     * @var int|null
     */
    private $idAdmTipoLigacao;

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
     * Set email.
     *
     * @param string|null $email
     *
     * @return CadUsersEmail
     */
    public function setEmail($email = null)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email.
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set mailing.
     *
     * @param bool|null $mailing
     *
     * @return CadUsersEmail
     */
    public function setMailing($mailing = null)
    {
        $this->mailing = $mailing;

        return $this;
    }

    /**
     * Get mailing.
     *
     * @return bool|null
     */
    public function getMailing()
    {
        return $this->mailing;
    }

    /**
     * Set principal.
     *
     * @param bool|null $principal
     *
     * @return CadUsersEmail
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
     * Set idAdmTipoLigacao.
     *
     * @param int|null $idAdmTipoLigacao
     *
     * @return CadUsersEmail
     */
    public function setIdAdmTipoLigacao($idAdmTipoLigacao = null)
    {
        $this->idAdmTipoLigacao = $idAdmTipoLigacao;

        return $this;
    }

    /**
     * Get idAdmTipoLigacao.
     *
     * @return int|null
     */
    public function getIdAdmTipoLigacao()
    {
        return $this->idAdmTipoLigacao;
    }

    /**
     * Set cadUser.
     *
     * @param \App\Entity\Gcdb\CadUsers|null $cadUser
     *
     * @return CadUsersEmail
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
