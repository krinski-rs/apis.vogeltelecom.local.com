<?php

namespace App\Entity\Financeiro;

/**
 * TmpContrato
 */
class TmpContrato
{
    /**
     * @var int
     */
    private $idTmpContrato;

    /**
     * @var string|null
     */
    private $circuito;

    /**
     * @var string|null
     */
    private $conta;

    /**
     * @var string|null
     */
    private $cnpj;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var string|null
     */
    private $designacao;

    /**
     * @var string|null
     */
    private $canalVenda;

    /**
     * @var \DateTime|null
     */
    private $ativado;

    /**
     * @var \DateTime|null
     */
    private $destivado;

    /**
     * @var string|null
     */
    private $velocidade;

    /**
     * @var string|null
     */
    private $produto;

    /**
     * @var string|null
     */
    private $servico;

    /**
     * @var string|null
     */
    private $pedido;

    /**
     * @var string|null
     */
    private $valorAtivacao;

    /**
     * @var string|null
     */
    private $valorSemImposto;

    /**
     * @var string|null
     */
    private $valorComImposto;

    /**
     * @var bool|null
     */
    private $leitura;

    /**
     * @var bool|null
     */
    private $erro;

    /**
     * @var \App\Entity\Financeiro\TmpContaCriada
     */
    private $idTmpContaCriada;


    /**
     * Get idTmpContrato.
     *
     * @return int
     */
    public function getIdTmpContrato()
    {
        return $this->idTmpContrato;
    }

    /**
     * Set circuito.
     *
     * @param string|null $circuito
     *
     * @return TmpContrato
     */
    public function setCircuito($circuito = null)
    {
        $this->circuito = $circuito;

        return $this;
    }

    /**
     * Get circuito.
     *
     * @return string|null
     */
    public function getCircuito()
    {
        return $this->circuito;
    }

    /**
     * Set conta.
     *
     * @param string|null $conta
     *
     * @return TmpContrato
     */
    public function setConta($conta = null)
    {
        $this->conta = $conta;

        return $this;
    }

    /**
     * Get conta.
     *
     * @return string|null
     */
    public function getConta()
    {
        return $this->conta;
    }

    /**
     * Set cnpj.
     *
     * @param string|null $cnpj
     *
     * @return TmpContrato
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
     * Set status.
     *
     * @param string|null $status
     *
     * @return TmpContrato
     */
    public function setStatus($status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status.
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set designacao.
     *
     * @param string|null $designacao
     *
     * @return TmpContrato
     */
    public function setDesignacao($designacao = null)
    {
        $this->designacao = $designacao;

        return $this;
    }

    /**
     * Get designacao.
     *
     * @return string|null
     */
    public function getDesignacao()
    {
        return $this->designacao;
    }

    /**
     * Set canalVenda.
     *
     * @param string|null $canalVenda
     *
     * @return TmpContrato
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
     * Set ativado.
     *
     * @param \DateTime|null $ativado
     *
     * @return TmpContrato
     */
    public function setAtivado($ativado = null)
    {
        $this->ativado = $ativado;

        return $this;
    }

    /**
     * Get ativado.
     *
     * @return \DateTime|null
     */
    public function getAtivado()
    {
        return $this->ativado;
    }

    /**
     * Set destivado.
     *
     * @param \DateTime|null $destivado
     *
     * @return TmpContrato
     */
    public function setDestivado($destivado = null)
    {
        $this->destivado = $destivado;

        return $this;
    }

    /**
     * Get destivado.
     *
     * @return \DateTime|null
     */
    public function getDestivado()
    {
        return $this->destivado;
    }

    /**
     * Set velocidade.
     *
     * @param string|null $velocidade
     *
     * @return TmpContrato
     */
    public function setVelocidade($velocidade = null)
    {
        $this->velocidade = $velocidade;

        return $this;
    }

    /**
     * Get velocidade.
     *
     * @return string|null
     */
    public function getVelocidade()
    {
        return $this->velocidade;
    }

    /**
     * Set produto.
     *
     * @param string|null $produto
     *
     * @return TmpContrato
     */
    public function setProduto($produto = null)
    {
        $this->produto = $produto;

        return $this;
    }

    /**
     * Get produto.
     *
     * @return string|null
     */
    public function getProduto()
    {
        return $this->produto;
    }

    /**
     * Set servico.
     *
     * @param string|null $servico
     *
     * @return TmpContrato
     */
    public function setServico($servico = null)
    {
        $this->servico = $servico;

        return $this;
    }

    /**
     * Get servico.
     *
     * @return string|null
     */
    public function getServico()
    {
        return $this->servico;
    }

    /**
     * Set pedido.
     *
     * @param string|null $pedido
     *
     * @return TmpContrato
     */
    public function setPedido($pedido = null)
    {
        $this->pedido = $pedido;

        return $this;
    }

    /**
     * Get pedido.
     *
     * @return string|null
     */
    public function getPedido()
    {
        return $this->pedido;
    }

    /**
     * Set valorAtivacao.
     *
     * @param string|null $valorAtivacao
     *
     * @return TmpContrato
     */
    public function setValorAtivacao($valorAtivacao = null)
    {
        $this->valorAtivacao = $valorAtivacao;

        return $this;
    }

    /**
     * Get valorAtivacao.
     *
     * @return string|null
     */
    public function getValorAtivacao()
    {
        return $this->valorAtivacao;
    }

    /**
     * Set valorSemImposto.
     *
     * @param string|null $valorSemImposto
     *
     * @return TmpContrato
     */
    public function setValorSemImposto($valorSemImposto = null)
    {
        $this->valorSemImposto = $valorSemImposto;

        return $this;
    }

    /**
     * Get valorSemImposto.
     *
     * @return string|null
     */
    public function getValorSemImposto()
    {
        return $this->valorSemImposto;
    }

    /**
     * Set valorComImposto.
     *
     * @param string|null $valorComImposto
     *
     * @return TmpContrato
     */
    public function setValorComImposto($valorComImposto = null)
    {
        $this->valorComImposto = $valorComImposto;

        return $this;
    }

    /**
     * Get valorComImposto.
     *
     * @return string|null
     */
    public function getValorComImposto()
    {
        return $this->valorComImposto;
    }

    /**
     * Set leitura.
     *
     * @param bool|null $leitura
     *
     * @return TmpContrato
     */
    public function setLeitura($leitura = null)
    {
        $this->leitura = $leitura;

        return $this;
    }

    /**
     * Get leitura.
     *
     * @return bool|null
     */
    public function getLeitura()
    {
        return $this->leitura;
    }

    /**
     * Set erro.
     *
     * @param bool|null $erro
     *
     * @return TmpContrato
     */
    public function setErro($erro = null)
    {
        $this->erro = $erro;

        return $this;
    }

    /**
     * Get erro.
     *
     * @return bool|null
     */
    public function getErro()
    {
        return $this->erro;
    }

    /**
     * Set idTmpContaCriada.
     *
     * @param \App\Entity\Financeiro\TmpContaCriada|null $idTmpContaCriada
     *
     * @return TmpContrato
     */
    public function setIdTmpContaCriada(\App\Entity\Financeiro\TmpContaCriada $idTmpContaCriada = null)
    {
        $this->idTmpContaCriada = $idTmpContaCriada;

        return $this;
    }

    /**
     * Get idTmpContaCriada.
     *
     * @return \App\Entity\Financeiro\TmpContaCriada|null
     */
    public function getIdTmpContaCriada()
    {
        return $this->idTmpContaCriada;
    }
}
