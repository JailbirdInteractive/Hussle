<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class PagesController extends Controller
{
    //

    public function home(){
        $jobs=Job::all();
        $popJobs=['Web/Mobile Development'=>205,'Data Science & Integration'=>124];
        return view('pages.frontpage')->withPopJobs($popJobs)->withJobs($jobs);
    }
    public function addJob(){

        return view('pages.postjobdash');
    }
}
