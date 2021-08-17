<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 22/01/20
 * Time: 3:42 PM
 */

namespace App\Service;


interface JobService{
    public function getAllJobs();
    public function getActiveJobs();
    public function getJob($id);
    public function updateJob($id, $data);
    public function saveJob($data);
}