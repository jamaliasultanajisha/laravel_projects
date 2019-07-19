<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('search');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function autocomplete(Request $request)
    {
        $data = User::select("name")
            ->where("name","LIKE","%{$request->input('query')}%")
            ->get();

        return response()->json($data);
    }

    /*public function showInfo(Request $request)
    {
        $name=$request->input('name');
        $users = DB::table('users')->where('name' , '$name')->first();
        echo $users->name;
        return view('demo')->with('users',$users);
	/*foreach ($users as $user) {
    	echo $user->name;
	}*/
    //}
}