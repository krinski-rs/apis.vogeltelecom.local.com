<?php

namespace App\Entity\Gcdb;

/**
 * Customers
 */
class Customers
{
    /**
     * @var int
     */
    private $customerid;

    /**
     * @var string|null
     */
    private $first;

    /**
     * @var string|null
     */
    private $mid;

    /**
     * @var string|null
     */
    private $last;

    /**
     * @var string|null
     */
    private $address;

    /**
     * @var string|null
     */
    private $telephone;

    /**
     * @var string|null
     */
    private $fax;

    /**
     * @var string|null
     */
    private $email;

    /**
     * @var string|null
     */
    private $city;

    /**
     * @var string|null
     */
    private $state;

    /**
     * @var string|null
     */
    private $zip;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var string|null
     */
    private $fantasia;

    /**
     * @var string|null
     */
    private $razao;

    /**
     * @var string|null
     */
    private $cnpj;

    /**
     * @var string|null
     */
    private $pais;

    /**
     * @var string|null
     */
    private $obs;

    /**
     * @var string|null
     */
    private $emergencia;

    /**
     * @var string|null
     */
    private $cpf;

    /**
     * @var string
     */
    private $atpass = 'temporar';

    /**
     * @var bool|null
     */
    private $tributaicms;

    /**
     * @var bool|null
     */
    private $delin;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $customers2users;
    
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $prioridades;
    
    /**
     * @var \App\Entity\Gcdb\Origemexterna
     */
    private $origemexterna;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->customers2users = new \Doctrine\Common\Collections\ArrayCollection();
        $this->prioridades = new \Doctrine\Common\Collections\ArrayCollection();    }

    /**
     * Get customerid.
     *
     * @return int
     */
    public function getCustomerid()
    {
        return $this->customerid;
    }

    /**
     * Set first.
     *
     * @param string|null $first
     *
     * @return Customers
     */
    public function setFirst($first = null)
    {
        $this->first = $first;

        return $this;
    }

    /**
     * Get first.
     *
     * @return string|null
     */
    public function getFirst()
    {
        return $this->first;
    }

    /**
     * Set mid.
     *
     * @param string|null $mid
     *
     * @return Customers
     */
    public function setMid($mid = null)
    {
        $this->mid = $mid;

        return $this;
    }

    /**
     * Get mid.
     *
     * @return string|null
     */
    public function getMid()
    {
        return $this->mid;
    }

    /**
     * Set last.
     *
     * @param string|null $last
     *
     * @return Customers
     */
    public function setLast($last = null)
    {
        $this->last = $last;

        return $this;
    }

    /**
     * Get last.
     *
     * @return string|null
     */
    public function getLast()
    {
        return $this->last;
    }

    /**
     * Set address.
     *
     * @param string|null $address
     *
     * @return Customers
     */
    public function setAddress($address = null)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address.
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set telephone.
     *
     * @param string|null $telephone
     *
     * @return Customers
     */
    public function setTelephone($telephone = null)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone.
     *
     * @return string|null
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set fax.
     *
     * @param string|null $fax
     *
     * @return Customers
     */
    public function setFax($fax = null)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax.
     *
     * @return string|null
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set email.
     *
     * @param string|null $email
     *
     * @return Customers
     */
    public function setEmail($email = null)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email.
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set city.
     *
     * @param string|null $city
     *
     * @return Customers
     */
    public function setCity($city = null)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city.
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set state.
     *
     * @param string|null $state
     *
     * @return Customers
     */
    public function setState($state = null)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state.
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set zip.
     *
     * @param string|null $zip
     *
     * @return Customers
     */
    public function setZip($zip = null)
    {
        $this->zip = $zip;

        return $this;
    }

    /**
     * Get zip.
     *
     * @return string|null
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Set status.
     *
     * @param string|null $status
     *
     * @return Customers
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
     * Set fantasia.
     *
     * @param string|null $fantasia
     *
     * @return Customers
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
     * Set razao.
     *
     * @param string|null $razao
     *
     * @return Customers
     */
    public function setRazao($razao = null)
    {
        $this->razao = $razao;

        return $this;
    }

    /**
     * Get razao.
     *
     * @return string|null
     */
    public function getRazao()
    {
        return $this->razao;
    }

    /**
     * Set cnpj.
     *
     * @param string|null $cnpj
     *
     * @return Customers
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
     * Set pais.
     *
     * @param string|null $pais
     *
     * @return Customers
     */
    public function setPais($pais = null)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais.
     *
     * @return string|null
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set obs.
     *
     * @param string|null $obs
     *
     * @return Customers
     */
    public function setObs($obs = null)
    {
        $this->obs = $obs;

        return $this;
    }

    /**
     * Get obs.
     *
     * @return string|null
     */
    public function getObs()
    {
        return $this->obs;
    }

    /**
     * Set emergencia.
     *
     * @param string|null $emergencia
     *
     * @return Customers
     */
    public function setEmergencia($emergencia = null)
    {
        $this->emergencia = $emergencia;

        return $this;
    }

    /**
     * Get emergencia.
     *
     * @return string|null
     */
    public function getEmergencia()
    {
        return $this->emergencia;
    }

    /**
     * Set cpf.
     *
     * @param string|null $cpf
     *
     * @return Customers
     */
    public function setCpf($cpf = null)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get cpf.
     *
     * @return string|null
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set atpass.
     *
     * @param string $atpass
     *
     * @return Customers
     */
    public function setAtpass($atpass)
    {
        $this->atpass = $atpass;

        return $this;
    }

    /**
     * Get atpass.
     *
     * @return string
     */
    public function getAtpass()
    {
        return $this->atpass;
    }

    /**
     * Set tributaicms.
     *
     * @param bool|null $tributaicms
     *
     * @return Customers
     */
    public function setTributaicms($tributaicms = null)
    {
        $this->tributaicms = $tributaicms;

        return $this;
    }

    /**
     * Get tributaicms.
     *
     * @return bool|null
     */
    public function getTributaicms()
    {
        return $this->tributaicms;
    }

    /**
     * Set delin.
     *
     * @param bool|null $delin
     *
     * @return Customers
     */
    public function setDelin($delin = null)
    {
        $this->delin = $delin;

        return $this;
    }

    /**
     * Get delin.
     *
     * @return bool|null
     */
    public function getDelin()
    {
        return $this->delin;
    }

    /**
     * Add customers2user.
     *
     * @param \App\Entity\Gcdb\Customers2users $customers2user
     *
     * @return Customers
     */
    public function addCustomers2user(\App\Entity\Gcdb\Customers2users $customers2user)
    {
        $this->customers2users[] = $customers2user;

        return $this;
    }

    /**
     * Remove customers2user.
     *
     * @param \App\Entity\Gcdb\Customers2users $customers2user
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeCustomers2user(\App\Entity\Gcdb\Customers2users $customers2user)
    {
        return $this->customers2users->removeElement($customers2user);
    }

    /**
     * Get customers2users.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCustomers2users()
    {
        return $this->customers2users;
    }
    
    /**
     * Add prioridade.
     *
     * @param \App\Entity\Gcdb\Prioridade $prioridade
     *
     * @return Customers
     */
    public function addPrioridade(\App\Entity\Gcdb\Prioridade $prioridade)
    {
        $this->prioridades[] = $prioridade;
        
        return $this;
    }
    
    /**
     * Remove prioridade.
     *
     * @param \App\Entity\Gcdb\Prioridade $prioridade
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removePrioridade(\App\Entity\Gcdb\Prioridade $prioridade)
    {
        return $this->prioridades->removeElement($prioridade);
    }
    
    /**
     * Get prioridades.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPrioridades()
    {
        return $this->prioridades;
    }
    
    /**
     * Set origemexterna.
     *
     * @param \App\Entity\Gcdb\Origemexterna|null $origemexterna
     *
     * @return Customers
     */
    public function setOrigemexterna(\App\Entity\Gcdb\Origemexterna $origemexterna = null)
    {
        $this->origemexterna = $origemexterna;

        return $this;
    }

    /**
     * Get origemexterna.
     *
     * @return \App\Entity\Gcdb\Origemexterna|null
     */
    public function getOrigemexterna()
    {
        return $this->origemexterna;
    }
}
