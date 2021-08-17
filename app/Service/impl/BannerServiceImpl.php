<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 05/03/20
 * Time: 12:28 PM
 */

namespace App\Service\impl;


use App\Entities\Banner;
use App\Entities\BannerDetail;
use App\Repository\BannerDetailRepository;
use App\Repository\BannerRepository;
use App\Service\BannerService;
use App\Traits\FileUpload;

class BannerServiceImpl implements BannerService
{

    use FileUpload;
    private $bannerRepository;
    private $bannerDetailRepository;

    public function __construct(BannerRepository $bannerRepository, BannerDetailRepository $bannerDetailRepository){
        $this->bannerRepository = $bannerRepository;
        $this->bannerDetailRepository = $bannerDetailRepository;
    }

    public function saveBanner($data)
    {
        $banner = new Banner();
        $banner->setName($data->get('name'));
        $banner->setStatus(1);
        if($data->hasFile('file')){
            foreach ($data->file('file') as $key=>$file){
                $path = $this->upload($file,'');
                $banerDetail = new BannerDetail();
                $banerDetail->setFeaturedImage($path);
                $banerDetail->setButtonLink($data->get('buttonUrl')[$key]);
                $banerDetail->setButtonName($data->get('buttonName')[$key]);
                $banerDetail->setContent($data->get('content')[$key]);
                $banner->addBannerDetail($banerDetail);
            }
        }
        return $this->bannerRepository->saveOrUpdate($banner);
    }


    public function getBanner($id){
        return $this->bannerRepository->findBanner($id);
    }

    public function updateBanner($data, $id){
        $banner = $this->bannerRepository->findBanner($id);
        $banner->setName($data->get('name'));
        $banner->setStatus(1);
        if($data->hasFile('file') && !empty($banner->getBannerDetail())){
            $this->bannerDetailRepository->deleteBannerDetail($banner->getBannerDetail());
        }
        if($data->hasFile('file')){
            foreach ($data->file('file') as $key=>$file){
                $path = $this->upload($file,'');
                $banerDetail = new BannerDetail();
                $banerDetail->setFeaturedImage($path);
                $banerDetail->setButtonLink($data->get('buttonUrl')[$key]);
                $banerDetail->setButtonName($data->get('buttonName')[$key]);
                $banerDetail->setContent($data->get('content')[$key]);
                $banner->addBannerDetail($banerDetail);
            }
        }
        return $this->bannerRepository->saveOrUpdate($banner);
    }

    public function getBanners(){
        return $this->bannerRepository->findBanners();
    }

    public function getActiveBanners(){
        return $this->bannerRepository->findBannerBy(['status'=>1]);
    }
}