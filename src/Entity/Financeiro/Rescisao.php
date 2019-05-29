<?php

namespace App\Entity\Financeiro;

/**
 * Rescisao
 */
class Rescisao
{
    /**
     * @var int
     */
    private $rescCodigoid;

    /**
     * @var \DateTime
     */
    private $rescDatarecebimento = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     */
    private $rescDatainc = '0000-00-00 00:00:00';

    /**
     * @var \App\Entity\Financeiro\Contrato
     */
    private $contCodigoid;


    /**
     * Get rescCodigoid.
     *
     * @return int
     */
    public function getRescCodigoid()
    {
        return $this->rescCodigoid;
    }

    /**
     * Set rescDatarecebimento.
     *
     * @param \DateTime $rescDatarecebimento
     *
     * @return Rescisao
     */
    public function setRescDatarecebimento($rescDatarecebimento)
    {
        $this->rescDatarecebimento = $rescDatarecebimento;

        return $this;
    }

    /**
     * Get rescDatarecebimento.
     *
     * @return \DateTime
     */
    public function getRescDatarecebimento()
    {
        return $this->rescDatarecebimento;
    }

    /**
     * Set rescDatainc.
     *
     * @param \DateTime $rescDatainc
     *
     * @return Rescisao
     */
    public function setRescDatainc($rescDatainc)
    {
        $this->rescDatainc = $rescDatainc;

        return $this;
    }

    /**
     * Get rescDatainc.
     *
     * @return \DateTime
     */
    public function getRescDatainc()
    {
        return $this->rescDatainc;
    }

    /**
     * Set contCodigoid.
     *
     * @param \App\Entity\Financeiro\Contrato|null $contCodigoid
     *
     * @return Rescisao
     */
    public function setContCodigoid(\App\Entity\Financeiro\Contrato $contCodigoid = null)
    {
        $this->contCodigoid = $contCodigoid;

        return $this;
    }

    /**
     * Get contCodigoid.
     *
     * @return \App\Entity\Financeiro\Contrato|null
     */
    public function getContCodigoid()
    {
        return $this->contCodigoid;
    }
}
