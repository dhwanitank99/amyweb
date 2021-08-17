<?php

namespace App\Http\Controllers\Admin;

use App\Service\CustomPostTypeService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class CustomPostTypeController extends Controller{

    private $customPostTypeService;

    public function __construct(CustomPostTypeService $customPostTypeService){
        $this->customPostTypeService = $customPostTypeService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $postTypes = $this->customPostTypeService->getAllCustomPostTypes();
        return view('admin.custom-post-types', compact('postTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('admin.custom-post-type');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required|max:200',
            'slug' => 'required|max:200',
            'description' => 'nullable|max:2000',
        ]);
        if($validator->fails()){
            return redirect(route('admin-new-custom-post-type'))
                ->withErrors($validator)
                ->withInput();
        }
        $result = $this->customPostTypeService->saveCustomPostType($request);
        if($result){
            return redirect(route('admin-new-custom-post-type'))
                ->with('success', 'Custom post type added successfully.');
        }else{
            return redirect(route('admin-new-custom-post-type'))
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
        $customPostType = $this->customPostTypeService->getCustomPostType($id);
        return view('admin.custom-post-type',compact('customPostType'));
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
            'name' => 'required|max:200',
            'slug' => 'required|max:200',
            'description' => 'nullable|max:2000',
        ]);
        if($validator->fails()){
            return redirect(route('admin-edit-custom-post-type',['id'=>$id]))
                ->withErrors($validator)
                ->withInput();
        }
        $result = $this->customPostTypeService->updateCustomPostType($id,$request);
        if($result){
            return redirect(route('admin-edit-custom-post-type',['id'=>$id]))
                ->with('success', 'Custom post type updated successfully.');
        }else{
            return redirect(route('admin-edit-custom-post-type',['id'=>$id]))
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
