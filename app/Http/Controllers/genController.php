<?php

namespace petstore\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class genController extends Controller{
    public function genfunct(){
    	return view('genderlist');
    }
    public function findBreed(Request $request){
    	$data=DB::table('breeds')->select('id', 'name')->where('family_id', $request->id)->get();
    	return response()->json($data);
    }
}
