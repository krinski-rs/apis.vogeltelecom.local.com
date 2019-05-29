<?php

namespace App\Entity\Financeiro;

/**
 * Contratoproposta
 */
class Contratoproposta
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $idproposal;

    /**
     * @var int
     */
    private $idcontrato;


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
     * Set idproposal.
     *
     * @param int $idproposal
     *
     * @return Contratoproposta
     */
    public function setIdproposal($idproposal)
    {
        $this->idproposal = $idproposal;

        return $this;
    }

    /**
     * Get idproposal.
     *
     * @return int
     */
    public function getIdproposal()
    {
        return $this->idproposal;
    }

    /**
     * Set idcontrato.
     *
     * @param int $idcontrato
     *
     * @return Contratoproposta
     */
    public function setIdcontrato($idcontrato)
    {
        $this->idcontrato = $idcontrato;

        return $this;
    }

    /**
     * Get idcontrato.
     *
     * @return int
     */
    public function getIdcontrato()
    {
        return $this->idcontrato;
    }
}
