<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Newsletter;
use Auth;

class NewsletterController extends Controller
{
    
    
    public function unsubscribe(Newsletter $newsletter, User $user) {
        $user->newsletters()->detach($newsletter);
        
        return redirect('home');
    }
}
