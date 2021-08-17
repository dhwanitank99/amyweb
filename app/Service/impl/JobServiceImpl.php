<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 22/01/20
 * Time: 3:42 PM
 */

namespace App\Service\impl;


use App\Entities\Company;
use App\Entities\Job;
use App\Repository\JobRepository;
use App\Service\JobService;

class JobServiceImpl implements JobService{

    private $jobRepository;

    public function __construct(JobRepository $jobRepository){
        $this->jobRepository = $jobRepository;
    }

    public function getAllJobs(){
        return $this->jobRepository->findAllJobs();
    }

    public function getActiveJobs(){
        return $this->jobRepository->findJobsBy(['isActive'=>1]);
    }

    public function getJob($id){
        return $this->jobRepository->findJob($id);
    }

    public function updateJob($id, $data)
    {
        $job = $this->jobRepository->findJob($id);
        $job->setJobTitle($data->get('jobTitle'));
        $job->setNoOfOpenings($data->get('noOfOpenings'));
        $job->setJobLocation($data->get('jobLocation'));
        $job->setJobDescription($data->get('jobInfo'));
        $job->setInterviewDetails($data->get('interviewDetails'));
        $job->setJobTiming($data->get('jobTimings'));
        $company = $job->getCompany();
        $company->setName($data->get('companyName'));
        $company->setContactPersonName($data->get('contactPerson'));
        $company->setEmail($data->get('emailId'));
        $company->setPhoneNumber($data->get('phoneNumber'));
        $company->setAddress($data->get('companyAddress'));
        $job->setIsActive(1);
        return $this->jobRepository->saveOrUpdate($job);
    }

    public function saveJob($data){
        $job = new Job();
        $job->setJobTitle($data->get('jobTitle'));
        $job->setNoOfOpenings($data->get('noOfOpenings'));
        $job->setJobLocation($data->get('jobLocation'));
        $job->setJobDescription($data->get('jobInfo'));
        $job->setInterviewDetails($data->get('interviewDetails'));
        $job->setJobTiming($data->get('jobTimings'));
        $company = new Company();
        $company->setName($data->get('companyName'));
        $company->setContactPersonName($data->get('contactPerson'));
        $company->setEmail($data->get('emailId'));
        $company->setPhoneNumber($data->get('phoneNumber'));
        $company->setAddress($data->get('companyAddress'));
        $job->setCompany($company);
        $job->setIsActive(1);
//        dd($job);
        return $this->jobRepository->saveOrUpdate($job);
    }
}