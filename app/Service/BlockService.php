<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 28/02/20
 * Time: 6:02 PM
 */

namespace App\Service;


interface BlockService{
    public function getBlocks();
    public function getBlock($id);
    public function saveBlock($data);
    public function updateBlock($data, $id);
}