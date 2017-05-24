<?php

namespace petstore\Http\Controllers;

use Illuminate\Http\Request;
use petstore\Pet;
use petstore\Family;
use petstore\Breed;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class breeds extends Controller{

    public function index(){
        $breed = Breed::query()
                    ->join('families','families.id','=','breeds.family_id')
                    ->select('families.id as fid','families.name as fname', 'breeds.name as bname', 'breeds.id as bid')
                    ->orderby('families.id', 'asc')
                    ->paginate(5);

        $family = Family::all();
        return view('breeds')->with(['breeds' => $breed, 'families' => $family]);
    }

    public function create(){
        //
    }

    public function store(Request $request){

        $this->validate($request,[

            'family'=> 'required',
            'name'=> 'required|max:45',
        ],[
                'family_id.required'=> 'Family is required',
                'name.required'=> 'Breed is required',
        ]);

        $breed = new Breed();
        $breed->family_id   = strtoupper($request->family);
        $breed->name        = strtoupper($request->name);
        $breed->createdBy   = strtoupper(Auth::user()->name.' '.Auth::user()->last_name);
        $breed->updatedBy   = strtoupper(Auth::user()->name.' '.Auth::user()->last_name);
        $breed->deletedBy   = '';
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
        $breed->name        = strtoupper($request->name);
        $breed->family_id   = strtoupper($request->family);
        $breed->updatedBy   = strtoupper(Auth::user()->name.' '.Auth::user()->last_name);
        if($breed->save()){
            return redirect('breeds')->with('msj', 'Datos modificados');
        }
        else{
            return back();
        }
    }

    public function destroy($id){
        $breed = Breed::find($id);
        $breed->deletedBy   = strtoupper(Auth::user()->name.' '.Auth::user()->last_name);
        if($breed->save()){
            Breed::destroy($id);
            return redirect('breeds')->with('msj', 'Dato eliminado');
        }
        else{
            return back();
        }
    }
}
