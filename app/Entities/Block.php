<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 27/02/20
 * Time: 12:54 PM
 */

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Block
 * @package App\Entities
 * @ORM\Entity
 * @ORM\Table(name="blocks")
 */
class Block{

    /**
     * @var
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var
     * @ORM\Column(type="string",name="title",length=255)
     */
    private $title;
    /**
     * @var
     * @ORM\Column(type="string",name="content", length=6000, nullable=true)
     */
    private $content;
    /**
     * @var
     * @ORM\Column(type="string", name="featured_image", length=200, nullable=true)
     */
    private $featuredImage;
    /**
     * @var
     * @ORM\Column(type="boolean", name="status")
     */
    private $status;
    /**
     * @var
     * @ORM\Column(type="datetime", name="created_at")
     */
    private $createdAt;
    /**
     * @var
     * @ORM\Column(type="datetime", name="updated_at")
     */
    private $updatedAt;

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
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getFeaturedImage()
    {
        return $this->featuredImage;
    }

    /**
     * @param mixed $featuredImage
     */
    public function setFeaturedImage($featuredImage)
    {
        $this->featuredImage = $featuredImage;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param mixed $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

}