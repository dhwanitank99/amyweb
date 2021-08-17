<?php

namespace App\Http\Controllers;

use App\Service\GeneralService;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    private $generalService;
    public function __construct(){
        $this->generalService = app(GeneralService::class);
    }

    public function getContactSettingDetails(){
        return $this->generalService->getContactSettings();
    }
}
