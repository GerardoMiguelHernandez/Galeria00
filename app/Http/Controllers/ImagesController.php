<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB; 
use Intervention\Image\ImageManagerStatic as Image1;

use App\User;
use App\Image;
use App\Event;


class ImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function index()
    {
        //

         $images =Image::orderBy('id','ASC')->paginate(5);
        return view('admin.imagenes.index')->with('images',$images);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //r

         //obtner datos de las categorias
         //$events=DB::table('events')->get();
         //$user = Auth::user()->name;
       // $users = User::orderBy('id', 'asc');

         //$events= Event::orderBy('id','asc');
        $events =DB::table('events')->get();
        //$users=DB::table('users')->get();

      return view('admin.imagenes.create')->with(['events' => $events]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       $file =$request->file('image');
   $path = public_path().'/thumbnails/';
   //$image->save($path.$file->getClientOriginalName());
   $image = Image1::make($file);
   $image->save($path.'thumb_'.$file->getClientOriginalName());
   $image= new Image();
   $image->image= $file->getClientOriginalName();
   $image->descripcion = $request->descripcion;
   $image->usuario_id = $request->usuario_id;
   $image->evento_id= $request->evento_id;
   $image->save();
   return redirect()->action('ImagesController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
