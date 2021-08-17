<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 05/03/20
 * Time: 5:22 PM
 */

namespace App\Service\impl;


use App\Entities\Page;
use App\Repository\BannerRepository;
use App\Repository\PageRepository;
use App\Service\PageService;
use Carbon\Carbon;

class PageServiceImpl implements PageService
{

    private $pageRepository;
    private $bannerRepository;

    public function __construct(PageRepository $pageRepository, BannerRepository $bannerRepository){
        $this->pageRepository = $pageRepository;
        $this->bannerRepository = $bannerRepository;
    }

    public function getPages(){
        return $this->pageRepository->findPages();
    }

    public function getPage($id){
        return $this->pageRepository->findPage($id);
    }

    public function getActivePages(){
        return $this->pageRepository->findPagesBy(['status'=>1]);
    }

    public function savePage($data){
        $page = new Page();
        $page->setTitle($data->get('title'));
        $page->setContent($data->get('content'));
        $page->setSlug($data->get('title'));
        $page->setCreatedAt(Carbon::now());
        $page->setUpdatedAt(Carbon::now());
        $page->setStatus(1);
        if($data->get('banner_id')!=null) {
            $page->setBanner($this->bannerRepository->findBanner($data->get('banner_id')));
        }
        return $this->pageRepository->saveOrUpdate($page);
    }

    public function updatePage($data, $id){
        $page = $this->pageRepository->findPage($id);
        $page->setTitle($data->get('title'));
        $page->setContent($data->get('content'));
        $page->setSlug($data->get('title'));
        $page->setUpdatedAt(Carbon::now());
        $page->setStatus(1);
        if($data->get('banner_id')!=null) {
            $page->setBanner($this->bannerRepository->findBanner($data->get('banner_id')));
        }
        return $this->pageRepository->saveOrUpdate($page);
    }
}