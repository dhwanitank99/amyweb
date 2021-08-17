<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Job
 * @package App\Entities
 * @ORM\Entity
 * @ORM\Table(name="jobs")
 */
class Job{

    /**
     * @var
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @var
     * @ORM\Column(type="string")
     */
    private $jobTitle;
    /**
     * @var
     * @ORM\Column(type="integer", nullable=true)
     */
    private $noOfOpenings;
    /**
     * @var
     * @ORM\Column(type="string", length=400)
     */
    private $jobLocation;
    /**
     * @var
     * @ORM\Column(type="string", length=2000)
     */
    private $jobDescription;
    /**
     * @var
     * @ORM\Column(type="string", nullable=true)
     */
    private $jobTiming;
    /**
     * @var
     * @ORM\Column(type="string", nullable=true)
     */
    private $interviewDetails;
    
     /**
     * @var
     * @ORM\Column(type="string", nullable=true)
     */
    private $link;
    
    /**
     * @var
     * @ORM\Embedded(class="Company")
     */
    private $company;
    /**
     * @var
     * @ORM\Column(type="boolean")
     */
    private $isActive;

    public function __construct(){

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
    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    /**
     * @param mixed $jobTitle
     */
    public function setJobTitle($jobTitle)
    {
        $this->jobTitle = $jobTitle;
    }

    /**
     * @return mixed
     */
    public function getNoOfOpenings()
    {
        return $this->noOfOpenings;
    }

    /**
     * @param mixed $noOfOpenings
     */
    public function setNoOfOpenings($noOfOpenings)
    {
        $this->noOfOpenings = $noOfOpenings;
    }

    /**
     * @return mixed
     */
    public function getJobLocation()
    {
        return $this->jobLocation;
    }

    /**
     * @param mixed $jobLocation
     */
    public function setJobLocation($jobLocation)
    {
        $this->jobLocation = $jobLocation;
    }

    /**
     * @return mixed
     */
    public function getJobDescription()
    {
        return $this->jobDescription;
    }

    /**
     * @param mixed $jobDescription
     */
    public function setJobDescription($jobDescription)
    {
        $this->jobDescription = $jobDescription;
    }

    /**
     * @return mixed
     */
    public function getJobTiming()
    {
        return $this->jobTiming;
    }

    /**
     * @param mixed $jobTiming
     */
    public function setJobTiming($jobTiming)
    {
        $this->jobTiming = $jobTiming;
    }

    /**
     * @return mixed
     */
    public function getInterviewDetails()
    {
        return $this->interviewDetails;
    }

    /**
     * @param mixed $interviewDetails
     */
    public function setInterviewDetails($interviewDetails)
    {
        $this->interviewDetails = $interviewDetails;
    }
    
    /**
     * @return mixed $Link
     */
    public function getJobLink()
    {
        return $this->link;
    }

    /**
     * @return mixed
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param mixed $company
     */
    public function setCompany($company)
    {
        $this->company = $company;
    }

    /**
     * @return mixed
     */
    public function isActive()
    {
        return $this->isActive;
    }

    /**
     * @param mixed $isActive
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    }




}