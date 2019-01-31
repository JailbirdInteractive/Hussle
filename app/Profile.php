<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $fillable = ['user_id','nationality','skills','tagline','bio','salary'];

    protected $primaryKey = 'user_id';

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
