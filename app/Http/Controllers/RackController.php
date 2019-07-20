<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rack;
Use App\Equipo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Checklist;

class RackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listar_rack()
    {
        $rack = Rack::all();
        // dd($rack);
        return view('listar-rack', compact('rack'));
    }

    public function equipos_rack($id)
    {
        $rack = array(Rack::find($id));

        $equipos = DB::table('equipos')->where('rack_id', $id)->get();
        // dd($rack);
        return view('equipos', compact('equipos','rack'));

        // dd($equipos);
       
    }

    public function checklist(Request $request)
    {
        
        $token = $request->_token;
        $equipo_id_rep = $request->equipo_id;
    
        $to = DB::table('checklists')->select('equipo_id')->where('token', $token)->get();

        foreach ($to as $key) {
           if ($key->equipo_id == $equipo_id_rep) {
            return back()->with('danger','El Check de'.$key->equipo_id.'  esta repetido');   
           }
        }

        $check = array(
            
        'rack_id'               => $request->rack_id,
        'equipo_id'             => $request->equipo_id,
        'user_id'               => $request->user_id,
        'disco'                 => $request->disco,
        'memoria'               => $request->memoria,
        'fancooler'             => $request->fancooler,
        'powersupply'           => $request->powersupply,
        'energia'               => $request->energia,
        'expansion'             => $request->expansion,
        'controladora'          => $request->controladora,
        'sw_fibra'              => $request->sw_fibra,
        'observaciones'         => $request->observaciones,
        'token'                 => $token
        
        );

    Checklist::create($check);
        
        $equipo = $request->equipo_id;
        return back()->with('success','El Check de'.$equipo.'  fue actualizado con Exito!');   
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
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public static function generarCodigo() {
        $key = '';
        $longitud = 8;
        $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
        $max = strlen($pattern)-1;
        for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
        return $key;
       }
}
