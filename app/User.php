<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'birthday', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    
    public function newsletters() {
        return $this->belongsToMany('App\Newsletter');
    }
    
    public function hasNewsletters($newsletterName) {
        foreach ($this->newsletters as $newsletters) {
            if ($newsletters->newsletter == $newsletterName) {
                return true;
            }
        }
        return false;
    }
}
