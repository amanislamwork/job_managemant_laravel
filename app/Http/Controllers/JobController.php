<?php
    
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Job;
use App\Models\Applyjob;

use Validator;

class JobController extends Controller
{
    /** 
     * Display a listing of the resource.
     */
    public function index()
    {
       
        $jobs = Job::orderBy('id', 'desc')->get();
 
        return view('jobs.index', [
            'jobs' => $jobs,
             
        ]);
    }

   
    public function create()
    {
       
    }

   
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function jobApply( $id)
    {
        
        $data['job_id'] = $id;
        $data['user_id'] =\Auth::user()->id;
  
        $addData = Applyjob::create($data);
        
        return redirect(route('jobs.index'))->with('success', 'Job Applied Successfully');
    }
}
