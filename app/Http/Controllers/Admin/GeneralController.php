<?php

namespace App\Http\Controllers\Admin;

use App\Service\GeneralService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class GeneralController extends Controller{

    private $generalService;

    public function __construct(GeneralService $generalService){
        $this->generalService = $generalService;
    }

    public function index(){
        $contact = $this->generalService->getContactSettings();
        return view('admin.contact-settings',compact('contact'));
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
           'name'=>'required',
           'email'=>'email|required',
            'city'=>'required',
            'website'=>'required',
            'state'=>'required',
            'address'=>'required',
            'pin-code'=>'required'
        ]);
        if($validator->fails()){
            return redirect(route('admin-settings'))
                ->withErrors($validator)
                ->withInput();
        }
        $result = $this->generalService->saveContactSettings($request);
        if($result){
            return redirect(route('admin-settings'))
                ->with('success', 'Contact detail updated/added successfully.');
        }else{
            return redirect(route('admin-settings'))
                ->with('failure','Something went wrong!')
                ->withInput();
        }

    }
}
