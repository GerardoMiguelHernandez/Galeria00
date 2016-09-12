<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;



class UsersController extends Controller
{

 public function __construct()
    {
        $this->middleware('auth');
    }
  
    public function index(){

$users =User::orderBy('id','ASC')->paginate(5);
        return view('users.index')->with('users',$users);

    }
    public function create(){
   //return view('auth.register');
      return view('users.create');
    }


    public function destroy($id)
    {
        //

        $user = User::find($id);
        $user->delete();
        return redirect()->action('UsersController@index');
    }
     public function edit($id)
    {
        //
        $user = User::find($id);
        return view('users.edit')->with('user',$user);
        

    }

    public function update(Request $request, $id)
    {
       
       $user= User::find($id);
       $user->name = $request->name;
       $user->lastname = $request->lastname;
       $user->email= $request->email;
       $user->tipo = $request->tipo;
       $user->save();

        return redirect()->action('UsersController@index');
      

    }
}
