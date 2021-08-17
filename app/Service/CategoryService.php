<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 03/03/20
 * Time: 10:58 AM
 */

namespace App\Service;


interface CategoryService{
    public function getAllCategories();
    public function getActiveCategories();
    public function getCategory($id);
    public function saveCategory($data);
    public function updateCategory($data, $id);
}