<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $admin = auth()->user()->is_admin;
        $users = User::orderBy('created_at','desc')->paginate(5);
        
       
        if($admin==1){
            //return view('dashboard');
            return view('dashboard')->with('users',$users);
        }
        else
        //return view('home');
        return view('home')->with('users',$users);
    
    }
}
