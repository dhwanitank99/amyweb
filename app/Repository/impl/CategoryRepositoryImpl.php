<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 03/03/20
 * Time: 11:01 AM
 */

namespace App\Repository\impl;


use App\Repository\CategoryRepository;
use Doctrine\ORM\EntityRepository;

class CategoryRepositoryImpl extends EntityRepository implements CategoryRepository {

    public function findCategory($id){
        return $this->findOneBy(['id'=>$id]);
    }

    public function findAllCategories(){
        return $this->findAll();
    }

    public function saveOrUpdate($data){
        try{
            $this->_em->persist($data);
            $this->_em->flush();
            return true;
        }catch (\Exception $e){
//            dd($e);
            return false;
        }
    }

    public function findCategoryBy($criteria)
    {
        return $this->findBy($criteria);
    }
}