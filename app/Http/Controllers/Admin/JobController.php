<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Applyjob;
use Validator;
use Brian2694\Toastr\Facades\Toastr;

class JobController extends Controller
{
    /** 
     * Display a listing of the resource.
     */
    public function index(Request $request )
    {

        $input = $request->all();
        
        $query = Job::orderBy('id','desc');
        $jobs  = $query->get();
        
        return view('admin.jobs.index', [
            'jobs' => $jobs
            
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
       $input = $request->all();
       
       $rules = Job::$rules;
        $validator = Validator::make($input, $rules);

       if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
       $input['skillset'] = implode(',', $request->input('skillset'));


        $jobCreated = Job::create($input);
        if($jobCreated){
            Toastr::success('Job Created Successfully', 'Success');
        }else{
            Toastr::error('Job Creation Failed', 'Error');
        }
        return redirect(route('admin.jobs.index'));

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $job = Job::findorfail($id);
        
        $job->skillset = explode(',', $job->skillset);
        if(!$job){
            Toastr::error('Job Not Found', 'Error');
            return redirect(route('admin.jobs.index'));
        }

        return view('admin.jobs.edit', ['job' => $job]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $job = Job::findorfail($id);
        $input = $request->all();
        $input['skillset'] = implode(',', $request->input('skillset'));
        $rules = Job::$rules;
        $validator = Validator::make($input, $rules);
       if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $jobUpdated = $job->update($input);

        if($jobUpdated){
            Toastr::success('Job Updated Successfully', 'Success');
        }else{
            Toastr::error('Job Update Failed', 'Error');
        }
        return redirect(route('admin.jobs.index'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $job = Job::findorfail($id);
        if(!$job){
            Toastr::error('Job Not Found', 'Error');
            return redirect(route('admin.jobs.index'));
        }
        $jobDeleted = $job->delete();
        if($jobDeleted){
            Toastr::success('Job Deleted Successfully', 'Success');
        }else{
            Toastr::error('Job Deletion Failed', 'Error');
        }
        return redirect(route('admin.jobs.index'));
    }

    public function applicant( $id){
        
        $finduser = Applyjob::with('user','job')->where('job_id', $id)->get()->toArray();
        // echo "<pre>";
        // print_r($finduser);
        return view('admin.applicant.index', [
            'finduser' => $finduser
        ]);
    }
}
