<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 06/03/20
 * Time: 12:54 PM
 */

namespace App\Repository;


interface PostRepository
{
    public function findPost($id);
    public function findPostsBy($criteria);
    public function findPosts();
    public function saveOrUpdate($data);
}