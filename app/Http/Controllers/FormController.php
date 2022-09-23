<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    
    public function index(Request $request) {
        return view('formBootstrap');
    }

    public function guardar(Request $request) {
        $request->validate([
            'nombre' => 'required',
            'email' => 'required | email | unique:forms',
            'edad' => 'required | numeric',
            'pass' => 'required | confirmed',
            'pass_confirmation' => 'required',
        ],
        [
            'nombre.required' => 'El campo debe contener un nombre',
            'edad.required' => 'El campo no puede estar vacio',
            'edad.numeric' => 'El campo debe tener numeros',
            'email.required' => 'El campo debe contener un correo electronico valido',
            'pass.required' => 'El campo no puede estar vacio',
            'pass_confirmation.required' => 'El campo no puede estar vacio',
            'pass.confirmed' => 'Las contraseñas deben coincidir',
        ]
    );

        $form = new Form;
        $form->nombre = $request->nombre;
        $form->email = $request->email;
        $form->edad = $request->edad;
        $form->pass = $request->pass;
        $form->pass_confirmation = $request->pass_confirmation;

        $form->save();
        return redirect('/login')->with('success', '¡Se ha registrado exitosamente!');
       

    }
}
