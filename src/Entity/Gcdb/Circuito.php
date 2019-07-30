<?php

namespace App\Entity\Gcdb;

use App\Entity\Financeiro\Enderecoentrega;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class Circuito
{
    private $circCodigoid;

    private $registrante;

    private $usuaDesativacao;

    private $circOrdem;

    private $circPontaa;

    private $circPopa;

    private $circPontab;

    private $circPopb;

    private $circMeiotransmissao;

    private $circVelocidade;

    private $circInterface;

    private $circInformacoestecnicas;

    private $circObservacao;

    private $circAtivo;

    private $circDatainc;

    private $circMotivodesativado;

    private $circDatadesativado;

    private $circBandaid;

    private $circuitoPop;

    private $customerservico;

    private $enderecoentrega;

    public function __construct()
    {
        $this->circuitoPop = new ArrayCollection();
    }

    public function getCircCodigoid(): ?int
    {
        return $this->circCodigoid;
    }

    public function getRegistrante(): ?int
    {
        return $this->registrante;
    }

    public function setRegistrante(?int $registrante): self
    {
        $this->registrante = $registrante;

        return $this;
    }

    public function getUsuaDesativacao(): ?int
    {
        return $this->usuaDesativacao;
    }

    public function setUsuaDesativacao(?int $usuaDesativacao): self
    {
        $this->usuaDesativacao = $usuaDesativacao;

        return $this;
    }

    public function getCircOrdem(): ?int
    {
        return $this->circOrdem;
    }

    public function setCircOrdem(?int $circOrdem): self
    {
        $this->circOrdem = $circOrdem;

        return $this;
    }

    public function getCircPontaa(): ?string
    {
        return $this->circPontaa;
    }

    public function setCircPontaa(?string $circPontaa): self
    {
        $this->circPontaa = $circPontaa;

        return $this;
    }

    public function getCircPopa(): ?int
    {
        return $this->circPopa;
    }

    public function setCircPopa(?int $circPopa): self
    {
        $this->circPopa = $circPopa;

        return $this;
    }

    public function getCircPontab(): ?string
    {
        return $this->circPontab;
    }

    public function setCircPontab(?string $circPontab): self
    {
        $this->circPontab = $circPontab;

        return $this;
    }

    public function getCircPopb(): ?int
    {
        return $this->circPopb;
    }

    public function setCircPopb(?int $circPopb): self
    {
        $this->circPopb = $circPopb;

        return $this;
    }

    public function getCircMeiotransmissao(): ?string
    {
        return $this->circMeiotransmissao;
    }

    public function setCircMeiotransmissao(?string $circMeiotransmissao): self
    {
        $this->circMeiotransmissao = $circMeiotransmissao;

        return $this;
    }

    public function getCircVelocidade(): ?string
    {
        return $this->circVelocidade;
    }

    public function setCircVelocidade(?string $circVelocidade): self
    {
        $this->circVelocidade = $circVelocidade;

        return $this;
    }

    public function getCircInterface(): ?string
    {
        return $this->circInterface;
    }

    public function setCircInterface(?string $circInterface): self
    {
        $this->circInterface = $circInterface;

        return $this;
    }

    public function getCircInformacoestecnicas(): ?string
    {
        return $this->circInformacoestecnicas;
    }

    public function setCircInformacoestecnicas(?string $circInformacoestecnicas): self
    {
        $this->circInformacoestecnicas = $circInformacoestecnicas;

        return $this;
    }

    public function getCircObservacao(): ?string
    {
        return $this->circObservacao;
    }

    public function setCircObservacao(?string $circObservacao): self
    {
        $this->circObservacao = $circObservacao;

        return $this;
    }

    public function getCircAtivo(): ?bool
    {
        return $this->circAtivo;
    }

    public function setCircAtivo(?bool $circAtivo): self
    {
        $this->circAtivo = $circAtivo;

        return $this;
    }

    public function getCircDatainc(): ?\DateTimeInterface
    {
        return $this->circDatainc;
    }

    public function setCircDatainc(\DateTimeInterface $circDatainc): self
    {
        $this->circDatainc = $circDatainc;

        return $this;
    }

    public function getCircMotivodesativado(): ?string
    {
        return $this->circMotivodesativado;
    }

    public function setCircMotivodesativado(?string $circMotivodesativado): self
    {
        $this->circMotivodesativado = $circMotivodesativado;

        return $this;
    }

    public function getCircDatadesativado(): ?\DateTimeInterface
    {
        return $this->circDatadesativado;
    }

    public function setCircDatadesativado(?\DateTimeInterface $circDatadesativado): self
    {
        $this->circDatadesativado = $circDatadesativado;

        return $this;
    }

    public function getCircBandaid(): ?int
    {
        return $this->circBandaid;
    }

    public function setCircBandaid(?int $circBandaid): self
    {
        $this->circBandaid = $circBandaid;

        return $this;
    }

    /**
     * @return Collection|CircuitoPop[]
     */
    public function getCircuitoPop(): Collection
    {
        return $this->circuitoPop;
    }

    public function addCircuitoPop(CircuitoPop $circuitoPop): self
    {
        if (!$this->circuitoPop->contains($circuitoPop)) {
            $this->circuitoPop[] = $circuitoPop;
            $circuitoPop->setCircuito($this);
        }

        return $this;
    }

    public function removeCircuitoPop(CircuitoPop $circuitoPop): self
    {
        if ($this->circuitoPop->contains($circuitoPop)) {
            $this->circuitoPop->removeElement($circuitoPop);
            // set the owning side to null (unless already changed)
            if ($circuitoPop->getCircuito() === $this) {
                $circuitoPop->setCircuito(null);
            }
        }

        return $this;
    }

    public function getCustomerservico(): ?Customerservico
    {
        return $this->customerservico;
    }

    public function setCustomerservico(?Customerservico $customerservico): self
    {
        $this->customerservico = $customerservico;

        return $this;
    }

    public function getEnderecoentrega(): ?Enderecoentrega
    {
        return $this->enderecoentrega;
    }

    public function setEnderecoentrega(?Enderecoentrega $enderecoentrega): self
    {
        $this->enderecoentrega = $enderecoentrega;

        return $this;
    }
}
