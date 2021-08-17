<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 26/02/20
 * Time: 11:28 AM
 */

namespace App\Entities;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class CustomPostTypeController
 * @package App\Entities
 * @ORM\Entity
 * @ORM\Table(name="custom_post_type")
 */
class CustomPostType{

    /**
     * @var
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @var
     * @ORM\Column(type="string", length=200)
     */
    private $name;
    /**
     * @var
     * @ORM\Column(type="boolean")
     */
    private $status;
    /**
     * @var
     * @ORM\Column(type="string", length=200, unique=true)
     */
    private $slug;
    /**
     * @var
     * @ORM\Column(type="string", length=2000, nullable=true)
     */
    private $description;
    /**
     * @var
     * @ORM\Column(type="datetime")
     */
    private $createdAt;
    /**
     * @var
     * @ORM\Column(type="datetime")
     */
    private $updatedAt;
    /**
     * @var
     * @ORM\OneToMany(targetEntity="CustomPostTypeAdditionalFields", mappedBy="customPostType", cascade={"persist"}, fetch="EAGER")
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
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
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param mixed $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
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
    public function setDescription($description)
    {
        $this->description = $description;
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

    public function addAdditionalFields(CustomPostTypeAdditionalFields $customPostTypeAdditionalFields){
        if(!$this->additionalFields->contains($customPostTypeAdditionalFields)){
            $customPostTypeAdditionalFields->setCustomPostType($this);
            $this->additionalFields->add($customPostTypeAdditionalFields);
        }
    }


}