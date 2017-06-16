<?php

namespace petstore\Http\Controllers;
use petstore\Reservation;
use petstore\Pet;
use petstore\Room;
use petstore\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class reservations extends Controller
{
    public function index()
    {
        $pet = Pet::all();

        $reservation = Reservation::all();
        $user= User::query()
            ->select('users.id as user_id','users.name as name','users.last_name as last_name')
            ->join('user_roles','user_roles.user_id','=','users.id')
            ->join('pets','pets.user_id','=','users.id')
            ->where('user_roles.role_id',4)
            ->orderby('users.name', 'asc')
            ->groupby('users.id')
            ->get();





       $allreservations = Reservation::query()
            ->join('users','users.id','=','reservations.user_id')
            ->join('pets','pets.id','=','reservations.pet_id')
            ->select('reservations.id as id','users.id as user_id','users.name as uname','users.last_name as ulname', 'pets.name as pname', 'pets.id as pid','date','tipo_res')
            ->orderby('date', 'desc')
            ->paginate(7);

        $rooms = Room::all();




        return view('reservations')->with(['reservations' => $reservation,'pets' => $pet,'users'=>$user,'allreservations'=>$allreservations,'rooms'=>$rooms]);
    }



    public function listAll()
    {

    }

    public function store(Request $request){


        $this->validate($request,[

            'user_id'=> 'required',
            'pet'=> 'required',
            'tipo_res'=>'required',
            'date'=>'required|date|after:'.\Carbon\Carbon::tomorrow()->setTime(7,59).'|before:'.\Carbon\Carbon::tomorrow()->addMonth(1)->setTime(7,59),









        ],[
                'user_id.required'=> 'Seleccione un Dueño',
                'pet.required'=> 'Seleccione una Mascota',
                'tipo_res.required'=>'Seleccione el tipo de reserva',
                'date.required'=>'Seleccione una fecha',
                'date.after'=>'La fecha debe estar en el futuro desde las 8 de la mañana',
                 'date.before'=>'La fecha excedio el limite de reserva'









        ]);
        $reservation = new Reservation();
        $reservation->user_id = $request->user_id;
        $reservation->pet_id = $request->pet;
        $reservation->date=$request->date;
        $reservation->pet_id = $request->pet;
        $reservation->tipo_res = $request->tipo_res;
        $reservation->createdBy   = Auth::user()->name.' '.Auth::user()->last_name;
        $reservation->updatedBy   = Auth::user()->name.' '.Auth::user()->last_name;
        $reservation->deletedBy   = '';

        if($reservation->save()){
            return back()->with('msj', 'Datos guardados');
        }
        else{
            return back();
        }
    }




    public function edit($id){
        $pet = Pet::all();

        $reservation = Reservation::all();
        $user= User::query()
            ->select('users.id as user_id','users.name as name','users.last_name as last_name')
            ->join('user_roles','user_roles.user_id','=','users.id')
            ->join('pets','pets.user_id','=','users.id')
            ->where('user_roles.role_id',4)
            ->orderby('users.name', 'asc')
            ->groupby('users.id')
            ->get();



        $allreservation = Reservation::query()
            ->join('users','users.id','=','reservations.user_id')
            ->join('pets','pets.id','=','reservations.pet_id')
            ->select('reservations.id as id','users.id as uid','users.name as uname','users.last_name as ulname', 'pets.name as pname', 'pets.id as pid','date','tipo_res')
            ->where('reservations.id', $id)
            ->orderby('users.id', 'asc')
            ->get();

            $userpid=Reservation::find($id);
            $idp=$userpid->user_id;
            $lpets=Pet::where('user_id',$idp)
                ->select('id as lpetid','name as lpetname')
                ->get();








        return view('reservations')->with(['edit' => true,'reservations' => $reservation,'pets' => $pet,'users'=>$user,'allreservation'=>$allreservation,'lpets'=>$lpets]);




    }



    public function update(Request $request, $id)
    {

       $this->validate($request,[

            'user_id'=> 'required',
            'pet'=> 'required',
            'tipo_res'=>'required',
           'date'=>'required|date|after:'.\Carbon\Carbon::tomorrow()->setTime(7,59).'|before:'.\Carbon\Carbon::tomorrow()->addMonth(1)->setTime(7,59),







        ],[
            'user_id.required'=> 'Seleccione un Dueño',
            'pet.required'=> 'Seleccione una Mascota',
            'tipo_res.required'=>'Seleccione el tipo de reserva',
           'date.required'=>'Seleccione una fecha',
           'date.after'=>'La fecha debe estar en el futuro desde las 8 de la mañana',
           'date.before'=>'La fecha excedio el limite de reserva'






       ]);


        $reservation = Reservation::find($id);
        $reservation->user_id           = $request->user_id;
        $reservation->pet_id            = $request->pet;
        $superdate= $request->date;
        $datetime =Carbon::parse($superdate)->format('Y-m-d H:i');
        $reservation->date =$datetime;
        // $reservation->time=$request->time;
        $reservation->pet_id            = $request->pet;
        $reservation->tipo_res          = $request->tipo_res;
        $reservation->createdBy   = Auth::user()->name.' '.Auth::user()->last_name;
        $reservation->updatedBy   = Auth::user()->name.' '.Auth::user()->last_name;
        $reservation->deletedBy   = '';

        if($reservation->save()){
            return redirect('reservations')->with('msj', 'Datos Modificados');
        }
        else{
            return back();
        }
    }



   public function destroy($id)
    {
        $reservation = Reservation::find($id);

       $reservation->deletedBy   = Auth::user()->name.' '.Auth::user()->last_name;
        if($reservation->save()){
            Reservation::destroy($id);
            return redirect('reservations')->with('msj', 'Datos Eliminados');
        }
        else{
            return back();
        }
    }

}
