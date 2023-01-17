<?php

namespace App\Http\Controllers;

use App\Mail\ContactoMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function index()
    {
        return view('contacto.index');
    }

    public function store(Request $request)

    {
        $request->validate(
            [
                'nombre'=>'required',
                'correo'=>'required',
                'mensaje'=>'required',

            ]
        );
        $correo = new ContactoMailable($request->all());

        Mail::to('pamemh0122@gmail.com')->send($correo);

        return redirect()->route('contacto.index')->with('info','Mensaje enviado');
    }
}
