<?php

namespace App\Entity\Financeiro;

/**
 * TmpAtributo
 */
class TmpAtributo
{
    /**
     * @var int
     */
    private $idTmpAtributo;

    /**
     * @var string|null
     */
    private $colunaCsv;

    /**
     * @var string|null
     */
    private $valor;

    /**
     * @var \App\Entity\Financeiro\TmpPonta
     */
    private $idTmpPonta;


    /**
     * Get idTmpAtributo.
     *
     * @return int
     */
    public function getIdTmpAtributo()
    {
        return $this->idTmpAtributo;
    }

    /**
     * Set colunaCsv.
     *
     * @param string|null $colunaCsv
     *
     * @return TmpAtributo
     */
    public function setColunaCsv($colunaCsv = null)
    {
        $this->colunaCsv = $colunaCsv;

        return $this;
    }

    /**
     * Get colunaCsv.
     *
     * @return string|null
     */
    public function getColunaCsv()
    {
        return $this->colunaCsv;
    }

    /**
     * Set valor.
     *
     * @param string|null $valor
     *
     * @return TmpAtributo
     */
    public function setValor($valor = null)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor.
     *
     * @return string|null
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set idTmpPonta.
     *
     * @param \App\Entity\Financeiro\TmpPonta|null $idTmpPonta
     *
     * @return TmpAtributo
     */
    public function setIdTmpPonta(\App\Entity\Financeiro\TmpPonta $idTmpPonta = null)
    {
        $this->idTmpPonta = $idTmpPonta;

        return $this;
    }

    /**
     * Get idTmpPonta.
     *
     * @return \App\Entity\Financeiro\TmpPonta|null
     */
    public function getIdTmpPonta()
    {
        return $this->idTmpPonta;
    }
}
