<?php

namespace petstore\Http\Controllers;

use Illuminate\Http\Request;
use petstore\User;
use petstore\Role;
use Illuminate\Support\Facades\DB;
class users extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(10);
        $roles = Role::all();
        $count =$users->count();
        return view('users')->with(['users' => $users,'roles'=>$roles,'count_users']);
    }

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

        $user = new User();
        $user->name      = $request->name;
        $user->last_name = $request->last_name;
        $user->email     = $request->email;
        $user->password  = bcrypt($request->password);
        $user->rol_id = $request->tipo_rol;


        if($user->save()){
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
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = DB::table('users')->find($id);

        return view('users')->with(['edit' => true, 'users' => $user]);
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
        $user = User::find($id);
        $user->name      = $request->name;
        $user->email     =$request->email   ;
        $user->rol_id     =$request->rol_id   ;
        $user->password     =$request->password  ;
        $user->last_name     =$request-> last_name  ;

        if($user->save()){
            return redirect('users')->with('msj', 'Datos modificados');
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
        User::destroy($id);
        return back();
    }
}
