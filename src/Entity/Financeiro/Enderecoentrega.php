<?php

namespace App\Entity\Financeiro;

/**
 * Enderecoentrega
 */
class Enderecoentrega
{
    /**
     * @var int
     */
    private $endeentrCodigoid;

    /**
     * @var int|null
     */
    private $contCodigoid;

    /**
     * @var bool
     */
    private $endeentrConcentrador;

    /**
     * @var int
     */
    private $endeentrPais;

    /**
     * @var int
     */
    private $endeentrEstado;

    /**
     * @var int
     */
    private $endeentrCidade;

    /**
     * @var string
     */
    private $endeentrBairro;

    /**
     * @var string
     */
    private $endeentrLogradouro;

    /**
     * @var string
     */
    private $endeentrCep;

    /**
     * @var int
     */
    private $endeentrNumero;

    /**
     * @var string|null
     */
    private $endeentrComplemento;

    /**
     * @var string|null
     */
    private $endeentrPonta;

    /**
     * @var string|null
     */
    private $endeentrLatitude;

    /**
     * @var string|null
     */
    private $endeentrLongitude;

    /**
     * @var string|null
     */
    private $endeentrDesignadorOld;

    /**
     * @var int|null
     */
    private $admLogradouro;


    /**
     * Get endeentrCodigoid.
     *
     * @return int
     */
    public function getEndeentrCodigoid()
    {
        return $this->endeentrCodigoid;
    }

    /**
     * Set contCodigoid.
     *
     * @param int|null $contCodigoid
     *
     * @return Enderecoentrega
     */
    public function setContCodigoid($contCodigoid = null)
    {
        $this->contCodigoid = $contCodigoid;

        return $this;
    }

    /**
     * Get contCodigoid.
     *
     * @return int|null
     */
    public function getContCodigoid()
    {
        return $this->contCodigoid;
    }

    /**
     * Set endeentrConcentrador.
     *
     * @param bool $endeentrConcentrador
     *
     * @return Enderecoentrega
     */
    public function setEndeentrConcentrador($endeentrConcentrador)
    {
        $this->endeentrConcentrador = $endeentrConcentrador;

        return $this;
    }

    /**
     * Get endeentrConcentrador.
     *
     * @return bool
     */
    public function getEndeentrConcentrador()
    {
        return $this->endeentrConcentrador;
    }

    /**
     * Set endeentrPais.
     *
     * @param int $endeentrPais
     *
     * @return Enderecoentrega
     */
    public function setEndeentrPais($endeentrPais)
    {
        $this->endeentrPais = $endeentrPais;

        return $this;
    }

    /**
     * Get endeentrPais.
     *
     * @return int
     */
    public function getEndeentrPais()
    {
        return $this->endeentrPais;
    }

    /**
     * Set endeentrEstado.
     *
     * @param int $endeentrEstado
     *
     * @return Enderecoentrega
     */
    public function setEndeentrEstado($endeentrEstado)
    {
        $this->endeentrEstado = $endeentrEstado;

        return $this;
    }

    /**
     * Get endeentrEstado.
     *
     * @return int
     */
    public function getEndeentrEstado()
    {
        return $this->endeentrEstado;
    }

    /**
     * Set endeentrCidade.
     *
     * @param int $endeentrCidade
     *
     * @return Enderecoentrega
     */
    public function setEndeentrCidade($endeentrCidade)
    {
        $this->endeentrCidade = $endeentrCidade;

        return $this;
    }

    /**
     * Get endeentrCidade.
     *
     * @return int
     */
    public function getEndeentrCidade()
    {
        return $this->endeentrCidade;
    }

    /**
     * Set endeentrBairro.
     *
     * @param string $endeentrBairro
     *
     * @return Enderecoentrega
     */
    public function setEndeentrBairro($endeentrBairro)
    {
        $this->endeentrBairro = $endeentrBairro;

        return $this;
    }

    /**
     * Get endeentrBairro.
     *
     * @return string
     */
    public function getEndeentrBairro()
    {
        return $this->endeentrBairro;
    }

    /**
     * Set endeentrLogradouro.
     *
     * @param string $endeentrLogradouro
     *
     * @return Enderecoentrega
     */
    public function setEndeentrLogradouro($endeentrLogradouro)
    {
        $this->endeentrLogradouro = $endeentrLogradouro;

        return $this;
    }

    /**
     * Get endeentrLogradouro.
     *
     * @return string
     */
    public function getEndeentrLogradouro()
    {
        return $this->endeentrLogradouro;
    }

    /**
     * Set endeentrCep.
     *
     * @param string $endeentrCep
     *
     * @return Enderecoentrega
     */
    public function setEndeentrCep($endeentrCep)
    {
        $this->endeentrCep = $endeentrCep;

        return $this;
    }

    /**
     * Get endeentrCep.
     *
     * @return string
     */
    public function getEndeentrCep()
    {
        return $this->endeentrCep;
    }

    /**
     * Set endeentrNumero.
     *
     * @param int $endeentrNumero
     *
     * @return Enderecoentrega
     */
    public function setEndeentrNumero($endeentrNumero)
    {
        $this->endeentrNumero = $endeentrNumero;

        return $this;
    }

    /**
     * Get endeentrNumero.
     *
     * @return int
     */
    public function getEndeentrNumero()
    {
        return $this->endeentrNumero;
    }

    /**
     * Set endeentrComplemento.
     *
     * @param string|null $endeentrComplemento
     *
     * @return Enderecoentrega
     */
    public function setEndeentrComplemento($endeentrComplemento = null)
    {
        $this->endeentrComplemento = $endeentrComplemento;

        return $this;
    }

    /**
     * Get endeentrComplemento.
     *
     * @return string|null
     */
    public function getEndeentrComplemento()
    {
        return $this->endeentrComplemento;
    }

    /**
     * Set endeentrPonta.
     *
     * @param string|null $endeentrPonta
     *
     * @return Enderecoentrega
     */
    public function setEndeentrPonta($endeentrPonta = null)
    {
        $this->endeentrPonta = $endeentrPonta;

        return $this;
    }

    /**
     * Get endeentrPonta.
     *
     * @return string|null
     */
    public function getEndeentrPonta()
    {
        return $this->endeentrPonta;
    }

    /**
     * Set endeentrLatitude.
     *
     * @param string|null $endeentrLatitude
     *
     * @return Enderecoentrega
     */
    public function setEndeentrLatitude($endeentrLatitude = null)
    {
        $this->endeentrLatitude = $endeentrLatitude;

        return $this;
    }

    /**
     * Get endeentrLatitude.
     *
     * @return string|null
     */
    public function getEndeentrLatitude()
    {
        return $this->endeentrLatitude;
    }

    /**
     * Set endeentrLongitude.
     *
     * @param string|null $endeentrLongitude
     *
     * @return Enderecoentrega
     */
    public function setEndeentrLongitude($endeentrLongitude = null)
    {
        $this->endeentrLongitude = $endeentrLongitude;

        return $this;
    }

    /**
     * Get endeentrLongitude.
     *
     * @return string|null
     */
    public function getEndeentrLongitude()
    {
        return $this->endeentrLongitude;
    }

    /**
     * Set endeentrDesignadorOld.
     *
     * @param string|null $endeentrDesignadorOld
     *
     * @return Enderecoentrega
     */
    public function setEndeentrDesignadorOld($endeentrDesignadorOld = null)
    {
        $this->endeentrDesignadorOld = $endeentrDesignadorOld;

        return $this;
    }

    /**
     * Get endeentrDesignadorOld.
     *
     * @return string|null
     */
    public function getEndeentrDesignadorOld()
    {
        return $this->endeentrDesignadorOld;
    }

    /**
     * Set admLogradouro.
     *
     * @param int|null $admLogradouro
     *
     * @return Enderecoentrega
     */
    public function setAdmLogradouro($admLogradouro = null)
    {
        $this->admLogradouro = $admLogradouro;

        return $this;
    }

    /**
     * Get admLogradouro.
     *
     * @return int|null
     */
    public function getAdmLogradouro()
    {
        return $this->admLogradouro;
    }
}
