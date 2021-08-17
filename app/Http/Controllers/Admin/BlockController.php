<?php

namespace App\Http\Controllers\Admin;

use App\Service\BlockService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class BlockController extends Controller
{

    private $blockService;

    public function __construct(BlockService $blockService){
        $this->blockService = $blockService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $blocks = $this->blockService->getBlocks();
        return view('admin.blocks', compact('blocks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('admin.block');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $validator = Validator::make($request->all(),[
           'title'=>'required',
           'status' =>'required'
        ]);
        if($validator->fails()){
            return redirect(route('admin-save-block'))
                ->withErrors($validator)
                ->withInput();
        }
        $result = $this->blockService->saveBlock($request);
        if($result){
            return redirect(route('admin-save-block'))
                ->with('success', 'Block added successfully.');
        }else{
            return redirect(route('admin-save-block'))
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
    public function edit($id){
        $block = $this->blockService->getBlock($id);
        return view('admin.block', compact('block'));
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
            'title'=>'required',
            'status' =>'required'
        ]);
        if($validator->fails()){
            return redirect(route('admin-edit-block',['id'=>$id]))
                ->withErrors($validator)
                ->withInput();
        }
        $result = $this->blockService->updateBlock($request, $id);
        if($result){
            return redirect(route('admin-edit-block',['id'=>$id]))
                ->with('success', 'Block updated successfully.');
        }else{
            return redirect(route('admin-edit-block',['id'=>$id]))
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
