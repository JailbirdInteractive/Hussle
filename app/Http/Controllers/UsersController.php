<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Profile;
use Illuminate\Support\Facades\Input;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

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
       //$user= Auth::user();
$user=User::find($id);
        return view('users.settings')->withUser($user);
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
        
        //dd($request->all());
        $request->validate([
'name'=>'required|min:5|max:255',
'email'=>'required|email',
'img_url'=>'nullable',
'nationality'=>'required',
'skills'=>'required',
'tagline'=>'required',
'bio'=>'required',
'salary'=>'required',
'profile_img'=>'image|max:1999|nullable',
        ]);
        //dd($request->all());
        if($request->hasFile('profile_img')){

			echo 'Uploaded
';
			$file = $request->file('profile_img');
			$file->move('profile_images', $file->getClientOriginalName());
			echo '';
dd($file);
        }else{
            dd('nope');
        }

$user=User::find($id);
$user->name=$request->name;
$user->email=$request->email;
$user->img_url=$request->img_url;
$user->save();

if($user->profile!=null){
$profile=$user->profile;
$profile->nationality=$request->nationality;
$profile->skills=$request->skills;
$profile->tagline=$request->tagline;
$profile->bio=$request->bio;
$profile->salary=$request->salary;
$profile->save();

    }else{
        Profile::create([
            'nationality'=>$request->nationality,
            'skills'=>$request->skills,
            'tagline'=>$request->tagline,
            'bio'=>$request->bio,
            'salary'=>$request->salary,
            'user_id'=>$id,
        ]);
    


}
return back();
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
