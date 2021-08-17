<?php

namespace App\Http\Controllers\Admin;

use App\Service\JobService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class JobController extends Controller
{

    private $jobService;

    public function __construct(JobService $jobService){
        $this->jobService = $jobService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $jobs = $this->jobService->getAllJobs();
        return view('admin.jobs', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $viewFlag = false;
        return view('admin.job', compact('viewFlag'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'jobTitle' => 'required|max:255',
            'noOfOpenings' => 'nullable|integer',
            'jobLocation' => 'required|max:400',
            'jobInfo' => 'required|max:2000',
            'companyName' => 'required|max:255',
            'contactPerson' => 'required|max:255',
            'emailId' => 'required|email|max:255',
            'phoneNumber' => 'nullable|digits:10',
            'companyAddress' => 'required|max:400'
        ]);
        if($validator->fails()){
            return redirect(route('admin-new-job'))
                ->withErrors($validator)
                ->withInput();
        }
        $result = $this->jobService->saveJob($request);
        if($result){
            return redirect(route('admin-new-job'))
                ->with('success', 'Job added successfully.');
        }else{
            return redirect(route('admin-new-job'))
                ->with('failure','Something went wrong!')
                ->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $job = $this->jobService->getJob($id);
        $viewFlag = true;
        return view('admin.job', compact('job', 'viewFlag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $viewFlag = false;
        $job = $this->jobService->getJob($id);
        return view('admin.job', compact('job', 'viewFlag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $validator = Validator::make($request->all(),[
            'jobTitle' => 'required|max:255',
            'noOfOpenings' => 'nullable|integer',
            'jobLocation' => 'required|max:400',
            'jobInfo' => 'required|max:2000',
            'companyName' => 'required|max:255',
            'contactPerson' => 'required|max:255',
            'emailId' => 'required|email|max:255',
            'phoneNumber' => 'nullable|digits:10',
            'companyAddress' => 'required|max:400'
        ]);
        if($validator->fails()){
            return redirect(route('admin-edit-job',['id'=>$id]))
                ->withErrors($validator)
                ->withInput();
        }
        $result = $this->jobService->updateJob($id,$request);
        if($result){
            return redirect(route('admin-edit-job',['id'=>$id]))
                ->with('success', 'Job updated successfully.');
        }else{
            return redirect(route('admin-edit-job',['id'=>$id]))
                ->with('failure','Something went wrong!')
                ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
