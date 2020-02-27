<?php

namespace App\Document;


use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Doctrine\ODM\MongoDB\Mapping\Annotations\Document;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * @ApiResource
 *
 * @Document
 */
class Product
{

    /**
     * @ODM\Id(strategy="NONE", type="integer")
     */
    private $id;

    /**
     * @ODM\Field(type="string")
     * @Assert\NotBlank
     */
    public $name;


    /**
     * @ODM\ReferenceMany(targetDocument=Price::class, mappedBy="product", cascade={"persist"}, storeAs="id")
     */
    private $prices;


    public function __construct()
    {
        $this->prices = new ArrayCollection();
    }


    /**
     * @ODM\Field(type="float")
     * @Assert\NotBlank
     */
    private $shipPrice;


    /**
     * @ODM\Field(type="boolean")
     */
    private $kargomat;


    /**
     * @ODM\Field(type="boolean")
     */
    private $wholesale;


    /**
     * @ODM\Field(type="string")
     */
    private $description;


    /**
     * @ODM\Field(type="integer")
     */
    private $stock;


    /**
     * @ODM\ReferenceMany(targetDocument=Comment::class, mappedBy="product", cascade={"persist"}, storeAs="id")
     */
    private $comments;


    /**
     * @ODM\ReferenceOne(targetDocument=Shop::class, mappedBy="product", cascade={"persist"}, storeAs="id")
     */
    private $shop;

    /**
     * @ODM\ReferenceMany(targetDocument=Image::class, mappedBy="product", cascade={"persist"}, storeAs="id")
     */
    private $images;


    /**
     * @ODM\ReferenceMany(targetDocument=Category::class, inversedBy="products", storeAs="id")
     */
    private $categories;

    /**
     * @return mixed
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * @param mixed $categories
     */
    public function setCategory($categories): void
    {
        $this->categories = $categories;
    }

    /**
     * @return mixed
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @param mixed $images
     */
    public function setImages($images): void
    {
        $this->images = $images;
    }


    /**
     * @return mixed
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param mixed $comments
     */
    public function setComments($comments): void
    {
        $this->comments = $comments;
    }

    /**
     * @return mixed
     */
    public function getShop()
    {
        return $this->shop;
    }

    /**
     * @param mixed $shop
     */
    public function setShop($shop): void
    {
        $this->shop = $shop;
    }


    /**
     * @return ArrayCollection
     */
    public function getPrice(): ArrayCollection
    {
        return $this->price;
    }

    /**
     * @param ArrayCollection $price
     */
    public function setPrice(ArrayCollection $price): void
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getKargomat()
    {
        return $this->kargomat;
    }

    /**
     * @param mixed $kargomat
     */
    public function setKargomat($kargomat): void
    {
        $this->kargomat = $kargomat;
    }

    /**
     * @return mixed
     */
    public function getWholesale()
    {
        return $this->wholesale;
    }

    /**
     * @param mixed $wholesale
     */
    public function setWholesale($wholesale): void
    {
        $this->wholesale = $wholesale;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }


    /**
     * @return mixed
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * @param mixed $stock
     */
    public function setStock($stock): void
    {
        $this->stock = $stock;
    }


    /**
     * @return mixed
     */
    public function getShipPrice()
    {
        return $this->shipPrice;
    }

    /**
     * @param mixed $shipPrice
     */
    public function setShipPrice($shipPrice): void
    {
        $this->shipPrice = $shipPrice;
    }


    /**
     * @return mixed
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return ArrayCollection
     */
    public function getPrices(): ArrayCollection
    {
        return $this->prices;
    }

    /**
     * @param ArrayCollection $prices
     */
    public function setPrices(ArrayCollection $prices): void
    {
        $this->prices = $prices;
    }


}