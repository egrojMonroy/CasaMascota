<?php

namespace petstore\Http\Controllers;

use Illuminate\Http\Request;
use petstore\Pet;
use petstore\Family;
use petstore\Breed;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class pets extends Controller{

    public function index(){
        $pet = Pet::all();
        $family = Family::all();
        $my_pets = Pet::query()   
                    ->join('breeds','breeds.id','=','pets.breed_id')
                    ->join('users', 'users.id','=', 'pets.user_id')
                    ->select('pets.id as id','pets.name as pet','weight','height','age', 'gender', 'breeds.name as breed', 'users.name as user', 'users.id as user_id')
                    ->orderby('breeds.id', 'asc')
                    ->paginate(5);
        return view('pets')->with(['pets' => $pet, 'families' => $family, 'my_pets' => $my_pets]);
    }

    public function create(){
        //
    }

    public function store(Request $request){

         $this->validate($request,[

            'name'=> 'required',
            'weight'=> 'required|numeric',
            'height'=> 'required|numeric',
            'age'=> 'required|date',
            'urlimg'=> 'required',
            'gender'=> 'required|boolean',
            'breed'=> 'required',
            'user_id'=> 'required',
        ],[
            'name'=> 'A name is required',
            'weight'=> 'The weight is required',
            'height'=> 'The height is required',
            'age'=> 'The age is required',
            'urlimg'=> 'An image is required',
            'gender'=> 'Please select a gender',
            'breed'=> 'Please select a breed',
            'user_id'=> 'required',
        ]);
        $pet = new Pet();
        $pet->name      = strtoupper($request->name);
        $pet->weight    = strtoupper($request->weight);
        $pet->height    = strtoupper($request->height);
        $pet->age       = strtoupper($request->age);
        $pet->urlImg    = strtoupper($request->urlimg);
        $pet->gender    = strtoupper($request->gender);
        $pet->breed_id  = strtoupper($request->breed);
        $pet->user_id   = strtoupper($request->user_id);
        $pet->createdBy = strtoupper(Auth::user()->name.' '.Auth::user()->last_name);
        $pet->updatedBy = strtoupper(Auth::user()->name.' '.Auth::user()->last_name);
        $pet->deletedBy = '';
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
        $pet->name      = strtoupper($request->name);
        $pet->weight    = strtoupper($request->weight);
        $pet->height    = strtoupper($request->height);
        $pet->age       = strtoupper($request->age);
        $pet->urlImg    = strtoupper($request->urlimg);
        $pet->gender    = strtoupper($request->gender);
        $pet->breed_id  = strtoupper($request->breed);
        $pet->user_id   = strtoupper($request->user_id);
        $pet->updatedBy = strtoupper(Auth::user()->name.' '.Auth::user()->last_name);
        $pet->in_adoption = 0;
        if($pet->save()){
            return back()->with('msj', 'Datos modificados');
        }
        else{
            return back();
        }
    }

    public function destroy($id){
        $pet = Pet::find($id);
        $pet->deletedBy   = strtoupper(Auth::user()->name.' '.Auth::user()->last_name);
        if($pet->save()){
            pet::destroy($id);
            return redirect('pets')->with('msj', 'Dato eliminado');
        }
        else{
            return back();
        }
    }
}
