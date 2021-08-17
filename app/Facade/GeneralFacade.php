<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 04/03/20
 * Time: 2:57 PM
 */

namespace App\Facade;


use Illuminate\Support\Facades\Facade;

class GeneralFacade extends Facade
{
    protected static function getFacadeAccessor(){
        return 'general';
    }
}