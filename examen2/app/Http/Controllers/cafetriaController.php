<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\cafetria;

class cafetriaController extends Controller
{
    //
    public function show(){
      return cafeteria::all;
    }
    public function store(Request $request){
        $validated = $request->validate([
            'marca'=> 'requerid',
            'modelo'=> 'requerid',
            'tipodecafe'=> 'requerid',
            'capasidad'=> 'requerid',
        ]);
        if($validator->fails())
        try
        {
        $cafeteria = new cafeteria;
        $cafeteria -> marca = request ->marca;
        $cafeteria -> modelo = request ->modelo;
        $cafeteria -> tipodecafe = request ->tipodecafe;
        $cafeteria -> capacidad = request ->capacidad;
        $cafeteria ->save();   
        return response()->json(["mensage"=>"Registro exitoso"]);
        }
        catch(Exception $e)
        {
        return response()->json(["mensage"=>"Error al crear registro"]); 
        }
        
      }
}
