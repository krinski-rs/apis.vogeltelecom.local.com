<?php

namespace App\Entity\Financeiro;

/**
 * Bloqueio
 */
class Bloqueio
{
    /**
     * @var int
     */
    private $bloqCodigoid;

    /**
     * @var string|null
     */
    private $bloqAcao;


    /**
     * Get bloqCodigoid.
     *
     * @return int
     */
    public function getBloqCodigoid()
    {
        return $this->bloqCodigoid;
    }

    /**
     * Set bloqAcao.
     *
     * @param string|null $bloqAcao
     *
     * @return Bloqueio
     */
    public function setBloqAcao($bloqAcao = null)
    {
        $this->bloqAcao = $bloqAcao;

        return $this;
    }

    /**
     * Get bloqAcao.
     *
     * @return string|null
     */
    public function getBloqAcao()
    {
        return $this->bloqAcao;
    }
}
