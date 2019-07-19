<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DemoController extends Controller
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
	//$users = DB::table('users')->get();
	//$users = DB::table('users')->where('email' , 'jsultanajisha@gmail.com')->first();
	//echo $users->name;
        //return view('demo', ['users' => $users]);
        return view('demo');//->with('users',$users);
	/*foreach ($users as $user) {
    	echo $user->name;
	}*/
    }
}
