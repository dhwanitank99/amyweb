<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 26/02/20
 * Time: 12:36 PM
 */

namespace App\Repository;


interface CustomPostTypeRepository{
    public function findAllCustomPostType();
    public function findCustomPostTypeBy($criteria);
    public function findAllCustomPostTypeBy($criteria);
    public function findCustomPostType($id);
    public function saveOrUpdate($data);
}