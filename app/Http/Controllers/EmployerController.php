<?php

namespace App\Http\Controllers;

use App\Service\BlockService;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    private $blockService;
    public function __construct(BlockService $blockService)
    {
        $this->blockService = $blockService;
    }

    public function index(){
        $employerHero = $this->blockService->getBlock(10);
        $whyAmyIndia = $this->blockService->getBlock(11);
        $vasClient = $this->blockService->getBlock(12);
        $vasCandidate = $this->blockService->getBlock(13);
        return view('employer', compact('employerHero', 'whyAmyIndia', 'vasClient', 'vasCandidate'));
    }
}
