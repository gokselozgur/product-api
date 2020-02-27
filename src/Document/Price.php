<?php


namespace App\Document;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 *  @ApiResource
 *
 *  @ODM\EmbeddedDocument
 */

class Price
{

    /**
     * @ODM\Id(strategy="NONE", type="integer")
     */
    private $id;

    /**
     * @ODM\Field(type="float")
     * @Assert\NotBlank
     * @Assert\Range(min=0, minMessage="The price must be superior to 0.")
     * @Assert\Type(type="float")
     */
    public $price;

    /**
     * @Assert\Type(type="integer")
     */
    private $discount;

    /**
     * @ODM\ReferenceOne(targetDocument=Product::class, inversedBy="price", storeAs="id")
     */
    private $product;

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param mixed $product
     */
    public function setProduct($product): void
    {
        $this->product = $product;
    }




    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    public function getDiscount(): ?int
    {
        return $this->discount;
    }

    public function setDiscount(?int $discount): self
    {
        $this->discount = $discount;

        return $this;
    }









}