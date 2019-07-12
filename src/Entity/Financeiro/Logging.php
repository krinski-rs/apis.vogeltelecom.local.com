<?php

namespace App\Entity\Financeiro;

class Logging
{
    private $loggCodigoid;

    private $usuaCodigoid;

    private $loggDatainc;

    private $loggIp;

    private $loggOldendata;

    private $loggDatabase;

    private $loggTable;

    private $loggTableid;

    private $tipologgCodigoid;

    public function getLoggCodigoid(): ?int
    {
        return $this->loggCodigoid;
    }

    public function getUsuaCodigoid(): ?int
    {
        return $this->usuaCodigoid;
    }

    public function setUsuaCodigoid(?int $usuaCodigoid): self
    {
        $this->usuaCodigoid = $usuaCodigoid;

        return $this;
    }

    public function getLoggDatainc(): ?\DateTimeInterface
    {
        return $this->loggDatainc;
    }

    public function setLoggDatainc(\DateTimeInterface $loggDatainc): self
    {
        $this->loggDatainc = $loggDatainc;

        return $this;
    }

    public function getLoggIp(): ?string
    {
        return $this->loggIp;
    }

    public function setLoggIp(string $loggIp): self
    {
        $this->loggIp = $loggIp;

        return $this;
    }

    public function getLoggOldendata(): ?string
    {
        return $this->loggOldendata;
    }

    public function setLoggOldendata(?string $loggOldendata): self
    {
        $this->loggOldendata = $loggOldendata;

        return $this;
    }

    public function getLoggDatabase(): ?string
    {
        return $this->loggDatabase;
    }

    public function setLoggDatabase(?string $loggDatabase): self
    {
        $this->loggDatabase = $loggDatabase;

        return $this;
    }

    public function getLoggTable(): ?string
    {
        return $this->loggTable;
    }

    public function setLoggTable(?string $loggTable): self
    {
        $this->loggTable = $loggTable;

        return $this;
    }

    public function getLoggTableid(): ?int
    {
        return $this->loggTableid;
    }

    public function setLoggTableid(?int $loggTableid): self
    {
        $this->loggTableid = $loggTableid;

        return $this;
    }

    public function getTipologgCodigoid(): ?Tipologging
    {
        return $this->tipologgCodigoid;
    }

    public function setTipologgCodigoid(?Tipologging $tipologgCodigoid): self
    {
        $this->tipologgCodigoid = $tipologgCodigoid;

        return $this;
    }
}
