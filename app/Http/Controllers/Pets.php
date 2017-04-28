<?php

namespace petstore\Http\Controllers;

use Illuminate\Http\Request;
use petstore\Pet;
use petstore\Family;
use petstore\Breed;
use Illuminate\Support\Facades\DB;

class pets extends Controller{

    public function index(){
        $pet = Pet::all();
        $family = Family::all();
        $my_pets = DB::table('pets')   
                    ->join('breeds','breeds.id','=','pets.breed_id')
                    ->join('users', 'users.id','=', 'pets.user_id')
                    ->select('pets.id as id','pets.name as pet','weight','height','age', 'gender', 'breeds.name as breed', 'users.name as user')
                    ->orderby('breeds.id', 'asc')
                    ->get();
        return view('pets')->with(['pets' => $pet, 'families' => $family, 'my_pets' => $my_pets]);
    }

    public function create(){
        //
    }

    public function store(Request $request){
        $pet = new Pet();
        $pet->name      = $request->name;
        $pet->weight    = $request->weight;
        $pet->height    = $request->height;
        $pet->age       = $request->age;
        $pet->urlImg    = $request->urlimg;
        $pet->gender    = $request->gender;
        $pet->breed_id  = $request->breed;
        $pet->user_id   = $request->user_id;
        $pet->in_adoption = 0;
        if($pet->save()){
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
        $pet = Pet::all();
        $family = Family::all();
        $my_pet = DB::table('pets')   
                    ->join('breeds','breeds.id','=','pets.breed_id')
                    ->join('users', 'users.id','=', 'pets.user_id')
                    ->select('pets.id as id','pets.name as pet','weight','height','age', 'gender', 'breeds.name as breed', 'users.name as user','urlImg')
                    ->where('pets.id', $id)
                    ->orderby('breeds.id', 'asc')
                    ->get();
        return view('pets')->with(['edit' => true, 'pets' => $pet, 'families' => $family, 'my_pet' => $my_pet]);
    }

    public function update(Request $request, $id){
        $pet = Pet::find($id);
        $pet->name      = $request->name;
        $pet->weight    = $request->weight;
        $pet->height    = $request->height;
        $pet->age       = $request->age;
        $pet->urlImg    = $request->urlimg;
        $pet->gender    = $request->gender;
        $pet->breed_id  = $request->breed;
        $pet->user_id   = $request->user_id;
        $pet->in_adoption = 0;
        if($pet->save()){
            return back()->with('msj', 'Datos guardados');
        }
        else{
            return back();
        }
    }

    public function destroy($id){
        //
    }
}
