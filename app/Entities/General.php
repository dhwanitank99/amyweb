<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Contact
 * @package App\Entities
 * @ORM\Entity
 * @ORM\Table(name="general")
 */
class General
{
    /**
     * @var integer
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * @var
     * @ORM\Column(type="string", nullable=true)
     */
    private $logo;

    /**
     * @var string
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $phone;

    /**
     * @var string
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $mobile;

    /**
     * @var string
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $website;

    /**
     * @var string
     * @ORM\Column(type="string", length=150)
     */
    private $email;

    /**
     * @var string
     * @ORM\Column(type="string", length=200)
     */
    private $address;

    /**
     * @var string
     * @ORM\Column(type="string", length=100)
     */
    private $city;

    /**
     * @var string
     * @ORM\Column(type="string", length=100)
     */
    private $state;

    /**
     * @var string
     * @ORM\Column(type="string", length=6)
     */
    private $pinCode;

    /**
     * @var string
     * @ORM\Column(type="text", nullable=true)
     */
    private $details;

    /**
     * @var string
     * @ORM\Column(type="boolean")
     */
    private $status;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
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
    public function setLogo($logo)
    {
        $this->logo = $logo;
    }


    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param string $mobile
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    }

    /**
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * @param string $website
     */
    public function setWebsite($website)
    {
        $this->website = $website;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function getPinCode()
    {
        return $this->pinCode;
    }

    /**
     * @param string $pinCode
     */
    public function setPinCode($pinCode)
    {
        $this->pinCode = $pinCode;
    }

    /**
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * @param string $details
     */
    public function setDetails($details)
    {
        $this->details = $details;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

}