<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 22/01/20
 * Time: 3:09 PM
 */

namespace App\Entities;


use Doctrine\ORM\Mapping as ORM;

/**
 * Class Company
 * @package App\Entities
 * @ORM\Embeddable
 */
class Company
{

    /**
     * @var
     * @ORM\Column(type="string")
     */
    private $name;
    /**
     * @var
     * @ORM\Column(type="string")
     */
    private $contactPersonName;
    /**
     * @var
     * @ORM\Column(type="string", nullable=true, length=10)
     */
    private $phoneNumber;
    /**
     * @var
     * @ORM\Column(type="string")
     */
    private $email;
    /**
     * @var
     * @ORM\Column(type="string", length=400)
     */
    private $address;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $companyName
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getContactPersonName()
    {
        return $this->contactPersonName;
    }

    /**
     * @param mixed $contactPersonName
     */
    public function setContactPersonName($contactPersonName)
    {
        $this->contactPersonName = $contactPersonName;
    }

    /**
     * @return mixed
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param mixed $phoneNumber
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $jobAddress
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }


}