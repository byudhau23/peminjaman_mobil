<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class user_controller extends Controller
{
    public function index(){
        $user = User::all();
        return view('admin.user.index',[
            'user' => $user
        ]);
    }
}
