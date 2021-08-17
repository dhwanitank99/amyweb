<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 26/02/20
 * Time: 12:36 PM
 */

namespace App\Repository\impl;


use App\Repository\CustomPostTypeRepository;
use Doctrine\ORM\EntityRepository;

class CustomPostTypeRepositoryImpl extends EntityRepository implements CustomPostTypeRepository {

    public function findCustomPostType($id){
        return $this->find($id);
    }

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

    public function findAllCustomPostType(){
        return $this->findAll();
    }

    public function findCustomPostTypeBy($criteria){
        return $this->findOneBy($criteria);
    }

    public function findAllCustomPostTypeBy($criteria){
        return $this->findBy($criteria);
    }
}