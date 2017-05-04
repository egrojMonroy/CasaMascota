<?php

namespace petstore\Http\Controllers;
use petstore\Reservation;
use petstore\Pet;
use petstore\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class reservations extends Controller
{
    public function index()
    {
        $pet = Pet::all();

        $reservation = Reservation::all();
        $user= User::where('rol_id',4)->orderBy('name', 'desc')->get();



       $allreservations = DB::table('reservations')
            ->join('users','users.id','=','reservations.user_id')
           ->join('pets','pets.id','=','reservations.pet_id')
            ->select('reservations.id as id','users.id as uid','users.name as uname','users.last_name as ulname', 'pets.name as pname', 'pets.id as pid','date','tipo_res')
            ->orderby('date', 'asc')
            ->get();




        return view('reservations')->with(['reservations' => $reservation,'pets' => $pet,'users'=>$user,'allreservations'=>$allreservations]);
    }



    public function listAll()
    {

    }
    public function store(Request $request){
        $reservation = new Reservation();
        $reservation->user_id = $request->user_id;
        $reservation->pet_id = $request->pet;
        $superdate= $request->date.' '.$request->time;
        $datetime =Carbon::createFromFormat('Y-m-d H:i', $superdate)->toDateTimeString();
        $reservation->date =$datetime;
       // $reservation->time=$request->time;
        $reservation->pet_id = $request->pet;
        $reservation->tipo_res = $request->tipo_res;
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
        $user= User::where('rol_id',4)->orderBy('name', 'desc')->get();



        $allreservation = DB::table('reservations')
            ->join('users','users.id','=','reservations.user_id')
            ->join('pets','pets.id','=','reservations.pet_id')
            ->select('reservations.id as id','users.id as uid','users.name as uname','users.last_name as ulname', 'pets.name as pname', 'pets.id as pid','date','tipo_res')
            ->where('reservations.id', $id)
            ->orderby('users.id', 'asc')
            ->get();

            $userpid=DB::table('reservations')->find($id);
            $idp=$userpid->user_id;
            $lpets=DB::table('pets')
                ->select('id as lpetid','name as lpetname')
                ->where('user_id',$idp)
                ->get();








        return view('reservations')->with(['edit' => true,'reservations' => $reservation,'pets' => $pet,'users'=>$user,'allreservation'=>$allreservation,'lpets'=>$lpets]);




    }
    public function update(Request $request, $id)
    {
        $reservation = Reservation::find($id);
        $reservation->user_id = $request->user_id;
        $reservation->pet_id = $request->pet;
        $superdate= $request->date.' '.$request->time;
        $datetime =Carbon::createFromFormat('Y-m-d H:i', $superdate)->toDateTimeString();
        $reservation->date =$datetime;
        // $reservation->time=$request->time;
        $reservation->pet_id = $request->pet;
        $reservation->tipo_res = $request->tipo_res;
        if($reservation->save()){
            return back()->with('msj', 'Datos guardados');
        }
        else{
            return back();
        }
    }



    public function delete()
    {

    }

    public function show()
    {

    }

}
