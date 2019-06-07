<?php

namespace App\Entity\Financeiro;

/**
 * TmpLogCliente
 */
class TmpLogCliente
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string|null
     */
    private $descricao;

    /**
     * @var string|null
     */
    private $dataInc;

    /**
     * @var string|null
     */
    private $cnpj;


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
     * Set descricao.
     *
     * @param string|null $descricao
     *
     * @return TmpLogCliente
     */
    public function setDescricao($descricao = null)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get descricao.
     *
     * @return string|null
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set dataInc.
     *
     * @param string|null $dataInc
     *
     * @return TmpLogCliente
     */
    public function setDataInc($dataInc = null)
    {
        $this->dataInc = $dataInc;

        return $this;
    }

    /**
     * Get dataInc.
     *
     * @return string|null
     */
    public function getDataInc()
    {
        return $this->dataInc;
    }

    /**
     * Set cnpj.
     *
     * @param string|null $cnpj
     *
     * @return TmpLogCliente
     */
    public function setCnpj($cnpj = null)
    {
        $this->cnpj = $cnpj;

        return $this;
    }

    /**
     * Get cnpj.
     *
     * @return string|null
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }
}
