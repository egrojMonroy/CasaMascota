<?php

namespace petstore\Http\Controllers;

use Illuminate\Http\Request;
use petstore\Assignation;
use petstore\Room;
use petstore\User;
use Illuminate\Support\Facades\Auth;

class assignations extends Controller
{

    public function index()
    {
        $assignations = Assignation::query()
        ->get();
        $rooms = Room::query()
                  ->select('rooms.id as room_id','rooms.name as room_name','rooms.type_room_id as type_room_id','type_rooms.type as type_room_name','rooms.number as number')
                    ->join('type_rooms','type_rooms.id','=','rooms.type_room_id')
                     ->join('assignations','assignations.room_id','=','rooms.id')
                    ->wherenull('assignations.deleted_at')
                    ->orderby('rooms.id', 'asc')
                    ->groupby('rooms.id','type_rooms.type')
                     ->get();


        $roomie = Room::query()
            ->select('rooms.id as room_id_lol','rooms.name as room_name','rooms.type_room_id as type_room_id','rooms.number as number')
            ->orderby('rooms.id', 'asc')
            ->get();
        $users = User::query()
                ->select('users.id as id','users.name as name','users.last_name as last_name')
                ->join('user_roles','user_roles.user_id','=','users.id')
                ->where('user_roles.role_id',1)
                 ->orWhere('user_roles.role_id',2)
            ->orWhere('user_roles.role_id',5)
                ->orderby('users.name', 'asc')
                ->groupby('users.id')
                ->get();


        foreach ($rooms as $roomy){
            $user_room = Assignation::query()
            ->select('users.name as user_name','users.last_name as last_name','assignations.id as a_id')
                ->join('users','users.id','=','assignations.user_id')
                ->where('assignations.room_id',$roomy->room_id)
                ->orderby('users.name')
                ->get();


            $dis='';
            $first = $user_room->first();
            foreach($user_room as $rol){
                if($rol == $first)
                { $dis = $rol->user_name.' '.$rol->last_name;
                    $lol= $rol->a_id;}

                else
                    $dis = $dis.', '.$rol->user_name.' '.$rol->last_name;

            }
            $roomy->users= $dis;

        }

        return view('assignations')->with(['assignations'=>$assignations,'users'=>$users,'rooms'=>$rooms,'roomie'=>$roomie]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
            'room_id'=> 'required',




        ],['room_id.required'=> 'Seleccione una Sala',
            


        ]);
        $assignation = new Assignation();
        $assignation->room_id = $request->room_id;




        Assignation::query()->where('room_id',$assignation->id)->delete();


        if(count(array_unique($request->user_id))<count($request->user_id))
        {

            return redirect('assignations')->with('errorselect','Mal');
        }
        else
            foreach ($request->user_id as $tipo){

                $dis = new Assignation();

                $dis->room_id = $assignation->room_id;
                $dis->user_id = $tipo;
                $dis->createdBy   = Auth::user()->name.' '.Auth::user()->last_name;
                $dis->updatedBy   = Auth::user()->name.' '.Auth::user()->last_name;
                $dis->deletedBy   = '';

                $dis->save();


            }

                return back()->with('msj', 'Datos guardados');


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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $assignation = Room::find($id);


        $dis = Assignation::query()
            ->select('users.id as u_id','users.name as name','users.last_name as last_name','room_id')
            ->join('users','users.id','=','assignations.user_id')
            ->where('assignations.room_id','=',$id)
            ->orderby('users.name')
            ->get();
        if ($assignation->room_id== 1 or $assignation->room_id==2 )
        {$users = User::query()
            ->select('users.id as id','users.name as u_name','users.last_name as last_name')
            ->join('user_roles','user_roles.user_id','=','users.id')
            ->where('user_roles.role_id',1)
             ->orderby('users.name', 'asc')
            ->groupby('users.id')
            ->get();}

        if ($assignation->room_id== 2)
        {$users = User::query()
            ->select('users.id as id','users.name as u_name','users.last_name as last_name')
            ->join('user_roles','user_roles.user_id','=','users.id')
            ->where('user_roles.role_id',5)
            ->orderby('users.name', 'asc')
            ->groupby('users.id')
            ->get();}
        if ($assignation->room_id== 3)
            {$users = User::query()
                ->select('users.id as id','users.name as u_name','users.last_name as last_name')
                ->join('user_roles','user_roles.user_id','=','users.id')
                ->where('user_roles.role_id',2)
                ->orderby('users.name', 'asc')
                ->groupby('users.id')
                ->get();}





        return view('assignations')->with(['edit' => true, 'assignation' => $assignation,'users_name'=>$dis,'users'=>$users]);
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

        $this->validate($request,[

            'user_id[]'=> 'required',



        ],[
            'user_id[].required'=> 'Seleccione un Profesional'


        ]);

        $assignation = Room::find($id);





        Assignation::query()->where('room_id',$assignation->id)->delete();


        if(count(array_unique($request->user_id))<count($request->user_id))
        {

            return redirect('assignations/'.$id.'/edit')->with('errorselect','Mal');
        }
        else
            foreach ($request->user_id as $tipo){

                $dis = new Assignation();

                $dis->room_id = $id;
                $dis->user_id = $tipo;
                $dis->createdBy   = Auth::user()->name.' '.Auth::user()->last_name;
                $dis->updatedBy   = Auth::user()->name.' '.Auth::user()->last_name;
                $dis->deletedBy   = '';

                $dis->save();


            }

        return redirect('assignations')->with('msj', 'Datos guardados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $huy= Assignation::query()
            ->where('assignations.room_id',$id)->get();

        Assignation::destroy()
        ->where ('assignations.room_id',$id)->delete();
        return back();
    }
}
