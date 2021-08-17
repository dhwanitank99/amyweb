<?php

namespace App\Http\Controllers\Admin;

use App\Service\CategoryService;
use App\Service\PostService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class PostController extends Controller
{
    private $categoryService;
    private $postService;

    public function __construct(CategoryService $categoryService, PostService $postService)
    {
        $this->categoryService = $categoryService;
        $this->postService = $postService;
    }

    public function index(){
        $posts = $this->postService->getPosts();
        return view('admin.posts', compact('posts'));
    }


    public function create(){
        $categories = $this->categoryService->getActiveCategories();
        return view('admin.post', compact('categories'));
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'title'=>'required',
            'slug'=>'required',
            'content'=>'required'
        ]);
        if($validator->fails()){
            return redirect(route('admin-new-post'))
                ->withErrors($validator)
                ->withInput();
        }
        $result = $this->postService->savePost($request);
        if($result){
            return redirect(route('admin-new-post'))
                ->with('success', 'Post added successfully.');
        }else{
            return redirect(route('admin-new-post'))
                ->with('failure','Something went wrong!')
                ->withInput();
        }
    }

    public function edit($id){
        $post = $this->postService->getPost($id);
        $categories = $this->categoryService->getActiveCategories();
        return view('admin.post', compact('post','categories'));
    }

    public function update(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'title'=>'required',
            'slug'=>'required',
            'content'=>'required'
        ]);
        if($validator->fails()){
            return redirect(route('admin-new-post'))
                ->withErrors($validator)
                ->withInput();
        }
        $result = $this->postService->updatePost($request,$id);
        if($result){
            return redirect(route('admin-edit-post',['id'=>$id]))
                ->with('success', 'Post updated successfully.');
        }else{
            return redirect(route('admin-edit-post',['id'=>$id]))
                ->with('failure','Something went wrong!')
                ->withInput();
        }
    }
}
