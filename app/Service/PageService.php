<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 05/03/20
 * Time: 5:22 PM
 */

namespace App\Service;


interface PageService
{
    public function getPages();
    public function getPage($id);
    public function getActivePages();
    public function savePage($data);
    public function updatePage($data, $id);
}