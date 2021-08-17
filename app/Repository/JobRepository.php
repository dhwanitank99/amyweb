<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 23/01/20
 * Time: 3:35 PM
 */

namespace App\Repository;


interface JobRepository{
    public function findJob($id);
    public function findAllJobs();
    public function findJobsBy($criteria);
    public function saveOrUpdate($data);
}