<?php

namespace App\Entity\Financeiro;

/**
 * Contrato
 */
class Contrato
{
    /**
     * @var int
     */
    private $contCodigoid;

    /**
     * @var int|null
     */
    private $clieCodigoid;

    /**
     * @var int
     */
    private $usuaCodigoid;

    /**
     * @var int
     */
    private $contNumero;

    /**
     * @var int
     */
    private $contLimiteatraso;

    /**
     * @var bool
     */
    private $contMenorprazo;

    /**
     * @var int
     */
    private $contPrazorescisao;

    /**
     * @var \DateTime|null
     */
    private $contDataassinatura;

    /**
     * @var \DateTime
     */
    private $contDatainc = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     */
    private $contIndicereajuste;

    /**
     * @var int
     */
    private $contPrazoreajuste;

    /**
     * @var string
     */
    private $contIndisponibilidade = '0.00';

    /**
     * @var int|null
     */
    private $contDependentecodigoid;

    /**
     * @var int|null
     */
    private $unidCodigoid;

    /**
     * @var int|null
     */
    private $bancCodigoid;

    /**
     * @var int|null
     */
    private $enviCodigoid;

    /**
     * @var \DateTime|null
     */
    private $contDatacancelamento;

    /**
     * @var \DateTime|null
     */
    private $contDatacancelado;

    /**
     * @var \DateTime|null
     */
    private $contDatareajustado;

    /**
     * @var int|null
     */
    private $contUnidArquivado;

    /**
     * @var string|null
     */
    private $contClienteFinal;

    /**
     * @var bool|null
     */
    private $integracaoSummit;

    /**
     * @var string
     */
    private $contTipo;

    /**
     * @var int|null
     */
    private $propcircuitCodigoid;

    /**
     * @var string|null
     */
    private $contClassificacao;

    /**
     * @var string|null
     */
    private $contValorDelta;

    /**
     * @var \DateTime|null
     */
    private $contDataInternalizacao;

    /**
     * @var string|null
     */
    private $contInformacoesAdicionais;

    /**
     * @var bool
     */
    private $contSegregarValor = '1';

    /**
     * @var int|null
     */
    private $salesforceId;

    /**
     * @var \App\Entity\Financeiro\Contrato
     */
    private $contSubstituircodigoid;

    /**
     * @var \App\Entity\Financeiro\Contrato
     */
    private $contProximocodigoid;

    /**
     * @var \App\Entity\Financeiro\Contrato
     */
    private $contPaicodigoid;

    /**
     * @var \App\Entity\Financeiro\Designacao
     */
    private $desigCodigoid;

    /**
     * @var \App\Entity\Financeiro\Enderecoentrega
     */
    private $endeentrCodigoid;

    /**
     * @var \App\Entity\Financeiro\Modelo
     */
    private $modeCodigoid;

    /**
     * @var \App\Entity\Financeiro\Multas
     */
    private $multCodigoid;

    /**
     * @var \App\Entity\Financeiro\Sla
     */
    private $slaCodigoid;

    /**
     * @var \App\Entity\Financeiro\Status
     */
    private $statCodigoid;
    
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $contratos;
    
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $enderecoentregaatributovalor;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->contratos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->enderecoentregaatributovalor = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get contCodigoid.
     *
     * @return int
     */
    public function getContCodigoid()
    {
        return $this->contCodigoid;
    }

    /**
     * Set clieCodigoid.
     *
     * @param int|null $clieCodigoid
     *
     * @return Contrato
     */
    public function setClieCodigoid($clieCodigoid = null)
    {
        $this->clieCodigoid = $clieCodigoid;

        return $this;
    }

    /**
     * Get clieCodigoid.
     *
     * @return int|null
     */
    public function getClieCodigoid()
    {
        return $this->clieCodigoid;
    }

    /**
     * Set usuaCodigoid.
     *
     * @param int $usuaCodigoid
     *
     * @return Contrato
     */
    public function setUsuaCodigoid($usuaCodigoid)
    {
        $this->usuaCodigoid = $usuaCodigoid;

        return $this;
    }

    /**
     * Get usuaCodigoid.
     *
     * @return int
     */
    public function getUsuaCodigoid()
    {
        return $this->usuaCodigoid;
    }

    /**
     * Set contNumero.
     *
     * @param int $contNumero
     *
     * @return Contrato
     */
    public function setContNumero($contNumero)
    {
        $this->contNumero = $contNumero;

        return $this;
    }

    /**
     * Get contNumero.
     *
     * @return int
     */
    public function getContNumero()
    {
        return $this->contNumero;
    }

    /**
     * Set contLimiteatraso.
     *
     * @param int $contLimiteatraso
     *
     * @return Contrato
     */
    public function setContLimiteatraso($contLimiteatraso)
    {
        $this->contLimiteatraso = $contLimiteatraso;

        return $this;
    }

    /**
     * Get contLimiteatraso.
     *
     * @return int
     */
    public function getContLimiteatraso()
    {
        return $this->contLimiteatraso;
    }

    /**
     * Set contMenorprazo.
     *
     * @param bool $contMenorprazo
     *
     * @return Contrato
     */
    public function setContMenorprazo($contMenorprazo)
    {
        $this->contMenorprazo = $contMenorprazo;

        return $this;
    }

    /**
     * Get contMenorprazo.
     *
     * @return bool
     */
    public function getContMenorprazo()
    {
        return $this->contMenorprazo;
    }

    /**
     * Set contPrazorescisao.
     *
     * @param int $contPrazorescisao
     *
     * @return Contrato
     */
    public function setContPrazorescisao($contPrazorescisao)
    {
        $this->contPrazorescisao = $contPrazorescisao;

        return $this;
    }

    /**
     * Get contPrazorescisao.
     *
     * @return int
     */
    public function getContPrazorescisao()
    {
        return $this->contPrazorescisao;
    }

    /**
     * Set contDataassinatura.
     *
     * @param \DateTime|null $contDataassinatura
     *
     * @return Contrato
     */
    public function setContDataassinatura($contDataassinatura = null)
    {
        $this->contDataassinatura = $contDataassinatura;

        return $this;
    }

    /**
     * Get contDataassinatura.
     *
     * @return \DateTime|null
     */
    public function getContDataassinatura()
    {
        return $this->contDataassinatura;
    }

    /**
     * Set contDatainc.
     *
     * @param \DateTime $contDatainc
     *
     * @return Contrato
     */
    public function setContDatainc($contDatainc)
    {
        $this->contDatainc = $contDatainc;

        return $this;
    }

    /**
     * Get contDatainc.
     *
     * @return \DateTime
     */
    public function getContDatainc()
    {
        return $this->contDatainc;
    }

    /**
     * Set contIndicereajuste.
     *
     * @param string $contIndicereajuste
     *
     * @return Contrato
     */
    public function setContIndicereajuste($contIndicereajuste)
    {
        $this->contIndicereajuste = $contIndicereajuste;

        return $this;
    }

    /**
     * Get contIndicereajuste.
     *
     * @return string
     */
    public function getContIndicereajuste()
    {
        return $this->contIndicereajuste;
    }

    /**
     * Set contPrazoreajuste.
     *
     * @param int $contPrazoreajuste
     *
     * @return Contrato
     */
    public function setContPrazoreajuste($contPrazoreajuste)
    {
        $this->contPrazoreajuste = $contPrazoreajuste;

        return $this;
    }

    /**
     * Get contPrazoreajuste.
     *
     * @return int
     */
    public function getContPrazoreajuste()
    {
        return $this->contPrazoreajuste;
    }

    /**
     * Set contIndisponibilidade.
     *
     * @param string $contIndisponibilidade
     *
     * @return Contrato
     */
    public function setContIndisponibilidade($contIndisponibilidade)
    {
        $this->contIndisponibilidade = $contIndisponibilidade;

        return $this;
    }

    /**
     * Get contIndisponibilidade.
     *
     * @return string
     */
    public function getContIndisponibilidade()
    {
        return $this->contIndisponibilidade;
    }

    /**
     * Set contDependentecodigoid.
     *
     * @param int|null $contDependentecodigoid
     *
     * @return Contrato
     */
    public function setContDependentecodigoid($contDependentecodigoid = null)
    {
        $this->contDependentecodigoid = $contDependentecodigoid;

        return $this;
    }

    /**
     * Get contDependentecodigoid.
     *
     * @return int|null
     */
    public function getContDependentecodigoid()
    {
        return $this->contDependentecodigoid;
    }

    /**
     * Set unidCodigoid.
     *
     * @param int|null $unidCodigoid
     *
     * @return Contrato
     */
    public function setUnidCodigoid($unidCodigoid = null)
    {
        $this->unidCodigoid = $unidCodigoid;

        return $this;
    }

    /**
     * Get unidCodigoid.
     *
     * @return int|null
     */
    public function getUnidCodigoid()
    {
        return $this->unidCodigoid;
    }

    /**
     * Set bancCodigoid.
     *
     * @param int|null $bancCodigoid
     *
     * @return Contrato
     */
    public function setBancCodigoid($bancCodigoid = null)
    {
        $this->bancCodigoid = $bancCodigoid;

        return $this;
    }

    /**
     * Get bancCodigoid.
     *
     * @return int|null
     */
    public function getBancCodigoid()
    {
        return $this->bancCodigoid;
    }

    /**
     * Set enviCodigoid.
     *
     * @param int|null $enviCodigoid
     *
     * @return Contrato
     */
    public function setEnviCodigoid($enviCodigoid = null)
    {
        $this->enviCodigoid = $enviCodigoid;

        return $this;
    }

    /**
     * Get enviCodigoid.
     *
     * @return int|null
     */
    public function getEnviCodigoid()
    {
        return $this->enviCodigoid;
    }

    /**
     * Set contDatacancelamento.
     *
     * @param \DateTime|null $contDatacancelamento
     *
     * @return Contrato
     */
    public function setContDatacancelamento($contDatacancelamento = null)
    {
        $this->contDatacancelamento = $contDatacancelamento;

        return $this;
    }

    /**
     * Get contDatacancelamento.
     *
     * @return \DateTime|null
     */
    public function getContDatacancelamento()
    {
        return $this->contDatacancelamento;
    }

    /**
     * Set contDatacancelado.
     *
     * @param \DateTime|null $contDatacancelado
     *
     * @return Contrato
     */
    public function setContDatacancelado($contDatacancelado = null)
    {
        $this->contDatacancelado = $contDatacancelado;

        return $this;
    }

    /**
     * Get contDatacancelado.
     *
     * @return \DateTime|null
     */
    public function getContDatacancelado()
    {
        return $this->contDatacancelado;
    }

    /**
     * Set contDatareajustado.
     *
     * @param \DateTime|null $contDatareajustado
     *
     * @return Contrato
     */
    public function setContDatareajustado($contDatareajustado = null)
    {
        $this->contDatareajustado = $contDatareajustado;

        return $this;
    }

    /**
     * Get contDatareajustado.
     *
     * @return \DateTime|null
     */
    public function getContDatareajustado()
    {
        return $this->contDatareajustado;
    }

    /**
     * Set contUnidArquivado.
     *
     * @param int|null $contUnidArquivado
     *
     * @return Contrato
     */
    public function setContUnidArquivado($contUnidArquivado = null)
    {
        $this->contUnidArquivado = $contUnidArquivado;

        return $this;
    }

    /**
     * Get contUnidArquivado.
     *
     * @return int|null
     */
    public function getContUnidArquivado()
    {
        return $this->contUnidArquivado;
    }

    /**
     * Set contClienteFinal.
     *
     * @param string|null $contClienteFinal
     *
     * @return Contrato
     */
    public function setContClienteFinal($contClienteFinal = null)
    {
        $this->contClienteFinal = $contClienteFinal;

        return $this;
    }

    /**
     * Get contClienteFinal.
     *
     * @return string|null
     */
    public function getContClienteFinal()
    {
        return $this->contClienteFinal;
    }

    /**
     * Set integracaoSummit.
     *
     * @param bool|null $integracaoSummit
     *
     * @return Contrato
     */
    public function setIntegracaoSummit($integracaoSummit = null)
    {
        $this->integracaoSummit = $integracaoSummit;

        return $this;
    }

    /**
     * Get integracaoSummit.
     *
     * @return bool|null
     */
    public function getIntegracaoSummit()
    {
        return $this->integracaoSummit;
    }

    /**
     * Set contTipo.
     *
     * @param string $contTipo
     *
     * @return Contrato
     */
    public function setContTipo($contTipo)
    {
        $this->contTipo = $contTipo;

        return $this;
    }

    /**
     * Get contTipo.
     *
     * @return string
     */
    public function getContTipo()
    {
        return $this->contTipo;
    }

    /**
     * Set propcircuitCodigoid.
     *
     * @param int|null $propcircuitCodigoid
     *
     * @return Contrato
     */
    public function setPropcircuitCodigoid($propcircuitCodigoid = null)
    {
        $this->propcircuitCodigoid = $propcircuitCodigoid;

        return $this;
    }

    /**
     * Get propcircuitCodigoid.
     *
     * @return int|null
     */
    public function getPropcircuitCodigoid()
    {
        return $this->propcircuitCodigoid;
    }

    /**
     * Set contClassificacao.
     *
     * @param string|null $contClassificacao
     *
     * @return Contrato
     */
    public function setContClassificacao($contClassificacao = null)
    {
        $this->contClassificacao = $contClassificacao;

        return $this;
    }

    /**
     * Get contClassificacao.
     *
     * @return string|null
     */
    public function getContClassificacao()
    {
        return $this->contClassificacao;
    }

    /**
     * Set contValorDelta.
     *
     * @param string|null $contValorDelta
     *
     * @return Contrato
     */
    public function setContValorDelta($contValorDelta = null)
    {
        $this->contValorDelta = $contValorDelta;

        return $this;
    }

    /**
     * Get contValorDelta.
     *
     * @return string|null
     */
    public function getContValorDelta()
    {
        return $this->contValorDelta;
    }

    /**
     * Set contDataInternalizacao.
     *
     * @param \DateTime|null $contDataInternalizacao
     *
     * @return Contrato
     */
    public function setContDataInternalizacao($contDataInternalizacao = null)
    {
        $this->contDataInternalizacao = $contDataInternalizacao;

        return $this;
    }

    /**
     * Get contDataInternalizacao.
     *
     * @return \DateTime|null
     */
    public function getContDataInternalizacao()
    {
        return $this->contDataInternalizacao;
    }

    /**
     * Set contInformacoesAdicionais.
     *
     * @param string|null $contInformacoesAdicionais
     *
     * @return Contrato
     */
    public function setContInformacoesAdicionais($contInformacoesAdicionais = null)
    {
        $this->contInformacoesAdicionais = $contInformacoesAdicionais;

        return $this;
    }

    /**
     * Get contInformacoesAdicionais.
     *
     * @return string|null
     */
    public function getContInformacoesAdicionais()
    {
        return $this->contInformacoesAdicionais;
    }

    /**
     * Set contSegregarValor.
     *
     * @param bool $contSegregarValor
     *
     * @return Contrato
     */
    public function setContSegregarValor($contSegregarValor)
    {
        $this->contSegregarValor = $contSegregarValor;

        return $this;
    }

    /**
     * Get contSegregarValor.
     *
     * @return bool
     */
    public function getContSegregarValor()
    {
        return $this->contSegregarValor;
    }

    /**
     * Set salesforceId.
     *
     * @param int|null $salesforceId
     *
     * @return Contrato
     */
    public function setSalesforceId($salesforceId = null)
    {
        $this->salesforceId = $salesforceId;

        return $this;
    }

    /**
     * Get salesforceId.
     *
     * @return int|null
     */
    public function getSalesforceId()
    {
        return $this->salesforceId;
    }

    /**
     * Set contSubstituircodigoid.
     *
     * @param \App\Entity\Financeiro\Contrato|null $contSubstituircodigoid
     *
     * @return Contrato
     */
    public function setContSubstituircodigoid(\App\Entity\Financeiro\Contrato $contSubstituircodigoid = null)
    {
        $this->contSubstituircodigoid = $contSubstituircodigoid;

        return $this;
    }

    /**
     * Get contSubstituircodigoid.
     *
     * @return \App\Entity\Financeiro\Contrato|null
     */
    public function getContSubstituircodigoid()
    {
        return $this->contSubstituircodigoid;
    }

    /**
     * Set contProximocodigoid.
     *
     * @param \App\Entity\Financeiro\Contrato|null $contProximocodigoid
     *
     * @return Contrato
     */
    public function setContProximocodigoid(\App\Entity\Financeiro\Contrato $contProximocodigoid = null)
    {
        $this->contProximocodigoid = $contProximocodigoid;

        return $this;
    }

    /**
     * Get contProximocodigoid.
     *
     * @return \App\Entity\Financeiro\Contrato|null
     */
    public function getContProximocodigoid()
    {
        return $this->contProximocodigoid;
    }

    /**
     * Set contPaicodigoid.
     *
     * @param \App\Entity\Financeiro\Contrato|null $contPaicodigoid
     *
     * @return Contrato
     */
    public function setContPaicodigoid(\App\Entity\Financeiro\Contrato $contPaicodigoid = null)
    {
        $this->contPaicodigoid = $contPaicodigoid;

        return $this;
    }

    /**
     * Get contPaicodigoid.
     *
     * @return \App\Entity\Financeiro\Contrato|null
     */
    public function getContPaicodigoid()
    {
        return $this->contPaicodigoid;
    }

    /**
     * Set desigCodigoid.
     *
     * @param \App\Entity\Financeiro\Designacao|null $desigCodigoid
     *
     * @return Contrato
     */
    public function setDesigCodigoid(\App\Entity\Financeiro\Designacao $desigCodigoid = null)
    {
        $this->desigCodigoid = $desigCodigoid;

        return $this;
    }

    /**
     * Get desigCodigoid.
     *
     * @return \App\Entity\Financeiro\Designacao|null
     */
    public function getDesigCodigoid()
    {
        return $this->desigCodigoid;
    }

    /**
     * Set endeentrCodigoid.
     *
     * @param \App\Entity\Financeiro\Enderecoentrega|null $endeentrCodigoid
     *
     * @return Contrato
     */
    public function setEndeentrCodigoid(\App\Entity\Financeiro\Enderecoentrega $endeentrCodigoid = null)
    {
        $this->endeentrCodigoid = $endeentrCodigoid;

        return $this;
    }

    /**
     * Get endeentrCodigoid.
     *
     * @return \App\Entity\Financeiro\Enderecoentrega|null
     */
    public function getEndeentrCodigoid()
    {
        return $this->endeentrCodigoid;
    }

    /**
     * Set modeCodigoid.
     *
     * @param \App\Entity\Financeiro\Modelo|null $modeCodigoid
     *
     * @return Contrato
     */
    public function setModeCodigoid(\App\Entity\Financeiro\Modelo $modeCodigoid = null)
    {
        $this->modeCodigoid = $modeCodigoid;

        return $this;
    }

    /**
     * Get modeCodigoid.
     *
     * @return \App\Entity\Financeiro\Modelo|null
     */
    public function getModeCodigoid()
    {
        return $this->modeCodigoid;
    }

    /**
     * Set multCodigoid.
     *
     * @param \App\Entity\Financeiro\Multas|null $multCodigoid
     *
     * @return Contrato
     */
    public function setMultCodigoid(\App\Entity\Financeiro\Multas $multCodigoid = null)
    {
        $this->multCodigoid = $multCodigoid;

        return $this;
    }

    /**
     * Get multCodigoid.
     *
     * @return \App\Entity\Financeiro\Multas|null
     */
    public function getMultCodigoid()
    {
        return $this->multCodigoid;
    }

    /**
     * Set slaCodigoid.
     *
     * @param \App\Entity\Financeiro\Sla|null $slaCodigoid
     *
     * @return Contrato
     */
    public function setSlaCodigoid(\App\Entity\Financeiro\Sla $slaCodigoid = null)
    {
        $this->slaCodigoid = $slaCodigoid;

        return $this;
    }

    /**
     * Get slaCodigoid.
     *
     * @return \App\Entity\Financeiro\Sla|null
     */
    public function getSlaCodigoid()
    {
        return $this->slaCodigoid;
    }

    /**
     * Set statCodigoid.
     *
     * @param \App\Entity\Financeiro\Status|null $statCodigoid
     *
     * @return Contrato
     */
    public function setStatCodigoid(\App\Entity\Financeiro\Status $statCodigoid = null)
    {
        $this->statCodigoid = $statCodigoid;

        return $this;
    }

    /**
     * Get statCodigoid.
     *
     * @return \App\Entity\Financeiro\Status|null
     */
    public function getStatCodigoid()
    {
        return $this->statCodigoid;
    }
    
    /**
     * Add contrato
     *
     * @param \App\Entity\Financeiro\Contrato $contratoFilho
     * @return Contrato
     */
    public function addContrato(\App\Entity\Financeiro\Contrato $contrato)
    {
        $this->contratos[] = $contrato;
        
        return $this;
    }
    
    /**
     * Remove contrato
     *
     * @param \App\Entity\Financeiro\Contrato $contratoFilho
     */
    public function removeContrato(\App\Entity\Financeiro\Contrato $contrato)
    {
        $this->contratos->removeElement($contrato);
    }
    
    /**
     * Get contratos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getContratos()
    {
        return $this->contratos;
    }
    
    /**
     * Add enderecoentregaatributovalor
     *
     * @param \App\Entity\Financeiro\Enderecoentregaatributovalor $enderecoentregaatributovalor
     * @return Contrato
     */
    public function addEnderecoentregaatributovalor(\App\Entity\Financeiro\Enderecoentregaatributovalor $enderecoentregaatributovalor)
    {
        $this->enderecoentregaatributovalor[] = $enderecoentregaatributovalor;
        
        return $this;
    }
    
    /**
     * Remove enderecoentregaatributovalor
     *
     * @param \App\Entity\Financeiro\Enderecoentregaatributovalor $enderecoentregaatributovalor
     */
    public function removeEnderecoentregaatributovalor(\App\Entity\Financeiro\Enderecoentregaatributovalor $enderecoentregaatributovalor)
    {
        $this->enderecoentregaatributovalor->removeElement($enderecoentregaatributovalor);
    }
    
    /**
     * Get enderecoentregaatributovalor
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEnderecoentregaatributovalor()
    {
        return $this->enderecoentregaatributovalor;
    }
    
    public function getStt()
    {
        if(!($this->contPaicodigoid instanceof Contrato)){
            $filho = $this->getContratos()->first();
            if(!($filho->getDesigCodigoid() instanceof Designacao)){
                return "";
            }
            if($filho->getDesigCodigoid()->getDesigStt()){
                return "STT{$filho->getDesigCodigoid()->getDesigStt()}".str_pad($filho->getDesigCodigoid()->getDesigNumero(), 4, "0", STR_PAD_LEFT);
            }else{
                return "STT-{$filho->getDesigCodigoid()->getClieCodigoid()}-{$filho->getDesigCodigoid()->getDesigNumero()}";
            }
        }
        
        if(!($this->desigCodigoid instanceof Designacao)){
            return "";
        }
        if($this->desigCodigoid->getDesigStt()){
            return "STT{$this->desigCodigoid->getDesigStt()}".str_pad($this->desigCodigoid->getDesigNumero(), 4, "0", STR_PAD_LEFT);
        }else{
            return "STT-{$this->desigCodigoid->getClieCodigoid()}-{$this->desigCodigoid->getDesigNumero()}-{$this->desigCodigoid->getDesigPonta()}";
        }
    }
}
