<?php


namespace App\Document;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 *  @ApiResource
 *
 *  @ODM\Document
 */
class Category
{

    /**
     * @ODM\Id(strategy="NONE", type="integer")
     */
    private $id;


    /**
     * @ODM\Field(type="string")
     * @Assert\NotBlank
     */
    private $name;


    /**
     * @Assert\Url(
     *    protocols = {"http", "https"},
     *     message = "The category url '{{ value }}' is not a valid url",
     * )
     */
    private $url;

    /**
     * @ODM\ReferenceMany(targetDocument=Product::class, inversedBy="categories", storeAs="id")
     */
    private $products;

    /**
     * @return mixed
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @param mixed $products
     */
    public function setProducts($products): void
    {
        $this->products = $products;
    }




    /**
     * @return mixed
     */
    public function getId()
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
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url): void
    {
        $this->url = $url;
    }




}