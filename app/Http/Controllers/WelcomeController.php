<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Work_center;
use App\Event;
use App\User;
use App\Image;
use App\Album;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB; 
class WelcomeController extends Controller
{
	public function __construct()
    {
     Carbon::setlocale('es');   
    } 

public function index(Request $request){
$count_users = User::all()->count();	
$count = Event::all()->count();

$albumns = Album::orderBy('created_at','DES')->skip(1)->take(4)->get();

$count_centros =Work_center::all()->count();
	$events =Event::search($request->nombre)->orderBy('fecha','DES')->paginate(6);
$even = Event::orderBy('fecha','DES')->skip(1)->take(5)->get();

 return view('template.main')->with(['events' => $events,'count' => $count,'count_centros'=>$count_centros,'count_users'=>$count_users,'even' => $even,'albumns'=>$albumns]); 

}
public function Hola(){

	$even = Event::orderBy('fecha','DES')->skip(1)->take(4)->get();
return view('galeria.slider1')->with('even',$even);
}


public function show($id){

$imagess = Image::orderBy($id);
return view('galeria.show')->with('imagess',$imagess);
}

}
