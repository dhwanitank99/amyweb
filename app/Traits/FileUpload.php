<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 28/02/20
 * Time: 5:21 PM
 */

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

trait FileUpload{
    public function uploadFile(Request $request, $folder, $key){
        if($request->hasFile($key)){
            $request->file($key);
            $ext = $request->file->getClientOriginalExtension();
            $file = time().'.'.$ext;
            $request->file->storeAs('public', $file);
//            $path = asset(Storage::url($file));
            return $file;
        }
        return false;
    }

    public function upload($file, $folder){
        $fileName = time().'.'.$file->getClientOriginalExtension();
        $file->storeAs('public', $fileName);
        return $fileName;
    }
}