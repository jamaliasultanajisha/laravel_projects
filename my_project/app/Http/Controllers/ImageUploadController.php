<?php



namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;



class ImageUploadController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function imageUpload()

    {

        return view('imageUpload');

    }



    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function imageUploadPost()

    {

        request()->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);



     //   $imageName =  Auth::user()->email.'.'.request()->image->getClientOriginalExtension() ;//time().'.'.request()->image->getClientOriginalExtension();
        $imageName =  time().'.'.request()->image->getClientOriginalExtension();
        $var_name = Auth::user()->email ;

        request()->image->move(public_path('images/' . $var_name ), $imageName);



        return back()

            ->with('success','You have successfully upload image.')

            ->with('image',$imageName);

    }

    public function imageShow()
    {
        return view('imageshow') ;
    }

}