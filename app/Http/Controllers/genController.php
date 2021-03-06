<?php

namespace petstore\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use petstore\Http\Controllers\Auth\ResetPasswordController;
use petstore\Reservation;

class genController extends Controller{
    public function genfunct(){
    	return view('genderlist');
    }
    public function findBreed(Request $request){
    	$data=DB::table('breeds')->select('id', 'name')->where('family_id', $request->id)->get();
    	return response()->json($data);
    }


    public function findPet(Request $request){
        $data=DB::table('pets')->select('id', 'name')->where('user_id', $request->id)->get();
        return response()->json($data);

    }
    public function findSala(Request $request){
        $id= $request->id;
        //para cambiar a tipe room de chris
        if($id==0){
            $id=1;
        }else if($id==1){
            $id=3;
        }else{
            $id=2;
        }
        $data=DB::table('rooms')->where('type_room_id',$request->id)->whereNull('deleted_at')->get();
        return response()->json($data);
    }
    public function findFranja(Request $request){
        $data=DB::table('rooms')->where('id',$request->id)->get();
        $p = json_encode($data);
        $obj = json_decode($p,true);
        $franja = $obj[0]['franja'];
        $franja = $this->cambiar_hora_a_step($franja);

        return $franja;
    }

    public function cambiar_hora_a_step($string){
        $date =  Carbon::parse($string);
        $ans = ($date->hour * 60 + $date->minute) * 60;

        return $ans;
    }



    public function findUser(Request $request){

        $f=DB::table('rooms')->select('rooms.id as room_id','type_room_id as type_room_id')
            ->where('rooms.id',$request->type_room_id)
            ->orderby('rooms.id', 'asc')
            ->groupby('rooms.id')
            ->get();


    foreach ($f as $fu)
        if($fu->type_room_id==1){$cunt=1;}
        if($fu->type_room_id==2){$cunt=5;}
        if($fu->type_room_id==3){$cunt=2;}
        $data=DB::table('users')->select('users.id as id','users.name as name','users.last_name as last_name')
            ->join('user_roles','user_roles.user_id','=','users.id')
            ->join('roles','roles.id','=','user_roles.role_id')
            ->where('user_roles.role_id',$cunt)
            ->orderby('users.name', 'asc')
            ->groupby('users.id')
            ->get();
        return response()->json($data);}


    public function findCheck(Request $request){
        $date = $request->id;
        $date=Carbon::parse($date);
        ////$exito = Reservation::query()->where('date',$date)->count;
        $data =DB::table('reservations')->select('id')->where('date', $date)->get()->count();
        return $data;

    }
}
