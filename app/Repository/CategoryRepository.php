<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 03/03/20
 * Time: 11:01 AM
 */

namespace App\Repository;


interface CategoryRepository{
    public function findCategory($id);
    public function findAllCategories();
    public function findCategoryBy($criteria);
    public function saveOrUpdate($data);
}