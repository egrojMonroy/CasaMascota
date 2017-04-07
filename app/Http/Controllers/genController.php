<?php

namespace petstore\Http\Controllers;

use Illuminate\Http\Request;

class genController extends Controller{
    public function genfunct{
    	return view('genderlist');
    }
}
