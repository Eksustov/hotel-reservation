<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class Admin extends Controller
{
    public function page()
    {
        return view('apartments.create');
    }
    
    return redirect('/dashboard');
}
