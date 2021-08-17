<?php

namespace App\Http\Controllers;

use App\Service\BlockService;
use App\Service\CustomPostService;
use App\Service\JobService;
use App\Service\PageService;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    private $customPostService;
    private $blockService;
    private $jobService;
    private $pageService;

    public function __construct(CustomPostService $customPostService, BlockService $blockService, JobService $jobServices, PageService $pageService){
        $this->customPostService = $customPostService;
        $this->blockService = $blockService;
        $this->jobService = $jobServices;
        $this->pageService = $pageService;
    }
    public function index(){
        $testimonials = $this->customPostService->getActiveCustomPost(10,5);
        $solutions = $this->customPostService->getActiveCustomPost(12,5);
        $youtubeVideos = $this->customPostService->getActiveCustomPost(11,5);
        $clients = $this->customPostService->getActiveCustomPost(13,6);
        $whyAmyBlock = $this->blockService->getBlock(3);
        $homePageHero = $this->blockService->getBlock(14);
        $books = $this->customPostService->getActiveCustomPost(8,2);
        $jobs = $this->jobService->getActiveJobs();
        $achievementCounter = $this->blockService->getBlock(4);
        $page = $this->pageService->getPage(1);
        return view('home', compact('page','testimonials', 'solutions', 'youtubeVideos','clients','whyAmyBlock','books','jobs','achievementCounter', 'homePageHero'));
    }
}
