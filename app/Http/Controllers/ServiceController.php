<?php

namespace App\Http\Controllers;

use App\Service\BlockService;
use App\Service\PageService;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    private $pageService;
    private $blockService;
    public function __construct(PageService $pageService, BlockService $blockService)
    {
        $this->pageService = $pageService;
        $this->blockService = $blockService;
    }

    public function index(){
        $serviceHero = $this->blockService->getBlock(9);
        $page = $this->pageService->getPage(2);
        return view('service', compact('serviceHero', 'page'));
    }
}
