<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 05/03/20
 * Time: 5:24 PM
 */

namespace App\Repository\impl;


use App\Repository\PageRepository;
use Doctrine\ORM\EntityRepository;

class PageRepositoryImpl extends EntityRepository implements PageRepository
{

    public function findPages(){
        return $this->findAll();
    }

    public function findPagesBy($criteria){
        return $this->findBy($criteria);
    }

    public function findPage($id){
        return $this->findOneBy(['id'=>$id]);
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
}