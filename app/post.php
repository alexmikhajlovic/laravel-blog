<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable = ['slug', 'title', 'content','user_id'];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
