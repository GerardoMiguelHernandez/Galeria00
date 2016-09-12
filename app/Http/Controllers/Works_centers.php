<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Work_center;

class Works_centers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response



     */
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
        $work_centers = Work_center::orderBy('id','ASC')->paginate(5);
        return view('admin.centros.index')->with('work_centers',$work_centers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.centros.create');
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

         $work_center =new Work_center($request->all());

         $work_center->save();

        return redirect()->action('Works_centers@index');
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

        $centro = Work_center::find($id);
        return view('admin.centros.edit')->with('centro',$centro);
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

 
       $centro= Work_center::find($id);
       $centro->name = $request->name;
       $centro->ciudad = $request->ciudad;
       $centro->region= $request->region;
       $centro->save();

        return redirect()->action('Works_centers@index');

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

         $centro = Work_center::find($id);
        $centro->delete();
         return redirect()->action('Works_centers@index');
    }
}
