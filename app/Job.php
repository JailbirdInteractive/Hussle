<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //
    protected $fillable = ['jobtitle','jobtype','jobdesc','jobpaymin','jobpaymax','joblocation','jobcat','user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
