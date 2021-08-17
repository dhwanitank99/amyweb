<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 05/03/20
 * Time: 1:08 PM
 */

namespace App\Repository\impl;


use App\Repository\BannerDetailRepository;
use Doctrine\ORM\EntityRepository;

class BannerDetailRepositoryImpl extends EntityRepository implements BannerDetailRepository
{

    public function deleteBannerDetail($bannerDetail){
        foreach ($bannerDetail as $del){
            $this->_em->remove($del);
            $this->_em->flush();
        }
        return true;
    }
}