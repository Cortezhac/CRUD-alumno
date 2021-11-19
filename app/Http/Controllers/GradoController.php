<?php

namespace App\Http\Controllers;

use App\Models\Grd_grado;
use Illuminate\Http\Request;

class GradoController extends Controller
{
    public function index(){
        $data = Grd_grado::all();
        return view('grado.index', compact('data'));
    }

    public function nuevoGrado(){
        return view('grado.agregar');
    }

    public function editarGrado(){
        
    }

    public function store(Request $request){
        $request->validate([
                'name' => 'required'
            ]
        );

        $grade = Grd_grado::create([
            'grd_nombre' => $request->name
        ]);

        $grade->save();
        return redirect('/');
    }
}
