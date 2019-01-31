<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $jobs=Job::all();
        $job=Job::find(1);
        dd($job->user);
        return view('Pages.jobpage',compact('jobs'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.postjobdash');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     */
    public function store(Request $request)
    {
        
$request->validate([
'jobtitle'=>'required|max:255|min:5',
'jobtype'=>'required',
'jobdesc'=>'required',
'jobpaymin'=>'required',
'jobpaymax'=>'required',
'jobcat'=>'required',
'joblocation'=>'required',


]);
    

$job=new Job();
    $job->jobtitle=$request->jobtitle;
      $job->jobtype=$request->jobtype;
      $job->jobdesc=$request->jobdesc;
      $job->joblocation=$request->joblocation;
      $job->jobpaymin=$request->jobpaymin;
      $job->jobpaymax=$request->jobpaymax;
      $job->jobcat=$request->jobcat;
      $job->jobtags=$request->jobtags;
    $job->save();
 return redirect('/jobpage');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
