<?php

namespace App\Entity\Gcdb;

/**
 * Prioridade
 */
class Prioridade
{
    /**
     * @var int
     */
    private $prioridadeid;

    /**
     * @var string
     */
    private $nivel;

    /**
     * @var \App\Entity\Gcdb\Customers
     */
    private $customer;


    /**
     * Get prioridadeid.
     *
     * @return int
     */
    public function getPrioridadeid()
    {
        return $this->prioridadeid;
    }

    /**
     * Set nivel.
     *
     * @param string $nivel
     *
     * @return Prioridade
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;

        return $this;
    }

    /**
     * Get nivel.
     *
     * @return string
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * Set customer.
     *
     * @param \App\Entity\Gcdb\Customers|null $customer
     *
     * @return Prioridade
     */
    public function setCustomer(\App\Entity\Gcdb\Customers $customer = null)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer.
     *
     * @return \App\Entity\Gcdb\Customers|null
     */
    public function getCustomer()
    {
        return $this->customer;
    }
}
