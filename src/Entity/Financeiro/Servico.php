<?php

namespace App\Entity\Financeiro;

/**
 * Servico
 */
class Servico
{
    /**
     * @var int
     */
    private $servCodigoid;

    /**
     * @var string
     */
    private $servNome;

    /**
     * @var string
     */
    private $servDescricao;

    /**
     * @var \DateTime
     */
    private $servDatainc = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     */
    private $servApelido;

    /**
     * @var bool
     */
    private $servDependente;

    /**
     * @var bool
     */
    private $servAtivo = '0';

    /**
     * @var \App\Entity\Financeiro\Gruposervico
     */
    private $grupservCodigoid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $servagreCodigoid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->servagreCodigoid = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get servCodigoid.
     *
     * @return int
     */
    public function getServCodigoid()
    {
        return $this->servCodigoid;
    }

    /**
     * Set servNome.
     *
     * @param string $servNome
     *
     * @return Servico
     */
    public function setServNome($servNome)
    {
        $this->servNome = $servNome;

        return $this;
    }

    /**
     * Get servNome.
     *
     * @return string
     */
    public function getServNome()
    {
        return $this->servNome;
    }

    /**
     * Set servDescricao.
     *
     * @param string $servDescricao
     *
     * @return Servico
     */
    public function setServDescricao($servDescricao)
    {
        $this->servDescricao = $servDescricao;

        return $this;
    }

    /**
     * Get servDescricao.
     *
     * @return string
     */
    public function getServDescricao()
    {
        return $this->servDescricao;
    }

    /**
     * Set servDatainc.
     *
     * @param \DateTime $servDatainc
     *
     * @return Servico
     */
    public function setServDatainc($servDatainc)
    {
        $this->servDatainc = $servDatainc;

        return $this;
    }

    /**
     * Get servDatainc.
     *
     * @return \DateTime
     */
    public function getServDatainc()
    {
        return $this->servDatainc;
    }

    /**
     * Set servApelido.
     *
     * @param string $servApelido
     *
     * @return Servico
     */
    public function setServApelido($servApelido)
    {
        $this->servApelido = $servApelido;

        return $this;
    }

    /**
     * Get servApelido.
     *
     * @return string
     */
    public function getServApelido()
    {
        return $this->servApelido;
    }

    /**
     * Set servDependente.
     *
     * @param bool $servDependente
     *
     * @return Servico
     */
    public function setServDependente($servDependente)
    {
        $this->servDependente = $servDependente;

        return $this;
    }

    /**
     * Get servDependente.
     *
     * @return bool
     */
    public function getServDependente()
    {
        return $this->servDependente;
    }

    /**
     * Set servAtivo.
     *
     * @param bool $servAtivo
     *
     * @return Servico
     */
    public function setServAtivo($servAtivo)
    {
        $this->servAtivo = $servAtivo;

        return $this;
    }

    /**
     * Get servAtivo.
     *
     * @return bool
     */
    public function getServAtivo()
    {
        return $this->servAtivo;
    }

    /**
     * Set grupservCodigoid.
     *
     * @param \App\Entity\Financeiro\Gruposervico|null $grupservCodigoid
     *
     * @return Servico
     */
    public function setGrupservCodigoid(\App\Entity\Financeiro\Gruposervico $grupservCodigoid = null)
    {
        $this->grupservCodigoid = $grupservCodigoid;

        return $this;
    }

    /**
     * Get grupservCodigoid.
     *
     * @return \App\Entity\Financeiro\Gruposervico|null
     */
    public function getGrupservCodigoid()
    {
        return $this->grupservCodigoid;
    }

    /**
     * Add servagreCodigoid.
     *
     * @param \App\Entity\Financeiro\ServicoAgregado $servagreCodigoid
     *
     * @return Servico
     */
    public function addServagreCodigoid(\App\Entity\Financeiro\ServicoAgregado $servagreCodigoid)
    {
        $this->servagreCodigoid[] = $servagreCodigoid;

        return $this;
    }

    /**
     * Remove servagreCodigoid.
     *
     * @param \App\Entity\Financeiro\ServicoAgregado $servagreCodigoid
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeServagreCodigoid(\App\Entity\Financeiro\ServicoAgregado $servagreCodigoid)
    {
        return $this->servagreCodigoid->removeElement($servagreCodigoid);
    }

    /**
     * Get servagreCodigoid.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getServagreCodigoid()
    {
        return $this->servagreCodigoid;
    }
}
