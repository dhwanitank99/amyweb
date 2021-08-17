<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 06/03/20
 * Time: 4:39 PM
 */

namespace App\Repository;


interface JobApplicationRepository
{
    public function findJobApplications();
    public function saveOrUpdate($data);
}