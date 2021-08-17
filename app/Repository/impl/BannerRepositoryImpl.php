<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 05/03/20
 * Time: 12:28 PM
 */

namespace App\Repository\impl;


use App\Repository\BannerRepository;
use Doctrine\ORM\EntityRepository;

class BannerRepositoryImpl extends EntityRepository implements BannerRepository
{

    public function saveOrUpdate($data){
        try{
            $this->_em->persist($data);
            $this->_em->flush();
            return true;
        }catch (\Exception $e){
            dd($e);
        }
    }

    public function findBanner($id){
        return $this->findOneBy(['id'=>$id]);
    }

    public function findBanners(){
        return $this->findAll();
    }

    public function findBannerBy($criteria){
        return $this->findBy($criteria);
    }
}