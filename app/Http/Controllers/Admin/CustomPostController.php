<?php

namespace App\Http\Controllers\Admin;

use App\Service\CustomPostService;
use App\Service\CustomPostTypeService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class CustomPostController extends Controller{

    private $customPostTypeService;
    private $customPostService;

    public function __construct(){
        $this->customPostTypeService = app(CustomPostTypeService::class);
        $this->customPostService = app(CustomPostService::class);
    }

    public function index($slug){
        $customPostType = $this->customPostTypeService->getCustomPostTypeBy(['slug'=>$slug]);
        $customPosts = $this->customPostService->getAllCustomPosts($customPostType->getId());
        return view('admin.custom-posts', compact('customPostType', 'customPosts'));
    }

    public function create($slug){
        $customPostType = $this->customPostTypeService->getCustomPostTypeBy(['slug'=>$slug]);
        return view('admin.custom-post', compact('customPostType','slug'));
    }

    public function lists(){
        $customPostTypeLists = $this->customPostTypeService->getActiveCustomPostTypes();
        return $customPostTypeLists;
    }

    public function store(Request $request,$slug){
        $customPostType = $this->customPostTypeService->getCustomPostTypeBy(['slug'=>$slug]);
        $rules['title'] = 'required';
        $rules['status']= 'required';
        foreach ($customPostType->getAdditionalFields() as $additionalField){
            if($additionalField->isRequired()){
                $rules[$additionalField->getFieldName()] = 'required';
            }
        }
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return redirect(route('admin-save-custom-post',['slug'=>$slug]))
                ->withErrors($validator)
                ->withInput();
        }
        $result = $this->customPostService->saveCustomPost($customPostType, $request);
        if($result){
            return redirect(route('admin-save-custom-post',['slug'=>$slug]))
                ->with('success', $customPostType->getName().' added successfully.');
        }else{
            return redirect(route('admin-save-custom-post',['slug'=>$slug]))
                ->with('failure','Something went wrong!')
                ->withInput();
        }
    }

    public function edit($slug, $id){
        $customPostType = $this->customPostTypeService->getCustomPostTypeBy(['slug'=>$slug]);
        $customPost = $this->customPostService->getCustomPost($id);
//        dd($customPost);
        return view('admin.custom-post', compact('slug','customPostType', 'customPost'));
    }

    public function update(Request $request, $slug, $id){
        $customPostType = $this->customPostTypeService->getCustomPostTypeBy(['slug'=>$slug]);
        $rules['title'] = 'required';
        $rules['status']= 'required';
        foreach ($customPostType->getAdditionalFields() as $additionalField){
            if($additionalField->isRequired()){
                $rules[$additionalField->getFieldName()] = 'required';
            }
        }
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return redirect(route('admin-save-custom-post',['slug'=>$slug]))
                ->withErrors($validator)
                ->withInput();
        }
        $result = $this->customPostService->updateCustomPost($request, $customPostType, $id);
        if($result){
            return redirect(route('admin-edit-custom-post',['slug'=>$slug,'id'=>$id]))
                ->with('success', $customPostType->getName().' updated successfully.');
        }else{
            return redirect(route('admin-edit-custom-post',['slug'=>$slug,'id'=>$id]))
                ->with('failure','Something went wrong!')
                ->withInput();
        }
    }
}
