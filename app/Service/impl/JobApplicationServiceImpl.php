<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 06/03/20
 * Time: 4:43 PM
 */

namespace App\Service\impl;


use App\Entities\Applications;
use App\Repository\JobApplicationRepository;
use App\Service\JobApplicationService;
use App\Traits\FileUpload;
use Carbon\Carbon;

class JobApplicationServiceImpl implements JobApplicationService
{
    use FileUpload;
    private $jobApplicationRepository;
    public function __construct(JobApplicationRepository $jobApplicationRepository)
    {
        $this->jobApplicationRepository = $jobApplicationRepository;
    }

    public function getJobApplications()
    {
        return $this->jobApplicationRepository->findJobApplications();
    }

    public function saveJobApplication($data)
    {
        $jobApplication = new Applications();
        $jobApplication->setName($data->get('name'));
        $jobApplication->setEmail($data->get('email'));
        $jobApplication->setComments($data->get('comment'));
        $jobApplication->setContactNumber($data->get('contact-number'));
        if($data->hasFile('file')){
            $path = $this->uploadFile($data, '', 'file');
            $jobApplication->setResume($path);
        }
        $jobApplication->setCreatedAt(Carbon::now());
        return $this->jobApplicationRepository->saveOrUpdate($jobApplication);
    }
}