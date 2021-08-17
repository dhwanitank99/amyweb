<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 05/03/20
 * Time: 5:24 PM
 */

namespace App\Repository;


interface PageRepository
{
    public function findPages();
    public function findPagesBy($criteria);
    public function findPage($id);
    public function saveOrUpdate($data);
}