<?php

namespace petstore\Http\Controllers;

use Illuminate\Http\Request;
use petstore\Pet;
use petstore\Family;
use petstore\Breed;
use Illuminate\Support\Facades\DB;


class breeds extends Controller{

    public function index(){
        $breed = DB::table('breeds')   
                    ->join('families','families.id','=','breeds.family_id')
                    ->select('families.id as fid','families.name as fname', 'breeds.name as bname', 'breeds.id as bid')
                    ->orderby('families.id', 'asc')
                    ->get();
        $family = Family::all();
        return view('breeds')->with(['breeds' => $breed, 'families' => $family]);
    }

    public function create(){
        //
    }

    public function store(Request $request){
        $breed = new Breed();
        $breed->family_id = $request->family;
        $breed->name = $request->name;
        if($breed->save()){
            return back()->with('msj', 'Datos guardados');
        }
        else{
            return back();
        }
    }

    public function show($id){
        //
    }

    public function edit($id){
        $breed = DB::table('breeds')   
                    ->join('families','families.id','=','breeds.family_id')
                    ->select('families.id as fid','families.name as fname', 'breeds.name as bname', 'breeds.id as bid')
                    ->where('breeds.id', $id)
                    ->orderby('families.id', 'asc')
                    ->get();
         $family = Family::all();
        return view('breeds')->with(['edit' => true, 'breeds' => $breed, 'families' =>$family]);
    }

    public function update(Request $request, $id){
        $breed = Breed::find($id);
        $breed->name      = $request->name;
        $breed->family_id = $request->family;
        if($breed->save()){
            return redirect('breeds')->with('msj', 'Datos modificados');
        }
        else{
            return back();
        }
    }

    public function destroy($id){
        Breed::destroy($id);
        return back();
    }
}
