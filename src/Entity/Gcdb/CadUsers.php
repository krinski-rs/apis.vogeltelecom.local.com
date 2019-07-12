<?php

namespace App\Entity\Gcdb;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class CadUsers
{
    private $id;

    private $cnpj;

    private $cpf;

    private $inscEst;

    private $inscMun;

    private $senha;

    private $dtAbertura;

    private $cep;

    private $endereco;

    private $numero;

    private $bairro;

    private $site;

    private $dtCadastro;

    private $tipo;

    private $qtfoto;

    private $latitude;

    private $longitude;

    private $simples;

    private $hashAcesso;

    private $hashDatainc;

    private $atividadeRamo;

    private $tipoCliente;

    private $cadOrigemContato;

    private $integrado;

    private $dtIntegrado;

    private $erroIntegracao;

    private $msgErroIntegracao;

    private $customers2users;

    private $cadUsersEmail;

    private $cadUsersNome;

    private $CadUsersSite;

    private $CadUsersTelefone;

    private $admLogradouro;

    private $admPais;

    private $admUf;

    private $admCidades;

    private $segmento;

    public function __construct()
    {
        $this->customers2users = new ArrayCollection();
        $this->cadUsersEmail = new ArrayCollection();
        $this->cadUsersNome = new ArrayCollection();
        $this->CadUsersSite = new ArrayCollection();
        $this->CadUsersTelefone = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCnpj(): ?int
    {
        return $this->cnpj;
    }

    public function setCnpj(?int $cnpj): self
    {
        $this->cnpj = $cnpj;

        return $this;
    }

    public function getCpf(): ?int
    {
        return $this->cpf;
    }

    public function setCpf(?int $cpf): self
    {
        $this->cpf = $cpf;

        return $this;
    }

    public function getInscEst(): ?string
    {
        return $this->inscEst;
    }

    public function setInscEst(?string $inscEst): self
    {
        $this->inscEst = $inscEst;

        return $this;
    }

    public function getInscMun(): ?string
    {
        return $this->inscMun;
    }

    public function setInscMun(?string $inscMun): self
    {
        $this->inscMun = $inscMun;

        return $this;
    }

    public function getSenha(): ?string
    {
        return $this->senha;
    }

    public function setSenha(?string $senha): self
    {
        $this->senha = $senha;

        return $this;
    }

    public function getDtAbertura(): ?\DateTimeInterface
    {
        return $this->dtAbertura;
    }

    public function setDtAbertura(?\DateTimeInterface $dtAbertura): self
    {
        $this->dtAbertura = $dtAbertura;

        return $this;
    }

    public function getCep(): ?string
    {
        return $this->cep;
    }

    public function setCep(?string $cep): self
    {
        $this->cep = $cep;

        return $this;
    }

    public function getEndereco(): ?string
    {
        return $this->endereco;
    }

    public function setEndereco(?string $endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }

    public function getNumero(): ?string
    {
        return $this->numero;
    }

    public function setNumero(?string $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getBairro(): ?string
    {
        return $this->bairro;
    }

    public function setBairro(?string $bairro): self
    {
        $this->bairro = $bairro;

        return $this;
    }

    public function getSite(): ?string
    {
        return $this->site;
    }

    public function setSite(?string $site): self
    {
        $this->site = $site;

        return $this;
    }

    public function getDtCadastro(): ?\DateTimeInterface
    {
        return $this->dtCadastro;
    }

    public function setDtCadastro(?\DateTimeInterface $dtCadastro): self
    {
        $this->dtCadastro = $dtCadastro;

        return $this;
    }

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(?string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getQtfoto(): ?int
    {
        return $this->qtfoto;
    }

    public function setQtfoto(?int $qtfoto): self
    {
        $this->qtfoto = $qtfoto;

        return $this;
    }

    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    public function setLatitude(?string $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    public function setLongitude(?string $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getSimples(): ?int
    {
        return $this->simples;
    }

    public function setSimples(?int $simples): self
    {
        $this->simples = $simples;

        return $this;
    }

    public function getHashAcesso(): ?string
    {
        return $this->hashAcesso;
    }

    public function setHashAcesso(?string $hashAcesso): self
    {
        $this->hashAcesso = $hashAcesso;

        return $this;
    }

    public function getHashDatainc(): ?\DateTimeInterface
    {
        return $this->hashDatainc;
    }

    public function setHashDatainc(?\DateTimeInterface $hashDatainc): self
    {
        $this->hashDatainc = $hashDatainc;

        return $this;
    }

    public function getAtividadeRamo(): ?string
    {
        return $this->atividadeRamo;
    }

    public function setAtividadeRamo(?string $atividadeRamo): self
    {
        $this->atividadeRamo = $atividadeRamo;

        return $this;
    }

    public function getTipoCliente(): ?string
    {
        return $this->tipoCliente;
    }

    public function setTipoCliente(?string $tipoCliente): self
    {
        $this->tipoCliente = $tipoCliente;

        return $this;
    }

    public function getCadOrigemContato(): ?int
    {
        return $this->cadOrigemContato;
    }

    public function setCadOrigemContato(?int $cadOrigemContato): self
    {
        $this->cadOrigemContato = $cadOrigemContato;

        return $this;
    }

    public function getIntegrado(): ?bool
    {
        return $this->integrado;
    }

    public function setIntegrado(bool $integrado): self
    {
        $this->integrado = $integrado;

        return $this;
    }

    public function getDtIntegrado(): ?\DateTimeInterface
    {
        return $this->dtIntegrado;
    }

    public function setDtIntegrado(?\DateTimeInterface $dtIntegrado): self
    {
        $this->dtIntegrado = $dtIntegrado;

        return $this;
    }

    public function getErroIntegracao(): ?int
    {
        return $this->erroIntegracao;
    }

    public function setErroIntegracao(?int $erroIntegracao): self
    {
        $this->erroIntegracao = $erroIntegracao;

        return $this;
    }

    public function getMsgErroIntegracao(): ?string
    {
        return $this->msgErroIntegracao;
    }

    public function setMsgErroIntegracao(?string $msgErroIntegracao): self
    {
        $this->msgErroIntegracao = $msgErroIntegracao;

        return $this;
    }

    /**
     * @return Collection|Customers2users[]
     */
    public function getCustomers2users(): Collection
    {
        return $this->customers2users;
    }

    public function addCustomers2user(Customers2users $customers2user): self
    {
        if (!$this->customers2users->contains($customers2user)) {
            $this->customers2users[] = $customers2user;
            $customers2user->setCadUser($this);
        }

        return $this;
    }

    public function removeCustomers2user(Customers2users $customers2user): self
    {
        if ($this->customers2users->contains($customers2user)) {
            $this->customers2users->removeElement($customers2user);
            // set the owning side to null (unless already changed)
            if ($customers2user->getCadUser() === $this) {
                $customers2user->setCadUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|CadUsersEmail[]
     */
    public function getCadUsersEmail(): Collection
    {
        return $this->cadUsersEmail;
    }

    public function addCadUsersEmail(CadUsersEmail $cadUsersEmail): self
    {
        if (!$this->cadUsersEmail->contains($cadUsersEmail)) {
            $this->cadUsersEmail[] = $cadUsersEmail;
            $cadUsersEmail->setCadUser($this);
        }

        return $this;
    }

    public function removeCadUsersEmail(CadUsersEmail $cadUsersEmail): self
    {
        if ($this->cadUsersEmail->contains($cadUsersEmail)) {
            $this->cadUsersEmail->removeElement($cadUsersEmail);
            // set the owning side to null (unless already changed)
            if ($cadUsersEmail->getCadUser() === $this) {
                $cadUsersEmail->setCadUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|CadUsersNome[]
     */
    public function getCadUsersNome(): Collection
    {
        return $this->cadUsersNome;
    }

    public function addCadUsersNome(CadUsersNome $cadUsersNome): self
    {
        if (!$this->cadUsersNome->contains($cadUsersNome)) {
            $this->cadUsersNome[] = $cadUsersNome;
            $cadUsersNome->setCadUser($this);
        }

        return $this;
    }

    public function removeCadUsersNome(CadUsersNome $cadUsersNome): self
    {
        if ($this->cadUsersNome->contains($cadUsersNome)) {
            $this->cadUsersNome->removeElement($cadUsersNome);
            // set the owning side to null (unless already changed)
            if ($cadUsersNome->getCadUser() === $this) {
                $cadUsersNome->setCadUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|CadUsersSite[]
     */
    public function getCadUsersSite(): Collection
    {
        return $this->CadUsersSite;
    }

    public function addCadUsersSite(CadUsersSite $cadUsersSite): self
    {
        if (!$this->CadUsersSite->contains($cadUsersSite)) {
            $this->CadUsersSite[] = $cadUsersSite;
            $cadUsersSite->setCadUser($this);
        }

        return $this;
    }

    public function removeCadUsersSite(CadUsersSite $cadUsersSite): self
    {
        if ($this->CadUsersSite->contains($cadUsersSite)) {
            $this->CadUsersSite->removeElement($cadUsersSite);
            // set the owning side to null (unless already changed)
            if ($cadUsersSite->getCadUser() === $this) {
                $cadUsersSite->setCadUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|CadUsersTelefone[]
     */
    public function getCadUsersTelefone(): Collection
    {
        return $this->CadUsersTelefone;
    }

    public function addCadUsersTelefone(CadUsersTelefone $cadUsersTelefone): self
    {
        if (!$this->CadUsersTelefone->contains($cadUsersTelefone)) {
            $this->CadUsersTelefone[] = $cadUsersTelefone;
            $cadUsersTelefone->setCadUser($this);
        }

        return $this;
    }

    public function removeCadUsersTelefone(CadUsersTelefone $cadUsersTelefone): self
    {
        if ($this->CadUsersTelefone->contains($cadUsersTelefone)) {
            $this->CadUsersTelefone->removeElement($cadUsersTelefone);
            // set the owning side to null (unless already changed)
            if ($cadUsersTelefone->getCadUser() === $this) {
                $cadUsersTelefone->setCadUser(null);
            }
        }

        return $this;
    }

    public function getAdmLogradouro(): ?AdmLogradouro
    {
        return $this->admLogradouro;
    }

    public function setAdmLogradouro(?AdmLogradouro $admLogradouro): self
    {
        $this->admLogradouro = $admLogradouro;

        return $this;
    }

    public function getAdmPais(): ?AdmPais
    {
        return $this->admPais;
    }

    public function setAdmPais(?AdmPais $admPais): self
    {
        $this->admPais = $admPais;

        return $this;
    }

    public function getAdmUf(): ?AdmUf
    {
        return $this->admUf;
    }

    public function setAdmUf(?AdmUf $admUf): self
    {
        $this->admUf = $admUf;

        return $this;
    }

    public function getAdmCidades(): ?AdmCidades
    {
        return $this->admCidades;
    }

    public function setAdmCidades(?AdmCidades $admCidades): self
    {
        $this->admCidades = $admCidades;

        return $this;
    }

    public function getSegmento(): ?CadUsersSegmento
    {
        return $this->segmento;
    }

    public function setSegmento(?CadUsersSegmento $segmento): self
    {
        $this->segmento = $segmento;

        return $this;
    }
}
