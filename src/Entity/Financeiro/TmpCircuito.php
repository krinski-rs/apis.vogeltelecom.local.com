<?php

namespace App\Entity\Financeiro;

class TmpCircuito
{
    private $idTmpCircuito;

    private $contCodigoid;

    private $circuito;

    private $idCircuito;

    private $razaoSocial;

    private $fantasia;

    private $cnpj;

    private $ie;

    private $im;

    private $contribuinteIcms;

    private $segmentoMercado;

    private $ramoAtividade;

    private $porte;

    private $areaAtuacao;

    private $faturamentoAnual;

    private $numeroFuncionario;

    private $gerenteConta;

    private $canalVenda;

    private $produto;

    private $meioAcesso;

    private $capacidade;

    private $pedido;

    private $dataPedido;

    private $clienteFinal;

    private $tipoServico;

    private $prazoMes;

    private $dataPervistaAtivacao;

    private $slaDisponibilidade;

    private $numero;

    private $complemento;

    private $cep;

    private $bairro;

    private $cidade;

    private $uf;

    private $telefone;

    private $motivoAlteracao;

    private $equipamentoCliente;

    private $historico;

    private $dataInicial;

    private $dataAtivacao;

    private $dataCancelamento;

    private $dataAtivacaoComercial;

    private $designacao;

    private $valorAtivacao;

    private $valorSemImposto;

    private $valorComImposto;

    private $status;

    private $idTmpContrato;

    public function getIdTmpCircuito(): ?int
    {
        return $this->idTmpCircuito;
    }

    public function getContCodigoid(): ?int
    {
        return $this->contCodigoid;
    }

    public function setContCodigoid(?int $contCodigoid): self
    {
        $this->contCodigoid = $contCodigoid;

        return $this;
    }

    public function getCircuito(): ?int
    {
        return $this->circuito;
    }

    public function setCircuito(?int $circuito): self
    {
        $this->circuito = $circuito;

        return $this;
    }

    public function getIdCircuito(): ?int
    {
        return $this->idCircuito;
    }

    public function setIdCircuito(?int $idCircuito): self
    {
        $this->idCircuito = $idCircuito;

        return $this;
    }

    public function getRazaoSocial(): ?string
    {
        return $this->razaoSocial;
    }

    public function setRazaoSocial(?string $razaoSocial): self
    {
        $this->razaoSocial = $razaoSocial;

        return $this;
    }

    public function getFantasia(): ?string
    {
        return $this->fantasia;
    }

    public function setFantasia(?string $fantasia): self
    {
        $this->fantasia = $fantasia;

        return $this;
    }

    public function getCnpj(): ?string
    {
        return $this->cnpj;
    }

    public function setCnpj(?string $cnpj): self
    {
        $this->cnpj = $cnpj;

        return $this;
    }

    public function getIe(): ?string
    {
        return $this->ie;
    }

    public function setIe(?string $ie): self
    {
        $this->ie = $ie;

        return $this;
    }

    public function getIm(): ?string
    {
        return $this->im;
    }

    public function setIm(?string $im): self
    {
        $this->im = $im;

        return $this;
    }

    public function getContribuinteIcms(): ?string
    {
        return $this->contribuinteIcms;
    }

    public function setContribuinteIcms(?string $contribuinteIcms): self
    {
        $this->contribuinteIcms = $contribuinteIcms;

        return $this;
    }

    public function getSegmentoMercado(): ?string
    {
        return $this->segmentoMercado;
    }

    public function setSegmentoMercado(?string $segmentoMercado): self
    {
        $this->segmentoMercado = $segmentoMercado;

        return $this;
    }

    public function getRamoAtividade(): ?string
    {
        return $this->ramoAtividade;
    }

    public function setRamoAtividade(?string $ramoAtividade): self
    {
        $this->ramoAtividade = $ramoAtividade;

        return $this;
    }

    public function getPorte(): ?string
    {
        return $this->porte;
    }

    public function setPorte(?string $porte): self
    {
        $this->porte = $porte;

        return $this;
    }

    public function getAreaAtuacao(): ?string
    {
        return $this->areaAtuacao;
    }

    public function setAreaAtuacao(?string $areaAtuacao): self
    {
        $this->areaAtuacao = $areaAtuacao;

        return $this;
    }

    public function getFaturamentoAnual(): ?bool
    {
        return $this->faturamentoAnual;
    }

    public function setFaturamentoAnual(?bool $faturamentoAnual): self
    {
        $this->faturamentoAnual = $faturamentoAnual;

        return $this;
    }

    public function getNumeroFuncionario(): ?int
    {
        return $this->numeroFuncionario;
    }

    public function setNumeroFuncionario(?int $numeroFuncionario): self
    {
        $this->numeroFuncionario = $numeroFuncionario;

        return $this;
    }

    public function getGerenteConta(): ?string
    {
        return $this->gerenteConta;
    }

    public function setGerenteConta(?string $gerenteConta): self
    {
        $this->gerenteConta = $gerenteConta;

        return $this;
    }

    public function getCanalVenda(): ?string
    {
        return $this->canalVenda;
    }

    public function setCanalVenda(?string $canalVenda): self
    {
        $this->canalVenda = $canalVenda;

        return $this;
    }

    public function getProduto(): ?string
    {
        return $this->produto;
    }

    public function setProduto(?string $produto): self
    {
        $this->produto = $produto;

        return $this;
    }

    public function getMeioAcesso(): ?string
    {
        return $this->meioAcesso;
    }

    public function setMeioAcesso(?string $meioAcesso): self
    {
        $this->meioAcesso = $meioAcesso;

        return $this;
    }

    public function getCapacidade(): ?string
    {
        return $this->capacidade;
    }

    public function setCapacidade(?string $capacidade): self
    {
        $this->capacidade = $capacidade;

        return $this;
    }

    public function getPedido(): ?string
    {
        return $this->pedido;
    }

    public function setPedido(?string $pedido): self
    {
        $this->pedido = $pedido;

        return $this;
    }

    public function getDataPedido(): ?\DateTimeInterface
    {
        return $this->dataPedido;
    }

    public function setDataPedido(?\DateTimeInterface $dataPedido): self
    {
        $this->dataPedido = $dataPedido;

        return $this;
    }

    public function getClienteFinal(): ?string
    {
        return $this->clienteFinal;
    }

    public function setClienteFinal(?string $clienteFinal): self
    {
        $this->clienteFinal = $clienteFinal;

        return $this;
    }

    public function getTipoServico(): ?string
    {
        return $this->tipoServico;
    }

    public function setTipoServico(?string $tipoServico): self
    {
        $this->tipoServico = $tipoServico;

        return $this;
    }

    public function getPrazoMes(): ?string
    {
        return $this->prazoMes;
    }

    public function setPrazoMes(?string $prazoMes): self
    {
        $this->prazoMes = $prazoMes;

        return $this;
    }

    public function getDataPervistaAtivacao(): ?\DateTimeInterface
    {
        return $this->dataPervistaAtivacao;
    }

    public function setDataPervistaAtivacao(?\DateTimeInterface $dataPervistaAtivacao): self
    {
        $this->dataPervistaAtivacao = $dataPervistaAtivacao;

        return $this;
    }

    public function getSlaDisponibilidade(): ?string
    {
        return $this->slaDisponibilidade;
    }

    public function setSlaDisponibilidade(?string $slaDisponibilidade): self
    {
        $this->slaDisponibilidade = $slaDisponibilidade;

        return $this;
    }

    public function getNumero(): ?string
    {
        return $this->numero;
    }

    public function setNumero(?string $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getComplemento(): ?string
    {
        return $this->complemento;
    }

    public function setComplemento(?string $complemento): self
    {
        $this->complemento = $complemento;

        return $this;
    }

    public function getCep(): ?string
    {
        return $this->cep;
    }

    public function setCep(?string $cep): self
    {
        $this->cep = $cep;

        return $this;
    }

    public function getBairro(): ?string
    {
        return $this->bairro;
    }

    public function setBairro(?string $bairro): self
    {
        $this->bairro = $bairro;

        return $this;
    }

    public function getCidade(): ?string
    {
        return $this->cidade;
    }

    public function setCidade(?string $cidade): self
    {
        $this->cidade = $cidade;

        return $this;
    }

    public function getUf(): ?string
    {
        return $this->uf;
    }

    public function setUf(?string $uf): self
    {
        $this->uf = $uf;

        return $this;
    }

    public function getTelefone(): ?string
    {
        return $this->telefone;
    }

    public function setTelefone(?string $telefone): self
    {
        $this->telefone = $telefone;

        return $this;
    }

    public function getMotivoAlteracao(): ?string
    {
        return $this->motivoAlteracao;
    }

    public function setMotivoAlteracao(?string $motivoAlteracao): self
    {
        $this->motivoAlteracao = $motivoAlteracao;

        return $this;
    }

    public function getEquipamentoCliente(): ?string
    {
        return $this->equipamentoCliente;
    }

    public function setEquipamentoCliente(?string $equipamentoCliente): self
    {
        $this->equipamentoCliente = $equipamentoCliente;

        return $this;
    }

    public function getHistorico(): ?string
    {
        return $this->historico;
    }

    public function setHistorico(?string $historico): self
    {
        $this->historico = $historico;

        return $this;
    }

    public function getDataInicial(): ?\DateTimeInterface
    {
        return $this->dataInicial;
    }

    public function setDataInicial(?\DateTimeInterface $dataInicial): self
    {
        $this->dataInicial = $dataInicial;

        return $this;
    }

    public function getDataAtivacao(): ?\DateTimeInterface
    {
        return $this->dataAtivacao;
    }

    public function setDataAtivacao(?\DateTimeInterface $dataAtivacao): self
    {
        $this->dataAtivacao = $dataAtivacao;

        return $this;
    }

    public function getDataCancelamento(): ?\DateTimeInterface
    {
        return $this->dataCancelamento;
    }

    public function setDataCancelamento(?\DateTimeInterface $dataCancelamento): self
    {
        $this->dataCancelamento = $dataCancelamento;

        return $this;
    }

    public function getDataAtivacaoComercial(): ?\DateTimeInterface
    {
        return $this->dataAtivacaoComercial;
    }

    public function setDataAtivacaoComercial(?\DateTimeInterface $dataAtivacaoComercial): self
    {
        $this->dataAtivacaoComercial = $dataAtivacaoComercial;

        return $this;
    }

    public function getDesignacao(): ?string
    {
        return $this->designacao;
    }

    public function setDesignacao(?string $designacao): self
    {
        $this->designacao = $designacao;

        return $this;
    }

    public function getValorAtivacao()
    {
        return $this->valorAtivacao;
    }

    public function setValorAtivacao($valorAtivacao): self
    {
        $this->valorAtivacao = $valorAtivacao;

        return $this;
    }

    public function getValorSemImposto()
    {
        return $this->valorSemImposto;
    }

    public function setValorSemImposto($valorSemImposto): self
    {
        $this->valorSemImposto = $valorSemImposto;

        return $this;
    }

    public function getValorComImposto()
    {
        return $this->valorComImposto;
    }

    public function setValorComImposto($valorComImposto): self
    {
        $this->valorComImposto = $valorComImposto;

        return $this;
    }

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(?bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getIdTmpContrato(): ?TmpContrato
    {
        return $this->idTmpContrato;
    }

    public function setIdTmpContrato(?TmpContrato $idTmpContrato): self
    {
        $this->idTmpContrato = $idTmpContrato;

        return $this;
    }
}
