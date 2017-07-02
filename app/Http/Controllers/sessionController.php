<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionController extends Controller
{
    public function login(Request $req)
    {
       if($req->isMethod('post'))
          {
          if(!auth()->attempt(request(['name','password'])))
            {
            return back()->withErrors(['message'=>'Error in username or password']);
            }
            return redirect('/');
            }
            else
            {
              return view('auth.login');
            }
    }
   
     public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
