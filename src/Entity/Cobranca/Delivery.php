<?php

namespace App\Entity\Cobranca;

class Delivery
{
    private $idDelivery;

    private $createdAt;

    private $returnedAt;

    private $deliveryFilenamePedidos;

    private $deliveryFilenameProdutos;

    private $deliveryFilenameClientes;

    public function getIdDelivery(): ?int
    {
        return $this->idDelivery;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getReturnedAt(): ?\DateTimeInterface
    {
        return $this->returnedAt;
    }

    public function setReturnedAt(?\DateTimeInterface $returnedAt): self
    {
        $this->returnedAt = $returnedAt;

        return $this;
    }

    public function getDeliveryFilenamePedidos(): ?string
    {
        return $this->deliveryFilenamePedidos;
    }

    public function setDeliveryFilenamePedidos(string $deliveryFilenamePedidos): self
    {
        $this->deliveryFilenamePedidos = $deliveryFilenamePedidos;

        return $this;
    }

    public function getDeliveryFilenameProdutos(): ?string
    {
        return $this->deliveryFilenameProdutos;
    }

    public function setDeliveryFilenameProdutos(string $deliveryFilenameProdutos): self
    {
        $this->deliveryFilenameProdutos = $deliveryFilenameProdutos;

        return $this;
    }

    public function getDeliveryFilenameClientes(): ?string
    {
        return $this->deliveryFilenameClientes;
    }

    public function setDeliveryFilenameClientes(string $deliveryFilenameClientes): self
    {
        $this->deliveryFilenameClientes = $deliveryFilenameClientes;

        return $this;
    }
}
