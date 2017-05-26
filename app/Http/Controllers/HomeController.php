<?php

namespace petstore\Http\Controllers;

use Illuminate\Http\Request;
use petstore\User;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(){
        $user = User::query()
                    ->join('user_roles','user_roles.user_id','=','users.id')
                    ->select('users.name as name', 'users.id as id', 'user_roles.role_id as rol')
                    ->where('users.id','=',Auth::user()->id)
                    ->get();
        return view('home')->with(['user' => $user]);
    }
}
