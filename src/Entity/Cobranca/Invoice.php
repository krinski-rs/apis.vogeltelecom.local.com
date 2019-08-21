<?php

namespace App\Entity\Cobranca;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class Invoice
{
    private $idInvoice;

    private $custumer;

    private $contract;

    private $dateRecord;

    private $dateFirst;

    private $dateLast;

    private $dateValit;

    private $value;

    private $designador;

    private $description;

    private $valueLiquid;

    private $billed;

    private $idUser;

    private $cancelDescription;

    private $genBillet;

    private $newInvoice;

    private $deliveryInvoice;

    private $invoiceInformationLog;

    private $invoiceItem;

    private $statusInvoice;

    private $invoiceType;

    private $banco;

    private $cc;

    public function __construct()
    {
        $this->deliveryInvoice = new ArrayCollection();
        $this->invoiceInformationLog = new ArrayCollection();
        $this->invoiceItem = new ArrayCollection();
        $this->cc = new ArrayCollection();
    }

    public function getIdInvoice(): ?int
    {
        return $this->idInvoice;
    }

    public function getCustumer(): ?int
    {
        return $this->custumer;
    }

    public function setCustumer(int $custumer): self
    {
        $this->custumer = $custumer;

        return $this;
    }

    public function getContract(): ?int
    {
        return $this->contract;
    }

    public function setContract(?int $contract): self
    {
        $this->contract = $contract;

        return $this;
    }

    public function getDateRecord(): ?\DateTimeInterface
    {
        return $this->dateRecord;
    }

    public function setDateRecord(\DateTimeInterface $dateRecord): self
    {
        $this->dateRecord = $dateRecord;

        return $this;
    }

    public function getDateFirst(): ?\DateTimeInterface
    {
        return $this->dateFirst;
    }

    public function setDateFirst(?\DateTimeInterface $dateFirst): self
    {
        $this->dateFirst = $dateFirst;

        return $this;
    }

    public function getDateLast(): ?\DateTimeInterface
    {
        return $this->dateLast;
    }

    public function setDateLast(?\DateTimeInterface $dateLast): self
    {
        $this->dateLast = $dateLast;

        return $this;
    }

    public function getDateValit(): ?\DateTimeInterface
    {
        return $this->dateValit;
    }

    public function setDateValit(\DateTimeInterface $dateValit): self
    {
        $this->dateValit = $dateValit;

        return $this;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getDesignador(): ?int
    {
        return $this->designador;
    }

    public function setDesignador(?int $designador): self
    {
        $this->designador = $designador;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getValueLiquid()
    {
        return $this->valueLiquid;
    }

    public function setValueLiquid($valueLiquid): self
    {
        $this->valueLiquid = $valueLiquid;

        return $this;
    }

    public function getBilled(): ?bool
    {
        return $this->billed;
    }

    public function setBilled(?bool $billed): self
    {
        $this->billed = $billed;

        return $this;
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(?int $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getCancelDescription(): ?string
    {
        return $this->cancelDescription;
    }

    public function setCancelDescription(?string $cancelDescription): self
    {
        $this->cancelDescription = $cancelDescription;

        return $this;
    }

    public function getGenBillet(): ?int
    {
        return $this->genBillet;
    }

    public function setGenBillet(int $genBillet): self
    {
        $this->genBillet = $genBillet;

        return $this;
    }

    public function getNewInvoice(): ?int
    {
        return $this->newInvoice;
    }

    public function setNewInvoice(int $newInvoice): self
    {
        $this->newInvoice = $newInvoice;

        return $this;
    }

    /**
     * @return Collection|DeliveryInvoice[]
     */
    public function getDeliveryInvoice(): Collection
    {
        return $this->deliveryInvoice;
    }

    public function addDeliveryInvoice(DeliveryInvoice $deliveryInvoice): self
    {
        if (!$this->deliveryInvoice->contains($deliveryInvoice)) {
            $this->deliveryInvoice[] = $deliveryInvoice;
            $deliveryInvoice->setInvoice($this);
        }

        return $this;
    }

    public function removeDeliveryInvoice(DeliveryInvoice $deliveryInvoice): self
    {
        if ($this->deliveryInvoice->contains($deliveryInvoice)) {
            $this->deliveryInvoice->removeElement($deliveryInvoice);
            // set the owning side to null (unless already changed)
            if ($deliveryInvoice->getInvoice() === $this) {
                $deliveryInvoice->setInvoice(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|InvoiceInformationLog[]
     */
    public function getInvoiceInformationLog(): Collection
    {
        return $this->invoiceInformationLog;
    }

    public function addInvoiceInformationLog(InvoiceInformationLog $invoiceInformationLog): self
    {
        if (!$this->invoiceInformationLog->contains($invoiceInformationLog)) {
            $this->invoiceInformationLog[] = $invoiceInformationLog;
            $invoiceInformationLog->setInvoice($this);
        }

        return $this;
    }

    public function removeInvoiceInformationLog(InvoiceInformationLog $invoiceInformationLog): self
    {
        if ($this->invoiceInformationLog->contains($invoiceInformationLog)) {
            $this->invoiceInformationLog->removeElement($invoiceInformationLog);
            // set the owning side to null (unless already changed)
            if ($invoiceInformationLog->getInvoice() === $this) {
                $invoiceInformationLog->setInvoice(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|InvoiceItem[]
     */
    public function getInvoiceItem(): Collection
    {
        return $this->invoiceItem;
    }

    public function addInvoiceItem(InvoiceItem $invoiceItem): self
    {
        if (!$this->invoiceItem->contains($invoiceItem)) {
            $this->invoiceItem[] = $invoiceItem;
            $invoiceItem->setInvoice($this);
        }

        return $this;
    }

    public function removeInvoiceItem(InvoiceItem $invoiceItem): self
    {
        if ($this->invoiceItem->contains($invoiceItem)) {
            $this->invoiceItem->removeElement($invoiceItem);
            // set the owning side to null (unless already changed)
            if ($invoiceItem->getInvoice() === $this) {
                $invoiceItem->setInvoice(null);
            }
        }

        return $this;
    }

    public function getStatusInvoice(): ?StatusInvoice
    {
        return $this->statusInvoice;
    }

    public function setStatusInvoice(?StatusInvoice $statusInvoice): self
    {
        $this->statusInvoice = $statusInvoice;

        return $this;
    }

    public function getInvoiceType(): ?InvoiceType
    {
        return $this->invoiceType;
    }

    public function setInvoiceType(?InvoiceType $invoiceType): self
    {
        $this->invoiceType = $invoiceType;

        return $this;
    }

    public function getBanco(): ?Banco
    {
        return $this->banco;
    }

    public function setBanco(?Banco $banco): self
    {
        $this->banco = $banco;

        return $this;
    }

    /**
     * @return Collection|Cc[]
     */
    public function getCc(): Collection
    {
        return $this->cc;
    }

    public function addCc(Cc $cc): self
    {
        if (!$this->cc->contains($cc)) {
            $this->cc[] = $cc;
        }

        return $this;
    }

    public function removeCc(Cc $cc): self
    {
        if ($this->cc->contains($cc)) {
            $this->cc->removeElement($cc);
        }

        return $this;
    }
}
