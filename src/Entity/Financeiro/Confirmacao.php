<?php

namespace App\Entity\Financeiro;

/**
 * Confirmacao
 */
class Confirmacao
{
    /**
     * @var int
     */
    private $confCodigoid;

    /**
     * @var string
     */
    private $confTipo;

    /**
     * @var \DateTime
     */
    private $confDatainc = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     */
    private $confDataconfi = '0000-00-00 00:00:00';

    /**
     * @var int
     */
    private $usuaCodigoid;

    /**
     * @var bool
     */
    private $confCiente;

    /**
     * @var string|null
     */
    private $confJustificativa;

    /**
     * @var string|null
     */
    private $confContato;

    /**
     * @var \App\Entity\Financeiro\Ativacao
     */
    private $ativCodigoid;


    /**
     * Get confCodigoid.
     *
     * @return int
     */
    public function getConfCodigoid()
    {
        return $this->confCodigoid;
    }

    /**
     * Set confTipo.
     *
     * @param string $confTipo
     *
     * @return Confirmacao
     */
    public function setConfTipo($confTipo)
    {
        $this->confTipo = $confTipo;

        return $this;
    }

    /**
     * Get confTipo.
     *
     * @return string
     */
    public function getConfTipo()
    {
        return $this->confTipo;
    }

    /**
     * Set confDatainc.
     *
     * @param \DateTime $confDatainc
     *
     * @return Confirmacao
     */
    public function setConfDatainc($confDatainc)
    {
        $this->confDatainc = $confDatainc;

        return $this;
    }

    /**
     * Get confDatainc.
     *
     * @return \DateTime
     */
    public function getConfDatainc()
    {
        return $this->confDatainc;
    }

    /**
     * Set confDataconfi.
     *
     * @param \DateTime $confDataconfi
     *
     * @return Confirmacao
     */
    public function setConfDataconfi($confDataconfi)
    {
        $this->confDataconfi = $confDataconfi;

        return $this;
    }

    /**
     * Get confDataconfi.
     *
     * @return \DateTime
     */
    public function getConfDataconfi()
    {
        return $this->confDataconfi;
    }

    /**
     * Set usuaCodigoid.
     *
     * @param int $usuaCodigoid
     *
     * @return Confirmacao
     */
    public function setUsuaCodigoid($usuaCodigoid)
    {
        $this->usuaCodigoid = $usuaCodigoid;

        return $this;
    }

    /**
     * Get usuaCodigoid.
     *
     * @return int
     */
    public function getUsuaCodigoid()
    {
        return $this->usuaCodigoid;
    }

    /**
     * Set confCiente.
     *
     * @param bool $confCiente
     *
     * @return Confirmacao
     */
    public function setConfCiente($confCiente)
    {
        $this->confCiente = $confCiente;

        return $this;
    }

    /**
     * Get confCiente.
     *
     * @return bool
     */
    public function getConfCiente()
    {
        return $this->confCiente;
    }

    /**
     * Set confJustificativa.
     *
     * @param string|null $confJustificativa
     *
     * @return Confirmacao
     */
    public function setConfJustificativa($confJustificativa = null)
    {
        $this->confJustificativa = $confJustificativa;

        return $this;
    }

    /**
     * Get confJustificativa.
     *
     * @return string|null
     */
    public function getConfJustificativa()
    {
        return $this->confJustificativa;
    }

    /**
     * Set confContato.
     *
     * @param string|null $confContato
     *
     * @return Confirmacao
     */
    public function setConfContato($confContato = null)
    {
        $this->confContato = $confContato;

        return $this;
    }

    /**
     * Get confContato.
     *
     * @return string|null
     */
    public function getConfContato()
    {
        return $this->confContato;
    }

    /**
     * Set ativCodigoid.
     *
     * @param \App\Entity\Financeiro\Ativacao|null $ativCodigoid
     *
     * @return Confirmacao
     */
    public function setAtivCodigoid(\App\Entity\Financeiro\Ativacao $ativCodigoid = null)
    {
        $this->ativCodigoid = $ativCodigoid;

        return $this;
    }

    /**
     * Get ativCodigoid.
     *
     * @return \App\Entity\Financeiro\Ativacao|null
     */
    public function getAtivCodigoid()
    {
        return $this->ativCodigoid;
    }
}
