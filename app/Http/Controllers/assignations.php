<?php

namespace petstore\Http\Controllers;

use Illuminate\Http\Request;

class assignations extends Controller
{
*/
    public function index()
    {
        $vaccines = Vaccine::paginate(10);
        $diseases = Diseases::all();
        foreach ($vaccines as $vaccine){
            $dis_vac = vac_di::query()
                ->join('diseases','diseases.id','=','vac_dis.dis_id')
                ->where('vac_dis.vac_id',$vaccine->id)
                ->get();

            $dis='';
            $first = $dis_vac->first();
            foreach($dis_vac as $rol){
                if($rol == $first)
                    $dis = $rol->name;
                else
                    $dis = $dis.', '.$rol->name;
            }
            $vaccine->diseases= $dis;
        }

        return view('vaccines')->with(['vaccines'=>$vaccines,'diseases'=>$diseases]);
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
            'name'=> 'required',
        ],[
            'name.required'=> 'name is required',

        ]);
        $vaccine = new Vaccine();
        $vaccine->name = strtoupper($request->input('name'));
        vac_di::query()->where('vac_id',$vaccine->id)->delete();
        if(count(array_unique($request->tipo_rol))<count($request->tipo_rol))
        {
            return redirect('vaccines')->with('errorselect','Mal');
        }
        else

            if($vaccine->save()){
                foreach ($request->tipo_rol as $tipo){
                    $dis = new vac_di();
                    $dis->vac_id = $vaccine->id;
                    $dis->dis_id = $tipo;



                    $dis->save();

                }
                $diseases = Diseases::all();
                return redirect('vaccines')->with('msj', 'Datos guardados');
            }
            else{
                return view('vaccines');
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
        $vaccine = Vaccine::find($id);

        $dis = vac_di::query()
            ->join('diseases','diseases.id','=','vac_dis.dis_id')
            ->where('vac_dis.vac_id',$id)
            ->get();

        $diseases = Diseases::all();

        return view('vaccines')
            ->with(['edit' => true, 'vaccine' => $vaccine,'diseases_name'=>$dis,'diseases'=>$diseases]);
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
        $vaccine = Vaccine::find($id);

        $vaccine->name      = strtoupper($request->name);

        if(count(array_unique($request->tipo_dis))<count($request->tipo_dis))
        {

            return redirect('vaccines/'.$id.'/edit')->with('errorselect','Mal');
        }
        vac_di::query()->where('vac_id',$id)->delete();
        if($vaccine->save()){
            vac_di::query()->where('vac_id',$vaccine->id)->delete();
            foreach ($request->tipo_dis as $dis){
                $nuevo = new vac_di();
                $nuevo->dis_id = $dis;
                $nuevo->vac_id = $id;
                $nuevo->save();
            }
            return redirect('vaccines')->with('msj', 'Datos modificados');
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
        Vaccine::destroy($id);
        return back();
    }
}
