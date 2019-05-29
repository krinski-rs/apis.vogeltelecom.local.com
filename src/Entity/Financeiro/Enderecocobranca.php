<?php

namespace App\Entity\Financeiro;

/**
 * Enderecocobranca
 */
class Enderecocobranca
{
    /**
     * @var int
     */
    private $endecobrCodigoid;

    /**
     * @var int
     */
    private $endecobrPais;

    /**
     * @var string
     */
    private $endecobrEstado;

    /**
     * @var string
     */
    private $endecobrCidade;

    /**
     * @var string
     */
    private $endecobrBairro;

    /**
     * @var string
     */
    private $endecobrLogradouro;

    /**
     * @var string
     */
    private $endecobrCep;

    /**
     * @var string
     */
    private $endecobrNumero;

    /**
     * @var string|null
     */
    private $endecobrComplemento;

    /**
     * @var string|null
     */
    private $endecobrLatitude;

    /**
     * @var string|null
     */
    private $endecobrLongitude;

    /**
     * @var \App\Entity\Financeiro\Contrato
     */
    private $contCodigoid;


    /**
     * Get endecobrCodigoid.
     *
     * @return int
     */
    public function getEndecobrCodigoid()
    {
        return $this->endecobrCodigoid;
    }

    /**
     * Set endecobrPais.
     *
     * @param int $endecobrPais
     *
     * @return Enderecocobranca
     */
    public function setEndecobrPais($endecobrPais)
    {
        $this->endecobrPais = $endecobrPais;

        return $this;
    }

    /**
     * Get endecobrPais.
     *
     * @return int
     */
    public function getEndecobrPais()
    {
        return $this->endecobrPais;
    }

    /**
     * Set endecobrEstado.
     *
     * @param string $endecobrEstado
     *
     * @return Enderecocobranca
     */
    public function setEndecobrEstado($endecobrEstado)
    {
        $this->endecobrEstado = $endecobrEstado;

        return $this;
    }

    /**
     * Get endecobrEstado.
     *
     * @return string
     */
    public function getEndecobrEstado()
    {
        return $this->endecobrEstado;
    }

    /**
     * Set endecobrCidade.
     *
     * @param string $endecobrCidade
     *
     * @return Enderecocobranca
     */
    public function setEndecobrCidade($endecobrCidade)
    {
        $this->endecobrCidade = $endecobrCidade;

        return $this;
    }

    /**
     * Get endecobrCidade.
     *
     * @return string
     */
    public function getEndecobrCidade()
    {
        return $this->endecobrCidade;
    }

    /**
     * Set endecobrBairro.
     *
     * @param string $endecobrBairro
     *
     * @return Enderecocobranca
     */
    public function setEndecobrBairro($endecobrBairro)
    {
        $this->endecobrBairro = $endecobrBairro;

        return $this;
    }

    /**
     * Get endecobrBairro.
     *
     * @return string
     */
    public function getEndecobrBairro()
    {
        return $this->endecobrBairro;
    }

    /**
     * Set endecobrLogradouro.
     *
     * @param string $endecobrLogradouro
     *
     * @return Enderecocobranca
     */
    public function setEndecobrLogradouro($endecobrLogradouro)
    {
        $this->endecobrLogradouro = $endecobrLogradouro;

        return $this;
    }

    /**
     * Get endecobrLogradouro.
     *
     * @return string
     */
    public function getEndecobrLogradouro()
    {
        return $this->endecobrLogradouro;
    }

    /**
     * Set endecobrCep.
     *
     * @param string $endecobrCep
     *
     * @return Enderecocobranca
     */
    public function setEndecobrCep($endecobrCep)
    {
        $this->endecobrCep = $endecobrCep;

        return $this;
    }

    /**
     * Get endecobrCep.
     *
     * @return string
     */
    public function getEndecobrCep()
    {
        return $this->endecobrCep;
    }

    /**
     * Set endecobrNumero.
     *
     * @param string $endecobrNumero
     *
     * @return Enderecocobranca
     */
    public function setEndecobrNumero($endecobrNumero)
    {
        $this->endecobrNumero = $endecobrNumero;

        return $this;
    }

    /**
     * Get endecobrNumero.
     *
     * @return string
     */
    public function getEndecobrNumero()
    {
        return $this->endecobrNumero;
    }

    /**
     * Set endecobrComplemento.
     *
     * @param string|null $endecobrComplemento
     *
     * @return Enderecocobranca
     */
    public function setEndecobrComplemento($endecobrComplemento = null)
    {
        $this->endecobrComplemento = $endecobrComplemento;

        return $this;
    }

    /**
     * Get endecobrComplemento.
     *
     * @return string|null
     */
    public function getEndecobrComplemento()
    {
        return $this->endecobrComplemento;
    }

    /**
     * Set endecobrLatitude.
     *
     * @param string|null $endecobrLatitude
     *
     * @return Enderecocobranca
     */
    public function setEndecobrLatitude($endecobrLatitude = null)
    {
        $this->endecobrLatitude = $endecobrLatitude;

        return $this;
    }

    /**
     * Get endecobrLatitude.
     *
     * @return string|null
     */
    public function getEndecobrLatitude()
    {
        return $this->endecobrLatitude;
    }

    /**
     * Set endecobrLongitude.
     *
     * @param string|null $endecobrLongitude
     *
     * @return Enderecocobranca
     */
    public function setEndecobrLongitude($endecobrLongitude = null)
    {
        $this->endecobrLongitude = $endecobrLongitude;

        return $this;
    }

    /**
     * Get endecobrLongitude.
     *
     * @return string|null
     */
    public function getEndecobrLongitude()
    {
        return $this->endecobrLongitude;
    }

    /**
     * Set contCodigoid.
     *
     * @param \App\Entity\Financeiro\Contrato|null $contCodigoid
     *
     * @return Enderecocobranca
     */
    public function setContCodigoid(\App\Entity\Financeiro\Contrato $contCodigoid = null)
    {
        $this->contCodigoid = $contCodigoid;

        return $this;
    }

    /**
     * Get contCodigoid.
     *
     * @return \App\Entity\Financeiro\Contrato|null
     */
    public function getContCodigoid()
    {
        return $this->contCodigoid;
    }
}
