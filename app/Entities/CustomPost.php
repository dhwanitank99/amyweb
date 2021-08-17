<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 26/02/20
 * Time: 3:29 PM
 */

namespace App\Entities;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;


/**
 * Class CustomPost
 * @package App\Entities
 * @ORM\Entity
 * @ORM\Table(name="custom_posts")
 */
class CustomPost{
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
     * @ORM\Column(type="string",name="link",length=200)
     */
    private $link;
    
    /**
     * @var
     * @ORM\Column(type="string",name="content", length=3000, nullable=true)
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
     * @var
     * @ORM\ManyToOne(targetEntity="CustomPostType")
     * @ORM\JoinColumn(name="custom_post_type_id", referencedColumnName="id")
     */
    private $customPostType;

    /**
     * @var
     * @ORM\OneToMany(targetEntity="CustomPostAdditionalFields", mappedBy="customPost", cascade="persist", fetch="EAGER")
     */
    private $additionalFields;


    public function __construct(){
        $this->additionalFields = new ArrayCollection();
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
     * @return mixed
     */
    public function getLink()
    {
        return $this->link;
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

    /**
     * @return mixed
     */
    public function getCustomPostType()
    {
        return $this->customPostType;
    }

    /**
     * @param mixed $customPostType
     */
    public function setCustomPostType($customPostType)
    {
        $this->customPostType = $customPostType;
    }


    /**
     * @return mixed
     */
    public function getAdditionalFields()
    {
        return $this->additionalFields;
    }

    /**
     * @param mixed $additionalFields
     */
    public function setAdditionalFields($additionalFields)
    {
        $this->additionalFields = $additionalFields;
    }

    public function addAdditionalFields(CustomPostAdditionalFields $customPostAdditionalFields){
        if(!$this->additionalFields->contains($customPostAdditionalFields)){
            $customPostAdditionalFields->setCustomPost($this);
            $this->additionalFields->add($customPostAdditionalFields);
        }
    }
}