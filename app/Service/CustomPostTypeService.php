<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 26/02/20
 * Time: 12:34 PM
 */

namespace App\Service;


interface CustomPostTypeService{
    public function getAllCustomPostTypes();
    public function getCustomPostTypeBy($criteria);

    public function getActiveCustomPostTypes();
    public function getCustomPostType($id);
    public function updateCustomPostType($id, $data);
    public function saveCustomPostType($data);
}