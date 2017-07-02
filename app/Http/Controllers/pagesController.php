<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
class pagesController extends Controller
{
    public function control(){
    
         $users=User::all();
         return view('pages.control',compact('users'));
    }

     public function editor(){
         $users=User::all();
         return view('pages.editor',compact('users'));
    }

     public function home(){
        return view('pages.home');
    }

     public function addRole(Request $request){
       $users=User::where('id',$request->id)->first();
       $users->roles()->detach();
       if($request->role==1)
       {
           $users->roles()->attach(Role::where('name','Admin')->first());
           
       }
          if($request->role==2)
       {
            $users->roles()->attach(Role::where('name','Editor')->first());
       }
           if($request->role==3)
       {
            $users->roles()->attach(Role::where('name','User')->first());
       }

       return redirect()->back();
    }
}
