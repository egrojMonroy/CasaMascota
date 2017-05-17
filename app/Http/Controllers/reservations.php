<?php

namespace petstore\Http\Controllers;
use petstore\Reservation;
use petstore\Pet;
use petstore\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
class reservations extends Controller
{
    public function index()
    {
        $pet = Pet::all();

        $reservation = Reservation::all();
        $user= User::where('rol_id',4)->orderBy('name', 'desc')->get();



       $allreservations = Reservation::query()
            ->join('users','users.id','=','reservations.user_id')
            ->join('pets','pets.id','=','reservations.pet_id')
            ->select('reservations.id as id','users.id as uid','users.name as uname','users.last_name as ulname', 'pets.name as pname', 'pets.id as pid','date','tipo_res')
            ->orderby('date', 'asc')
            ->paginate(5);


        $count =$allreservations->count();




        return view('reservations')->with(['reservations' => $reservation,'pets' => $pet,'users'=>$user,'allreservations'=>$allreservations,'count_allreservations']);
    }



    public function listAll()
    {

    }

    public function store(Request $request){


        $this->validate($request,[

            'user_id'=> 'required',
            'pet'=> 'required',
            'tipo_res'=>'required',








        ],[
                'user_id.required'=> 'Seleccione un Dueño',
                'pet.required'=> 'Seleccione una Mascota',
                'tipo_res.required'=>'Seleccione el tipo de reserva',






        ]);
        $reservation = new Reservation();
        $reservation->user_id = $request->user_id;
        $reservation->pet_id = $request->pet;
        $reservation->date=$request->date;
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


      /*  $allreservation2 = Reservation::query()
            ->select('date')
            ->get();*/

        $allreservation = Reservation::query()
            ->join('users','users.id','=','reservations.user_id')
            ->join('pets','pets.id','=','reservations.pet_id')
            ->select('reservations.id as id','users.id as uid','users.name as uname','users.last_name as ulname', 'pets.name as pname', 'pets.id as pid','date','tipo_res')
            ->where('reservations.id', $id)
            ->orderby('users.id', 'asc')
            ->get();
       //dd($allreservation2);
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
            'tipo_res'=>'required'







        ],[
            'user_id.required'=> 'Seleccione un Dueño',
            'pet.required'=> 'Seleccione una Mascota',
            'tipo_res.required'=>'Seleccione el tipo de reserva'





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

        if($reservation->save()){
            return redirect('reservations')->with('msj', 'Datos guardados');
        }
        else{
            return back();
        }
    }



   public function destroy($id)
    {
        Reservation::find($id)->delete();
        return back();
    }

}
