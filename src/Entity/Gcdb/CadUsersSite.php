<?php

namespace App\Entity\Gcdb;

class CadUsersSite
{
    private $id;

    private $cadUser;

    private $site;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCadUser(): ?int
    {
        return $this->cadUser;
    }

    public function setCadUser(?int $cadUser): self
    {
        $this->cadUser = $cadUser;

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
}
