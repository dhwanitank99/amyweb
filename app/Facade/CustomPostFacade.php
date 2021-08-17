<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 28/02/20
 * Time: 12:11 PM
 */

namespace App\Facade;


use Illuminate\Support\Facades\Facade;

class CustomPostFacade extends Facade{
    protected static function getFacadeAccessor(){
        return 'custom-post';
    }

}