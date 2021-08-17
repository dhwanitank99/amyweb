<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 27/02/20
 * Time: 1:39 PM
 */

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class CustomPostAdditionalFields
 * @package App\Entities
 * @ORM\Entity
 * @ORM\Table(name="custom_post_additional_fields")
 */
class CustomPostAdditionalFields{
    /**
     * @var
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var
     * @ORM\Column(type="string", name="label", length=200)
     */
    private $label;

    /**
     * @var
     * @ORM\Column(type="string", length=200)
     */
    private $fieldKey;

    /**
     * @var
     * @ORM\Column(type="string", length=3000)
     */
    private $fieldValue;

    /**
     * @var
     * @ORM\ManyToOne(targetEntity="CustomPost", inversedBy="additionalFields")
     * @ORM\JoinColumn(name="custom_post_id", referencedColumnName="id")
     */
    private $customPost;

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
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param mixed $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

    /**
     * @return mixed
     */
    public function getFieldKey()
    {
        return $this->fieldKey;
    }

    /**
     * @param mixed $key
     */
    public function setFieldKey($fieldKey)
    {
        $this->fieldKey = $fieldKey;
    }

    /**
     * @return mixed
     */
    public function getFieldValue()
    {
        return $this->fieldValue;
    }

    /**
     * @param mixed $value
     */
    public function setFieldValue($fieldValue)
    {
        $this->fieldValue = $fieldValue;
    }

    /**
     * @return mixed
     */
    public function getCustomPost()
    {
        return $this->customPost;
    }

    /**
     * @param mixed $customPost
     */
    public function setCustomPost($customPost)
    {
        $this->customPost = $customPost;
    }


}