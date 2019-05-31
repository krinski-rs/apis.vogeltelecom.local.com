<?php

namespace App\Entity\Gcdb;

/**
 * Customers2users
 */
class Customers2users
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $dataAbertura = 'CURRENT_TIMESTAMP';

    /**
     * @var int
     */
    private $alqtIcms = '1';

    /**
     * @var bool|null
     */
    private $recebeBoleto = '1';

    /**
     * @var \App\Entity\Gcdb\CadUsers
     */
    private $cadUser;

    /**
     * @var \App\Entity\Gcdb\Customers
     */
    private $customer;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dataAbertura.
     *
     * @param \DateTime $dataAbertura
     *
     * @return Customers2users
     */
    public function setDataAbertura($dataAbertura)
    {
        $this->dataAbertura = $dataAbertura;

        return $this;
    }

    /**
     * Get dataAbertura.
     *
     * @return \DateTime
     */
    public function getDataAbertura()
    {
        return $this->dataAbertura;
    }

    /**
     * Set alqtIcms.
     *
     * @param int $alqtIcms
     *
     * @return Customers2users
     */
    public function setAlqtIcms($alqtIcms)
    {
        $this->alqtIcms = $alqtIcms;

        return $this;
    }

    /**
     * Get alqtIcms.
     *
     * @return int
     */
    public function getAlqtIcms()
    {
        return $this->alqtIcms;
    }

    /**
     * Set recebeBoleto.
     *
     * @param bool|null $recebeBoleto
     *
     * @return Customers2users
     */
    public function setRecebeBoleto($recebeBoleto = null)
    {
        $this->recebeBoleto = $recebeBoleto;

        return $this;
    }

    /**
     * Get recebeBoleto.
     *
     * @return bool|null
     */
    public function getRecebeBoleto()
    {
        return $this->recebeBoleto;
    }

    /**
     * Set cadUser.
     *
     * @param \App\Entity\Gcdb\CadUsers|null $cadUser
     *
     * @return Customers2users
     */
    public function setCadUser(\App\Entity\Gcdb\CadUsers $cadUser = null)
    {
        $this->cadUser = $cadUser;

        return $this;
    }

    /**
     * Get cadUser.
     *
     * @return \App\Entity\Gcdb\CadUsers|null
     */
    public function getCadUser()
    {
        return $this->cadUser;
    }

    /**
     * Set customer.
     *
     * @param \App\Entity\Gcdb\Customers|null $customer
     *
     * @return Customers2users
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
