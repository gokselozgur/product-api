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
class Comment
{
    /**
     * @ODM\Id(strategy="NONE", type="integer")
     */
    private $id;


    /**
     * @ODM\Field(type="string")
     * @Assert\NotBlank
     */
    private $username;

    /**
     * @ODM\Field(type="string")
     *
     */
    private $comment;

    /**
     * @ODM\Field(type="string")
     * @Assert\NotBlank
     */
    private $date;

    /**
     * @ODM\Field(type="integer")
     */
    private $rate;

    /**
     * @ODM\Field(type="integer")
     */
    private $like;

    /**
     * @ODM\Field(type="integer")
     */
    private $dislike;

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
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username): void
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param mixed $comment
     */
    public function setComment($comment): void
    {
        $this->comment = $comment;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate(string $date): void
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @param mixed $rate
     */
    public function setRate($rate): void
    {
        $this->rate = $rate;
    }

    /**
     * @return mixed
     */
    public function getLike()
    {
        return $this->like;
    }

    /**
     * @param mixed $like
     */
    public function setLike($like): void
    {
        $this->like = $like;
    }

    /**
     * @return mixed
     */
    public function getDislike()
    {
        return $this->dislike;
    }

    /**
     * @param mixed $dislike
     */
    public function setDislike($dislike): void
    {
        $this->dislike = $dislike;
    }





}