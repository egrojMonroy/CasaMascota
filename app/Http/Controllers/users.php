<?php

namespace petstore\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use petstore\User;
use petstore\Role;
use Illuminate\Support\Facades\DB;
use petstore\User_role;
use Illuminate\Database;

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
        foreach ($users as $user){
            $rol_usuario = User_role::query()
                ->join('roles','roles.id','=','user_roles.role_id')
                ->where('user_roles.user_id',$user->id)
                ->get();

            $roles;
            $first = $rol_usuario->first();
            foreach($rol_usuario as $rol){
                if($rol == $first)
                $roles = $rol->role;
                else
                $roles = $roles.','.$rol->role;
            }
            $user->roles= $roles;
        }

        return view('users')->with(['users' => $users]);
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
        $this->validate($request,[
            'name'=> 'required|alpha',
            'last_name'=> 'required|alpha|max:45',
            'email'=>'required|email',
            'password'=>'required|min:6'
        ],[
            'name.required'=> 'name is required',
            'last_name.required'=> 'Last name is required',
            'email.required'=> 'Email is required',
            'password.required'=> 'Password is required',
        ]);
        $user = new User();
        $user->name      = strtoupper($request->name);
        $user->last_name = strtoupper($request->last_name);
        $user->email     = $request->email;
        $user->password  = bcrypt($request->password);

        if($user->save()){
             foreach ($request->opcion as $opcion){
                 $roles = new User_role;
                 $roles->user_id = $user->id;
                 $roles->role_id = $opcion;
                 $roles->save();
            }
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
        $user = User::find($id);
        $rol_usuario = User_role::query()
            ->where('user_roles.user_id',$id)
            ->get();

        $roles []='';

        for($i = 0; $i<6;$i++){
            $roles[$i]=0;
        }

        foreach($rol_usuario as $rol){
            $roles[$rol->role_id] = 1;
        }

        $user->roles= $roles;

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
        $user->name      = strtoupper($request->name);
        $user->email     =$request->email   ;

        $user->last_name     = strtoupper($request->last_name) ;
        // Creo la variable opcion para tener un array ordenado
        // donde sean booleanos los roles
        User_role::where('user_id',$id)->delete();
        $opcion[]='';

        foreach($request->opcion as $rol){
            $nuevo = new User_role();
            $nuevo->user_id= $id;
            $nuevo->role_id= $rol;
            $nuevo->save();
        }

        if($user->save()) {
            return redirect('users')->with('msj', 'Datos modificados');
        }
        else {
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
      //  User_role::where('user_id',$id)->delete();
        User::destroy($id);
        return redirect('users');
    }
    public function edit_own($id){
        $user = User::find($id);

        return view('users')->with(['edit2' => true, 'users' => $user]);
    }
    public function update_own(Request $request, $id){
        $this->validate($request,[
            'name'=> 'required|alpha',
            'last_name'=> 'required|alpha|max:45',
            'email'=>'required|email',

        ],[
            'name.required'=> 'name is required',
            'last_name.required'=> 'Last name is required',
            'email.required'=> 'Email is required',

        ]);

        $user = User::find($id);
        $user->name      = strtoupper($request->name);
        $user->email     =$request->email   ;
        $user->last_name     = strtoupper($request-> last_name);
        if($user->old_password!=null){
        if(password_verify($request->old_password,$user->password) ){
            $user->password=bcrypt($request->new_password);
        }else{
            return back()->with('errormsj','Old Password incorrect');
        }}
        if($user->save()) {
            return redirect('/home')->with('msj', 'Datos modificados');
        }
        else {
            return back();
        }
    }
}
