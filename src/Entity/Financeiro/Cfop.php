<?php

namespace App\Entity\Financeiro;

/**
 * Cfop
 */
class Cfop
{
    /**
     * @var int
     */
    private $cfopCodigoid;

    /**
     * @var int|null
     */
    private $cfopPaicodigoid;

    /**
     * @var string
     */
    private $cfopCfop;

    /**
     * @var string
     */
    private $cfopDescricao;

    /**
     * @var string|null
     */
    private $cfopAplicacao;


    /**
     * Get cfopCodigoid.
     *
     * @return int
     */
    public function getCfopCodigoid()
    {
        return $this->cfopCodigoid;
    }

    /**
     * Set cfopPaicodigoid.
     *
     * @param int|null $cfopPaicodigoid
     *
     * @return Cfop
     */
    public function setCfopPaicodigoid($cfopPaicodigoid = null)
    {
        $this->cfopPaicodigoid = $cfopPaicodigoid;

        return $this;
    }

    /**
     * Get cfopPaicodigoid.
     *
     * @return int|null
     */
    public function getCfopPaicodigoid()
    {
        return $this->cfopPaicodigoid;
    }

    /**
     * Set cfopCfop.
     *
     * @param string $cfopCfop
     *
     * @return Cfop
     */
    public function setCfopCfop($cfopCfop)
    {
        $this->cfopCfop = $cfopCfop;

        return $this;
    }

    /**
     * Get cfopCfop.
     *
     * @return string
     */
    public function getCfopCfop()
    {
        return $this->cfopCfop;
    }

    /**
     * Set cfopDescricao.
     *
     * @param string $cfopDescricao
     *
     * @return Cfop
     */
    public function setCfopDescricao($cfopDescricao)
    {
        $this->cfopDescricao = $cfopDescricao;

        return $this;
    }

    /**
     * Get cfopDescricao.
     *
     * @return string
     */
    public function getCfopDescricao()
    {
        return $this->cfopDescricao;
    }

    /**
     * Set cfopAplicacao.
     *
     * @param string|null $cfopAplicacao
     *
     * @return Cfop
     */
    public function setCfopAplicacao($cfopAplicacao = null)
    {
        $this->cfopAplicacao = $cfopAplicacao;

        return $this;
    }

    /**
     * Get cfopAplicacao.
     *
     * @return string|null
     */
    public function getCfopAplicacao()
    {
        return $this->cfopAplicacao;
    }
}
