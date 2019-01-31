<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use Illuminate\Support\Facades\Auth;

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
    public function settings(){
if(Auth::check()){
        $user=Auth::user();
        $splitName = explode(' ', $user->name, 2); // Restricts it to only 2 values, for names like Billy Bob Jones

        $first_name = $splitName[0];
        $last_name = !empty($splitName[1]) ? $splitName[1] : '';
        return view('users.settings',[
'user'=>$user,
'name'=>$first_name,
'lname'=>$last_name,

        ]);
    }else{
    return redirect('/');
}
    }
}
