<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 28/02/20
 * Time: 4:20 PM
 */

namespace App\Repository\impl;


use App\Repository\CustomPostRepository;
use Doctrine\ORM\EntityRepository;

class CustomPostRepositoryImpl extends EntityRepository implements CustomPostRepository{

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

    public function findPost($id){
        return $this->findOneBy(['id'=>$id]);
    }

    public function findAllPosts($customPostType){
        return $this->findBy(['customPostType'=>$customPostType]);
    }

    public function findActiveCustomPost($criteria, $limit){
        return $this->findBy($criteria, ['title'=>'ASC'], $limit);
    }
}