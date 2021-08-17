<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 06/03/20
 * Time: 4:40 PM
 */

namespace App\Repository\impl;


use App\Repository\JobApplicationRepository;
use Doctrine\ORM\EntityRepository;

class JobApplicationRepositoryImpl extends EntityRepository implements JobApplicationRepository
{

    public function findJobApplications()
    {
        return $this->findAll();
    }

    public function saveOrUpdate($data)
    {
        try{
            $this->_em->persist($data);
            $this->_em->flush();
            return true;
        }catch (\Exception $e){
            dd($e);
            return false;
        }
    }
}