<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Event;
use App\Image;
use Illuminate\Support\Facades\DB; 
use Intervention\Image\ImageManagerStatic as Image2;

use Carbon\Carbon;

class Events extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     /*public function __construct()
    {
        $this->middleware('auth');
    } */

public function __construct()
    {
     Carbon::setlocale('es');   
    } 

    public function index()
    {
        //
        $events =Event::orderBy('id','ASC')->paginate(5);
        return view('admin.eventos.index')->with('events',$events);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 

         //obtner datos de las categorias
         $categories =DB::table('categories')->get();

         //obtener datos de los centros de trabajo
         $centros =DB::table('work_zone')->get(); 
    
        return view('admin.eventos.create')->with(['categories' => $categories,'centros' => $centros]);
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


   $file =$request->file('image');
   $path = public_path().'/thumbnails/';
   //$image->save($path.$file->getClientOriginalName());
   $image = Image2::make($file)->resize(276,276);
    //$image = Image::make($file);
   $image->save($path.'thumb_'.$file->getClientOriginalName());
   $event= new Event();
   $event->nombre = $request->nombre;
   $event->fecha = $request->fecha;
   $event->lugar= $request->lugar;
   $event->imagen= $file->getClientOriginalName();
   $event->lugar= $request->lugar;
   $event->category_id= $request->category_id;
   $event->centro_id= $request->centro_id;
   $event->save();
return redirect()->action('Events@index');
  

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
     $evento = Event::find($id);
     //dd($evento->category->name);


     //$imagess =DB::table('images')->get(); 
     $imagess = Image::orderBy('id')->where('evento_id',$id)->paginate(6);
     //return view('admin.eventos.show')->with(['images' => $images,'evento'=>$evento]);
        return view('galeria.show')->with(['evento' => $evento, 'imagess' => $imagess]);
    
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
        $evento = Event::find($id);
        
         $categories =DB::table('categories')->get();

         //obtener datos de los centros de trabajo
         $centros =DB::table('work_zone')->get(); 
    
        return view('admin.eventos.edit')->with(['evento' => $evento, 'categories' => $categories,'centros' => $centros]);
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


        //dd($request);
/*
        $centro= Work_center::find($id);
       $centro->name = $request->name;
       $centro->ciudad = $request->ciudad;
       $centro->region= $request->region;
       $centro->save();

        return redirect()->action('Works_centers@index');*/



         $file =$request->file('image');
   $path = public_path().'/thumbnails/';
   //$image->save($path.$file->getClientOriginalName());
   $image = Image::make($file)->resize(240,200);
   $image->save($path.'thumb_'.$file->getClientOriginalName());
   $event=Event::find($id);
   $event->nombre = $request->nombre;
   $event->fecha = $request->fecha;
   $event->lugar= $request->lugar;
   $event->imagen= $file->getClientOriginalName();
   $event->lugar= $request->lugar;
   $event->category_id= $request->category_id;
   $event->centro_id= $request->centro_id;
   $event->save();
   return redirect()->action('Events@index');
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

         $evento = Event::find($id);
        $evento->delete();
         return redirect()->action('Events@index');
    }
}
