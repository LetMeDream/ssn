<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;

use App\Mail\CursoMail;
use Illuminate\Support\Facades\Mail;

class CursosController extends Controller
{
    //
    public function cursos(){
        return view('servicios.cursos');
    }

    public function store(){

        /* dd(request()->all()); */

        $data=request()->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required|digits_between:11,15',
            'correo' => 'required',
            'whatsapp' => 'required'
        ]);

        $curso = new Curso;

        $curso->create($data);

        /** Sending an email */
        Mail::to('sistemasyserviciosnunez@gmail.com')->send(new CursoMail($data) );
        Mail::to('raulalfonzo66@gmail.com')->send(new CursoMail($data) );

        return back()->with('mensaje', 'Solicitud enviada. En breve nos contactaremos con usted.');
    }

}
