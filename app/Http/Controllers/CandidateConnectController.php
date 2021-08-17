<?php

namespace App\Http\Controllers;

use App\Service\BlockService;
use App\Service\CustomPostService;
use App\Service\JobApplicationService;
use App\Service\JobService;
use Illuminate\Http\Request;
use Validator;

class CandidateConnectController extends Controller{

    private $jobApplicationService;
    private $customPostService;
    private $blockService;
    private $jobService;
    public function __construct(JobApplicationService $jobApplicationService, CustomPostService $customPostService, BlockService $blockService, JobService $jobService)
    {
        $this->jobApplicationService = $jobApplicationService;
        $this->customPostService = $customPostService;
        $this->blockService = $blockService;
        $this->jobService = $jobService;
    }

    public function index(){
        $candidateConnectHero = $this->blockService->getBlock(19);
        $connectAmy = $this->blockService->getBlock(15);
        $extendedPrograms = $this->customPostService->getActiveCustomPost(14, null);
        $hiringCategories = $this->customPostService->getActiveCustomPost(15, null);
        $jobs = $this->jobService->getActiveJobs();
        $process = $this->blockService->getBlock(16);
        return view('candidate', compact('candidateConnectHero', 'connectAmy','extendedPrograms','hiringCategories', 'jobs','process'));
    }

    public function saveJobApplication(Request $request){
        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required',
            'contact-number'=>'required',
            'file'=>'required'
        ]);
        if($validator->fails()){
            return redirect('/candidate-connect#pag4')
                ->withErrors($validator)
                ->withInput();
        }
        $result = $this->jobApplicationService->saveJobApplication($request);
        if($result){
            return redirect('/candidate-connect#pag4')
                ->with('success', 'Your application has been saved successfully.');
        }else{
            return redirect('/candidate-connect#pag4')
                ->with('failure','Something went wrong!')
                ->withInput();
        }
    }
}
