<?php

namespace petstore\Http\Controllers;

use Illuminate\Http\Request;
use petstore\Diseases;
use petstore\Vaccine;
use Illuminate\Support\Facades\DB;
class vaccines extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vaccines = Vaccine::all();
        $diseases = Diseases::all();
        return view('vaccines')->with(['vaccines'=>$vaccines,'diseases'=>$diseases]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vaccine = new Vaccine();
        $vaccine->name = $request->input('name');
        $vaccine->diseases = $request->input('diseases');
        if($vaccine->save()){
            return back()->with('msj', 'Datos guardados');
        }
        else{
            return back();
        }
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
        $vaccine = DB::table('vaccines')->find($id);
        return view('vaccines')->with(['edit' => true, 'vaccine' => $vaccine]);
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
        $vaccine = Vaccine::find($id);
        $vaccine->name      = $request->name;
        $vaccine->diseases  = $request->diseases;

        if($vaccine->save()){
            return redirect('vaccines')->with('msj', 'Datos modificados');
        }
        else{
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Vaccine::destroy($id);
        return back();
    }
}
