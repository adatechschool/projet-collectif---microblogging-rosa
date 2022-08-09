<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;



class UserController extends Controller
{ 

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user 
     * @return \Illuminate\Http\Response
     * @param int $id
     * @return \Illuminate\Http\View
     * 
     */
        public function show($id){
            //$user = User::all(); 
            return view ('users.show',
            ['user'=>User::findOrFail($id)
        ]);
    } 

    public function index(){
        $users = User::latest()->get();
        return view('users.index', ['users' => $users]);
   }
}
