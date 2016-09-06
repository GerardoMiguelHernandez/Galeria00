<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;



class UsersController extends Controller
{
    public function index(){

$users =User::orderBy('id','ASC')->paginate(3);
        return view('users.index')->with('users',$users);

    }
}
