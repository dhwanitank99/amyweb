<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 26/02/20
 * Time: 11:35 AM
 */

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;


/**
 * Class CustomPostTypeAdditionalFields
 * @package App\Entities
 * @ORM\Entity
 * @ORM\Table(name="cpt_additional_fields")
 */
class CustomPostTypeAdditionalFields{

    /**
     * @var
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @var
     * @ORM\Column(type="string",length=200)
     */
    private $label;

    /**
     * @var
     * @ORM\Column(type="string", length=200)
     */
    private $fieldName;
    /**
     * @var
     * @ORM\Column(type="string", length=100)
     */
    private $type;
    /**
     * @var
     * @ORM\Column(type="string", length=2000, nullable=true)
     */
    private $fieldValue;
    /**
     * @var
     * @ORM\Column(type="boolean")
     */
    private $isRequired;
    /**
     * @var
     * @ORM\ManyToOne(targetEntity="CustomPostType", inversedBy="additionalFields")
     * @ORM\JoinColumn(name="cpt_id", referencedColumnName="id")
     */
    private $customPostType;

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
    public function getFieldName()
    {
        return $this->fieldName;
    }

    /**
     * @param mixed $key
     */
    public function setFieldName($fieldName)
    {
        $this->fieldName = $fieldName;
    }


    /**
     * @return Value
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param Value $type
     */
    public function setType($type)
    {
        $this->type = $type;
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
    public function isRequired()
    {
        return $this->isRequired;
    }

    /**
     * @param mixed $isRequired
     */
    public function setIsRequired($isRequired)
    {
        $this->isRequired = $isRequired;
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


}