<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donador;
use App\Beneficiario;
use App\Mail\EmergencyCallReceived;
use Mail; 

class DonadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'Hola';
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
        
        $obj = new Donador();
        $obj->nombre = $request-> input('name');
        $obj->correo = $request-> input('email');
        $obj->edad = $request-> input('edad');
        $obj->tipo_sangre = $request-> input('type');
        $obj-> save();
        $beneficiarios = Beneficiario::where('tipo_sangre', $request-> input('type'))->get(['nombre', 'correo']);  
        if (count($beneficiarios)==0){
               return view('requisitos');
        }else{
             
             foreach ($beneficiarios as $user) {
                     Mail::to($user->correo)->send(new EmergencyCallReceived($user->nombre,$user->correo,'Encontramos a un donador para ti. Mucha suerte'));
                    }

             return view('coincidencia')->with('beneficiarios',$beneficiarios);
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
}
