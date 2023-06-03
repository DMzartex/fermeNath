<?php

namespace App\Entity;

use App\Repository\OrderRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrderRepository::class)]
#[ORM\Table(name: '`order`')]
class Order
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $pouletScie = null;

    #[ORM\Column(nullable: true)]
    private ?int $pouletFilet = null;

    #[ORM\Column(nullable: true)]
    private ?int $pouletDecoupe = null;
    
    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?delivery $deliveryId = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?customer $customerId = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPouletScie(): ?int
    {
        return $this->pouletScie;
    }

    public function setPouletScie(?int $pouletScie): self
    {
        $this->pouletScie = $pouletScie;

        return $this;
    }

    public function getPouletFilet(): ?int
    {
        return $this->pouletFilet;
    }

    public function setPouletFilet(?int $pouletFilet): self
    {
        $this->pouletFilet = $pouletFilet;

        return $this;
    }

    public function getPouletDecoupe(): ?int
    {
        return $this->pouletDecoupe;
    }

    public function setPouletDecoupe(?int $pouletDecoupe): self
    {
        $this->pouletDecoupe = $pouletDecoupe;

        return $this;
    }

    public function getDeliveryId(): ?delivery
    {
        return $this->deliveryId;
    }

    public function setDeliveryId(?delivery $deliveryId): self
    {
        $this->deliveryId = $deliveryId;

        return $this;
    }

    public function getCustomerId(): ?customer
    {
        return $this->customerId;
    }

    public function setCustomerId(?customer $customerId): self
    {
        $this->customerId = $customerId;

        return $this;
    }





}
