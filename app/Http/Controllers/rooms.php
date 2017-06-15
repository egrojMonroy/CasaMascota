<?php

namespace petstore\Http\Controllers;

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



        return view('rooms')->with(['rooms'=>$rooms,'type'=>$type]);
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
            'type'=> 'required'
        ],[
            'name.required'=> 'Un nombre es necesario',
            'name.unique'=> 'Ya existe ese nombre',
            'type.required'=>'Elija una sala a crear'
        ]);
        $room = new Room();
        $room->name = strtoupper( $request->name);
        $room->type_room_id = $request->type;
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



        $typy = TypeRoom::all();

        return view('rooms')->with(['edit' => true, 'roomy' => $roomy]);
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
            'type'=> 'required'
        ],[
            'name.required'=> 'Un nombre es necesario',

            'type.required'=>'Elija una sala a crear'


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
