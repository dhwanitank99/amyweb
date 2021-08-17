<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 02/03/20
 * Time: 2:38 PM
 */

namespace App\Repository\impl;


use App\Repository\GeneralRepository;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\ResultSetMapping;

class GeneralRepositoryImpl extends EntityRepository implements GeneralRepository
{

    public function findContactSettings(){
        return $this->findOneBy([]);
    }

    public function saveOrUpdateContactSettings($data){
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