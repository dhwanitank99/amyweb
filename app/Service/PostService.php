<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 06/03/20
 * Time: 12:56 PM
 */

namespace App\Service;


interface PostService
{
    public function getPost($id);
    public function getPostBy($criteria);
    public function getPosts();
    public function getActivePosts();
    public function savePost($data);
    public function updatePost($data, $id);
}