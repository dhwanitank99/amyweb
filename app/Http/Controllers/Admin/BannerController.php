<?php

namespace App\Http\Controllers\Admin;

use App\Service\BannerService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class BannerController extends Controller{

    private $bannerService;

    public function __construct(BannerService $bannerService)
    {
        $this->bannerService = $bannerService;
    }

    public function index(){
        $banners = $this->bannerService->getBanners();
        return view('admin.banners', compact('banners'));
    }

    public function create(){
        return view('admin.banner');
    }

    public function store(Request $request){
        $this->bannerService->saveBanner($request);
    }

    public function edit($id){
        $banner = $this->bannerService->getBanner($id);
//        dd($banner);
        return view('admin.banner', compact('banner'));
    }

    public function update(Request $request, $id){
        $this->bannerService->updateBanner($request, $id);
    }
}
