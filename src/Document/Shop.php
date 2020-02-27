<?php


namespace App\Document;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use ODM\EmbeddedDocument;
use Doctrine\ODM\MongoDB\Mapping\Annotations\Field;
use Symfony\Component\Validator\Constraints as Assert;



/**
 *  @ApiResource
 *
 *  @ODM\EmbeddedDocument
 */
class Shop
{
    /**
     * @ODM\Id(strategy="NONE", type="integer")
     */
    private $id;

    /** @Field(type="string") */
    private $logo;

    /** @ODM\Field(type="string") */
    private $name;

    /**
     * @Assert\Url(
     *    protocols = {"http", "https", "ftp"},
     *     message = "The shop url '{{ value }}' is not a valid url",
     * )
     */
    private $url;


    /**
     * @ODM\Field(type="integer")
     ** @Assert\Range(min=0, max=100)
     */
    private $rating;

    /** @ODM\Field(type="integer") */
    private $ratingCount;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param mixed $logo
     */
    public function setLogo($logo): void
    {
        $this->logo = $logo;
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

    /**
     * @return mixed
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param mixed $rating
     */
    public function setRating($rating): void
    {
        $this->rating = $rating;
    }

    /**
     * @return mixed
     */
    public function getRatingCount()
    {
        return $this->ratingCount;
    }

    /**
     * @param mixed $ratingCount
     */
    public function setRatingCount($ratingCount): void
    {
        $this->ratingCount = $ratingCount;
    }




}