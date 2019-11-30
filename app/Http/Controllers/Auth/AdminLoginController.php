<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest:admin');
    }

    public function showLoginForm(){
        return view('auth.admin-login');
    }

    public function login(Request $request){
      //validar o formulario
        $this->validate($request, [
          'email'=> 'required|email',
          'password' => 'required|min:6',
         ]);

          //attempt to log the user in
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
          //sucesso
          return redirect()->intended(route('admin.dashboard'));               
      }
      //nao sucesso
      return redirect()->back()->withInput($request->only('email', 'remember')); 
    }
}