<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 28/02/20
 * Time: 4:20 PM
 */

namespace App\Repository;


interface CustomPostRepository{
    public function findPost($id);
    public function findAllPosts($customPostType);
    public function findActiveCustomPost($criteria, $limit);
    public function saveOrUpdate($data);
}