<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Validator;

class LoginController extends Controller{

    public function index(){
        if(Auth::guard('admin')->check()){
            return Redirect::route('admin-dashboard');
        }
        return view('admin.login');
    }

    public function doLogin(Request $request){
        $validator = Validator::make($request->all(),[
            'email' => 'email|required',
            'password' => 'required'
        ]);
        if($validator->fails()){
            return redirect(route('admin-login'))
                ->withErrors($validator)
                ->withInput();
        }
        $loginData = array(
            'email' => Input::get('email'),
            'password' => Input::get('password')
        );
        if(Auth::guard('admin')->attempt($loginData)) {
            return Redirect::route('admin-dashboard');
        }
        return Redirect::back();
    }

    public function logout(){
        Auth::logout();
        return Redirect::route('admin-login');
    }
}
