<?php

namespace App\Http\Controllers;

use App\Service\BlockService;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    private $blockService;
    public function __construct(BlockService $blockService){
        $this->blockService = $blockService;
    }

    public function index(){
        $aboutUsHero = $this->blockService->getBlock(8);
        $writeUp = $this->blockService->getBlock(22);
        $story = $this->blockService->getBlock(5);
        $vision = $this->blockService->getBlock(23);
        $mission = $this->blockService->getBlock(24);
        $lifeAmyindia = $this->blockService->getBlock(25);
        $ourValues = $this->blockService->getBlock(26);
        $hrdActivity = $this->blockService->getBlock(6);
        $workProcess = $this->blockService->getBlock(7);
        return view('about-us', compact('aboutUsHero','writeUp','story','vision','mission','lifeAmyindia','ourValues','hrdActivity','workProcess'));
    }
}
