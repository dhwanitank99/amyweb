<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 28/02/20
 * Time: 6:04 PM
 */

namespace App\Repository;


interface BlockRepository{
    public function findBlocks();
    public function findBlock($id);
    public function saveOrUpdate($data);
}