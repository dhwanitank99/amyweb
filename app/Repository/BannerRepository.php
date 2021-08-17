<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 05/03/20
 * Time: 12:27 PM
 */

namespace App\Repository;


interface BannerRepository
{
    public function findBanners();
    public function findBannerBy($criteria);
    public function findBanner($id);
    public function saveOrUpdate($data);
}