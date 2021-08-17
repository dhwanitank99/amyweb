<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 06/03/20
 * Time: 12:54 PM
 */

namespace App\Repository\impl;


use App\Repository\PostRepository;
use Doctrine\ORM\EntityRepository;

class PostRepositoryImpl extends EntityRepository implements PostRepository
{

    public function findPost($id)
    {
        return $this->find($id);
    }

    public function findPostsBy($criteria)
    {
        return $this->findBy($criteria);
    }

    public function findPosts()
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