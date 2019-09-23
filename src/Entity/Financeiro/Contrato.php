<?php

namespace App\Entity\Financeiro;

use App\Entity\Gcdb\Customers;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class Contrato
{
    private $contCodigoid;

    private $usuaCodigoid;

    private $contNumero;

    private $contLimiteatraso;

    private $contMenorprazo;

    private $contPrazorescisao;

    private $contDataassinatura;

    private $contDatainc;

    private $contIndicereajuste;

    private $contPrazoreajuste;

    private $contIndisponibilidade;

    private $contDependentecodigoid;

    private $unidCodigoid;

    private $bancCodigoid;

    private $enviCodigoid;

    private $contDatacancelamento;

    private $contDatacancelado;

    private $contDatareajustado;

    private $contUnidArquivado;

    private $contClienteFinal;

    private $integracaoSummit;

    private $contTipo;

    private $propcircuitCodigoid;

    private $contClassificacao;

    private $contValorDelta;

    private $contDataInternalizacao;

    private $contInformacoesAdicionais;

    private $contSegregarValor;

    private $salesforceId;

    private $contratos;

    private $enderecoentregaatributovalor;

    private $contratoservico;

    private $contratovalor;

    private $contSubstituircodigoid;

    private $contProximocodigoid;

    private $contPaicodigoid;

    private $desigCodigoid;

    private $endeentrCodigoid;

    private $modeCodigoid;

    private $multCodigoid;

    private $slaCodigoid;

    private $statCodigoid;

    private $customers;

    public function __construct()
    {
        $this->contratos = new ArrayCollection();
        $this->enderecoentregaatributovalor = new ArrayCollection();
        $this->contratoservico = new ArrayCollection();
        $this->contratovalor = new ArrayCollection();
    }

    public function getContCodigoid(): ?int
    {
        return $this->contCodigoid;
    }

    public function getUsuaCodigoid(): ?int
    {
        return $this->usuaCodigoid;
    }

    public function setUsuaCodigoid(int $usuaCodigoid): self
    {
        $this->usuaCodigoid = $usuaCodigoid;

        return $this;
    }

    public function getContNumero(): ?int
    {
        return $this->contNumero;
    }

    public function setContNumero(int $contNumero): self
    {
        $this->contNumero = $contNumero;

        return $this;
    }

    public function getContLimiteatraso(): ?int
    {
        return $this->contLimiteatraso;
    }

    public function setContLimiteatraso(int $contLimiteatraso): self
    {
        $this->contLimiteatraso = $contLimiteatraso;

        return $this;
    }

    public function getContMenorprazo(): ?bool
    {
        return $this->contMenorprazo;
    }

    public function setContMenorprazo(bool $contMenorprazo): self
    {
        $this->contMenorprazo = $contMenorprazo;

        return $this;
    }

    public function getContPrazorescisao(): ?int
    {
        return $this->contPrazorescisao;
    }

    public function setContPrazorescisao(int $contPrazorescisao): self
    {
        $this->contPrazorescisao = $contPrazorescisao;

        return $this;
    }

    public function getContDataassinatura(): ?\DateTimeInterface
    {
        return $this->contDataassinatura;
    }

    public function setContDataassinatura(?\DateTimeInterface $contDataassinatura): self
    {
        $this->contDataassinatura = $contDataassinatura;

        return $this;
    }

    public function getContDatainc(): ?\DateTimeInterface
    {
        return $this->contDatainc;
    }

    public function setContDatainc(\DateTimeInterface $contDatainc): self
    {
        $this->contDatainc = $contDatainc;

        return $this;
    }

    public function getContIndicereajuste(): ?string
    {
        return $this->contIndicereajuste;
    }

    public function setContIndicereajuste(string $contIndicereajuste): self
    {
        $this->contIndicereajuste = $contIndicereajuste;

        return $this;
    }

    public function getContPrazoreajuste(): ?int
    {
        return $this->contPrazoreajuste;
    }

    public function setContPrazoreajuste(int $contPrazoreajuste): self
    {
        $this->contPrazoreajuste = $contPrazoreajuste;

        return $this;
    }

    public function getContIndisponibilidade(): ?string
    {
        return $this->contIndisponibilidade;
    }

    public function setContIndisponibilidade(string $contIndisponibilidade): self
    {
        $this->contIndisponibilidade = $contIndisponibilidade;

        return $this;
    }

    public function getContDependentecodigoid(): ?int
    {
        return $this->contDependentecodigoid;
    }

    public function setContDependentecodigoid(?int $contDependentecodigoid): self
    {
        $this->contDependentecodigoid = $contDependentecodigoid;

        return $this;
    }

    public function getUnidCodigoid(): ?int
    {
        return $this->unidCodigoid;
    }

    public function setUnidCodigoid(?int $unidCodigoid): self
    {
        $this->unidCodigoid = $unidCodigoid;

        return $this;
    }

    public function getBancCodigoid(): ?int
    {
        return $this->bancCodigoid;
    }

    public function setBancCodigoid(?int $bancCodigoid): self
    {
        $this->bancCodigoid = $bancCodigoid;

        return $this;
    }

    public function getEnviCodigoid(): ?int
    {
        return $this->enviCodigoid;
    }

    public function setEnviCodigoid(?int $enviCodigoid): self
    {
        $this->enviCodigoid = $enviCodigoid;

        return $this;
    }

    public function getContDatacancelamento(): ?\DateTimeInterface
    {
        return $this->contDatacancelamento;
    }

    public function setContDatacancelamento(?\DateTimeInterface $contDatacancelamento): self
    {
        $this->contDatacancelamento = $contDatacancelamento;

        return $this;
    }

    public function getContDatacancelado(): ?\DateTimeInterface
    {
        return $this->contDatacancelado;
    }

    public function setContDatacancelado(?\DateTimeInterface $contDatacancelado): self
    {
        $this->contDatacancelado = $contDatacancelado;

        return $this;
    }

    public function getContDatareajustado(): ?\DateTimeInterface
    {
        return $this->contDatareajustado;
    }

    public function setContDatareajustado(?\DateTimeInterface $contDatareajustado): self
    {
        $this->contDatareajustado = $contDatareajustado;

        return $this;
    }

    public function getContUnidArquivado(): ?int
    {
        return $this->contUnidArquivado;
    }

    public function setContUnidArquivado(?int $contUnidArquivado): self
    {
        $this->contUnidArquivado = $contUnidArquivado;

        return $this;
    }

    public function getContClienteFinal(): ?string
    {
        return $this->contClienteFinal;
    }

    public function setContClienteFinal(?string $contClienteFinal): self
    {
        $this->contClienteFinal = $contClienteFinal;

        return $this;
    }

    public function getIntegracaoSummit(): ?bool
    {
        return $this->integracaoSummit;
    }

    public function setIntegracaoSummit(?bool $integracaoSummit): self
    {
        $this->integracaoSummit = $integracaoSummit;

        return $this;
    }

    public function getContTipo(): ?string
    {
        return $this->contTipo;
    }

    public function setContTipo(string $contTipo): self
    {
        $this->contTipo = $contTipo;

        return $this;
    }

    public function getPropcircuitCodigoid(): ?int
    {
        return $this->propcircuitCodigoid;
    }

    public function setPropcircuitCodigoid(?int $propcircuitCodigoid): self
    {
        $this->propcircuitCodigoid = $propcircuitCodigoid;

        return $this;
    }

    public function getContClassificacao(): ?string
    {
        return $this->contClassificacao;
    }

    public function setContClassificacao(?string $contClassificacao): self
    {
        $this->contClassificacao = $contClassificacao;

        return $this;
    }

    public function getContValorDelta(): ?string
    {
        return $this->contValorDelta;
    }

    public function setContValorDelta(?string $contValorDelta): self
    {
        $this->contValorDelta = $contValorDelta;

        return $this;
    }

    public function getContDataInternalizacao(): ?\DateTimeInterface
    {
        return $this->contDataInternalizacao;
    }

    public function setContDataInternalizacao(?\DateTimeInterface $contDataInternalizacao): self
    {
        $this->contDataInternalizacao = $contDataInternalizacao;

        return $this;
    }

    public function getContInformacoesAdicionais(): ?string
    {
        return $this->contInformacoesAdicionais;
    }

    public function setContInformacoesAdicionais(?string $contInformacoesAdicionais): self
    {
        $this->contInformacoesAdicionais = $contInformacoesAdicionais;

        return $this;
    }

    public function getContSegregarValor(): ?bool
    {
        return $this->contSegregarValor;
    }

    public function setContSegregarValor(bool $contSegregarValor): self
    {
        $this->contSegregarValor = $contSegregarValor;

        return $this;
    }

    public function getSalesforceId(): ?string
    {
        return $this->salesforceId;
    }

    public function setSalesforceId(?string $salesforceId): self
    {
        $this->salesforceId = $salesforceId;

        return $this;
    }

    /**
     * @return Collection|Contrato[]
     */
    public function getContratos(): Collection
    {
        return $this->contratos;
    }

    public function addContrato(Contrato $contrato): self
    {
        if (!$this->contratos->contains($contrato)) {
            $this->contratos[] = $contrato;
            $contrato->setContrato($this);
        }

        return $this;
    }

    public function removeContrato(Contrato $contrato): self
    {
        if ($this->contratos->contains($contrato)) {
            $this->contratos->removeElement($contrato);
            // set the owning side to null (unless already changed)
            if ($contrato->getContrato() === $this) {
                $contrato->setContrato(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Enderecoentregaatributovalor[]
     */
    public function getEnderecoentregaatributovalor(): Collection
    {
        return $this->enderecoentregaatributovalor;
    }

    public function addEnderecoentregaatributovalor(Enderecoentregaatributovalor $enderecoentregaatributovalor): self
    {
        if (!$this->enderecoentregaatributovalor->contains($enderecoentregaatributovalor)) {
            $this->enderecoentregaatributovalor[] = $enderecoentregaatributovalor;
            $enderecoentregaatributovalor->setContrato($this);
        }

        return $this;
    }

    public function removeEnderecoentregaatributovalor(Enderecoentregaatributovalor $enderecoentregaatributovalor): self
    {
        if ($this->enderecoentregaatributovalor->contains($enderecoentregaatributovalor)) {
            $this->enderecoentregaatributovalor->removeElement($enderecoentregaatributovalor);
            // set the owning side to null (unless already changed)
            if ($enderecoentregaatributovalor->getContrato() === $this) {
                $enderecoentregaatributovalor->setContrato(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Contratoservico[]
     */
    public function getContratoservico(): Collection
    {
        return $this->contratoservico;
    }

    public function addContratoservico(Contratoservico $contratoservico): self
    {
        if (!$this->contratoservico->contains($contratoservico)) {
            $this->contratoservico[] = $contratoservico;
            $contratoservico->setContrato($this);
        }

        return $this;
    }

    public function removeContratoservico(Contratoservico $contratoservico): self
    {
        if ($this->contratoservico->contains($contratoservico)) {
            $this->contratoservico->removeElement($contratoservico);
            // set the owning side to null (unless already changed)
            if ($contratoservico->getContrato() === $this) {
                $contratoservico->setContrato(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Contratovalor[]
     */
    public function getContratovalor(): Collection
    {
        return $this->contratovalor;
    }

    public function addContratovalor(Contratovalor $contratovalor): self
    {
        if (!$this->contratovalor->contains($contratovalor)) {
            $this->contratovalor[] = $contratovalor;
            $contratovalor->setContrato($this);
        }

        return $this;
    }

    public function removeContratovalor(Contratovalor $contratovalor): self
    {
        if ($this->contratovalor->contains($contratovalor)) {
            $this->contratovalor->removeElement($contratovalor);
            // set the owning side to null (unless already changed)
            if ($contratovalor->getContrato() === $this) {
                $contratovalor->setContrato(null);
            }
        }

        return $this;
    }

    public function getContSubstituircodigoid(): ?self
    {
        return $this->contSubstituircodigoid;
    }

    public function setContSubstituircodigoid(?self $contSubstituircodigoid): self
    {
        $this->contSubstituircodigoid = $contSubstituircodigoid;

        return $this;
    }

    public function getContProximocodigoid(): ?self
    {
        return $this->contProximocodigoid;
    }

    public function setContProximocodigoid(?self $contProximocodigoid): self
    {
        $this->contProximocodigoid = $contProximocodigoid;

        return $this;
    }

    public function getContPaicodigoid(): ?self
    {
        return $this->contPaicodigoid;
    }

    public function setContPaicodigoid(?self $contPaicodigoid): self
    {
        $this->contPaicodigoid = $contPaicodigoid;

        return $this;
    }

    public function getDesigCodigoid(): ?Designacao
    {
        return $this->desigCodigoid;
    }

    public function setDesigCodigoid(?Designacao $desigCodigoid): self
    {
        $this->desigCodigoid = $desigCodigoid;

        return $this;
    }

    public function getEndeentrCodigoid(): ?Enderecoentrega
    {
        return $this->endeentrCodigoid;
    }

    public function setEndeentrCodigoid(?Enderecoentrega $endeentrCodigoid): self
    {
        $this->endeentrCodigoid = $endeentrCodigoid;

        return $this;
    }

    public function getModeCodigoid(): ?Modelo
    {
        return $this->modeCodigoid;
    }

    public function setModeCodigoid(?Modelo $modeCodigoid): self
    {
        $this->modeCodigoid = $modeCodigoid;

        return $this;
    }

    public function getMultCodigoid(): ?Multas
    {
        return $this->multCodigoid;
    }

    public function setMultCodigoid(?Multas $multCodigoid): self
    {
        $this->multCodigoid = $multCodigoid;

        return $this;
    }

    public function getSlaCodigoid(): ?Sla
    {
        return $this->slaCodigoid;
    }

    public function setSlaCodigoid(?Sla $slaCodigoid): self
    {
        $this->slaCodigoid = $slaCodigoid;

        return $this;
    }

    public function getStatCodigoid(): ?Status
    {
        return $this->statCodigoid;
    }

    public function setStatCodigoid(?Status $statCodigoid): self
    {
        $this->statCodigoid = $statCodigoid;

        return $this;
    }

    public function getCustomers(): ?Customers
    {
        return $this->customers;
    }

    public function setCustomers(?Customers $customers): self
    {
        $this->customers = $customers;

        return $this;
    }
    
    public function getStt(): string
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
