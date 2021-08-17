<?php

namespace App\Http\Controllers\Admin;

use App\Service\CategoryService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class CategoryController extends Controller
{
    private $categoryService;
    public function __construct(CategoryService $categoryService){
        $this->categoryService = $categoryService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $categories = $this->categoryService->getAllCategories();
//        dd($categories);
        return view('admin.categories', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $categories = $this->categoryService->getActiveCategories();
        return view('admin.category', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'slug'=>'required'
        ]);
        if($validator->fails()){
            return redirect(route('admin-new-category'))
                ->withErrors($validator)
                ->withInput();
        }
        $result = $this->categoryService->saveCategory($request);
        if($result){
            return redirect(route('admin-new-category'))
                ->with('success', 'Category added successfully.');
        }else{
            return redirect(route('admin-new-category'))
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = $this->categoryService->getCategory($id);
//        dd($category);
        return view('admin.category', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'slug'=>'required'
        ]);
        if($validator->fails()){
            return redirect(route('admin-edit-category',['id'=>$id]))
                ->withErrors($validator)
                ->withInput();
        }
        $result = $this->categoryService->updateCategory($request, $id);
        if($result){
            return redirect(route('admin-edit-category',['id'=>$id]))
                ->with('success', 'Category updated successfully.');
        }else{
            return redirect(route('admin-edit-category',['id'=>$id]))
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
