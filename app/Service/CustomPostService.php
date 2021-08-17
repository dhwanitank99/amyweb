<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 28/02/20
 * Time: 4:18 PM
 */

namespace App\Service;


interface CustomPostService{
    public function getCustomPost($id);
    public function getAllCustomPosts($customPostType);
    public function saveCustomPost($customPostType, $data);
    public function getActiveCustomPost($id, $limit);
    public function updateCustomPost($data, $customPostType, $id);
}