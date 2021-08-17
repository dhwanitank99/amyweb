<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 02/03/20
 * Time: 2:37 PM
 */

namespace App\Repository;


interface GeneralRepository
{
    public function findContactSettings();

    public function saveOrUpdateContactSettings($data);

}