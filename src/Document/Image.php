<?php


namespace App\Document;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Symfony\Component\Validator\Constraints as Assert;
use ODM\EmbeddedDocument;

/**
 *  @ApiResource
 *
 *  @ODM\EmbeddedDocument
 */
class Image
{

    /**
     * @ODM\Id(strategy="NONE", type="integer")
     */
    private $id;

    /**
     * @ODM\Field(type="string")
     * @Assert\NotBlank
     */
    private $original;

    /**
     * @Assert\Url(
     *    protocols = {"http", "https", "ftp"},
     *     message = "The medium image url '{{ value }}' is not a valid url",
     * )
     */
    private $medium;

    /**
     * @Assert\Url(
     *    protocols = {"http", "https", "ftp"},
     *     message = "The thumbnail image url '{{ value }}' is not a valid url",
     * )
     */
    private $thumbnail;

    /**
     * @return mixed
     */
    public function getOriginal()
    {
        return $this->original;
    }

    /**
     * @param mixed $original
     */
    public function setOriginal($original): void
    {
        $this->original = $original;
    }

    /**
     * @return mixed
     */
    public function getMedium()
    {
        return $this->medium;
    }

    /**
     * @param mixed $medium
     */
    public function setMedium($medium): void
    {
        $this->medium = $medium;
    }

    /**
     * @return mixed
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * @param mixed $thumbnail
     */
    public function setThumbnail($thumbnail): void
    {
        $this->thumbnail = $thumbnail;
    }

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




}