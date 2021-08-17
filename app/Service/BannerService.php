<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 05/03/20
 * Time: 12:28 PM
 */

namespace App\Service;


interface BannerService{
    public function getBanners();
    public function getActiveBanners();
    public function getBanner($id);
    public function saveBanner($data);
    public function updateBanner($data, $id);
}