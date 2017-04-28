<?php

namespace petstore\Http\Controllers;

use Illuminate\Http\Request;
use petstore\Family;
use petstore\Breed;
use petstore\Salon;
use petstore\TypeSalon;


class Salons extends Controller{

    public function index(){
        $types = TypeSalon::all();
        return view('salons')->with(['types' => $types]);
    }

    public function create(){
        //
    }

    public function store(Request $request){
        //
    }

    public function show($id){
        //
    }

    public function edit($id){
        //
    }

    public function update(Request $request, $id){
        //
    }

    public function destroy($id){
        //
    }
}
