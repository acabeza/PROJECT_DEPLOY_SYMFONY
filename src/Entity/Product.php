<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 */
class Product
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $nameProduct;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $ref_product;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameProduct(): ?string
    {
        return $this->nameProduct;
    }

    public function getRefProduct(): ?string
    {
        return $this->ref_product;
    }

    public function setNameProduct(string $nameProduct): self
    {
        $this->nameProduct = $nameProduct;

        return $this;
    }
    
    public function setRefProduct(string $ref_product): self
    {
        $this->ref_product = $ref_product;

        return $this;
    }
}
