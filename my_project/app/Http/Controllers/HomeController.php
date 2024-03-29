<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

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
        return view('home');
    }

    public function gmaps()
    {
    	$locations = DB::table('location')->get();
    	return view('gmaps',compact('locations'));
    }

    public function views()
    {
    	$users = DB::table('users')->get();
    	return view('views',compact('users'));
    }
}
