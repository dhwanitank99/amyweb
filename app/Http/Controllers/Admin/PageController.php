<?php

namespace App\Http\Controllers\Admin;

use App\Service\BannerService;
use App\Service\PageService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class PageController extends Controller{

    private $bannerService;
    private $pageService;
    public function __construct(BannerService $bannerService, PageService $pageService){
        $this->bannerService = $bannerService;
        $this->pageService = $pageService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $pages = $this->pageService->getPages();
        return view('admin.pages', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $banners = $this->bannerService->getActiveBanners();
        return view ('admin.page', compact('banners'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'title' => 'required|max:255',
            'slug' => 'required|max:255',
            'content' => 'required',
        ]);
        if($validator->fails()){
            return redirect(route('admin-new-page'))
                ->withErrors($validator)
                ->withInput();
        }
        $result = $this->pageService->savePage($request);
        if($result){
            return redirect(route('admin-new-page'))
                ->with('success', 'Page added successfully.');
        }else{
            return redirect(route('admin-new-page'))
                ->with('failure','Something went wrong!')
                ->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $page = $this->pageService->getPage($id);
        $banners = $this->bannerService->getActiveBanners();
        return view('admin.page', compact('banners', 'page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $validator = Validator::make($request->all(),[
            'title' => 'required|max:255',
            'slug' => 'required|max:255',
            'content' => 'required',
        ]);
        if($validator->fails()){
            return redirect(route('admin-edit-page',['id'=>$id]))
                ->withErrors($validator)
                ->withInput();
        }
        $result = $this->pageService->updatePage($request, $id);
        if($result){
            return redirect(route('admin-edit-page',['id'=>$id]))
                ->with('success', 'Page updated successfully.');
        }else{
            return redirect(route('admin-edit-page',['id'=>$id]))
                ->with('failure','Something went wrong!')
                ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
