<?php

namespace App\Entity\Gcdb;

/**
 * CadUsers
 */
class CadUsers
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int|null
     */
    private $cnpj;

    /**
     * @var int|null
     */
    private $cpf;

    /**
     * @var string|null
     */
    private $inscEst;

    /**
     * @var string|null
     */
    private $inscMun;

    /**
     * @var string|null
     */
    private $senha;

    /**
     * @var \DateTime|null
     */
    private $dtAbertura;

    /**
     * @var string|null
     */
    private $cep;

    /**
     * @var string|null
     */
    private $endereco;

    /**
     * @var string|null
     */
    private $numero;

    /**
     * @var string|null
     */
    private $bairro;

    /**
     * @var string|null
     */
    private $site;

    /**
     * @var \DateTime|null
     */
    private $dtCadastro;

    /**
     * @var string|null
     */
    private $tipo;

    /**
     * @var int|null
     */
    private $qtfoto;

    /**
     * @var string|null
     */
    private $latitude;

    /**
     * @var string|null
     */
    private $longitude;

    /**
     * @var int|null
     */
    private $simples;

    /**
     * @var string|null
     */
    private $hashAcesso;

    /**
     * @var \DateTime|null
     */
    private $hashDatainc;

    /**
     * @var string|null
     */
    private $atividadeRamo;

    /**
     * @var string|null
     */
    private $tipoCliente;

    /**
     * @var int|null
     */
    private $cadOrigemContato;

    /**
     * @var bool
     */
    private $integrado = '0';

    /**
     * @var \DateTime|null
     */
    private $dtIntegrado;

    /**
     * @var int|null
     */
    private $erroIntegracao = '0';

    /**
     * @var string|null
     */
    private $msgErroIntegracao;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $customers2users;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $cadUsersEmail;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $cadUsersNome;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $CadUsersSite;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $CadUsersTelefone;

    /**
     * @var \App\Entity\Gcdb\AdmLogradouro
     */
    private $admLogradouro;

    /**
     * @var \App\Entity\Gcdb\AdmPais
     */
    private $admPais;

    /**
     * @var \App\Entity\Gcdb\AdmUf
     */
    private $admUf;

    /**
     * @var \App\Entity\Gcdb\AdmCidades
     */
    private $admCidades;

    /**
     * @var \App\Entity\Gcdb\CadUsersSegmento
     */
    private $segmento;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->customers2users = new \Doctrine\Common\Collections\ArrayCollection();
        $this->cadUsersEmail = new \Doctrine\Common\Collections\ArrayCollection();
        $this->cadUsersNome = new \Doctrine\Common\Collections\ArrayCollection();
        $this->CadUsersSite = new \Doctrine\Common\Collections\ArrayCollection();
        $this->CadUsersTelefone = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set cnpj.
     *
     * @param int|null $cnpj
     *
     * @return CadUsers
     */
    public function setCnpj($cnpj = null)
    {
        $this->cnpj = $cnpj;

        return $this;
    }

    /**
     * Get cnpj.
     *
     * @return int|null
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * Set cpf.
     *
     * @param int|null $cpf
     *
     * @return CadUsers
     */
    public function setCpf($cpf = null)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get cpf.
     *
     * @return int|null
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set inscEst.
     *
     * @param string|null $inscEst
     *
     * @return CadUsers
     */
    public function setInscEst($inscEst = null)
    {
        $this->inscEst = $inscEst;

        return $this;
    }

    /**
     * Get inscEst.
     *
     * @return string|null
     */
    public function getInscEst()
    {
        return $this->inscEst;
    }

    /**
     * Set inscMun.
     *
     * @param string|null $inscMun
     *
     * @return CadUsers
     */
    public function setInscMun($inscMun = null)
    {
        $this->inscMun = $inscMun;

        return $this;
    }

    /**
     * Get inscMun.
     *
     * @return string|null
     */
    public function getInscMun()
    {
        return $this->inscMun;
    }

    /**
     * Set senha.
     *
     * @param string|null $senha
     *
     * @return CadUsers
     */
    public function setSenha($senha = null)
    {
        $this->senha = $senha;

        return $this;
    }

    /**
     * Get senha.
     *
     * @return string|null
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Set dtAbertura.
     *
     * @param \DateTime|null $dtAbertura
     *
     * @return CadUsers
     */
    public function setDtAbertura($dtAbertura = null)
    {
        $this->dtAbertura = $dtAbertura;

        return $this;
    }

    /**
     * Get dtAbertura.
     *
     * @return \DateTime|null
     */
    public function getDtAbertura()
    {
        return $this->dtAbertura;
    }

    /**
     * Set cep.
     *
     * @param string|null $cep
     *
     * @return CadUsers
     */
    public function setCep($cep = null)
    {
        $this->cep = $cep;

        return $this;
    }

    /**
     * Get cep.
     *
     * @return string|null
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * Set endereco.
     *
     * @param string|null $endereco
     *
     * @return CadUsers
     */
    public function setEndereco($endereco = null)
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Get endereco.
     *
     * @return string|null
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set numero.
     *
     * @param string|null $numero
     *
     * @return CadUsers
     */
    public function setNumero($numero = null)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero.
     *
     * @return string|null
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set bairro.
     *
     * @param string|null $bairro
     *
     * @return CadUsers
     */
    public function setBairro($bairro = null)
    {
        $this->bairro = $bairro;

        return $this;
    }

    /**
     * Get bairro.
     *
     * @return string|null
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * Set site.
     *
     * @param string|null $site
     *
     * @return CadUsers
     */
    public function setSite($site = null)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site.
     *
     * @return string|null
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Set dtCadastro.
     *
     * @param \DateTime|null $dtCadastro
     *
     * @return CadUsers
     */
    public function setDtCadastro($dtCadastro = null)
    {
        $this->dtCadastro = $dtCadastro;

        return $this;
    }

    /**
     * Get dtCadastro.
     *
     * @return \DateTime|null
     */
    public function getDtCadastro()
    {
        return $this->dtCadastro;
    }

    /**
     * Set tipo.
     *
     * @param string|null $tipo
     *
     * @return CadUsers
     */
    public function setTipo($tipo = null)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo.
     *
     * @return string|null
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set qtfoto.
     *
     * @param int|null $qtfoto
     *
     * @return CadUsers
     */
    public function setQtfoto($qtfoto = null)
    {
        $this->qtfoto = $qtfoto;

        return $this;
    }

    /**
     * Get qtfoto.
     *
     * @return int|null
     */
    public function getQtfoto()
    {
        return $this->qtfoto;
    }

    /**
     * Set latitude.
     *
     * @param string|null $latitude
     *
     * @return CadUsers
     */
    public function setLatitude($latitude = null)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude.
     *
     * @return string|null
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude.
     *
     * @param string|null $longitude
     *
     * @return CadUsers
     */
    public function setLongitude($longitude = null)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude.
     *
     * @return string|null
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set simples.
     *
     * @param int|null $simples
     *
     * @return CadUsers
     */
    public function setSimples($simples = null)
    {
        $this->simples = $simples;

        return $this;
    }

    /**
     * Get simples.
     *
     * @return int|null
     */
    public function getSimples()
    {
        return $this->simples;
    }

    /**
     * Set hashAcesso.
     *
     * @param string|null $hashAcesso
     *
     * @return CadUsers
     */
    public function setHashAcesso($hashAcesso = null)
    {
        $this->hashAcesso = $hashAcesso;

        return $this;
    }

    /**
     * Get hashAcesso.
     *
     * @return string|null
     */
    public function getHashAcesso()
    {
        return $this->hashAcesso;
    }

    /**
     * Set hashDatainc.
     *
     * @param \DateTime|null $hashDatainc
     *
     * @return CadUsers
     */
    public function setHashDatainc($hashDatainc = null)
    {
        $this->hashDatainc = $hashDatainc;

        return $this;
    }

    /**
     * Get hashDatainc.
     *
     * @return \DateTime|null
     */
    public function getHashDatainc()
    {
        return $this->hashDatainc;
    }

    /**
     * Set atividadeRamo.
     *
     * @param string|null $atividadeRamo
     *
     * @return CadUsers
     */
    public function setAtividadeRamo($atividadeRamo = null)
    {
        $this->atividadeRamo = $atividadeRamo;

        return $this;
    }

    /**
     * Get atividadeRamo.
     *
     * @return string|null
     */
    public function getAtividadeRamo()
    {
        return $this->atividadeRamo;
    }

    /**
     * Set tipoCliente.
     *
     * @param string|null $tipoCliente
     *
     * @return CadUsers
     */
    public function setTipoCliente($tipoCliente = null)
    {
        $this->tipoCliente = $tipoCliente;

        return $this;
    }

    /**
     * Get tipoCliente.
     *
     * @return string|null
     */
    public function getTipoCliente()
    {
        return $this->tipoCliente;
    }

    /**
     * Set cadOrigemContato.
     *
     * @param int|null $cadOrigemContato
     *
     * @return CadUsers
     */
    public function setCadOrigemContato($cadOrigemContato = null)
    {
        $this->cadOrigemContato = $cadOrigemContato;

        return $this;
    }

    /**
     * Get cadOrigemContato.
     *
     * @return int|null
     */
    public function getCadOrigemContato()
    {
        return $this->cadOrigemContato;
    }

    /**
     * Set integrado.
     *
     * @param bool $integrado
     *
     * @return CadUsers
     */
    public function setIntegrado($integrado)
    {
        $this->integrado = $integrado;

        return $this;
    }

    /**
     * Get integrado.
     *
     * @return bool
     */
    public function getIntegrado()
    {
        return $this->integrado;
    }

    /**
     * Set dtIntegrado.
     *
     * @param \DateTime|null $dtIntegrado
     *
     * @return CadUsers
     */
    public function setDtIntegrado($dtIntegrado = null)
    {
        $this->dtIntegrado = $dtIntegrado;

        return $this;
    }

    /**
     * Get dtIntegrado.
     *
     * @return \DateTime|null
     */
    public function getDtIntegrado()
    {
        return $this->dtIntegrado;
    }

    /**
     * Set erroIntegracao.
     *
     * @param int|null $erroIntegracao
     *
     * @return CadUsers
     */
    public function setErroIntegracao($erroIntegracao = null)
    {
        $this->erroIntegracao = $erroIntegracao;

        return $this;
    }

    /**
     * Get erroIntegracao.
     *
     * @return int|null
     */
    public function getErroIntegracao()
    {
        return $this->erroIntegracao;
    }

    /**
     * Set msgErroIntegracao.
     *
     * @param string|null $msgErroIntegracao
     *
     * @return CadUsers
     */
    public function setMsgErroIntegracao($msgErroIntegracao = null)
    {
        $this->msgErroIntegracao = $msgErroIntegracao;

        return $this;
    }

    /**
     * Get msgErroIntegracao.
     *
     * @return string|null
     */
    public function getMsgErroIntegracao()
    {
        return $this->msgErroIntegracao;
    }

    /**
     * Add customers2user.
     *
     * @param \App\Entity\Gcdb\Customers2users $customers2user
     *
     * @return CadUsers
     */
    public function addCustomers2user(\App\Entity\Gcdb\Customers2users $customers2user)
    {
        $this->customers2users[] = $customers2user;

        return $this;
    }

    /**
     * Remove customers2user.
     *
     * @param \App\Entity\Gcdb\Customers2users $customers2user
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeCustomers2user(\App\Entity\Gcdb\Customers2users $customers2user)
    {
        return $this->customers2users->removeElement($customers2user);
    }

    /**
     * Get customers2users.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCustomers2users()
    {
        return $this->customers2users;
    }

    /**
     * Add cadUsersEmail.
     *
     * @param \App\Entity\Gcdb\CadUsersEmail $cadUsersEmail
     *
     * @return CadUsers
     */
    public function addCadUsersEmail(\App\Entity\Gcdb\CadUsersEmail $cadUsersEmail)
    {
        $this->cadUsersEmail[] = $cadUsersEmail;

        return $this;
    }

    /**
     * Remove cadUsersEmail.
     *
     * @param \App\Entity\Gcdb\CadUsersEmail $cadUsersEmail
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeCadUsersEmail(\App\Entity\Gcdb\CadUsersEmail $cadUsersEmail)
    {
        return $this->cadUsersEmail->removeElement($cadUsersEmail);
    }

    /**
     * Get cadUsersEmail.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCadUsersEmail()
    {
        return $this->cadUsersEmail;
    }

    /**
     * Add cadUsersNome.
     *
     * @param \App\Entity\Gcdb\CadUsersNome $cadUsersNome
     *
     * @return CadUsers
     */
    public function addCadUsersNome(\App\Entity\Gcdb\CadUsersNome $cadUsersNome)
    {
        $this->cadUsersNome[] = $cadUsersNome;

        return $this;
    }

    /**
     * Remove cadUsersNome.
     *
     * @param \App\Entity\Gcdb\CadUsersNome $cadUsersNome
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeCadUsersNome(\App\Entity\Gcdb\CadUsersNome $cadUsersNome)
    {
        return $this->cadUsersNome->removeElement($cadUsersNome);
    }

    /**
     * Get cadUsersNome.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCadUsersNome()
    {
        return $this->cadUsersNome;
    }

    /**
     * Add cadUsersSite.
     *
     * @param \App\Entity\Gcdb\CadUsersSite $cadUsersSite
     *
     * @return CadUsers
     */
    public function addCadUsersSite(\App\Entity\Gcdb\CadUsersSite $cadUsersSite)
    {
        $this->CadUsersSite[] = $cadUsersSite;

        return $this;
    }

    /**
     * Remove cadUsersSite.
     *
     * @param \App\Entity\Gcdb\CadUsersSite $cadUsersSite
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeCadUsersSite(\App\Entity\Gcdb\CadUsersSite $cadUsersSite)
    {
        return $this->CadUsersSite->removeElement($cadUsersSite);
    }

    /**
     * Get cadUsersSite.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCadUsersSite()
    {
        return $this->CadUsersSite;
    }

    /**
     * Add cadUsersTelefone.
     *
     * @param \App\Entity\Gcdb\CadUsersTelefone $cadUsersTelefone
     *
     * @return CadUsers
     */
    public function addCadUsersTelefone(\App\Entity\Gcdb\CadUsersTelefone $cadUsersTelefone)
    {
        $this->CadUsersTelefone[] = $cadUsersTelefone;

        return $this;
    }

    /**
     * Remove cadUsersTelefone.
     *
     * @param \App\Entity\Gcdb\CadUsersTelefone $cadUsersTelefone
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeCadUsersTelefone(\App\Entity\Gcdb\CadUsersTelefone $cadUsersTelefone)
    {
        return $this->CadUsersTelefone->removeElement($cadUsersTelefone);
    }

    /**
     * Get cadUsersTelefone.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCadUsersTelefone()
    {
        return $this->CadUsersTelefone;
    }

    /**
     * Set admLogradouro.
     *
     * @param \App\Entity\Gcdb\AdmLogradouro|null $admLogradouro
     *
     * @return CadUsers
     */
    public function setAdmLogradouro(\App\Entity\Gcdb\AdmLogradouro $admLogradouro = null)
    {
        $this->admLogradouro = $admLogradouro;

        return $this;
    }

    /**
     * Get admLogradouro.
     *
     * @return \App\Entity\Gcdb\AdmLogradouro|null
     */
    public function getAdmLogradouro()
    {
        return $this->admLogradouro;
    }

    /**
     * Set admPais.
     *
     * @param \App\Entity\Gcdb\AdmPais|null $admPais
     *
     * @return CadUsers
     */
    public function setAdmPais(\App\Entity\Gcdb\AdmPais $admPais = null)
    {
        $this->admPais = $admPais;

        return $this;
    }

    /**
     * Get admPais.
     *
     * @return \App\Entity\Gcdb\AdmPais|null
     */
    public function getAdmPais()
    {
        return $this->admPais;
    }

    /**
     * Set admUf.
     *
     * @param \App\Entity\Gcdb\AdmUf|null $admUf
     *
     * @return CadUsers
     */
    public function setAdmUf(\App\Entity\Gcdb\AdmUf $admUf = null)
    {
        $this->admUf = $admUf;

        return $this;
    }

    /**
     * Get admUf.
     *
     * @return \App\Entity\Gcdb\AdmUf|null
     */
    public function getAdmUf()
    {
        return $this->admUf;
    }

    /**
     * Set admCidades.
     *
     * @param \App\Entity\Gcdb\AdmCidades|null $admCidades
     *
     * @return CadUsers
     */
    public function setAdmCidades(\App\Entity\Gcdb\AdmCidades $admCidades = null)
    {
        $this->admCidades = $admCidades;

        return $this;
    }

    /**
     * Get admCidades.
     *
     * @return \App\Entity\Gcdb\AdmCidades|null
     */
    public function getAdmCidades()
    {
        return $this->admCidades;
    }

    /**
     * Set segmento.
     *
     * @param \App\Entity\Gcdb\CadUsersSegmento|null $segmento
     *
     * @return CadUsers
     */
    public function setSegmento(\App\Entity\Gcdb\CadUsersSegmento $segmento = null)
    {
        $this->segmento = $segmento;

        return $this;
    }

    /**
     * Get segmento.
     *
     * @return \App\Entity\Gcdb\CadUsersSegmento|null
     */
    public function getSegmento()
    {
        return $this->segmento;
    }
}
