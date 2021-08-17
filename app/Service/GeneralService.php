<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 02/03/20
 * Time: 2:36 PM
 */

namespace App\Service;


interface GeneralService
{
    public function getContactSettings();

    public function saveContactSettings($data);
}