<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 23/01/20
 * Time: 3:35 PM
 */

namespace App\Repository\impl;


use App\Repository\JobRepository;
use Doctrine\ORM\EntityRepository;

class JobRepositoryImpl extends EntityRepository implements JobRepository {

    public function saveOrUpdate($data){
        try{
            $this->_em->persist($data);
            $this->_em->flush();
            return true;
        }catch (\Exception $e){
            dd($e);
            return false;
        }
    }

    public function findJob($id){
        return $this->find($id);
    }

    public function findAllJobs(){
        return $this->findAll();
    }

    public function findJobsBy($criteria){
        return $this->findBy($criteria);
    }
}