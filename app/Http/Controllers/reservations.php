<?php

namespace petstore\Http\Controllers;
use petstore\Reservation;
use petstore\Pet;
use petstore\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class reservations extends Controller
{
    public function index()
    {
        $pet = Pet::all();

        $reservation = Reservation::all();
        $user= User::all();



      /* $reservation = DB::table('reservations')
            ->join('users','users.id','=','pets.user_id')
            ->select('users.id as uid','users.name as uname', 'pets.name as pname', 'pets.id as pid')
            ->orderby('users.id', 'asc')
            ->get();
        $family = Family::all();*/
        return view('reservations')->with(['reservations' => $reservation,'pets' => $pet,'users'=>$user]);
    }



    public function listAll()
    {

    }
    public function store(Request $request){
        $reservation = new Reservation();
        $reservation->user_id = $request->user_id;
        $reservation->pet_id = $request->pet;
        $reservation->date = $request->date;
        $reservation->time=$request->time;
        $reservation->pet_id = $request->pet;
        $reservation->tipo_res = $request->tipo_res;
        if($reservation->save()){
            return back()->with('msj', 'Datos guardados');
        }
        else{
            return back();
        }
    }
    public function update()
    {

    }



    public function delete()
    {

    }

    public function show()
    {

    }

}
