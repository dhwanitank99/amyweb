<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 06/03/20
 * Time: 4:42 PM
 */

namespace App\Service;


interface JobApplicationService{
    public function getJobApplications();
    public function saveJobApplication($data);
}