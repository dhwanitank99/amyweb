<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 28/02/20
 * Time: 6:04 PM
 */

namespace App\Repository\impl;


use App\Repository\BlockRepository;
use Doctrine\ORM\EntityRepository;

class BlockRepositoryImpl extends EntityRepository implements BlockRepository {

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

    public function findBlocks(){
        return $this->findAll();
    }

    public function findBlock($id){
        return $this->findOneBy(['id'=>$id]);
    }
}