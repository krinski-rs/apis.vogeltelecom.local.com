<?php

namespace App\Entity\Gcdb;

/**
 * CadUsersSegmento
 */
class CadUsersSegmento
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $descricao;


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
     * Set descricao.
     *
     * @param string $descricao
     *
     * @return CadUsersSegmento
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get descricao.
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }
}
