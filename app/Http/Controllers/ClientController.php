<?php

namespace App\Http\Controllers;

use App\Service\BlockService;
use App\Service\CustomPostService;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    private $customPostService;
    private $blockService;
    public function __construct(CustomPostService $customPostService, BlockService $blockService)
    {
        $this->customPostService = $customPostService;
        $this->blockService = $blockService;
    }

    public function index(){
        $clients = $this->customPostService->getActiveCustomPost(13,null);
        $clientHero = $this->blockService->getBlock(18);
        return view('client', compact('clients', 'clientHero'));
    }
}
