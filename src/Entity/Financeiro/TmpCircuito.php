<?php

namespace App\Entity\Financeiro;

/**
 * TmpCircuito
 */
class TmpCircuito
{
    /**
     * @var int
     */
    private $idTmpCircuito;

    /**
     * @var int|null
     */
    private $contCodigoid;

    /**
     * @var int|null
     */
    private $circuito;

    /**
     * @var int|null
     */
    private $idCircuito;

    /**
     * @var string|null
     */
    private $razaoSocial;

    /**
     * @var string|null
     */
    private $fantasia;

    /**
     * @var string|null
     */
    private $cnpj;

    /**
     * @var string|null
     */
    private $ie;

    /**
     * @var string|null
     */
    private $im;

    /**
     * @var string|null
     */
    private $contribuinteIcms;

    /**
     * @var string|null
     */
    private $segmentoMercado;

    /**
     * @var string|null
     */
    private $ramoAtividade;

    /**
     * @var string|null
     */
    private $porte;

    /**
     * @var string|null
     */
    private $areaAtuacao;

    /**
     * @var bool|null
     */
    private $faturamentoAnual;

    /**
     * @var int|null
     */
    private $numeroFuncionario;

    /**
     * @var string|null
     */
    private $gerenteConta;

    /**
     * @var string|null
     */
    private $canalVenda;

    /**
     * @var string|null
     */
    private $produto;

    /**
     * @var string|null
     */
    private $meioAcesso;

    /**
     * @var string|null
     */
    private $capacidade;

    /**
     * @var string|null
     */
    private $pedido;

    /**
     * @var \DateTime|null
     */
    private $dataPedido;

    /**
     * @var string|null
     */
    private $clienteFinal;

    /**
     * @var string|null
     */
    private $tipoServico;

    /**
     * @var string|null
     */
    private $prazoMes;

    /**
     * @var \DateTime|null
     */
    private $dataPervistaAtivacao;

    /**
     * @var string|null
     */
    private $slaDisponibilidade;

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
    private $cep;

    /**
     * @var string|null
     */
    private $bairro;

    /**
     * @var string|null
     */
    private $cidade;

    /**
     * @var string|null
     */
    private $uf;

    /**
     * @var string|null
     */
    private $telefone;

    /**
     * @var string|null
     */
    private $motivoAlteracao;

    /**
     * @var string|null
     */
    private $equipamentoCliente;

    /**
     * @var string|null
     */
    private $historico;

    /**
     * @var \DateTime|null
     */
    private $dataInicial;

    /**
     * @var \DateTime|null
     */
    private $dataAtivacao;

    /**
     * @var \DateTime|null
     */
    private $dataCancelamento;

    /**
     * @var \DateTime|null
     */
    private $dataAtivacaoComercial;

    /**
     * @var string|null
     */
    private $designacao;

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
    private $status;

    /**
     * @var \App\Entity\Financeiro\TmpContrato
     */
    private $idTmpContrato;


    /**
     * Get idTmpCircuito.
     *
     * @return int
     */
    public function getIdTmpCircuito()
    {
        return $this->idTmpCircuito;
    }

    /**
     * Set contCodigoid.
     *
     * @param int|null $contCodigoid
     *
     * @return TmpCircuito
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
     * Set circuito.
     *
     * @param int|null $circuito
     *
     * @return TmpCircuito
     */
    public function setCircuito($circuito = null)
    {
        $this->circuito = $circuito;

        return $this;
    }

    /**
     * Get circuito.
     *
     * @return int|null
     */
    public function getCircuito()
    {
        return $this->circuito;
    }

    /**
     * Set idCircuito.
     *
     * @param int|null $idCircuito
     *
     * @return TmpCircuito
     */
    public function setIdCircuito($idCircuito = null)
    {
        $this->idCircuito = $idCircuito;

        return $this;
    }

    /**
     * Get idCircuito.
     *
     * @return int|null
     */
    public function getIdCircuito()
    {
        return $this->idCircuito;
    }

    /**
     * Set razaoSocial.
     *
     * @param string|null $razaoSocial
     *
     * @return TmpCircuito
     */
    public function setRazaoSocial($razaoSocial = null)
    {
        $this->razaoSocial = $razaoSocial;

        return $this;
    }

    /**
     * Get razaoSocial.
     *
     * @return string|null
     */
    public function getRazaoSocial()
    {
        return $this->razaoSocial;
    }

    /**
     * Set fantasia.
     *
     * @param string|null $fantasia
     *
     * @return TmpCircuito
     */
    public function setFantasia($fantasia = null)
    {
        $this->fantasia = $fantasia;

        return $this;
    }

    /**
     * Get fantasia.
     *
     * @return string|null
     */
    public function getFantasia()
    {
        return $this->fantasia;
    }

    /**
     * Set cnpj.
     *
     * @param string|null $cnpj
     *
     * @return TmpCircuito
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
     * Set ie.
     *
     * @param string|null $ie
     *
     * @return TmpCircuito
     */
    public function setIe($ie = null)
    {
        $this->ie = $ie;

        return $this;
    }

    /**
     * Get ie.
     *
     * @return string|null
     */
    public function getIe()
    {
        return $this->ie;
    }

    /**
     * Set im.
     *
     * @param string|null $im
     *
     * @return TmpCircuito
     */
    public function setIm($im = null)
    {
        $this->im = $im;

        return $this;
    }

    /**
     * Get im.
     *
     * @return string|null
     */
    public function getIm()
    {
        return $this->im;
    }

    /**
     * Set contribuinteIcms.
     *
     * @param string|null $contribuinteIcms
     *
     * @return TmpCircuito
     */
    public function setContribuinteIcms($contribuinteIcms = null)
    {
        $this->contribuinteIcms = $contribuinteIcms;

        return $this;
    }

    /**
     * Get contribuinteIcms.
     *
     * @return string|null
     */
    public function getContribuinteIcms()
    {
        return $this->contribuinteIcms;
    }

    /**
     * Set segmentoMercado.
     *
     * @param string|null $segmentoMercado
     *
     * @return TmpCircuito
     */
    public function setSegmentoMercado($segmentoMercado = null)
    {
        $this->segmentoMercado = $segmentoMercado;

        return $this;
    }

    /**
     * Get segmentoMercado.
     *
     * @return string|null
     */
    public function getSegmentoMercado()
    {
        return $this->segmentoMercado;
    }

    /**
     * Set ramoAtividade.
     *
     * @param string|null $ramoAtividade
     *
     * @return TmpCircuito
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
     * Set porte.
     *
     * @param string|null $porte
     *
     * @return TmpCircuito
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
     * Set areaAtuacao.
     *
     * @param string|null $areaAtuacao
     *
     * @return TmpCircuito
     */
    public function setAreaAtuacao($areaAtuacao = null)
    {
        $this->areaAtuacao = $areaAtuacao;

        return $this;
    }

    /**
     * Get areaAtuacao.
     *
     * @return string|null
     */
    public function getAreaAtuacao()
    {
        return $this->areaAtuacao;
    }

    /**
     * Set faturamentoAnual.
     *
     * @param bool|null $faturamentoAnual
     *
     * @return TmpCircuito
     */
    public function setFaturamentoAnual($faturamentoAnual = null)
    {
        $this->faturamentoAnual = $faturamentoAnual;

        return $this;
    }

    /**
     * Get faturamentoAnual.
     *
     * @return bool|null
     */
    public function getFaturamentoAnual()
    {
        return $this->faturamentoAnual;
    }

    /**
     * Set numeroFuncionario.
     *
     * @param int|null $numeroFuncionario
     *
     * @return TmpCircuito
     */
    public function setNumeroFuncionario($numeroFuncionario = null)
    {
        $this->numeroFuncionario = $numeroFuncionario;

        return $this;
    }

    /**
     * Get numeroFuncionario.
     *
     * @return int|null
     */
    public function getNumeroFuncionario()
    {
        return $this->numeroFuncionario;
    }

    /**
     * Set gerenteConta.
     *
     * @param string|null $gerenteConta
     *
     * @return TmpCircuito
     */
    public function setGerenteConta($gerenteConta = null)
    {
        $this->gerenteConta = $gerenteConta;

        return $this;
    }

    /**
     * Get gerenteConta.
     *
     * @return string|null
     */
    public function getGerenteConta()
    {
        return $this->gerenteConta;
    }

    /**
     * Set canalVenda.
     *
     * @param string|null $canalVenda
     *
     * @return TmpCircuito
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
     * Set produto.
     *
     * @param string|null $produto
     *
     * @return TmpCircuito
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
     * Set meioAcesso.
     *
     * @param string|null $meioAcesso
     *
     * @return TmpCircuito
     */
    public function setMeioAcesso($meioAcesso = null)
    {
        $this->meioAcesso = $meioAcesso;

        return $this;
    }

    /**
     * Get meioAcesso.
     *
     * @return string|null
     */
    public function getMeioAcesso()
    {
        return $this->meioAcesso;
    }

    /**
     * Set capacidade.
     *
     * @param string|null $capacidade
     *
     * @return TmpCircuito
     */
    public function setCapacidade($capacidade = null)
    {
        $this->capacidade = $capacidade;

        return $this;
    }

    /**
     * Get capacidade.
     *
     * @return string|null
     */
    public function getCapacidade()
    {
        return $this->capacidade;
    }

    /**
     * Set pedido.
     *
     * @param string|null $pedido
     *
     * @return TmpCircuito
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
     * Set dataPedido.
     *
     * @param \DateTime|null $dataPedido
     *
     * @return TmpCircuito
     */
    public function setDataPedido($dataPedido = null)
    {
        $this->dataPedido = $dataPedido;

        return $this;
    }

    /**
     * Get dataPedido.
     *
     * @return \DateTime|null
     */
    public function getDataPedido()
    {
        return $this->dataPedido;
    }

    /**
     * Set clienteFinal.
     *
     * @param string|null $clienteFinal
     *
     * @return TmpCircuito
     */
    public function setClienteFinal($clienteFinal = null)
    {
        $this->clienteFinal = $clienteFinal;

        return $this;
    }

    /**
     * Get clienteFinal.
     *
     * @return string|null
     */
    public function getClienteFinal()
    {
        return $this->clienteFinal;
    }

    /**
     * Set tipoServico.
     *
     * @param string|null $tipoServico
     *
     * @return TmpCircuito
     */
    public function setTipoServico($tipoServico = null)
    {
        $this->tipoServico = $tipoServico;

        return $this;
    }

    /**
     * Get tipoServico.
     *
     * @return string|null
     */
    public function getTipoServico()
    {
        return $this->tipoServico;
    }

    /**
     * Set prazoMes.
     *
     * @param string|null $prazoMes
     *
     * @return TmpCircuito
     */
    public function setPrazoMes($prazoMes = null)
    {
        $this->prazoMes = $prazoMes;

        return $this;
    }

    /**
     * Get prazoMes.
     *
     * @return string|null
     */
    public function getPrazoMes()
    {
        return $this->prazoMes;
    }

    /**
     * Set dataPervistaAtivacao.
     *
     * @param \DateTime|null $dataPervistaAtivacao
     *
     * @return TmpCircuito
     */
    public function setDataPervistaAtivacao($dataPervistaAtivacao = null)
    {
        $this->dataPervistaAtivacao = $dataPervistaAtivacao;

        return $this;
    }

    /**
     * Get dataPervistaAtivacao.
     *
     * @return \DateTime|null
     */
    public function getDataPervistaAtivacao()
    {
        return $this->dataPervistaAtivacao;
    }

    /**
     * Set slaDisponibilidade.
     *
     * @param string|null $slaDisponibilidade
     *
     * @return TmpCircuito
     */
    public function setSlaDisponibilidade($slaDisponibilidade = null)
    {
        $this->slaDisponibilidade = $slaDisponibilidade;

        return $this;
    }

    /**
     * Get slaDisponibilidade.
     *
     * @return string|null
     */
    public function getSlaDisponibilidade()
    {
        return $this->slaDisponibilidade;
    }

    /**
     * Set numero.
     *
     * @param string|null $numero
     *
     * @return TmpCircuito
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
     * @return TmpCircuito
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
     * Set cep.
     *
     * @param string|null $cep
     *
     * @return TmpCircuito
     */
    public function setCep($cep = null)
    {
        $this->cep = $cep;

        return $this;
    }

    /**
     * Get cep.
     *
     * @return string|null
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * Set bairro.
     *
     * @param string|null $bairro
     *
     * @return TmpCircuito
     */
    public function setBairro($bairro = null)
    {
        $this->bairro = $bairro;

        return $this;
    }

    /**
     * Get bairro.
     *
     * @return string|null
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * Set cidade.
     *
     * @param string|null $cidade
     *
     * @return TmpCircuito
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
     * Set uf.
     *
     * @param string|null $uf
     *
     * @return TmpCircuito
     */
    public function setUf($uf = null)
    {
        $this->uf = $uf;

        return $this;
    }

    /**
     * Get uf.
     *
     * @return string|null
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * Set telefone.
     *
     * @param string|null $telefone
     *
     * @return TmpCircuito
     */
    public function setTelefone($telefone = null)
    {
        $this->telefone = $telefone;

        return $this;
    }

    /**
     * Get telefone.
     *
     * @return string|null
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set motivoAlteracao.
     *
     * @param string|null $motivoAlteracao
     *
     * @return TmpCircuito
     */
    public function setMotivoAlteracao($motivoAlteracao = null)
    {
        $this->motivoAlteracao = $motivoAlteracao;

        return $this;
    }

    /**
     * Get motivoAlteracao.
     *
     * @return string|null
     */
    public function getMotivoAlteracao()
    {
        return $this->motivoAlteracao;
    }

    /**
     * Set equipamentoCliente.
     *
     * @param string|null $equipamentoCliente
     *
     * @return TmpCircuito
     */
    public function setEquipamentoCliente($equipamentoCliente = null)
    {
        $this->equipamentoCliente = $equipamentoCliente;

        return $this;
    }

    /**
     * Get equipamentoCliente.
     *
     * @return string|null
     */
    public function getEquipamentoCliente()
    {
        return $this->equipamentoCliente;
    }

    /**
     * Set historico.
     *
     * @param string|null $historico
     *
     * @return TmpCircuito
     */
    public function setHistorico($historico = null)
    {
        $this->historico = $historico;

        return $this;
    }

    /**
     * Get historico.
     *
     * @return string|null
     */
    public function getHistorico()
    {
        return $this->historico;
    }

    /**
     * Set dataInicial.
     *
     * @param \DateTime|null $dataInicial
     *
     * @return TmpCircuito
     */
    public function setDataInicial($dataInicial = null)
    {
        $this->dataInicial = $dataInicial;

        return $this;
    }

    /**
     * Get dataInicial.
     *
     * @return \DateTime|null
     */
    public function getDataInicial()
    {
        return $this->dataInicial;
    }

    /**
     * Set dataAtivacao.
     *
     * @param \DateTime|null $dataAtivacao
     *
     * @return TmpCircuito
     */
    public function setDataAtivacao($dataAtivacao = null)
    {
        $this->dataAtivacao = $dataAtivacao;

        return $this;
    }

    /**
     * Get dataAtivacao.
     *
     * @return \DateTime|null
     */
    public function getDataAtivacao()
    {
        return $this->dataAtivacao;
    }

    /**
     * Set dataCancelamento.
     *
     * @param \DateTime|null $dataCancelamento
     *
     * @return TmpCircuito
     */
    public function setDataCancelamento($dataCancelamento = null)
    {
        $this->dataCancelamento = $dataCancelamento;

        return $this;
    }

    /**
     * Get dataCancelamento.
     *
     * @return \DateTime|null
     */
    public function getDataCancelamento()
    {
        return $this->dataCancelamento;
    }

    /**
     * Set dataAtivacaoComercial.
     *
     * @param \DateTime|null $dataAtivacaoComercial
     *
     * @return TmpCircuito
     */
    public function setDataAtivacaoComercial($dataAtivacaoComercial = null)
    {
        $this->dataAtivacaoComercial = $dataAtivacaoComercial;

        return $this;
    }

    /**
     * Get dataAtivacaoComercial.
     *
     * @return \DateTime|null
     */
    public function getDataAtivacaoComercial()
    {
        return $this->dataAtivacaoComercial;
    }

    /**
     * Set designacao.
     *
     * @param string|null $designacao
     *
     * @return TmpCircuito
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
     * Set valorAtivacao.
     *
     * @param string|null $valorAtivacao
     *
     * @return TmpCircuito
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
     * @return TmpCircuito
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
     * @return TmpCircuito
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
     * Set status.
     *
     * @param bool|null $status
     *
     * @return TmpCircuito
     */
    public function setStatus($status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status.
     *
     * @return bool|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set idTmpContrato.
     *
     * @param \App\Entity\Financeiro\TmpContrato|null $idTmpContrato
     *
     * @return TmpCircuito
     */
    public function setIdTmpContrato(\App\Entity\Financeiro\TmpContrato $idTmpContrato = null)
    {
        $this->idTmpContrato = $idTmpContrato;

        return $this;
    }

    /**
     * Get idTmpContrato.
     *
     * @return \App\Entity\Financeiro\TmpContrato|null
     */
    public function getIdTmpContrato()
    {
        return $this->idTmpContrato;
    }
}
