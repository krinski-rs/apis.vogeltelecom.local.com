<?php

namespace App\Entity\Cep;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * LogBairro
 */
class LogBairro
{
    /**
     * @var int
     */
    private $baiNuSequencial;

    /**
     * @var string
     */
    private $ufeSg;

    /**
     * @var string
     */
    private $baiNo;

    /**
     * @var string|null
     */
    private $baiNoAbrev;

    /**
     * @var \App\Entity\Cep\LogLocalidade
     */
    private $logLocalidade;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $logGrandeUsuario;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $logLogradouro;
    
    public function __construct() {
        $this->logGrandeUsuario = new ArrayCollection();
        $this->logLogradouro = new ArrayCollection();
    }
    
    /**
     * Get baiNuSequencial.
     *
     * @return int
     */
    public function getBaiNuSequencial()
    {
        return $this->baiNuSequencial;
    }

    /**
     * Set ufeSg.
     *
     * @param string $ufeSg
     *
     * @return LogBairro
     */
    public function setUfeSg($ufeSg)
    {
        $this->ufeSg = $ufeSg;

        return $this;
    }

    /**
     * Get ufeSg.
     *
     * @return string
     */
    public function getUfeSg()
    {
        return $this->ufeSg;
    }

    /**
     * Set baiNo.
     *
     * @param string $baiNo
     *
     * @return LogBairro
     */
    public function setBaiNo($baiNo)
    {
        $this->baiNo = $baiNo;

        return $this;
    }

    /**
     * Get baiNo.
     *
     * @return string
     */
    public function getBaiNo()
    {
        return $this->baiNo;
    }

    /**
     * Set baiNoAbrev.
     *
     * @param string|null $baiNoAbrev
     *
     * @return LogBairro
     */
    public function setBaiNoAbrev($baiNoAbrev = null)
    {
        $this->baiNoAbrev = $baiNoAbrev;

        return $this;
    }

    /**
     * Get baiNoAbrev.
     *
     * @return string|null
     */
    public function getBaiNoAbrev()
    {
        return $this->baiNoAbrev;
    }

    /**
     * Set logLocalidade.
     *
     * @param \App\Entity\Cep\LogLocalidade|null $logLocalidade
     *
     * @return LogBairro
     */
    public function setLogLocalidade(\App\Entity\Cep\LogLocalidade $logLocalidade = null)
    {
        $this->logLocalidade = $logLocalidade;

        return $this;
    }

    /**
     * Get logLocalidade.
     *
     * @return \App\Entity\Cep\LogLocalidade|null
     */
    public function getLogLocalidade()
    {
        return $this->logLocalidade;
    }
    
    /**
     * Add logGrandeUsuario.
     *
     * @param \App\Entity\Cep\LogGrandeUsuario|null $logGrandeUsuario
     *
     * @return LogBairro
     */
    public function addLogBairro(\App\Entity\Cep\LogGrandeUsuario $logGrandeUsuario = null)
    {
        $this->logGrandeUsuario[] = $logGrandeUsuario;
        
        return $this;
    }
    
    /**
     * Remove logGrandeUsuario.
     *
     * @param \App\Entity\Cep\LogGrandeUsuario|null $logGrandeUsuario
     *
     * @return LogBairro
     */
    public function removeLogBairro(\App\Entity\Cep\LogGrandeUsuario $logGrandeUsuario = null)
    {
        $this->logGrandeUsuario->removeElement($logGrandeUsuario);
        
        return $this;
    }
    
    /**
     * Get logGrandeUsuario.
     *
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getLogBairro()
    {
        return $this->logGrandeUsuario;
    }
    
    /**
     * Add logLogradouro.
     *
     * @param \App\Entity\Cep\LogLogradouro|null $logLogradouro
     *
     * @return LogBairro
     */
    public function addLogLogradouro(\App\Entity\Cep\LogLogradouro $logLogradouro = null)
    {
        $this->logLogradouro[] = $logLogradouro;
        
        return $this;
    }
    
    /**
     * Remove logLogradouro.
     *
     * @param \App\Entity\Cep\LogLogradouro|null $logLogradouro
     *
     * @return LogBairro
     */
    public function removeLogLogradouro(\App\Entity\Cep\LogLogradouro $logLogradouro = null)
    {
        $this->logLogradouro->removeElement($logLogradouro);
        
        return $this;
    }
    
    /**
     * Get logLogradouro.
     *
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getLogLogradouro()
    {
        return $this->logLogradouro;
    }
}
