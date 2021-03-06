<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CartItemRepository")
 */
class CartItem
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Serializer\Groups("cart")
     */
    private $id;


    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Menu")
     * @Serializer\Groups("cart")
     */
    private $menu;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Cart", inversedBy="items")
     */
    private $cart;


    /**
     * @ORM\Column(name="quantity", type="integer", nullable=false)
     * @Serializer\Groups("cart")
     */
    private $quantity;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getMenu(): ?Menu
    {
        return $this->menu;
    }

    public function setMenu(?Menu $menu): self
    {
        $this->menu = $menu;

        return $this;
    }

    public function getCart(): ?Cart
    {
        return $this->cart;
    }

    public function setCart(?Cart $cart): self
    {
        $this->cart = $cart;

        return $this;
    }
}
