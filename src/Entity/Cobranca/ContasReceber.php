<?php

namespace App\Entity\Cobranca;

class ContasReceber
{
    private $e1Filial;

    private $e1Prefixo;

    private $e1Num;

    private $e1Parcela;

    private $e1Tipo;

    private $e1Naturez;

    private $e1Portado;

    private $e1Agedep;

    private $e1Cliente;

    private $e1Loja;

    private $e1Nomcli;

    private $e1Emissao;

    private $e1Vencto;

    private $e1Vencrea;

    private $e1Valor;

    private $e1Irrf;

    private $e1Iss;

    private $e1Numbco;

    private $e1Indice;

    private $e1Baixa;

    private $e1Numbor;

    private $e1Databor;

    private $e1Emis1;

    private $e1Hist;

    private $e1La;

    private $e1Lote;

    private $e1Motivo;

    private $e1Movimen;

    private $e1Op;

    private $e1Situaca;

    private $e1Contrat;

    private $e1Saldo;

    private $e1Supervi;

    private $e1Vend1;

    private $e1Vend2;

    private $e1Vend3;

    private $e1Vend4;

    private $e1Vend5;

    private $e1Comis1;

    private $e1Comis2;

    private $e1Comis3;

    private $e1Comis4;

    private $e1Descont;

    private $e1Comis5;

    private $e1Multa;

    private $e1Juros;

    private $e1Correc;

    private $e1Valliq;

    private $e1Vencori;

    private $e1Conta;

    private $e1Valjur;

    private $e1Porcjur;

    private $e1Moeda;

    private $e1Bascom1;

    private $e1Bascom2;

    private $e1Bascom3;

    private $e1Bascom4;

    private $e1Bascom5;

    private $e1Fatpref;

    private $e1Fatura;

    private $e1Ok;

    private $e1Projeto;

    private $e1Clascon;

    private $e1Valcom1;

    private $e1Valcom2;

    private $e1Valcom3;

    private $e1Valcom4;

    private $e1Valcom5;

    private $e1Ocorren;

    private $e1Instr1;

    private $e1Instr2;

    private $e1Pedido;

    private $e1Dtvaria;

    private $e1Varurv;

    private $e1Vlcruz;

    private $e1Dtfatur;

    private $e1Numnota;

    private $e1Serie;

    private $e1Status;

    private $e1Origem;

    private $e1Identee;

    private $e1Numcart;

    private $e1Fluxo;

    private $e1Descfin;

    private $e1Diadesc;

    private $e1Tipodes;

    private $e1Cartao;

    private $e1Cartval;

    private $e1Cartaut;

    private $e1Adm;

    private $e1Vlrreal;

    private $e1Transf;

    private $e1Bcochq;

    private $e1Agechq;

    private $e1Ctachq;

    private $e1Numliq;

    private $e1Ordpago;

    private $e1Inss;

    private $e1Filorig;

    private $e1Tipofat;

    private $e1Tipoliq;

    private $e1Csll;

    private $e1Cofins;

    private $e1Pis;

    private $e1Flagfat;

    private $e1Mesbase;

    private $e1Anobase;

    private $e1Plnucob;

    private $e1Codtext;

    private $e1Codemp;

    private $e1Matric;

    private $e1Txmoeda;

    private $e1Acresc;

    private $e1Sdacres;

    private $e1Decresc;

    private $e1Sddecre;

    private $e1Multnat;

    private $e1Msfil;

    private $e1Msemp;

    private $e1Projpms;

    private $e1Desdobr;

    private $e1Nrdoc;

    private $e1Modspb;

    private $e1Idcnab;

    private $e1Plcoemp;

    private $e1Pltpcoe;

    private $e1Codcor;

    private $e1Parccss;

    private $e1Userlgi;

    private $e1Userlga;

    private $e1Recibo;

    private $e1Dtacred;

    private $e1Emitchq;

    private $e1Codorca;

    private $e1Codimov;

    private $e1Fildeb;

    private $e1Numsol;

    private $e1Numra;

    private $e1Serrec;

    private $e1Inscric;

    private $e1Dataedi;

    private $e1Codbar;

    private $e1Chqdev;

    private $e1Coddig;

    private $e1Lidescf;

    private $e1Vlbolsa;

    private $e1Numcrd;

    private $e1Vlfies;

    private $e1Debito;

    private $e1Ccd;

    private $e1Itemd;

    private $e1Clvldb;

    private $e1Credit;

    private $e1Ccc;

    private $e1Itemc;

    private $e1Clvlcr;

    private $e1Descon1;

    private $e1Descon2;

    private $e1Dtdesc3;

    private $e1Dtdesc1;

    private $e1Dtdesc2;

    private $e1Vlmulta;

    private $e1Descon3;

    private $e1Motneg;

    private $e1Sabtpis;

    private $e1Sabtcof;

    private $e1Sabtcsl;

    private $e1Forniss;

    private $e1Partot;

    private $e1Sitfat;

    private $e1Basepis;

    private $e1Basecof;

    private $e1Basecsl;

    private $e1Vretiss;

    private $e1Parcirf;

    private $e1Scorgp;

    private $e1Fretiss;

    private $e1Txmdcor;

    private $e1Satbirf;

    private $e1Tipreg;

    private $e1Conemp;

    private $e1Vercon;

    private $e1Subcon;

    private $e1Versub;

    private $e1Pllote;

    private $e1Plopelt;

    private $e1Codrda;

    private $e1Formrec;

    private $e1Bcocli;

    private $e1Agecli;

    private $e1Ctacli;

    private $e1Parcfet;

    private $e1Fethab;

    private $e1Mdcron;

    private $e1Mdcontr;

    private $e1Mednume;

    private $e1Mdplani;

    private $e1Mdparce;

    private $e1Mdrevis;

    private $e1Nummov;

    private $e1Numcon;

    private $e1Sabtirf;

    private $e1Aplvlmn;

    private $e1Nfeletr;

    private $e1Nodia;

    private $e1Diactb;

    private $e1Vretirf;

    private $e1Retcntr;

    private $e1Mddesc;

    private $e1Mdboni;

    private $e1Mdmult;

    private $e1Doctef;

    private $e1Numpro;

    private $e1Indpro;

    private $e1Parcfac;

    private $e1Parcfab;

    private $e1Fabov;

    private $e1Facs;

    private $e1Codiss;

    private $e1Baseirf;

    private $e1Baseins;

    private $e1Baseiss;

    private $e1Vlminis;

    private $e1Prefori;

    private $e1Titpai;

    private $e1Jurfat;

    private $e1Relato;

    private $e1Multdia;

    private $e1Turma;

    private $e1Idlan;

    private $e1Nsutef;

    private $e1Idaplic;

    private $e1Procel;

    private $e1Noper;

    private $e1Servico;

    private $e1Idbolet;

    private $e1Vlbolp;

    private $e1Ltcxa;

    private $e1Numinsc;

    private $e1Seqbx;

    private $e1Tpdp;

    private $e1Partpdp;

    private $e1Codirrf;

    private $e1Idmov;

    private $e1Prinss;

    private $e1Tpdesc;

    private $e1Ratfin;

    private $e1Priss;

    private $e1Famad;

    private $e1Parcfam;

    private $e1Fmpeq;

    private $e1Parcfmp;

    private $e1PBanri;

    private $dELET;

    private $rECNO;

    private $rECDEL;

    private $e1PSiste;

    private $e1PRef;

    private $e1PBol;

    private $e1Codret;

    private $e1Ctrbco;

    private $e1Fundesa;

    private $e1Imamt;

    private $e1Fasemt;

    private $e1Parfund;

    private $e1Parima;

    private $e1Parfase;

    public function getE1Filial(): ?string
    {
        return $this->e1Filial;
    }

    public function getE1Prefixo(): ?string
    {
        return $this->e1Prefixo;
    }

    public function setE1Prefixo(?string $e1Prefixo): self
    {
        $this->e1Prefixo = $e1Prefixo;

        return $this;
    }

    public function getE1Num(): ?string
    {
        return $this->e1Num;
    }

    public function setE1Num(?string $e1Num): self
    {
        $this->e1Num = $e1Num;

        return $this;
    }

    public function getE1Parcela(): ?string
    {
        return $this->e1Parcela;
    }

    public function setE1Parcela(?string $e1Parcela): self
    {
        $this->e1Parcela = $e1Parcela;

        return $this;
    }

    public function getE1Tipo(): ?string
    {
        return $this->e1Tipo;
    }

    public function setE1Tipo(?string $e1Tipo): self
    {
        $this->e1Tipo = $e1Tipo;

        return $this;
    }

    public function getE1Naturez(): ?string
    {
        return $this->e1Naturez;
    }

    public function setE1Naturez(?string $e1Naturez): self
    {
        $this->e1Naturez = $e1Naturez;

        return $this;
    }

    public function getE1Portado(): ?string
    {
        return $this->e1Portado;
    }

    public function setE1Portado(?string $e1Portado): self
    {
        $this->e1Portado = $e1Portado;

        return $this;
    }

    public function getE1Agedep(): ?string
    {
        return $this->e1Agedep;
    }

    public function setE1Agedep(?string $e1Agedep): self
    {
        $this->e1Agedep = $e1Agedep;

        return $this;
    }

    public function getE1Cliente(): ?string
    {
        return $this->e1Cliente;
    }

    public function setE1Cliente(?string $e1Cliente): self
    {
        $this->e1Cliente = $e1Cliente;

        return $this;
    }

    public function getE1Loja(): ?string
    {
        return $this->e1Loja;
    }

    public function setE1Loja(?string $e1Loja): self
    {
        $this->e1Loja = $e1Loja;

        return $this;
    }

    public function getE1Nomcli(): ?string
    {
        return $this->e1Nomcli;
    }

    public function setE1Nomcli(?string $e1Nomcli): self
    {
        $this->e1Nomcli = $e1Nomcli;

        return $this;
    }

    public function getE1Emissao(): ?string
    {
        return $this->e1Emissao;
    }

    public function setE1Emissao(?string $e1Emissao): self
    {
        $this->e1Emissao = $e1Emissao;

        return $this;
    }

    public function getE1Vencto(): ?string
    {
        return $this->e1Vencto;
    }

    public function setE1Vencto(?string $e1Vencto): self
    {
        $this->e1Vencto = $e1Vencto;

        return $this;
    }

    public function getE1Vencrea(): ?string
    {
        return $this->e1Vencrea;
    }

    public function setE1Vencrea(?string $e1Vencrea): self
    {
        $this->e1Vencrea = $e1Vencrea;

        return $this;
    }

    public function getE1Valor(): ?string
    {
        return $this->e1Valor;
    }

    public function setE1Valor(?string $e1Valor): self
    {
        $this->e1Valor = $e1Valor;

        return $this;
    }

    public function getE1Irrf(): ?string
    {
        return $this->e1Irrf;
    }

    public function setE1Irrf(?string $e1Irrf): self
    {
        $this->e1Irrf = $e1Irrf;

        return $this;
    }

    public function getE1Iss(): ?string
    {
        return $this->e1Iss;
    }

    public function setE1Iss(?string $e1Iss): self
    {
        $this->e1Iss = $e1Iss;

        return $this;
    }

    public function getE1Numbco(): ?string
    {
        return $this->e1Numbco;
    }

    public function setE1Numbco(?string $e1Numbco): self
    {
        $this->e1Numbco = $e1Numbco;

        return $this;
    }

    public function getE1Indice(): ?string
    {
        return $this->e1Indice;
    }

    public function setE1Indice(?string $e1Indice): self
    {
        $this->e1Indice = $e1Indice;

        return $this;
    }

    public function getE1Baixa(): ?string
    {
        return $this->e1Baixa;
    }

    public function setE1Baixa(?string $e1Baixa): self
    {
        $this->e1Baixa = $e1Baixa;

        return $this;
    }

    public function getE1Numbor(): ?string
    {
        return $this->e1Numbor;
    }

    public function setE1Numbor(?string $e1Numbor): self
    {
        $this->e1Numbor = $e1Numbor;

        return $this;
    }

    public function getE1Databor(): ?string
    {
        return $this->e1Databor;
    }

    public function setE1Databor(?string $e1Databor): self
    {
        $this->e1Databor = $e1Databor;

        return $this;
    }

    public function getE1Emis1(): ?string
    {
        return $this->e1Emis1;
    }

    public function setE1Emis1(?string $e1Emis1): self
    {
        $this->e1Emis1 = $e1Emis1;

        return $this;
    }

    public function getE1Hist(): ?string
    {
        return $this->e1Hist;
    }

    public function setE1Hist(?string $e1Hist): self
    {
        $this->e1Hist = $e1Hist;

        return $this;
    }

    public function getE1La(): ?string
    {
        return $this->e1La;
    }

    public function setE1La(?string $e1La): self
    {
        $this->e1La = $e1La;

        return $this;
    }

    public function getE1Lote(): ?string
    {
        return $this->e1Lote;
    }

    public function setE1Lote(?string $e1Lote): self
    {
        $this->e1Lote = $e1Lote;

        return $this;
    }

    public function getE1Motivo(): ?string
    {
        return $this->e1Motivo;
    }

    public function setE1Motivo(?string $e1Motivo): self
    {
        $this->e1Motivo = $e1Motivo;

        return $this;
    }

    public function getE1Movimen(): ?string
    {
        return $this->e1Movimen;
    }

    public function setE1Movimen(?string $e1Movimen): self
    {
        $this->e1Movimen = $e1Movimen;

        return $this;
    }

    public function getE1Op(): ?string
    {
        return $this->e1Op;
    }

    public function setE1Op(?string $e1Op): self
    {
        $this->e1Op = $e1Op;

        return $this;
    }

    public function getE1Situaca(): ?string
    {
        return $this->e1Situaca;
    }

    public function setE1Situaca(?string $e1Situaca): self
    {
        $this->e1Situaca = $e1Situaca;

        return $this;
    }

    public function getE1Contrat(): ?string
    {
        return $this->e1Contrat;
    }

    public function setE1Contrat(?string $e1Contrat): self
    {
        $this->e1Contrat = $e1Contrat;

        return $this;
    }

    public function getE1Saldo(): ?string
    {
        return $this->e1Saldo;
    }

    public function setE1Saldo(?string $e1Saldo): self
    {
        $this->e1Saldo = $e1Saldo;

        return $this;
    }

    public function getE1Supervi(): ?string
    {
        return $this->e1Supervi;
    }

    public function setE1Supervi(?string $e1Supervi): self
    {
        $this->e1Supervi = $e1Supervi;

        return $this;
    }

    public function getE1Vend1(): ?string
    {
        return $this->e1Vend1;
    }

    public function setE1Vend1(?string $e1Vend1): self
    {
        $this->e1Vend1 = $e1Vend1;

        return $this;
    }

    public function getE1Vend2(): ?string
    {
        return $this->e1Vend2;
    }

    public function setE1Vend2(?string $e1Vend2): self
    {
        $this->e1Vend2 = $e1Vend2;

        return $this;
    }

    public function getE1Vend3(): ?string
    {
        return $this->e1Vend3;
    }

    public function setE1Vend3(?string $e1Vend3): self
    {
        $this->e1Vend3 = $e1Vend3;

        return $this;
    }

    public function getE1Vend4(): ?string
    {
        return $this->e1Vend4;
    }

    public function setE1Vend4(?string $e1Vend4): self
    {
        $this->e1Vend4 = $e1Vend4;

        return $this;
    }

    public function getE1Vend5(): ?string
    {
        return $this->e1Vend5;
    }

    public function setE1Vend5(?string $e1Vend5): self
    {
        $this->e1Vend5 = $e1Vend5;

        return $this;
    }

    public function getE1Comis1(): ?string
    {
        return $this->e1Comis1;
    }

    public function setE1Comis1(?string $e1Comis1): self
    {
        $this->e1Comis1 = $e1Comis1;

        return $this;
    }

    public function getE1Comis2(): ?string
    {
        return $this->e1Comis2;
    }

    public function setE1Comis2(?string $e1Comis2): self
    {
        $this->e1Comis2 = $e1Comis2;

        return $this;
    }

    public function getE1Comis3(): ?string
    {
        return $this->e1Comis3;
    }

    public function setE1Comis3(?string $e1Comis3): self
    {
        $this->e1Comis3 = $e1Comis3;

        return $this;
    }

    public function getE1Comis4(): ?string
    {
        return $this->e1Comis4;
    }

    public function setE1Comis4(?string $e1Comis4): self
    {
        $this->e1Comis4 = $e1Comis4;

        return $this;
    }

    public function getE1Descont(): ?string
    {
        return $this->e1Descont;
    }

    public function setE1Descont(?string $e1Descont): self
    {
        $this->e1Descont = $e1Descont;

        return $this;
    }

    public function getE1Comis5(): ?string
    {
        return $this->e1Comis5;
    }

    public function setE1Comis5(?string $e1Comis5): self
    {
        $this->e1Comis5 = $e1Comis5;

        return $this;
    }

    public function getE1Multa(): ?string
    {
        return $this->e1Multa;
    }

    public function setE1Multa(?string $e1Multa): self
    {
        $this->e1Multa = $e1Multa;

        return $this;
    }

    public function getE1Juros(): ?string
    {
        return $this->e1Juros;
    }

    public function setE1Juros(?string $e1Juros): self
    {
        $this->e1Juros = $e1Juros;

        return $this;
    }

    public function getE1Correc(): ?string
    {
        return $this->e1Correc;
    }

    public function setE1Correc(?string $e1Correc): self
    {
        $this->e1Correc = $e1Correc;

        return $this;
    }

    public function getE1Valliq(): ?string
    {
        return $this->e1Valliq;
    }

    public function setE1Valliq(?string $e1Valliq): self
    {
        $this->e1Valliq = $e1Valliq;

        return $this;
    }

    public function getE1Vencori(): ?string
    {
        return $this->e1Vencori;
    }

    public function setE1Vencori(?string $e1Vencori): self
    {
        $this->e1Vencori = $e1Vencori;

        return $this;
    }

    public function getE1Conta(): ?string
    {
        return $this->e1Conta;
    }

    public function setE1Conta(?string $e1Conta): self
    {
        $this->e1Conta = $e1Conta;

        return $this;
    }

    public function getE1Valjur(): ?string
    {
        return $this->e1Valjur;
    }

    public function setE1Valjur(?string $e1Valjur): self
    {
        $this->e1Valjur = $e1Valjur;

        return $this;
    }

    public function getE1Porcjur(): ?string
    {
        return $this->e1Porcjur;
    }

    public function setE1Porcjur(?string $e1Porcjur): self
    {
        $this->e1Porcjur = $e1Porcjur;

        return $this;
    }

    public function getE1Moeda(): ?string
    {
        return $this->e1Moeda;
    }

    public function setE1Moeda(?string $e1Moeda): self
    {
        $this->e1Moeda = $e1Moeda;

        return $this;
    }

    public function getE1Bascom1(): ?string
    {
        return $this->e1Bascom1;
    }

    public function setE1Bascom1(?string $e1Bascom1): self
    {
        $this->e1Bascom1 = $e1Bascom1;

        return $this;
    }

    public function getE1Bascom2(): ?string
    {
        return $this->e1Bascom2;
    }

    public function setE1Bascom2(?string $e1Bascom2): self
    {
        $this->e1Bascom2 = $e1Bascom2;

        return $this;
    }

    public function getE1Bascom3(): ?string
    {
        return $this->e1Bascom3;
    }

    public function setE1Bascom3(?string $e1Bascom3): self
    {
        $this->e1Bascom3 = $e1Bascom3;

        return $this;
    }

    public function getE1Bascom4(): ?string
    {
        return $this->e1Bascom4;
    }

    public function setE1Bascom4(?string $e1Bascom4): self
    {
        $this->e1Bascom4 = $e1Bascom4;

        return $this;
    }

    public function getE1Bascom5(): ?string
    {
        return $this->e1Bascom5;
    }

    public function setE1Bascom5(?string $e1Bascom5): self
    {
        $this->e1Bascom5 = $e1Bascom5;

        return $this;
    }

    public function getE1Fatpref(): ?string
    {
        return $this->e1Fatpref;
    }

    public function setE1Fatpref(?string $e1Fatpref): self
    {
        $this->e1Fatpref = $e1Fatpref;

        return $this;
    }

    public function getE1Fatura(): ?string
    {
        return $this->e1Fatura;
    }

    public function setE1Fatura(?string $e1Fatura): self
    {
        $this->e1Fatura = $e1Fatura;

        return $this;
    }

    public function getE1Ok(): ?string
    {
        return $this->e1Ok;
    }

    public function setE1Ok(?string $e1Ok): self
    {
        $this->e1Ok = $e1Ok;

        return $this;
    }

    public function getE1Projeto(): ?string
    {
        return $this->e1Projeto;
    }

    public function setE1Projeto(?string $e1Projeto): self
    {
        $this->e1Projeto = $e1Projeto;

        return $this;
    }

    public function getE1Clascon(): ?string
    {
        return $this->e1Clascon;
    }

    public function setE1Clascon(?string $e1Clascon): self
    {
        $this->e1Clascon = $e1Clascon;

        return $this;
    }

    public function getE1Valcom1(): ?string
    {
        return $this->e1Valcom1;
    }

    public function setE1Valcom1(?string $e1Valcom1): self
    {
        $this->e1Valcom1 = $e1Valcom1;

        return $this;
    }

    public function getE1Valcom2(): ?string
    {
        return $this->e1Valcom2;
    }

    public function setE1Valcom2(?string $e1Valcom2): self
    {
        $this->e1Valcom2 = $e1Valcom2;

        return $this;
    }

    public function getE1Valcom3(): ?string
    {
        return $this->e1Valcom3;
    }

    public function setE1Valcom3(?string $e1Valcom3): self
    {
        $this->e1Valcom3 = $e1Valcom3;

        return $this;
    }

    public function getE1Valcom4(): ?string
    {
        return $this->e1Valcom4;
    }

    public function setE1Valcom4(?string $e1Valcom4): self
    {
        $this->e1Valcom4 = $e1Valcom4;

        return $this;
    }

    public function getE1Valcom5(): ?string
    {
        return $this->e1Valcom5;
    }

    public function setE1Valcom5(?string $e1Valcom5): self
    {
        $this->e1Valcom5 = $e1Valcom5;

        return $this;
    }

    public function getE1Ocorren(): ?string
    {
        return $this->e1Ocorren;
    }

    public function setE1Ocorren(?string $e1Ocorren): self
    {
        $this->e1Ocorren = $e1Ocorren;

        return $this;
    }

    public function getE1Instr1(): ?string
    {
        return $this->e1Instr1;
    }

    public function setE1Instr1(?string $e1Instr1): self
    {
        $this->e1Instr1 = $e1Instr1;

        return $this;
    }

    public function getE1Instr2(): ?string
    {
        return $this->e1Instr2;
    }

    public function setE1Instr2(?string $e1Instr2): self
    {
        $this->e1Instr2 = $e1Instr2;

        return $this;
    }

    public function getE1Pedido(): ?string
    {
        return $this->e1Pedido;
    }

    public function setE1Pedido(?string $e1Pedido): self
    {
        $this->e1Pedido = $e1Pedido;

        return $this;
    }

    public function getE1Dtvaria(): ?string
    {
        return $this->e1Dtvaria;
    }

    public function setE1Dtvaria(?string $e1Dtvaria): self
    {
        $this->e1Dtvaria = $e1Dtvaria;

        return $this;
    }

    public function getE1Varurv(): ?string
    {
        return $this->e1Varurv;
    }

    public function setE1Varurv(?string $e1Varurv): self
    {
        $this->e1Varurv = $e1Varurv;

        return $this;
    }

    public function getE1Vlcruz(): ?string
    {
        return $this->e1Vlcruz;
    }

    public function setE1Vlcruz(?string $e1Vlcruz): self
    {
        $this->e1Vlcruz = $e1Vlcruz;

        return $this;
    }

    public function getE1Dtfatur(): ?string
    {
        return $this->e1Dtfatur;
    }

    public function setE1Dtfatur(?string $e1Dtfatur): self
    {
        $this->e1Dtfatur = $e1Dtfatur;

        return $this;
    }

    public function getE1Numnota(): ?string
    {
        return $this->e1Numnota;
    }

    public function setE1Numnota(?string $e1Numnota): self
    {
        $this->e1Numnota = $e1Numnota;

        return $this;
    }

    public function getE1Serie(): ?string
    {
        return $this->e1Serie;
    }

    public function setE1Serie(?string $e1Serie): self
    {
        $this->e1Serie = $e1Serie;

        return $this;
    }

    public function getE1Status(): ?string
    {
        return $this->e1Status;
    }

    public function setE1Status(?string $e1Status): self
    {
        $this->e1Status = $e1Status;

        return $this;
    }

    public function getE1Origem(): ?string
    {
        return $this->e1Origem;
    }

    public function setE1Origem(?string $e1Origem): self
    {
        $this->e1Origem = $e1Origem;

        return $this;
    }

    public function getE1Identee(): ?string
    {
        return $this->e1Identee;
    }

    public function setE1Identee(?string $e1Identee): self
    {
        $this->e1Identee = $e1Identee;

        return $this;
    }

    public function getE1Numcart(): ?string
    {
        return $this->e1Numcart;
    }

    public function setE1Numcart(?string $e1Numcart): self
    {
        $this->e1Numcart = $e1Numcart;

        return $this;
    }

    public function getE1Fluxo(): ?string
    {
        return $this->e1Fluxo;
    }

    public function setE1Fluxo(?string $e1Fluxo): self
    {
        $this->e1Fluxo = $e1Fluxo;

        return $this;
    }

    public function getE1Descfin(): ?string
    {
        return $this->e1Descfin;
    }

    public function setE1Descfin(?string $e1Descfin): self
    {
        $this->e1Descfin = $e1Descfin;

        return $this;
    }

    public function getE1Diadesc(): ?string
    {
        return $this->e1Diadesc;
    }

    public function setE1Diadesc(?string $e1Diadesc): self
    {
        $this->e1Diadesc = $e1Diadesc;

        return $this;
    }

    public function getE1Tipodes(): ?string
    {
        return $this->e1Tipodes;
    }

    public function setE1Tipodes(?string $e1Tipodes): self
    {
        $this->e1Tipodes = $e1Tipodes;

        return $this;
    }

    public function getE1Cartao(): ?string
    {
        return $this->e1Cartao;
    }

    public function setE1Cartao(?string $e1Cartao): self
    {
        $this->e1Cartao = $e1Cartao;

        return $this;
    }

    public function getE1Cartval(): ?string
    {
        return $this->e1Cartval;
    }

    public function setE1Cartval(?string $e1Cartval): self
    {
        $this->e1Cartval = $e1Cartval;

        return $this;
    }

    public function getE1Cartaut(): ?string
    {
        return $this->e1Cartaut;
    }

    public function setE1Cartaut(?string $e1Cartaut): self
    {
        $this->e1Cartaut = $e1Cartaut;

        return $this;
    }

    public function getE1Adm(): ?string
    {
        return $this->e1Adm;
    }

    public function setE1Adm(?string $e1Adm): self
    {
        $this->e1Adm = $e1Adm;

        return $this;
    }

    public function getE1Vlrreal(): ?string
    {
        return $this->e1Vlrreal;
    }

    public function setE1Vlrreal(?string $e1Vlrreal): self
    {
        $this->e1Vlrreal = $e1Vlrreal;

        return $this;
    }

    public function getE1Transf(): ?string
    {
        return $this->e1Transf;
    }

    public function setE1Transf(?string $e1Transf): self
    {
        $this->e1Transf = $e1Transf;

        return $this;
    }

    public function getE1Bcochq(): ?string
    {
        return $this->e1Bcochq;
    }

    public function setE1Bcochq(?string $e1Bcochq): self
    {
        $this->e1Bcochq = $e1Bcochq;

        return $this;
    }

    public function getE1Agechq(): ?string
    {
        return $this->e1Agechq;
    }

    public function setE1Agechq(?string $e1Agechq): self
    {
        $this->e1Agechq = $e1Agechq;

        return $this;
    }

    public function getE1Ctachq(): ?string
    {
        return $this->e1Ctachq;
    }

    public function setE1Ctachq(?string $e1Ctachq): self
    {
        $this->e1Ctachq = $e1Ctachq;

        return $this;
    }

    public function getE1Numliq(): ?string
    {
        return $this->e1Numliq;
    }

    public function setE1Numliq(?string $e1Numliq): self
    {
        $this->e1Numliq = $e1Numliq;

        return $this;
    }

    public function getE1Ordpago(): ?string
    {
        return $this->e1Ordpago;
    }

    public function setE1Ordpago(?string $e1Ordpago): self
    {
        $this->e1Ordpago = $e1Ordpago;

        return $this;
    }

    public function getE1Inss(): ?string
    {
        return $this->e1Inss;
    }

    public function setE1Inss(?string $e1Inss): self
    {
        $this->e1Inss = $e1Inss;

        return $this;
    }

    public function getE1Filorig(): ?string
    {
        return $this->e1Filorig;
    }

    public function setE1Filorig(?string $e1Filorig): self
    {
        $this->e1Filorig = $e1Filorig;

        return $this;
    }

    public function getE1Tipofat(): ?string
    {
        return $this->e1Tipofat;
    }

    public function setE1Tipofat(?string $e1Tipofat): self
    {
        $this->e1Tipofat = $e1Tipofat;

        return $this;
    }

    public function getE1Tipoliq(): ?string
    {
        return $this->e1Tipoliq;
    }

    public function setE1Tipoliq(?string $e1Tipoliq): self
    {
        $this->e1Tipoliq = $e1Tipoliq;

        return $this;
    }

    public function getE1Csll(): ?string
    {
        return $this->e1Csll;
    }

    public function setE1Csll(?string $e1Csll): self
    {
        $this->e1Csll = $e1Csll;

        return $this;
    }

    public function getE1Cofins(): ?string
    {
        return $this->e1Cofins;
    }

    public function setE1Cofins(?string $e1Cofins): self
    {
        $this->e1Cofins = $e1Cofins;

        return $this;
    }

    public function getE1Pis(): ?string
    {
        return $this->e1Pis;
    }

    public function setE1Pis(?string $e1Pis): self
    {
        $this->e1Pis = $e1Pis;

        return $this;
    }

    public function getE1Flagfat(): ?string
    {
        return $this->e1Flagfat;
    }

    public function setE1Flagfat(?string $e1Flagfat): self
    {
        $this->e1Flagfat = $e1Flagfat;

        return $this;
    }

    public function getE1Mesbase(): ?string
    {
        return $this->e1Mesbase;
    }

    public function setE1Mesbase(?string $e1Mesbase): self
    {
        $this->e1Mesbase = $e1Mesbase;

        return $this;
    }

    public function getE1Anobase(): ?string
    {
        return $this->e1Anobase;
    }

    public function setE1Anobase(?string $e1Anobase): self
    {
        $this->e1Anobase = $e1Anobase;

        return $this;
    }

    public function getE1Plnucob(): ?string
    {
        return $this->e1Plnucob;
    }

    public function setE1Plnucob(?string $e1Plnucob): self
    {
        $this->e1Plnucob = $e1Plnucob;

        return $this;
    }

    public function getE1Codtext(): ?string
    {
        return $this->e1Codtext;
    }

    public function setE1Codtext(?string $e1Codtext): self
    {
        $this->e1Codtext = $e1Codtext;

        return $this;
    }

    public function getE1Codemp(): ?string
    {
        return $this->e1Codemp;
    }

    public function setE1Codemp(?string $e1Codemp): self
    {
        $this->e1Codemp = $e1Codemp;

        return $this;
    }

    public function getE1Matric(): ?string
    {
        return $this->e1Matric;
    }

    public function setE1Matric(?string $e1Matric): self
    {
        $this->e1Matric = $e1Matric;

        return $this;
    }

    public function getE1Txmoeda(): ?string
    {
        return $this->e1Txmoeda;
    }

    public function setE1Txmoeda(?string $e1Txmoeda): self
    {
        $this->e1Txmoeda = $e1Txmoeda;

        return $this;
    }

    public function getE1Acresc(): ?string
    {
        return $this->e1Acresc;
    }

    public function setE1Acresc(?string $e1Acresc): self
    {
        $this->e1Acresc = $e1Acresc;

        return $this;
    }

    public function getE1Sdacres(): ?string
    {
        return $this->e1Sdacres;
    }

    public function setE1Sdacres(?string $e1Sdacres): self
    {
        $this->e1Sdacres = $e1Sdacres;

        return $this;
    }

    public function getE1Decresc(): ?string
    {
        return $this->e1Decresc;
    }

    public function setE1Decresc(?string $e1Decresc): self
    {
        $this->e1Decresc = $e1Decresc;

        return $this;
    }

    public function getE1Sddecre(): ?string
    {
        return $this->e1Sddecre;
    }

    public function setE1Sddecre(?string $e1Sddecre): self
    {
        $this->e1Sddecre = $e1Sddecre;

        return $this;
    }

    public function getE1Multnat(): ?string
    {
        return $this->e1Multnat;
    }

    public function setE1Multnat(?string $e1Multnat): self
    {
        $this->e1Multnat = $e1Multnat;

        return $this;
    }

    public function getE1Msfil(): ?string
    {
        return $this->e1Msfil;
    }

    public function setE1Msfil(?string $e1Msfil): self
    {
        $this->e1Msfil = $e1Msfil;

        return $this;
    }

    public function getE1Msemp(): ?string
    {
        return $this->e1Msemp;
    }

    public function setE1Msemp(?string $e1Msemp): self
    {
        $this->e1Msemp = $e1Msemp;

        return $this;
    }

    public function getE1Projpms(): ?string
    {
        return $this->e1Projpms;
    }

    public function setE1Projpms(?string $e1Projpms): self
    {
        $this->e1Projpms = $e1Projpms;

        return $this;
    }

    public function getE1Desdobr(): ?string
    {
        return $this->e1Desdobr;
    }

    public function setE1Desdobr(?string $e1Desdobr): self
    {
        $this->e1Desdobr = $e1Desdobr;

        return $this;
    }

    public function getE1Nrdoc(): ?string
    {
        return $this->e1Nrdoc;
    }

    public function setE1Nrdoc(?string $e1Nrdoc): self
    {
        $this->e1Nrdoc = $e1Nrdoc;

        return $this;
    }

    public function getE1Modspb(): ?string
    {
        return $this->e1Modspb;
    }

    public function setE1Modspb(?string $e1Modspb): self
    {
        $this->e1Modspb = $e1Modspb;

        return $this;
    }

    public function getE1Idcnab(): ?string
    {
        return $this->e1Idcnab;
    }

    public function setE1Idcnab(?string $e1Idcnab): self
    {
        $this->e1Idcnab = $e1Idcnab;

        return $this;
    }

    public function getE1Plcoemp(): ?string
    {
        return $this->e1Plcoemp;
    }

    public function setE1Plcoemp(?string $e1Plcoemp): self
    {
        $this->e1Plcoemp = $e1Plcoemp;

        return $this;
    }

    public function getE1Pltpcoe(): ?string
    {
        return $this->e1Pltpcoe;
    }

    public function setE1Pltpcoe(?string $e1Pltpcoe): self
    {
        $this->e1Pltpcoe = $e1Pltpcoe;

        return $this;
    }

    public function getE1Codcor(): ?string
    {
        return $this->e1Codcor;
    }

    public function setE1Codcor(?string $e1Codcor): self
    {
        $this->e1Codcor = $e1Codcor;

        return $this;
    }

    public function getE1Parccss(): ?string
    {
        return $this->e1Parccss;
    }

    public function setE1Parccss(?string $e1Parccss): self
    {
        $this->e1Parccss = $e1Parccss;

        return $this;
    }

    public function getE1Userlgi(): ?string
    {
        return $this->e1Userlgi;
    }

    public function setE1Userlgi(?string $e1Userlgi): self
    {
        $this->e1Userlgi = $e1Userlgi;

        return $this;
    }

    public function getE1Userlga(): ?string
    {
        return $this->e1Userlga;
    }

    public function setE1Userlga(?string $e1Userlga): self
    {
        $this->e1Userlga = $e1Userlga;

        return $this;
    }

    public function getE1Recibo(): ?string
    {
        return $this->e1Recibo;
    }

    public function setE1Recibo(?string $e1Recibo): self
    {
        $this->e1Recibo = $e1Recibo;

        return $this;
    }

    public function getE1Dtacred(): ?string
    {
        return $this->e1Dtacred;
    }

    public function setE1Dtacred(?string $e1Dtacred): self
    {
        $this->e1Dtacred = $e1Dtacred;

        return $this;
    }

    public function getE1Emitchq(): ?string
    {
        return $this->e1Emitchq;
    }

    public function setE1Emitchq(?string $e1Emitchq): self
    {
        $this->e1Emitchq = $e1Emitchq;

        return $this;
    }

    public function getE1Codorca(): ?string
    {
        return $this->e1Codorca;
    }

    public function setE1Codorca(?string $e1Codorca): self
    {
        $this->e1Codorca = $e1Codorca;

        return $this;
    }

    public function getE1Codimov(): ?string
    {
        return $this->e1Codimov;
    }

    public function setE1Codimov(?string $e1Codimov): self
    {
        $this->e1Codimov = $e1Codimov;

        return $this;
    }

    public function getE1Fildeb(): ?string
    {
        return $this->e1Fildeb;
    }

    public function setE1Fildeb(?string $e1Fildeb): self
    {
        $this->e1Fildeb = $e1Fildeb;

        return $this;
    }

    public function getE1Numsol(): ?string
    {
        return $this->e1Numsol;
    }

    public function setE1Numsol(?string $e1Numsol): self
    {
        $this->e1Numsol = $e1Numsol;

        return $this;
    }

    public function getE1Numra(): ?string
    {
        return $this->e1Numra;
    }

    public function setE1Numra(?string $e1Numra): self
    {
        $this->e1Numra = $e1Numra;

        return $this;
    }

    public function getE1Serrec(): ?string
    {
        return $this->e1Serrec;
    }

    public function setE1Serrec(?string $e1Serrec): self
    {
        $this->e1Serrec = $e1Serrec;

        return $this;
    }

    public function getE1Inscric(): ?string
    {
        return $this->e1Inscric;
    }

    public function setE1Inscric(?string $e1Inscric): self
    {
        $this->e1Inscric = $e1Inscric;

        return $this;
    }

    public function getE1Dataedi(): ?string
    {
        return $this->e1Dataedi;
    }

    public function setE1Dataedi(?string $e1Dataedi): self
    {
        $this->e1Dataedi = $e1Dataedi;

        return $this;
    }

    public function getE1Codbar(): ?string
    {
        return $this->e1Codbar;
    }

    public function setE1Codbar(?string $e1Codbar): self
    {
        $this->e1Codbar = $e1Codbar;

        return $this;
    }

    public function getE1Chqdev(): ?string
    {
        return $this->e1Chqdev;
    }

    public function setE1Chqdev(?string $e1Chqdev): self
    {
        $this->e1Chqdev = $e1Chqdev;

        return $this;
    }

    public function getE1Coddig(): ?string
    {
        return $this->e1Coddig;
    }

    public function setE1Coddig(?string $e1Coddig): self
    {
        $this->e1Coddig = $e1Coddig;

        return $this;
    }

    public function getE1Lidescf(): ?string
    {
        return $this->e1Lidescf;
    }

    public function setE1Lidescf(?string $e1Lidescf): self
    {
        $this->e1Lidescf = $e1Lidescf;

        return $this;
    }

    public function getE1Vlbolsa(): ?string
    {
        return $this->e1Vlbolsa;
    }

    public function setE1Vlbolsa(?string $e1Vlbolsa): self
    {
        $this->e1Vlbolsa = $e1Vlbolsa;

        return $this;
    }

    public function getE1Numcrd(): ?string
    {
        return $this->e1Numcrd;
    }

    public function setE1Numcrd(?string $e1Numcrd): self
    {
        $this->e1Numcrd = $e1Numcrd;

        return $this;
    }

    public function getE1Vlfies(): ?string
    {
        return $this->e1Vlfies;
    }

    public function setE1Vlfies(?string $e1Vlfies): self
    {
        $this->e1Vlfies = $e1Vlfies;

        return $this;
    }

    public function getE1Debito(): ?string
    {
        return $this->e1Debito;
    }

    public function setE1Debito(?string $e1Debito): self
    {
        $this->e1Debito = $e1Debito;

        return $this;
    }

    public function getE1Ccd(): ?string
    {
        return $this->e1Ccd;
    }

    public function setE1Ccd(?string $e1Ccd): self
    {
        $this->e1Ccd = $e1Ccd;

        return $this;
    }

    public function getE1Itemd(): ?string
    {
        return $this->e1Itemd;
    }

    public function setE1Itemd(?string $e1Itemd): self
    {
        $this->e1Itemd = $e1Itemd;

        return $this;
    }

    public function getE1Clvldb(): ?string
    {
        return $this->e1Clvldb;
    }

    public function setE1Clvldb(?string $e1Clvldb): self
    {
        $this->e1Clvldb = $e1Clvldb;

        return $this;
    }

    public function getE1Credit(): ?string
    {
        return $this->e1Credit;
    }

    public function setE1Credit(?string $e1Credit): self
    {
        $this->e1Credit = $e1Credit;

        return $this;
    }

    public function getE1Ccc(): ?string
    {
        return $this->e1Ccc;
    }

    public function setE1Ccc(?string $e1Ccc): self
    {
        $this->e1Ccc = $e1Ccc;

        return $this;
    }

    public function getE1Itemc(): ?string
    {
        return $this->e1Itemc;
    }

    public function setE1Itemc(?string $e1Itemc): self
    {
        $this->e1Itemc = $e1Itemc;

        return $this;
    }

    public function getE1Clvlcr(): ?string
    {
        return $this->e1Clvlcr;
    }

    public function setE1Clvlcr(?string $e1Clvlcr): self
    {
        $this->e1Clvlcr = $e1Clvlcr;

        return $this;
    }

    public function getE1Descon1(): ?string
    {
        return $this->e1Descon1;
    }

    public function setE1Descon1(?string $e1Descon1): self
    {
        $this->e1Descon1 = $e1Descon1;

        return $this;
    }

    public function getE1Descon2(): ?string
    {
        return $this->e1Descon2;
    }

    public function setE1Descon2(?string $e1Descon2): self
    {
        $this->e1Descon2 = $e1Descon2;

        return $this;
    }

    public function getE1Dtdesc3(): ?string
    {
        return $this->e1Dtdesc3;
    }

    public function setE1Dtdesc3(?string $e1Dtdesc3): self
    {
        $this->e1Dtdesc3 = $e1Dtdesc3;

        return $this;
    }

    public function getE1Dtdesc1(): ?string
    {
        return $this->e1Dtdesc1;
    }

    public function setE1Dtdesc1(?string $e1Dtdesc1): self
    {
        $this->e1Dtdesc1 = $e1Dtdesc1;

        return $this;
    }

    public function getE1Dtdesc2(): ?string
    {
        return $this->e1Dtdesc2;
    }

    public function setE1Dtdesc2(?string $e1Dtdesc2): self
    {
        $this->e1Dtdesc2 = $e1Dtdesc2;

        return $this;
    }

    public function getE1Vlmulta(): ?string
    {
        return $this->e1Vlmulta;
    }

    public function setE1Vlmulta(?string $e1Vlmulta): self
    {
        $this->e1Vlmulta = $e1Vlmulta;

        return $this;
    }

    public function getE1Descon3(): ?string
    {
        return $this->e1Descon3;
    }

    public function setE1Descon3(?string $e1Descon3): self
    {
        $this->e1Descon3 = $e1Descon3;

        return $this;
    }

    public function getE1Motneg(): ?string
    {
        return $this->e1Motneg;
    }

    public function setE1Motneg(?string $e1Motneg): self
    {
        $this->e1Motneg = $e1Motneg;

        return $this;
    }

    public function getE1Sabtpis(): ?string
    {
        return $this->e1Sabtpis;
    }

    public function setE1Sabtpis(?string $e1Sabtpis): self
    {
        $this->e1Sabtpis = $e1Sabtpis;

        return $this;
    }

    public function getE1Sabtcof(): ?string
    {
        return $this->e1Sabtcof;
    }

    public function setE1Sabtcof(?string $e1Sabtcof): self
    {
        $this->e1Sabtcof = $e1Sabtcof;

        return $this;
    }

    public function getE1Sabtcsl(): ?string
    {
        return $this->e1Sabtcsl;
    }

    public function setE1Sabtcsl(?string $e1Sabtcsl): self
    {
        $this->e1Sabtcsl = $e1Sabtcsl;

        return $this;
    }

    public function getE1Forniss(): ?string
    {
        return $this->e1Forniss;
    }

    public function setE1Forniss(?string $e1Forniss): self
    {
        $this->e1Forniss = $e1Forniss;

        return $this;
    }

    public function getE1Partot(): ?string
    {
        return $this->e1Partot;
    }

    public function setE1Partot(?string $e1Partot): self
    {
        $this->e1Partot = $e1Partot;

        return $this;
    }

    public function getE1Sitfat(): ?string
    {
        return $this->e1Sitfat;
    }

    public function setE1Sitfat(?string $e1Sitfat): self
    {
        $this->e1Sitfat = $e1Sitfat;

        return $this;
    }

    public function getE1Basepis(): ?string
    {
        return $this->e1Basepis;
    }

    public function setE1Basepis(?string $e1Basepis): self
    {
        $this->e1Basepis = $e1Basepis;

        return $this;
    }

    public function getE1Basecof(): ?string
    {
        return $this->e1Basecof;
    }

    public function setE1Basecof(?string $e1Basecof): self
    {
        $this->e1Basecof = $e1Basecof;

        return $this;
    }

    public function getE1Basecsl(): ?string
    {
        return $this->e1Basecsl;
    }

    public function setE1Basecsl(?string $e1Basecsl): self
    {
        $this->e1Basecsl = $e1Basecsl;

        return $this;
    }

    public function getE1Vretiss(): ?string
    {
        return $this->e1Vretiss;
    }

    public function setE1Vretiss(?string $e1Vretiss): self
    {
        $this->e1Vretiss = $e1Vretiss;

        return $this;
    }

    public function getE1Parcirf(): ?string
    {
        return $this->e1Parcirf;
    }

    public function setE1Parcirf(?string $e1Parcirf): self
    {
        $this->e1Parcirf = $e1Parcirf;

        return $this;
    }

    public function getE1Scorgp(): ?string
    {
        return $this->e1Scorgp;
    }

    public function setE1Scorgp(?string $e1Scorgp): self
    {
        $this->e1Scorgp = $e1Scorgp;

        return $this;
    }

    public function getE1Fretiss(): ?string
    {
        return $this->e1Fretiss;
    }

    public function setE1Fretiss(?string $e1Fretiss): self
    {
        $this->e1Fretiss = $e1Fretiss;

        return $this;
    }

    public function getE1Txmdcor(): ?string
    {
        return $this->e1Txmdcor;
    }

    public function setE1Txmdcor(?string $e1Txmdcor): self
    {
        $this->e1Txmdcor = $e1Txmdcor;

        return $this;
    }

    public function getE1Satbirf(): ?string
    {
        return $this->e1Satbirf;
    }

    public function setE1Satbirf(?string $e1Satbirf): self
    {
        $this->e1Satbirf = $e1Satbirf;

        return $this;
    }

    public function getE1Tipreg(): ?string
    {
        return $this->e1Tipreg;
    }

    public function setE1Tipreg(?string $e1Tipreg): self
    {
        $this->e1Tipreg = $e1Tipreg;

        return $this;
    }

    public function getE1Conemp(): ?string
    {
        return $this->e1Conemp;
    }

    public function setE1Conemp(?string $e1Conemp): self
    {
        $this->e1Conemp = $e1Conemp;

        return $this;
    }

    public function getE1Vercon(): ?string
    {
        return $this->e1Vercon;
    }

    public function setE1Vercon(?string $e1Vercon): self
    {
        $this->e1Vercon = $e1Vercon;

        return $this;
    }

    public function getE1Subcon(): ?string
    {
        return $this->e1Subcon;
    }

    public function setE1Subcon(?string $e1Subcon): self
    {
        $this->e1Subcon = $e1Subcon;

        return $this;
    }

    public function getE1Versub(): ?string
    {
        return $this->e1Versub;
    }

    public function setE1Versub(?string $e1Versub): self
    {
        $this->e1Versub = $e1Versub;

        return $this;
    }

    public function getE1Pllote(): ?string
    {
        return $this->e1Pllote;
    }

    public function setE1Pllote(?string $e1Pllote): self
    {
        $this->e1Pllote = $e1Pllote;

        return $this;
    }

    public function getE1Plopelt(): ?string
    {
        return $this->e1Plopelt;
    }

    public function setE1Plopelt(?string $e1Plopelt): self
    {
        $this->e1Plopelt = $e1Plopelt;

        return $this;
    }

    public function getE1Codrda(): ?string
    {
        return $this->e1Codrda;
    }

    public function setE1Codrda(?string $e1Codrda): self
    {
        $this->e1Codrda = $e1Codrda;

        return $this;
    }

    public function getE1Formrec(): ?string
    {
        return $this->e1Formrec;
    }

    public function setE1Formrec(?string $e1Formrec): self
    {
        $this->e1Formrec = $e1Formrec;

        return $this;
    }

    public function getE1Bcocli(): ?string
    {
        return $this->e1Bcocli;
    }

    public function setE1Bcocli(?string $e1Bcocli): self
    {
        $this->e1Bcocli = $e1Bcocli;

        return $this;
    }

    public function getE1Agecli(): ?string
    {
        return $this->e1Agecli;
    }

    public function setE1Agecli(?string $e1Agecli): self
    {
        $this->e1Agecli = $e1Agecli;

        return $this;
    }

    public function getE1Ctacli(): ?string
    {
        return $this->e1Ctacli;
    }

    public function setE1Ctacli(?string $e1Ctacli): self
    {
        $this->e1Ctacli = $e1Ctacli;

        return $this;
    }

    public function getE1Parcfet(): ?string
    {
        return $this->e1Parcfet;
    }

    public function setE1Parcfet(?string $e1Parcfet): self
    {
        $this->e1Parcfet = $e1Parcfet;

        return $this;
    }

    public function getE1Fethab(): ?string
    {
        return $this->e1Fethab;
    }

    public function setE1Fethab(?string $e1Fethab): self
    {
        $this->e1Fethab = $e1Fethab;

        return $this;
    }

    public function getE1Mdcron(): ?string
    {
        return $this->e1Mdcron;
    }

    public function setE1Mdcron(?string $e1Mdcron): self
    {
        $this->e1Mdcron = $e1Mdcron;

        return $this;
    }

    public function getE1Mdcontr(): ?string
    {
        return $this->e1Mdcontr;
    }

    public function setE1Mdcontr(?string $e1Mdcontr): self
    {
        $this->e1Mdcontr = $e1Mdcontr;

        return $this;
    }

    public function getE1Mednume(): ?string
    {
        return $this->e1Mednume;
    }

    public function setE1Mednume(?string $e1Mednume): self
    {
        $this->e1Mednume = $e1Mednume;

        return $this;
    }

    public function getE1Mdplani(): ?string
    {
        return $this->e1Mdplani;
    }

    public function setE1Mdplani(?string $e1Mdplani): self
    {
        $this->e1Mdplani = $e1Mdplani;

        return $this;
    }

    public function getE1Mdparce(): ?string
    {
        return $this->e1Mdparce;
    }

    public function setE1Mdparce(?string $e1Mdparce): self
    {
        $this->e1Mdparce = $e1Mdparce;

        return $this;
    }

    public function getE1Mdrevis(): ?string
    {
        return $this->e1Mdrevis;
    }

    public function setE1Mdrevis(?string $e1Mdrevis): self
    {
        $this->e1Mdrevis = $e1Mdrevis;

        return $this;
    }

    public function getE1Nummov(): ?string
    {
        return $this->e1Nummov;
    }

    public function setE1Nummov(?string $e1Nummov): self
    {
        $this->e1Nummov = $e1Nummov;

        return $this;
    }

    public function getE1Numcon(): ?string
    {
        return $this->e1Numcon;
    }

    public function setE1Numcon(?string $e1Numcon): self
    {
        $this->e1Numcon = $e1Numcon;

        return $this;
    }

    public function getE1Sabtirf(): ?string
    {
        return $this->e1Sabtirf;
    }

    public function setE1Sabtirf(?string $e1Sabtirf): self
    {
        $this->e1Sabtirf = $e1Sabtirf;

        return $this;
    }

    public function getE1Aplvlmn(): ?string
    {
        return $this->e1Aplvlmn;
    }

    public function setE1Aplvlmn(?string $e1Aplvlmn): self
    {
        $this->e1Aplvlmn = $e1Aplvlmn;

        return $this;
    }

    public function getE1Nfeletr(): ?string
    {
        return $this->e1Nfeletr;
    }

    public function setE1Nfeletr(?string $e1Nfeletr): self
    {
        $this->e1Nfeletr = $e1Nfeletr;

        return $this;
    }

    public function getE1Nodia(): ?string
    {
        return $this->e1Nodia;
    }

    public function setE1Nodia(?string $e1Nodia): self
    {
        $this->e1Nodia = $e1Nodia;

        return $this;
    }

    public function getE1Diactb(): ?string
    {
        return $this->e1Diactb;
    }

    public function setE1Diactb(?string $e1Diactb): self
    {
        $this->e1Diactb = $e1Diactb;

        return $this;
    }

    public function getE1Vretirf(): ?string
    {
        return $this->e1Vretirf;
    }

    public function setE1Vretirf(?string $e1Vretirf): self
    {
        $this->e1Vretirf = $e1Vretirf;

        return $this;
    }

    public function getE1Retcntr(): ?string
    {
        return $this->e1Retcntr;
    }

    public function setE1Retcntr(?string $e1Retcntr): self
    {
        $this->e1Retcntr = $e1Retcntr;

        return $this;
    }

    public function getE1Mddesc(): ?string
    {
        return $this->e1Mddesc;
    }

    public function setE1Mddesc(?string $e1Mddesc): self
    {
        $this->e1Mddesc = $e1Mddesc;

        return $this;
    }

    public function getE1Mdboni(): ?string
    {
        return $this->e1Mdboni;
    }

    public function setE1Mdboni(?string $e1Mdboni): self
    {
        $this->e1Mdboni = $e1Mdboni;

        return $this;
    }

    public function getE1Mdmult(): ?string
    {
        return $this->e1Mdmult;
    }

    public function setE1Mdmult(?string $e1Mdmult): self
    {
        $this->e1Mdmult = $e1Mdmult;

        return $this;
    }

    public function getE1Doctef(): ?string
    {
        return $this->e1Doctef;
    }

    public function setE1Doctef(?string $e1Doctef): self
    {
        $this->e1Doctef = $e1Doctef;

        return $this;
    }

    public function getE1Numpro(): ?string
    {
        return $this->e1Numpro;
    }

    public function setE1Numpro(?string $e1Numpro): self
    {
        $this->e1Numpro = $e1Numpro;

        return $this;
    }

    public function getE1Indpro(): ?string
    {
        return $this->e1Indpro;
    }

    public function setE1Indpro(?string $e1Indpro): self
    {
        $this->e1Indpro = $e1Indpro;

        return $this;
    }

    public function getE1Parcfac(): ?string
    {
        return $this->e1Parcfac;
    }

    public function setE1Parcfac(?string $e1Parcfac): self
    {
        $this->e1Parcfac = $e1Parcfac;

        return $this;
    }

    public function getE1Parcfab(): ?string
    {
        return $this->e1Parcfab;
    }

    public function setE1Parcfab(?string $e1Parcfab): self
    {
        $this->e1Parcfab = $e1Parcfab;

        return $this;
    }

    public function getE1Fabov(): ?string
    {
        return $this->e1Fabov;
    }

    public function setE1Fabov(?string $e1Fabov): self
    {
        $this->e1Fabov = $e1Fabov;

        return $this;
    }

    public function getE1Facs(): ?string
    {
        return $this->e1Facs;
    }

    public function setE1Facs(?string $e1Facs): self
    {
        $this->e1Facs = $e1Facs;

        return $this;
    }

    public function getE1Codiss(): ?string
    {
        return $this->e1Codiss;
    }

    public function setE1Codiss(?string $e1Codiss): self
    {
        $this->e1Codiss = $e1Codiss;

        return $this;
    }

    public function getE1Baseirf(): ?string
    {
        return $this->e1Baseirf;
    }

    public function setE1Baseirf(?string $e1Baseirf): self
    {
        $this->e1Baseirf = $e1Baseirf;

        return $this;
    }

    public function getE1Baseins(): ?string
    {
        return $this->e1Baseins;
    }

    public function setE1Baseins(?string $e1Baseins): self
    {
        $this->e1Baseins = $e1Baseins;

        return $this;
    }

    public function getE1Baseiss(): ?string
    {
        return $this->e1Baseiss;
    }

    public function setE1Baseiss(?string $e1Baseiss): self
    {
        $this->e1Baseiss = $e1Baseiss;

        return $this;
    }

    public function getE1Vlminis(): ?string
    {
        return $this->e1Vlminis;
    }

    public function setE1Vlminis(?string $e1Vlminis): self
    {
        $this->e1Vlminis = $e1Vlminis;

        return $this;
    }

    public function getE1Prefori(): ?string
    {
        return $this->e1Prefori;
    }

    public function setE1Prefori(?string $e1Prefori): self
    {
        $this->e1Prefori = $e1Prefori;

        return $this;
    }

    public function getE1Titpai(): ?string
    {
        return $this->e1Titpai;
    }

    public function setE1Titpai(?string $e1Titpai): self
    {
        $this->e1Titpai = $e1Titpai;

        return $this;
    }

    public function getE1Jurfat(): ?string
    {
        return $this->e1Jurfat;
    }

    public function setE1Jurfat(?string $e1Jurfat): self
    {
        $this->e1Jurfat = $e1Jurfat;

        return $this;
    }

    public function getE1Relato(): ?string
    {
        return $this->e1Relato;
    }

    public function setE1Relato(?string $e1Relato): self
    {
        $this->e1Relato = $e1Relato;

        return $this;
    }

    public function getE1Multdia(): ?string
    {
        return $this->e1Multdia;
    }

    public function setE1Multdia(?string $e1Multdia): self
    {
        $this->e1Multdia = $e1Multdia;

        return $this;
    }

    public function getE1Turma(): ?string
    {
        return $this->e1Turma;
    }

    public function setE1Turma(?string $e1Turma): self
    {
        $this->e1Turma = $e1Turma;

        return $this;
    }

    public function getE1Idlan(): ?string
    {
        return $this->e1Idlan;
    }

    public function setE1Idlan(?string $e1Idlan): self
    {
        $this->e1Idlan = $e1Idlan;

        return $this;
    }

    public function getE1Nsutef(): ?string
    {
        return $this->e1Nsutef;
    }

    public function setE1Nsutef(?string $e1Nsutef): self
    {
        $this->e1Nsutef = $e1Nsutef;

        return $this;
    }

    public function getE1Idaplic(): ?string
    {
        return $this->e1Idaplic;
    }

    public function setE1Idaplic(?string $e1Idaplic): self
    {
        $this->e1Idaplic = $e1Idaplic;

        return $this;
    }

    public function getE1Procel(): ?string
    {
        return $this->e1Procel;
    }

    public function setE1Procel(?string $e1Procel): self
    {
        $this->e1Procel = $e1Procel;

        return $this;
    }

    public function getE1Noper(): ?string
    {
        return $this->e1Noper;
    }

    public function setE1Noper(?string $e1Noper): self
    {
        $this->e1Noper = $e1Noper;

        return $this;
    }

    public function getE1Servico(): ?string
    {
        return $this->e1Servico;
    }

    public function setE1Servico(?string $e1Servico): self
    {
        $this->e1Servico = $e1Servico;

        return $this;
    }

    public function getE1Idbolet(): ?string
    {
        return $this->e1Idbolet;
    }

    public function setE1Idbolet(?string $e1Idbolet): self
    {
        $this->e1Idbolet = $e1Idbolet;

        return $this;
    }

    public function getE1Vlbolp(): ?string
    {
        return $this->e1Vlbolp;
    }

    public function setE1Vlbolp(?string $e1Vlbolp): self
    {
        $this->e1Vlbolp = $e1Vlbolp;

        return $this;
    }

    public function getE1Ltcxa(): ?string
    {
        return $this->e1Ltcxa;
    }

    public function setE1Ltcxa(?string $e1Ltcxa): self
    {
        $this->e1Ltcxa = $e1Ltcxa;

        return $this;
    }

    public function getE1Numinsc(): ?string
    {
        return $this->e1Numinsc;
    }

    public function setE1Numinsc(?string $e1Numinsc): self
    {
        $this->e1Numinsc = $e1Numinsc;

        return $this;
    }

    public function getE1Seqbx(): ?string
    {
        return $this->e1Seqbx;
    }

    public function setE1Seqbx(?string $e1Seqbx): self
    {
        $this->e1Seqbx = $e1Seqbx;

        return $this;
    }

    public function getE1Tpdp(): ?string
    {
        return $this->e1Tpdp;
    }

    public function setE1Tpdp(?string $e1Tpdp): self
    {
        $this->e1Tpdp = $e1Tpdp;

        return $this;
    }

    public function getE1Partpdp(): ?string
    {
        return $this->e1Partpdp;
    }

    public function setE1Partpdp(?string $e1Partpdp): self
    {
        $this->e1Partpdp = $e1Partpdp;

        return $this;
    }

    public function getE1Codirrf(): ?string
    {
        return $this->e1Codirrf;
    }

    public function setE1Codirrf(?string $e1Codirrf): self
    {
        $this->e1Codirrf = $e1Codirrf;

        return $this;
    }

    public function getE1Idmov(): ?string
    {
        return $this->e1Idmov;
    }

    public function setE1Idmov(?string $e1Idmov): self
    {
        $this->e1Idmov = $e1Idmov;

        return $this;
    }

    public function getE1Prinss(): ?string
    {
        return $this->e1Prinss;
    }

    public function setE1Prinss(?string $e1Prinss): self
    {
        $this->e1Prinss = $e1Prinss;

        return $this;
    }

    public function getE1Tpdesc(): ?string
    {
        return $this->e1Tpdesc;
    }

    public function setE1Tpdesc(?string $e1Tpdesc): self
    {
        $this->e1Tpdesc = $e1Tpdesc;

        return $this;
    }

    public function getE1Ratfin(): ?string
    {
        return $this->e1Ratfin;
    }

    public function setE1Ratfin(?string $e1Ratfin): self
    {
        $this->e1Ratfin = $e1Ratfin;

        return $this;
    }

    public function getE1Priss(): ?string
    {
        return $this->e1Priss;
    }

    public function setE1Priss(?string $e1Priss): self
    {
        $this->e1Priss = $e1Priss;

        return $this;
    }

    public function getE1Famad(): ?string
    {
        return $this->e1Famad;
    }

    public function setE1Famad(?string $e1Famad): self
    {
        $this->e1Famad = $e1Famad;

        return $this;
    }

    public function getE1Parcfam(): ?string
    {
        return $this->e1Parcfam;
    }

    public function setE1Parcfam(?string $e1Parcfam): self
    {
        $this->e1Parcfam = $e1Parcfam;

        return $this;
    }

    public function getE1Fmpeq(): ?string
    {
        return $this->e1Fmpeq;
    }

    public function setE1Fmpeq(?string $e1Fmpeq): self
    {
        $this->e1Fmpeq = $e1Fmpeq;

        return $this;
    }

    public function getE1Parcfmp(): ?string
    {
        return $this->e1Parcfmp;
    }

    public function setE1Parcfmp(?string $e1Parcfmp): self
    {
        $this->e1Parcfmp = $e1Parcfmp;

        return $this;
    }

    public function getE1PBanri(): ?string
    {
        return $this->e1PBanri;
    }

    public function setE1PBanri(?string $e1PBanri): self
    {
        $this->e1PBanri = $e1PBanri;

        return $this;
    }

    public function getDELET(): ?string
    {
        return $this->dELET;
    }

    public function setDELET(?string $dELET): self
    {
        $this->dELET = $dELET;

        return $this;
    }

    public function getRECNO(): ?string
    {
        return $this->rECNO;
    }

    public function setRECNO(?string $rECNO): self
    {
        $this->rECNO = $rECNO;

        return $this;
    }

    public function getRECDEL(): ?string
    {
        return $this->rECDEL;
    }

    public function setRECDEL(?string $rECDEL): self
    {
        $this->rECDEL = $rECDEL;

        return $this;
    }

    public function getE1PSiste(): ?string
    {
        return $this->e1PSiste;
    }

    public function setE1PSiste(?string $e1PSiste): self
    {
        $this->e1PSiste = $e1PSiste;

        return $this;
    }

    public function getE1PRef(): ?string
    {
        return $this->e1PRef;
    }

    public function setE1PRef(?string $e1PRef): self
    {
        $this->e1PRef = $e1PRef;

        return $this;
    }

    public function getE1PBol(): ?string
    {
        return $this->e1PBol;
    }

    public function setE1PBol(?string $e1PBol): self
    {
        $this->e1PBol = $e1PBol;

        return $this;
    }

    public function getE1Codret(): ?string
    {
        return $this->e1Codret;
    }

    public function setE1Codret(?string $e1Codret): self
    {
        $this->e1Codret = $e1Codret;

        return $this;
    }

    public function getE1Ctrbco(): ?string
    {
        return $this->e1Ctrbco;
    }

    public function setE1Ctrbco(?string $e1Ctrbco): self
    {
        $this->e1Ctrbco = $e1Ctrbco;

        return $this;
    }

    public function getE1Fundesa(): ?string
    {
        return $this->e1Fundesa;
    }

    public function setE1Fundesa(?string $e1Fundesa): self
    {
        $this->e1Fundesa = $e1Fundesa;

        return $this;
    }

    public function getE1Imamt(): ?string
    {
        return $this->e1Imamt;
    }

    public function setE1Imamt(?string $e1Imamt): self
    {
        $this->e1Imamt = $e1Imamt;

        return $this;
    }

    public function getE1Fasemt(): ?string
    {
        return $this->e1Fasemt;
    }

    public function setE1Fasemt(?string $e1Fasemt): self
    {
        $this->e1Fasemt = $e1Fasemt;

        return $this;
    }

    public function getE1Parfund(): ?string
    {
        return $this->e1Parfund;
    }

    public function setE1Parfund(?string $e1Parfund): self
    {
        $this->e1Parfund = $e1Parfund;

        return $this;
    }

    public function getE1Parima(): ?string
    {
        return $this->e1Parima;
    }

    public function setE1Parima(?string $e1Parima): self
    {
        $this->e1Parima = $e1Parima;

        return $this;
    }

    public function getE1Parfase(): ?string
    {
        return $this->e1Parfase;
    }

    public function setE1Parfase(?string $e1Parfase): self
    {
        $this->e1Parfase = $e1Parfase;

        return $this;
    }
}
