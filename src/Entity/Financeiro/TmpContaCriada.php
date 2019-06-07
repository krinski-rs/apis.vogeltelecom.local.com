<?php

namespace App\Entity\Financeiro;

/**
 * TmpContaCriada
 */
class TmpContaCriada
{
    /**
     * @var int
     */
    private $idTmpContaCriada;

    /**
     * @var string|null
     */
    private $ramoAtividade;

    /**
     * @var string|null
     */
    private $tipo;

    /**
     * @var string|null
     */
    private $estado;

    /**
     * @var string|null
     */
    private $cidade;

    /**
     * @var string|null
     */
    private $cnpj;

    /**
     * @var string|null
     */
    private $porte;

    /**
     * @var string|null
     */
    private $tipoPessoa;

    /**
     * @var int|null
     */
    private $contaCriada;

    /**
     * @var string|null
     */
    private $gc;

    /**
     * @var string|null
     */
    private $canalVenda;

    /**
     * @var int
     */
    private $cid;


    /**
     * Get idTmpContaCriada.
     *
     * @return int
     */
    public function getIdTmpContaCriada()
    {
        return $this->idTmpContaCriada;
    }

    /**
     * Set ramoAtividade.
     *
     * @param string|null $ramoAtividade
     *
     * @return TmpContaCriada
     */
    public function setRamoAtividade($ramoAtividade = null)
    {
        $this->ramoAtividade = $ramoAtividade;

        return $this;
    }

    /**
     * Get ramoAtividade.
     *
     * @return string|null
     */
    public function getRamoAtividade()
    {
        return $this->ramoAtividade;
    }

    /**
     * Set tipo.
     *
     * @param string|null $tipo
     *
     * @return TmpContaCriada
     */
    public function setTipo($tipo = null)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo.
     *
     * @return string|null
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set estado.
     *
     * @param string|null $estado
     *
     * @return TmpContaCriada
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
     * Set cidade.
     *
     * @param string|null $cidade
     *
     * @return TmpContaCriada
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
     * Set cnpj.
     *
     * @param string|null $cnpj
     *
     * @return TmpContaCriada
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

    /**
     * Set porte.
     *
     * @param string|null $porte
     *
     * @return TmpContaCriada
     */
    public function setPorte($porte = null)
    {
        $this->porte = $porte;

        return $this;
    }

    /**
     * Get porte.
     *
     * @return string|null
     */
    public function getPorte()
    {
        return $this->porte;
    }

    /**
     * Set tipoPessoa.
     *
     * @param string|null $tipoPessoa
     *
     * @return TmpContaCriada
     */
    public function setTipoPessoa($tipoPessoa = null)
    {
        $this->tipoPessoa = $tipoPessoa;

        return $this;
    }

    /**
     * Get tipoPessoa.
     *
     * @return string|null
     */
    public function getTipoPessoa()
    {
        return $this->tipoPessoa;
    }

    /**
     * Set contaCriada.
     *
     * @param int|null $contaCriada
     *
     * @return TmpContaCriada
     */
    public function setContaCriada($contaCriada = null)
    {
        $this->contaCriada = $contaCriada;

        return $this;
    }

    /**
     * Get contaCriada.
     *
     * @return int|null
     */
    public function getContaCriada()
    {
        return $this->contaCriada;
    }

    /**
     * Set gc.
     *
     * @param string|null $gc
     *
     * @return TmpContaCriada
     */
    public function setGc($gc = null)
    {
        $this->gc = $gc;

        return $this;
    }

    /**
     * Get gc.
     *
     * @return string|null
     */
    public function getGc()
    {
        return $this->gc;
    }

    /**
     * Set canalVenda.
     *
     * @param string|null $canalVenda
     *
     * @return TmpContaCriada
     */
    public function setCanalVenda($canalVenda = null)
    {
        $this->canalVenda = $canalVenda;

        return $this;
    }

    /**
     * Get canalVenda.
     *
     * @return string|null
     */
    public function getCanalVenda()
    {
        return $this->canalVenda;
    }

    /**
     * Set cid.
     *
     * @param int $cid
     *
     * @return TmpContaCriada
     */
    public function setCid($cid)
    {
        $this->cid = $cid;

        return $this;
    }

    /**
     * Get cid.
     *
     * @return int
     */
    public function getCid()
    {
        return $this->cid;
    }
}
