<?php

namespace App\Entity\Financeiro;

/**
 * ServicoAgregado
 */
class ServicoAgregado
{
    /**
     * @var int
     */
    private $servagreCodigoid;

    /**
     * @var string
     */
    private $servagreNome;

    /**
     * @var bool
     */
    private $servagreAtivo = '1';

    /**
     * @var string
     */
    private $servagreTipo;

    /**
     * @var string
     */
    private $servagreApelido;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $servCodigoid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->servCodigoid = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get servagreCodigoid.
     *
     * @return int
     */
    public function getServagreCodigoid()
    {
        return $this->servagreCodigoid;
    }

    /**
     * Set servagreNome.
     *
     * @param string $servagreNome
     *
     * @return ServicoAgregado
     */
    public function setServagreNome($servagreNome)
    {
        $this->servagreNome = $servagreNome;

        return $this;
    }

    /**
     * Get servagreNome.
     *
     * @return string
     */
    public function getServagreNome()
    {
        return $this->servagreNome;
    }

    /**
     * Set servagreAtivo.
     *
     * @param bool $servagreAtivo
     *
     * @return ServicoAgregado
     */
    public function setServagreAtivo($servagreAtivo)
    {
        $this->servagreAtivo = $servagreAtivo;

        return $this;
    }

    /**
     * Get servagreAtivo.
     *
     * @return bool
     */
    public function getServagreAtivo()
    {
        return $this->servagreAtivo;
    }

    /**
     * Set servagreTipo.
     *
     * @param string $servagreTipo
     *
     * @return ServicoAgregado
     */
    public function setServagreTipo($servagreTipo)
    {
        $this->servagreTipo = $servagreTipo;

        return $this;
    }

    /**
     * Get servagreTipo.
     *
     * @return string
     */
    public function getServagreTipo()
    {
        return $this->servagreTipo;
    }

    /**
     * Set servagreApelido.
     *
     * @param string $servagreApelido
     *
     * @return ServicoAgregado
     */
    public function setServagreApelido($servagreApelido)
    {
        $this->servagreApelido = $servagreApelido;

        return $this;
    }

    /**
     * Get servagreApelido.
     *
     * @return string
     */
    public function getServagreApelido()
    {
        return $this->servagreApelido;
    }

    /**
     * Add servCodigoid.
     *
     * @param \App\Entity\Financeiro\Servico $servCodigoid
     *
     * @return ServicoAgregado
     */
    public function addServCodigoid(\App\Entity\Financeiro\Servico $servCodigoid)
    {
        $this->servCodigoid[] = $servCodigoid;

        return $this;
    }

    /**
     * Remove servCodigoid.
     *
     * @param \App\Entity\Financeiro\Servico $servCodigoid
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeServCodigoid(\App\Entity\Financeiro\Servico $servCodigoid)
    {
        return $this->servCodigoid->removeElement($servCodigoid);
    }

    /**
     * Get servCodigoid.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getServCodigoid()
    {
        return $this->servCodigoid;
    }
}
