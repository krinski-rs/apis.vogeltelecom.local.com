<?php

namespace App\Entity\Gcdb;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class Customers
{
    private $customerid;

    private $first;

    private $mid;

    private $last;

    private $address;

    private $telephone;

    private $fax;

    private $email;

    private $city;

    private $state;

    private $zip;

    private $status;

    private $fantasia;

    private $razao;

    private $cnpj;

    private $pais;

    private $obs;

    private $emergencia;

    private $cpf;

    private $atpass;

    private $tributaicms;

    private $delin;

    private $customers2users;

    private $prioridades;

    private $origemexterna;

    public function __construct()
    {
        $this->customers2users = new ArrayCollection();
        $this->prioridades = new ArrayCollection();
    }

    public function getCustomerid(): ?int
    {
        return $this->customerid;
    }

    public function getFirst(): ?string
    {
        return $this->first;
    }

    public function setFirst(?string $first): self
    {
        $this->first = $first;

        return $this;
    }

    public function getMid(): ?string
    {
        return $this->mid;
    }

    public function setMid(?string $mid): self
    {
        $this->mid = $mid;

        return $this;
    }

    public function getLast(): ?string
    {
        return $this->last;
    }

    public function setLast(?string $last): self
    {
        $this->last = $last;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function setFax(?string $fax): self
    {
        $this->fax = $fax;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getZip(): ?string
    {
        return $this->zip;
    }

    public function setZip(?string $zip): self
    {
        $this->zip = $zip;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

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

    public function getRazao(): ?string
    {
        return $this->razao;
    }

    public function setRazao(?string $razao): self
    {
        $this->razao = $razao;

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

    public function getPais(): ?string
    {
        return $this->pais;
    }

    public function setPais(?string $pais): self
    {
        $this->pais = $pais;

        return $this;
    }

    public function getObs(): ?string
    {
        return $this->obs;
    }

    public function setObs(?string $obs): self
    {
        $this->obs = $obs;

        return $this;
    }

    public function getEmergencia(): ?string
    {
        return $this->emergencia;
    }

    public function setEmergencia(?string $emergencia): self
    {
        $this->emergencia = $emergencia;

        return $this;
    }

    public function getCpf(): ?string
    {
        return $this->cpf;
    }

    public function setCpf(?string $cpf): self
    {
        $this->cpf = $cpf;

        return $this;
    }

    public function getAtpass(): ?string
    {
        return $this->atpass;
    }

    public function setAtpass(string $atpass): self
    {
        $this->atpass = $atpass;

        return $this;
    }

    public function getTributaicms(): ?bool
    {
        return $this->tributaicms;
    }

    public function setTributaicms(?bool $tributaicms): self
    {
        $this->tributaicms = $tributaicms;

        return $this;
    }

    public function getDelin(): ?bool
    {
        return $this->delin;
    }

    public function setDelin(?bool $delin): self
    {
        $this->delin = $delin;

        return $this;
    }

    /**
     * @return Collection|Customers2users[]
     */
    public function getCustomers2users(): Collection
    {
        return $this->customers2users;
    }

    public function addCustomers2user(Customers2users $customers2user): self
    {
        if (!$this->customers2users->contains($customers2user)) {
            $this->customers2users[] = $customers2user;
            $customers2user->setCustomer($this);
        }

        return $this;
    }

    public function removeCustomers2user(Customers2users $customers2user): self
    {
        if ($this->customers2users->contains($customers2user)) {
            $this->customers2users->removeElement($customers2user);
            // set the owning side to null (unless already changed)
            if ($customers2user->getCustomer() === $this) {
                $customers2user->setCustomer(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Prioridade[]
     */
    public function getPrioridades(): Collection
    {
        return $this->prioridades;
    }

    public function addPrioridade(Prioridade $prioridade): self
    {
        if (!$this->prioridades->contains($prioridade)) {
            $this->prioridades[] = $prioridade;
            $prioridade->setCustomer($this);
        }

        return $this;
    }

    public function removePrioridade(Prioridade $prioridade): self
    {
        if ($this->prioridades->contains($prioridade)) {
            $this->prioridades->removeElement($prioridade);
            // set the owning side to null (unless already changed)
            if ($prioridade->getCustomer() === $this) {
                $prioridade->setCustomer(null);
            }
        }

        return $this;
    }

    public function getOrigemexterna(): ?Origemexterna
    {
        return $this->origemexterna;
    }

    public function setOrigemexterna(?Origemexterna $origemexterna): self
    {
        $this->origemexterna = $origemexterna;

        return $this;
    }
}
