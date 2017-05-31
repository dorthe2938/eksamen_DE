<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'newsletter',
    ];
    
    
    public function users() {
        return $this->belongsToMany('App\User');
    }
}
