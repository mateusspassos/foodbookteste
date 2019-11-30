<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Auth;
use App\Posts;
class AdminController extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Posts::all();
        return view('admin',compact('post'));
    }
    


}
