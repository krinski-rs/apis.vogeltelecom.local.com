<?php

namespace App\Entity\Financeiro;

/**
 * TmpPonta
 */
class TmpPonta
{
    /**
     * @var int
     */
    private $idTmpPonta;

    /**
     * @var string|null
     */
    private $ponta;

    /**
     * @var string|null
     */
    private $interface;

    /**
     * @var string|null
     */
    private $logradouro;

    /**
     * @var string|null
     */
    private $numero;

    /**
     * @var string|null
     */
    private $complemento;

    /**
     * @var string|null
     */
    private $cidade;

    /**
     * @var string|null
     */
    private $estado;

    /**
     * @var int|null
     */
    private $idPop;

    /**
     * @var \App\Entity\Financeiro\TmpCircuito
     */
    private $idTmpCircuito;


    /**
     * Get idTmpPonta.
     *
     * @return int
     */
    public function getIdTmpPonta()
    {
        return $this->idTmpPonta;
    }

    /**
     * Set ponta.
     *
     * @param string|null $ponta
     *
     * @return TmpPonta
     */
    public function setPonta($ponta = null)
    {
        $this->ponta = $ponta;

        return $this;
    }

    /**
     * Get ponta.
     *
     * @return string|null
     */
    public function getPonta()
    {
        return $this->ponta;
    }

    /**
     * Set interface.
     *
     * @param string|null $interface
     *
     * @return TmpPonta
     */
    public function setInterface($interface = null)
    {
        $this->interface = $interface;

        return $this;
    }

    /**
     * Get interface.
     *
     * @return string|null
     */
    public function getInterface()
    {
        return $this->interface;
    }

    /**
     * Set logradouro.
     *
     * @param string|null $logradouro
     *
     * @return TmpPonta
     */
    public function setLogradouro($logradouro = null)
    {
        $this->logradouro = $logradouro;

        return $this;
    }

    /**
     * Get logradouro.
     *
     * @return string|null
     */
    public function getLogradouro()
    {
        return $this->logradouro;
    }

    /**
     * Set numero.
     *
     * @param string|null $numero
     *
     * @return TmpPonta
     */
    public function setNumero($numero = null)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero.
     *
     * @return string|null
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set complemento.
     *
     * @param string|null $complemento
     *
     * @return TmpPonta
     */
    public function setComplemento($complemento = null)
    {
        $this->complemento = $complemento;

        return $this;
    }

    /**
     * Get complemento.
     *
     * @return string|null
     */
    public function getComplemento()
    {
        return $this->complemento;
    }

    /**
     * Set cidade.
     *
     * @param string|null $cidade
     *
     * @return TmpPonta
     */
    public function setCidade($cidade = null)
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Get cidade.
     *
     * @return string|null
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Set estado.
     *
     * @param string|null $estado
     *
     * @return TmpPonta
     */
    public function setEstado($estado = null)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado.
     *
     * @return string|null
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set idPop.
     *
     * @param int|null $idPop
     *
     * @return TmpPonta
     */
    public function setIdPop($idPop = null)
    {
        $this->idPop = $idPop;

        return $this;
    }

    /**
     * Get idPop.
     *
     * @return int|null
     */
    public function getIdPop()
    {
        return $this->idPop;
    }

    /**
     * Set idTmpCircuito.
     *
     * @param \App\Entity\Financeiro\TmpCircuito|null $idTmpCircuito
     *
     * @return TmpPonta
     */
    public function setIdTmpCircuito(\App\Entity\Financeiro\TmpCircuito $idTmpCircuito = null)
    {
        $this->idTmpCircuito = $idTmpCircuito;

        return $this;
    }

    /**
     * Get idTmpCircuito.
     *
     * @return \App\Entity\Financeiro\TmpCircuito|null
     */
    public function getIdTmpCircuito()
    {
        return $this->idTmpCircuito;
    }
}
