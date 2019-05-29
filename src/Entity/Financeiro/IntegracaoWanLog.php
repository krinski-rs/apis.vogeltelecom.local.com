<?php

namespace App\Entity\Financeiro;

/**
 * IntegracaoWanLog
 */
class IntegracaoWanLog
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int|null
     */
    private $contratoWanId;

    /**
     * @var int|null
     */
    private $customerId;

    /**
     * @var int|null
     */
    private $customerIdWan;

    /**
     * @var bool|null
     */
    private $status;

    /**
     * @var \DateTime|null
     */
    private $dataHoraCriacao = 'CURRENT_TIMESTAMP';

    /**
     * @var string|null
     */
    private $message;

    /**
     * @var \App\Entity\Financeiro\Contrato
     */
    private $contratoVogel;


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
     * Set contratoWanId.
     *
     * @param int|null $contratoWanId
     *
     * @return IntegracaoWanLog
     */
    public function setContratoWanId($contratoWanId = null)
    {
        $this->contratoWanId = $contratoWanId;

        return $this;
    }

    /**
     * Get contratoWanId.
     *
     * @return int|null
     */
    public function getContratoWanId()
    {
        return $this->contratoWanId;
    }

    /**
     * Set customerId.
     *
     * @param int|null $customerId
     *
     * @return IntegracaoWanLog
     */
    public function setCustomerId($customerId = null)
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * Get customerId.
     *
     * @return int|null
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * Set customerIdWan.
     *
     * @param int|null $customerIdWan
     *
     * @return IntegracaoWanLog
     */
    public function setCustomerIdWan($customerIdWan = null)
    {
        $this->customerIdWan = $customerIdWan;

        return $this;
    }

    /**
     * Get customerIdWan.
     *
     * @return int|null
     */
    public function getCustomerIdWan()
    {
        return $this->customerIdWan;
    }

    /**
     * Set status.
     *
     * @param bool|null $status
     *
     * @return IntegracaoWanLog
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
     * Set dataHoraCriacao.
     *
     * @param \DateTime|null $dataHoraCriacao
     *
     * @return IntegracaoWanLog
     */
    public function setDataHoraCriacao($dataHoraCriacao = null)
    {
        $this->dataHoraCriacao = $dataHoraCriacao;

        return $this;
    }

    /**
     * Get dataHoraCriacao.
     *
     * @return \DateTime|null
     */
    public function getDataHoraCriacao()
    {
        return $this->dataHoraCriacao;
    }

    /**
     * Set message.
     *
     * @param string|null $message
     *
     * @return IntegracaoWanLog
     */
    public function setMessage($message = null)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message.
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set contratoVogel.
     *
     * @param \App\Entity\Financeiro\Contrato|null $contratoVogel
     *
     * @return IntegracaoWanLog
     */
    public function setContratoVogel(\App\Entity\Financeiro\Contrato $contratoVogel = null)
    {
        $this->contratoVogel = $contratoVogel;

        return $this;
    }

    /**
     * Get contratoVogel.
     *
     * @return \App\Entity\Financeiro\Contrato|null
     */
    public function getContratoVogel()
    {
        return $this->contratoVogel;
    }
}
