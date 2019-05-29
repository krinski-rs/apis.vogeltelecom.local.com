<?php

namespace App\Entity\Financeiro;

/**
 * Impostoscontrato
 */
class Impostoscontrato
{
    /**
     * @var int
     */
    private $impocontCodigoid;

    /**
     * @var bool
     */
    private $impocontPisReter;

    /**
     * @var bool
     */
    private $impocontPisDestacar;

    /**
     * @var string
     */
    private $impocontPisValor;

    /**
     * @var string|null
     */
    private $impocontPisReducao;

    /**
     * @var bool
     */
    private $impocontCofinsReter;

    /**
     * @var bool
     */
    private $impocontCofinsDestacar;

    /**
     * @var string
     */
    private $impocontCofinsValor;

    /**
     * @var string|null
     */
    private $impocontCofinsReducao;

    /**
     * @var bool
     */
    private $impocontIrReter;

    /**
     * @var bool
     */
    private $impocontIrDestacar;

    /**
     * @var string
     */
    private $impocontIrValor;

    /**
     * @var string|null
     */
    private $impocontIrReducao;

    /**
     * @var bool
     */
    private $impocontIsllReter;

    /**
     * @var bool
     */
    private $impocontIsllDestacar;

    /**
     * @var string
     */
    private $impocontIsllValor;

    /**
     * @var string|null
     */
    private $impocontIsllReducao;

    /**
     * @var bool
     */
    private $impocontIssqnReter;

    /**
     * @var bool
     */
    private $impocontIssqnDestacar;

    /**
     * @var string
     */
    private $impocontIssqnValor;

    /**
     * @var string|null
     */
    private $impocontIssqnReducao;

    /**
     * @var bool
     */
    private $impocontIcmsReter;

    /**
     * @var bool
     */
    private $impocontIcmsDestacar;

    /**
     * @var string
     */
    private $impocontIcmsValor;

    /**
     * @var string|null
     */
    private $impocontIcmsReducao;

    /**
     * @var string|null
     */
    private $ativPisValor;

    /**
     * @var bool|null
     */
    private $ativPisReter;

    /**
     * @var string|null
     */
    private $ativCofinsValor;

    /**
     * @var bool|null
     */
    private $ativCofinsReter;

    /**
     * @var string|null
     */
    private $ativIrValor;

    /**
     * @var bool|null
     */
    private $ativIrReter;

    /**
     * @var string|null
     */
    private $ativCsllValor;

    /**
     * @var bool|null
     */
    private $ativCsllReter;

    /**
     * @var string|null
     */
    private $ativIssqnValor;

    /**
     * @var bool|null
     */
    private $ativIssqnReter;

    /**
     * @var \App\Entity\Financeiro\Contrato
     */
    private $contCodigoid;


    /**
     * Get impocontCodigoid.
     *
     * @return int
     */
    public function getImpocontCodigoid()
    {
        return $this->impocontCodigoid;
    }

    /**
     * Set impocontPisReter.
     *
     * @param bool $impocontPisReter
     *
     * @return Impostoscontrato
     */
    public function setImpocontPisReter($impocontPisReter)
    {
        $this->impocontPisReter = $impocontPisReter;

        return $this;
    }

    /**
     * Get impocontPisReter.
     *
     * @return bool
     */
    public function getImpocontPisReter()
    {
        return $this->impocontPisReter;
    }

    /**
     * Set impocontPisDestacar.
     *
     * @param bool $impocontPisDestacar
     *
     * @return Impostoscontrato
     */
    public function setImpocontPisDestacar($impocontPisDestacar)
    {
        $this->impocontPisDestacar = $impocontPisDestacar;

        return $this;
    }

    /**
     * Get impocontPisDestacar.
     *
     * @return bool
     */
    public function getImpocontPisDestacar()
    {
        return $this->impocontPisDestacar;
    }

    /**
     * Set impocontPisValor.
     *
     * @param string $impocontPisValor
     *
     * @return Impostoscontrato
     */
    public function setImpocontPisValor($impocontPisValor)
    {
        $this->impocontPisValor = $impocontPisValor;

        return $this;
    }

    /**
     * Get impocontPisValor.
     *
     * @return string
     */
    public function getImpocontPisValor()
    {
        return $this->impocontPisValor;
    }

    /**
     * Set impocontPisReducao.
     *
     * @param string|null $impocontPisReducao
     *
     * @return Impostoscontrato
     */
    public function setImpocontPisReducao($impocontPisReducao = null)
    {
        $this->impocontPisReducao = $impocontPisReducao;

        return $this;
    }

    /**
     * Get impocontPisReducao.
     *
     * @return string|null
     */
    public function getImpocontPisReducao()
    {
        return $this->impocontPisReducao;
    }

    /**
     * Set impocontCofinsReter.
     *
     * @param bool $impocontCofinsReter
     *
     * @return Impostoscontrato
     */
    public function setImpocontCofinsReter($impocontCofinsReter)
    {
        $this->impocontCofinsReter = $impocontCofinsReter;

        return $this;
    }

    /**
     * Get impocontCofinsReter.
     *
     * @return bool
     */
    public function getImpocontCofinsReter()
    {
        return $this->impocontCofinsReter;
    }

    /**
     * Set impocontCofinsDestacar.
     *
     * @param bool $impocontCofinsDestacar
     *
     * @return Impostoscontrato
     */
    public function setImpocontCofinsDestacar($impocontCofinsDestacar)
    {
        $this->impocontCofinsDestacar = $impocontCofinsDestacar;

        return $this;
    }

    /**
     * Get impocontCofinsDestacar.
     *
     * @return bool
     */
    public function getImpocontCofinsDestacar()
    {
        return $this->impocontCofinsDestacar;
    }

    /**
     * Set impocontCofinsValor.
     *
     * @param string $impocontCofinsValor
     *
     * @return Impostoscontrato
     */
    public function setImpocontCofinsValor($impocontCofinsValor)
    {
        $this->impocontCofinsValor = $impocontCofinsValor;

        return $this;
    }

    /**
     * Get impocontCofinsValor.
     *
     * @return string
     */
    public function getImpocontCofinsValor()
    {
        return $this->impocontCofinsValor;
    }

    /**
     * Set impocontCofinsReducao.
     *
     * @param string|null $impocontCofinsReducao
     *
     * @return Impostoscontrato
     */
    public function setImpocontCofinsReducao($impocontCofinsReducao = null)
    {
        $this->impocontCofinsReducao = $impocontCofinsReducao;

        return $this;
    }

    /**
     * Get impocontCofinsReducao.
     *
     * @return string|null
     */
    public function getImpocontCofinsReducao()
    {
        return $this->impocontCofinsReducao;
    }

    /**
     * Set impocontIrReter.
     *
     * @param bool $impocontIrReter
     *
     * @return Impostoscontrato
     */
    public function setImpocontIrReter($impocontIrReter)
    {
        $this->impocontIrReter = $impocontIrReter;

        return $this;
    }

    /**
     * Get impocontIrReter.
     *
     * @return bool
     */
    public function getImpocontIrReter()
    {
        return $this->impocontIrReter;
    }

    /**
     * Set impocontIrDestacar.
     *
     * @param bool $impocontIrDestacar
     *
     * @return Impostoscontrato
     */
    public function setImpocontIrDestacar($impocontIrDestacar)
    {
        $this->impocontIrDestacar = $impocontIrDestacar;

        return $this;
    }

    /**
     * Get impocontIrDestacar.
     *
     * @return bool
     */
    public function getImpocontIrDestacar()
    {
        return $this->impocontIrDestacar;
    }

    /**
     * Set impocontIrValor.
     *
     * @param string $impocontIrValor
     *
     * @return Impostoscontrato
     */
    public function setImpocontIrValor($impocontIrValor)
    {
        $this->impocontIrValor = $impocontIrValor;

        return $this;
    }

    /**
     * Get impocontIrValor.
     *
     * @return string
     */
    public function getImpocontIrValor()
    {
        return $this->impocontIrValor;
    }

    /**
     * Set impocontIrReducao.
     *
     * @param string|null $impocontIrReducao
     *
     * @return Impostoscontrato
     */
    public function setImpocontIrReducao($impocontIrReducao = null)
    {
        $this->impocontIrReducao = $impocontIrReducao;

        return $this;
    }

    /**
     * Get impocontIrReducao.
     *
     * @return string|null
     */
    public function getImpocontIrReducao()
    {
        return $this->impocontIrReducao;
    }

    /**
     * Set impocontIsllReter.
     *
     * @param bool $impocontIsllReter
     *
     * @return Impostoscontrato
     */
    public function setImpocontIsllReter($impocontIsllReter)
    {
        $this->impocontIsllReter = $impocontIsllReter;

        return $this;
    }

    /**
     * Get impocontIsllReter.
     *
     * @return bool
     */
    public function getImpocontIsllReter()
    {
        return $this->impocontIsllReter;
    }

    /**
     * Set impocontIsllDestacar.
     *
     * @param bool $impocontIsllDestacar
     *
     * @return Impostoscontrato
     */
    public function setImpocontIsllDestacar($impocontIsllDestacar)
    {
        $this->impocontIsllDestacar = $impocontIsllDestacar;

        return $this;
    }

    /**
     * Get impocontIsllDestacar.
     *
     * @return bool
     */
    public function getImpocontIsllDestacar()
    {
        return $this->impocontIsllDestacar;
    }

    /**
     * Set impocontIsllValor.
     *
     * @param string $impocontIsllValor
     *
     * @return Impostoscontrato
     */
    public function setImpocontIsllValor($impocontIsllValor)
    {
        $this->impocontIsllValor = $impocontIsllValor;

        return $this;
    }

    /**
     * Get impocontIsllValor.
     *
     * @return string
     */
    public function getImpocontIsllValor()
    {
        return $this->impocontIsllValor;
    }

    /**
     * Set impocontIsllReducao.
     *
     * @param string|null $impocontIsllReducao
     *
     * @return Impostoscontrato
     */
    public function setImpocontIsllReducao($impocontIsllReducao = null)
    {
        $this->impocontIsllReducao = $impocontIsllReducao;

        return $this;
    }

    /**
     * Get impocontIsllReducao.
     *
     * @return string|null
     */
    public function getImpocontIsllReducao()
    {
        return $this->impocontIsllReducao;
    }

    /**
     * Set impocontIssqnReter.
     *
     * @param bool $impocontIssqnReter
     *
     * @return Impostoscontrato
     */
    public function setImpocontIssqnReter($impocontIssqnReter)
    {
        $this->impocontIssqnReter = $impocontIssqnReter;

        return $this;
    }

    /**
     * Get impocontIssqnReter.
     *
     * @return bool
     */
    public function getImpocontIssqnReter()
    {
        return $this->impocontIssqnReter;
    }

    /**
     * Set impocontIssqnDestacar.
     *
     * @param bool $impocontIssqnDestacar
     *
     * @return Impostoscontrato
     */
    public function setImpocontIssqnDestacar($impocontIssqnDestacar)
    {
        $this->impocontIssqnDestacar = $impocontIssqnDestacar;

        return $this;
    }

    /**
     * Get impocontIssqnDestacar.
     *
     * @return bool
     */
    public function getImpocontIssqnDestacar()
    {
        return $this->impocontIssqnDestacar;
    }

    /**
     * Set impocontIssqnValor.
     *
     * @param string $impocontIssqnValor
     *
     * @return Impostoscontrato
     */
    public function setImpocontIssqnValor($impocontIssqnValor)
    {
        $this->impocontIssqnValor = $impocontIssqnValor;

        return $this;
    }

    /**
     * Get impocontIssqnValor.
     *
     * @return string
     */
    public function getImpocontIssqnValor()
    {
        return $this->impocontIssqnValor;
    }

    /**
     * Set impocontIssqnReducao.
     *
     * @param string|null $impocontIssqnReducao
     *
     * @return Impostoscontrato
     */
    public function setImpocontIssqnReducao($impocontIssqnReducao = null)
    {
        $this->impocontIssqnReducao = $impocontIssqnReducao;

        return $this;
    }

    /**
     * Get impocontIssqnReducao.
     *
     * @return string|null
     */
    public function getImpocontIssqnReducao()
    {
        return $this->impocontIssqnReducao;
    }

    /**
     * Set impocontIcmsReter.
     *
     * @param bool $impocontIcmsReter
     *
     * @return Impostoscontrato
     */
    public function setImpocontIcmsReter($impocontIcmsReter)
    {
        $this->impocontIcmsReter = $impocontIcmsReter;

        return $this;
    }

    /**
     * Get impocontIcmsReter.
     *
     * @return bool
     */
    public function getImpocontIcmsReter()
    {
        return $this->impocontIcmsReter;
    }

    /**
     * Set impocontIcmsDestacar.
     *
     * @param bool $impocontIcmsDestacar
     *
     * @return Impostoscontrato
     */
    public function setImpocontIcmsDestacar($impocontIcmsDestacar)
    {
        $this->impocontIcmsDestacar = $impocontIcmsDestacar;

        return $this;
    }

    /**
     * Get impocontIcmsDestacar.
     *
     * @return bool
     */
    public function getImpocontIcmsDestacar()
    {
        return $this->impocontIcmsDestacar;
    }

    /**
     * Set impocontIcmsValor.
     *
     * @param string $impocontIcmsValor
     *
     * @return Impostoscontrato
     */
    public function setImpocontIcmsValor($impocontIcmsValor)
    {
        $this->impocontIcmsValor = $impocontIcmsValor;

        return $this;
    }

    /**
     * Get impocontIcmsValor.
     *
     * @return string
     */
    public function getImpocontIcmsValor()
    {
        return $this->impocontIcmsValor;
    }

    /**
     * Set impocontIcmsReducao.
     *
     * @param string|null $impocontIcmsReducao
     *
     * @return Impostoscontrato
     */
    public function setImpocontIcmsReducao($impocontIcmsReducao = null)
    {
        $this->impocontIcmsReducao = $impocontIcmsReducao;

        return $this;
    }

    /**
     * Get impocontIcmsReducao.
     *
     * @return string|null
     */
    public function getImpocontIcmsReducao()
    {
        return $this->impocontIcmsReducao;
    }

    /**
     * Set ativPisValor.
     *
     * @param string|null $ativPisValor
     *
     * @return Impostoscontrato
     */
    public function setAtivPisValor($ativPisValor = null)
    {
        $this->ativPisValor = $ativPisValor;

        return $this;
    }

    /**
     * Get ativPisValor.
     *
     * @return string|null
     */
    public function getAtivPisValor()
    {
        return $this->ativPisValor;
    }

    /**
     * Set ativPisReter.
     *
     * @param bool|null $ativPisReter
     *
     * @return Impostoscontrato
     */
    public function setAtivPisReter($ativPisReter = null)
    {
        $this->ativPisReter = $ativPisReter;

        return $this;
    }

    /**
     * Get ativPisReter.
     *
     * @return bool|null
     */
    public function getAtivPisReter()
    {
        return $this->ativPisReter;
    }

    /**
     * Set ativCofinsValor.
     *
     * @param string|null $ativCofinsValor
     *
     * @return Impostoscontrato
     */
    public function setAtivCofinsValor($ativCofinsValor = null)
    {
        $this->ativCofinsValor = $ativCofinsValor;

        return $this;
    }

    /**
     * Get ativCofinsValor.
     *
     * @return string|null
     */
    public function getAtivCofinsValor()
    {
        return $this->ativCofinsValor;
    }

    /**
     * Set ativCofinsReter.
     *
     * @param bool|null $ativCofinsReter
     *
     * @return Impostoscontrato
     */
    public function setAtivCofinsReter($ativCofinsReter = null)
    {
        $this->ativCofinsReter = $ativCofinsReter;

        return $this;
    }

    /**
     * Get ativCofinsReter.
     *
     * @return bool|null
     */
    public function getAtivCofinsReter()
    {
        return $this->ativCofinsReter;
    }

    /**
     * Set ativIrValor.
     *
     * @param string|null $ativIrValor
     *
     * @return Impostoscontrato
     */
    public function setAtivIrValor($ativIrValor = null)
    {
        $this->ativIrValor = $ativIrValor;

        return $this;
    }

    /**
     * Get ativIrValor.
     *
     * @return string|null
     */
    public function getAtivIrValor()
    {
        return $this->ativIrValor;
    }

    /**
     * Set ativIrReter.
     *
     * @param bool|null $ativIrReter
     *
     * @return Impostoscontrato
     */
    public function setAtivIrReter($ativIrReter = null)
    {
        $this->ativIrReter = $ativIrReter;

        return $this;
    }

    /**
     * Get ativIrReter.
     *
     * @return bool|null
     */
    public function getAtivIrReter()
    {
        return $this->ativIrReter;
    }

    /**
     * Set ativCsllValor.
     *
     * @param string|null $ativCsllValor
     *
     * @return Impostoscontrato
     */
    public function setAtivCsllValor($ativCsllValor = null)
    {
        $this->ativCsllValor = $ativCsllValor;

        return $this;
    }

    /**
     * Get ativCsllValor.
     *
     * @return string|null
     */
    public function getAtivCsllValor()
    {
        return $this->ativCsllValor;
    }

    /**
     * Set ativCsllReter.
     *
     * @param bool|null $ativCsllReter
     *
     * @return Impostoscontrato
     */
    public function setAtivCsllReter($ativCsllReter = null)
    {
        $this->ativCsllReter = $ativCsllReter;

        return $this;
    }

    /**
     * Get ativCsllReter.
     *
     * @return bool|null
     */
    public function getAtivCsllReter()
    {
        return $this->ativCsllReter;
    }

    /**
     * Set ativIssqnValor.
     *
     * @param string|null $ativIssqnValor
     *
     * @return Impostoscontrato
     */
    public function setAtivIssqnValor($ativIssqnValor = null)
    {
        $this->ativIssqnValor = $ativIssqnValor;

        return $this;
    }

    /**
     * Get ativIssqnValor.
     *
     * @return string|null
     */
    public function getAtivIssqnValor()
    {
        return $this->ativIssqnValor;
    }

    /**
     * Set ativIssqnReter.
     *
     * @param bool|null $ativIssqnReter
     *
     * @return Impostoscontrato
     */
    public function setAtivIssqnReter($ativIssqnReter = null)
    {
        $this->ativIssqnReter = $ativIssqnReter;

        return $this;
    }

    /**
     * Get ativIssqnReter.
     *
     * @return bool|null
     */
    public function getAtivIssqnReter()
    {
        return $this->ativIssqnReter;
    }

    /**
     * Set contCodigoid.
     *
     * @param \App\Entity\Financeiro\Contrato|null $contCodigoid
     *
     * @return Impostoscontrato
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
