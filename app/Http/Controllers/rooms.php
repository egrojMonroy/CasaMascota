<?php

namespace petstore\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use petstore\Room;
use petstore\TypeRoom;
use Illuminate\Support\Facades\Auth;
class Rooms extends Controller
{

    public function index()
    {

        $rooms = Room::paginate(5);
        $type= TypeRoom::all();


        //listado de franjas posibles;
        $franjas = $this->horario();

        return view('rooms')->with(['rooms'=>$rooms,'type'=>$type,'franjas'=>$franjas]);

    }
    public function horario(){
        $franjas = collect();
        $starttime = Carbon::create(0,0,0,0);
        $endtime = Carbon::create(0,0,0,5);

        for($starttime;$starttime<=$endtime;$starttime=$starttime->addMinutes(30)) {
                  $franjas->push($starttime->toTimeString());
            }
        return $franjas;
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
            'name'=> 'required|unique:rooms,name',
            'type'=> 'required',
            'franja'=>'required',
        ],[
            'name.required'=> 'Un nombre es necesario',
            'name.unique'=> 'Ya existe ese nombre',
            'type.required'=>'Elija una sala a crear',
            'franja.required'=>'Elija franja horaria'
        ]);
        $room = new Room();
        $room->name = strtoupper( $request->name);
        $room->type_room_id = $request->type;
        $room->franja = $request->franja;
        $que= Room::query()
            ->select('type_room_id')
            ->where('type_room_id',$request->type)
            ->orderby('type_room_id', 'desc')
            ->groupby('type_room_id')
            ->count();
        
        if($que==0){
            $room->number=1;
        }
        else{
            $room->number=($que)+1;
        }

        $room->createdBy   = Auth::user()->name.' '.Auth::user()->last_name;
        $room->updatedBy   = Auth::user()->name.' '.Auth::user()->last_name;
        $room->deletedBy   = '';

        if($room->save()){
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roomy = Room::find($id);

        $franjas = $this->horario();

        $typy = TypeRoom::all();

        return view('rooms')->with(['edit' => true, 'roomy' => $roomy,'franjas'=>$franjas]);
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
            'name'=> 'required',
            'type'=> 'required',
            'franja'=> 'required',
        ],[
            'name.required'=> 'Un nombre es necesario',

            'type.required'=>'Elija una sala a crear',
            'franja.required'=>'Elija franja horaria',


        ]);
        $room = Room::find($id);

        $room->name =strtoupper( $request->name);
        $room->type_room_id = $request->type;
        $que= Room::query()
            ->select('type_room_id')
            ->where('type_room_id',$request->type)
            ->orderby('type_room_id', 'desc')
            ->groupby('type_room_id')
            ->count();





        if($que==0)
        {

            $room->number=1;

        }
        else

        {
            $room->number=($que)+1;

        }

        $room->createdBy   = Auth::user()->name.' '.Auth::user()->last_name;
        $room->updatedBy   = Auth::user()->name.' '.Auth::user()->last_name;
        $room->deletedBy   = '';

        if($room->save()){
            return redirect('rooms')->with('msj', 'Datos guardados');
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
        Room::destroy($id);
        return back();
    }
}
