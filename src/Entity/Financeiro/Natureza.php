<?php

namespace App\Entity\Financeiro;

/**
 * Natureza
 */
class Natureza
{
    /**
     * @var int
     */
    private $natuCodigoid;

    /**
     * @var string
     */
    private $natuDescricao;


    /**
     * Get natuCodigoid.
     *
     * @return int
     */
    public function getNatuCodigoid()
    {
        return $this->natuCodigoid;
    }

    /**
     * Set natuDescricao.
     *
     * @param string $natuDescricao
     *
     * @return Natureza
     */
    public function setNatuDescricao($natuDescricao)
    {
        $this->natuDescricao = $natuDescricao;

        return $this;
    }

    /**
     * Get natuDescricao.
     *
     * @return string
     */
    public function getNatuDescricao()
    {
        return $this->natuDescricao;
    }
}
