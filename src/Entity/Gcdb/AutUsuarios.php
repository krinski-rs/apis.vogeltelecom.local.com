<?php

namespace App\Entity\Gcdb;

/**
 * AutUsuarios
 */
class AutUsuarios
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $username = '';

    /**
     * @var string
     */
    private $pass;

    /**
     * @var string
     */
    private $nome;

    /**
     * @var int
     */
    private $ativo = '1';

    /**
     * @var bool
     */
    private $canal = '0';

    /**
     * @var bool
     */
    private $passwordVersion = '1';


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
     * Set username.
     *
     * @param string $username
     *
     * @return AutUsuarios
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username.
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set pass.
     *
     * @param string $pass
     *
     * @return AutUsuarios
     */
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

    /**
     * Get pass.
     *
     * @return string
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Set nome.
     *
     * @param string $nome
     *
     * @return AutUsuarios
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome.
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set ativo.
     *
     * @param int $ativo
     *
     * @return AutUsuarios
     */
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;

        return $this;
    }

    /**
     * Get ativo.
     *
     * @return int
     */
    public function getAtivo()
    {
        return $this->ativo;
    }

    /**
     * Set canal.
     *
     * @param bool $canal
     *
     * @return AutUsuarios
     */
    public function setCanal($canal)
    {
        $this->canal = $canal;

        return $this;
    }

    /**
     * Get canal.
     *
     * @return bool
     */
    public function getCanal()
    {
        return $this->canal;
    }

    /**
     * Set passwordVersion.
     *
     * @param bool $passwordVersion
     *
     * @return AutUsuarios
     */
    public function setPasswordVersion($passwordVersion)
    {
        $this->passwordVersion = $passwordVersion;

        return $this;
    }

    /**
     * Get passwordVersion.
     *
     * @return bool
     */
    public function getPasswordVersion()
    {
        return $this->passwordVersion;
    }
}
