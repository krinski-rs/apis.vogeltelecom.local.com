<?php

namespace App\Entity\Gcdb;

/**
 * AdmUf
 */
class AdmUf
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string|null
     */
    private $sigla;

    /**
     * @var string|null
     */
    private $nome;

    /**
     * @var \App\Entity\Gcdb\AdmPais
     */
    private $admPais;


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
     * Set sigla.
     *
     * @param string|null $sigla
     *
     * @return AdmUf
     */
    public function setSigla($sigla = null)
    {
        $this->sigla = $sigla;

        return $this;
    }

    /**
     * Get sigla.
     *
     * @return string|null
     */
    public function getSigla()
    {
        return $this->sigla;
    }

    /**
     * Set nome.
     *
     * @param string|null $nome
     *
     * @return AdmUf
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
     * Set admPais.
     *
     * @param \App\Entity\Gcdb\AdmPais|null $admPais
     *
     * @return AdmUf
     */
    public function setAdmPais(\App\Entity\Gcdb\AdmPais $admPais = null)
    {
        $this->admPais = $admPais;

        return $this;
    }

    /**
     * Get admPais.
     *
     * @return \App\Entity\Gcdb\AdmPais|null
     */
    public function getAdmPais()
    {
        return $this->admPais;
    }
}
